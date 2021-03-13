<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editora;

class controllerEditora extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aEditora = Editora::all();
        return view('editora/viewIndexEditora',['aEditoras'=>$aEditora]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("editora/viewCreateEditora");
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
        $aEditora = Editora::create($input);
        return $this->show($aEditora->id);
    }

    public function buscaEditora(Request $request){
        return $this->show($request['id_editora']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aEditoras = Editora::find($id);
        return view('editora/viewShowEditora',['editora'=>$aEditoras]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aEditora = Editora::find($id);
        return view('editora/viewEditEditora',['editora'=>$aEditora]);
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
        Editora::find($id)->update($request->all());
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
            Editora::destroy($id);
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
