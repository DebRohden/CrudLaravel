<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['titulo','preco','editora_id', 'isbn_id'];

    public function autores(){
        return $this->belongsToMany('App\Autor','Autor_livros')->withPivot('id');
    }

    public function isbn(){
        return $this->belongsTo('App\Isbn');
    }

    public function editora(){ 
        return $this->belongsTo('App\Editora');
    }

}
