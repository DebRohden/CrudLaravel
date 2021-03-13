<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor_Livro extends Model
{
    protected $table = 'autor_livros';
    protected $fillable = ['autor_id', 'livro_id'];

}
