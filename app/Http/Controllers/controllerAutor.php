<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autor;

class controllerAutor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aAutor = Autor::all();
        return view('autor/viewIndexAutor',['aAutores' => $aAutor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("autor/viewCreateAutor");
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
        $oAutor = Autor::create($input);
        return $this->show($oAutor->id);
    }

    /**
     * Retorna o show do autor a partir da busca 
     */
    public function buscaAutor(Request $request){
        return $this->show($request['id_autor']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aEditoras = Autor::find($id);
        return view('autor/viewShowAutor',['autor'=>$aEditoras]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aEditora = Autor::find($id);
        return view('autor/viewEditAutor',['autor'=>$aEditora]);
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
        Autor::find($id)->update($request->all());
        return $this->show($id);
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
            Autor::destroy($id);
        } catch (\Throwable $th) {
           $this->printErro('Não foi possível excluir. Remova as chaves estrangeiras.');
        }
        return $this->index();
    }

    /**
     * Printa o erro em forma de alerta
     */
    public function printErro($sErro){
        echo "<script>alert('".$sErro."');</script>";
    }
}
