<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autor;
use App\Editora;
use App\Isbn;
use App\Autor_livro;
use App\Livro;

class ControllerLivros extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aLivros = Livro::all();
        return view('livro/viewIndexLivro', ['aLivros'=>$aLivros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $aEditoras = Editora::all();
        $aAutores  = Autor::all();
        $aIsbn     = Isbn::all();

        return view('livro/viewCreateLivro', ['aEditoras' => $aEditoras, 
                                              'aAutores'  => $aAutores, 
                                              'aIsbns'    => $aIsbn]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $aLivro = [ 'editora_id' => $request['editora_id'],
                    'isbn_id'    => $request['isbn_id'],
                    'titulo'     => $request['titulo'],
                    'preco'      => $request['preco']
                    ];
        try {
            $oLivro = Livro::create($aLivro);
            return $this->editAutor($oLivro->id);
        } catch (\Throwable $th) {
            $this->printErro('Não foi possível incluir.');
            return $this->index();
        } 
    }

    public function adicionaAutor(Request $request) { 
        Autor_livro::create($request->all());
        echo ' Autor incluído com sucesso.';
        return $this->editAutor($request['livro_id']);
    }

    public function buscaLivro(Request $request){
        return $this->show($request['id_livro']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oLivro  = Livro::find($id);
        return view('livro/viewShowLivro',['oLivro' => $oLivro]);
    }

    /**
     * Retorna a view com de edição com os campos bloqueados para somente adicionar autores.
     */
    public function editAutor($id){
        $oLivro   = Livro::find($id);
        $aAutores = Autor::all();
        return view('livro/viewEditLivro',['oLivro' => $oLivro, 
                                           'aAutores' => $aAutores, 
                                           'bAdicionaAutores' => true]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oLivro   = Livro::find($id);
        $aAutores = Autor::all();

        return view('livro/viewEditLivro',['oLivro' => $oLivro, 
                                           'aAutores' => $aAutores, 
                                           'bAdicionaAutores' => false]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Livro::find($id)->update($request->all());
        return $this->editAutor($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $oLivro = Livro::find($id);
            foreach ($oLivro->autores as $oAutor) {
                $oLivro->autores()->detach($oAutor->$id);
            }
            Livro::destroy($id);
        } catch (\Throwable $th) {
           $this->printErro('Não foi possível excluir. Remova as chaves estrangeiras.');
        }
        return $this->index();
    }

    /**
     * Remove o autor
     */
    public function removeAutor(Request $request){
        $oLivro = Livro::find($request->livro_id);
        $oLivro->autores()->detach($request->autor_id);
        return $this->show($oLivro->id);
    }

    /**
     * Printa o erro em forma de alerta
     */
    public function printErro($sErro){
        echo "<script>alert('".$sErro."');</script>";
    }
}
