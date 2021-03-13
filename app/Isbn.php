<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Isbn extends Model
{
    protected $table    = "isbns";
    protected $fillable = ['isbn','dataCadastro'];

    public function livros(){
        return $this->hasMany('App\Livro');
    }
}
