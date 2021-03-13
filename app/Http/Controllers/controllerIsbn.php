<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Isbn;

class controllerIsbn extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aIsbn = Isbn::all();
        return view('isbn/ViewIndexIsbn',['aIsbns'=>$aIsbn]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("isbn/viewCreateIsbn");
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
        $oIsbn = Isbn::create($input);
        return $this->show($oIsbn->id);
    }

    public function buscaIsbn(Request $request){
        return $this->show($request['id_isbn']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aIsbn = Isbn::find($id);
        return view('isbn/viewShowIsbn',['isbn'=>$aIsbn]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aIsbn = Isbn::find($id);
        return view('isbn/viewEditIsbn',['isbn'=>$aIsbn]);
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
        Isbn::find($id)->update($request->all());
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
            Isbn::destroy($id);
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