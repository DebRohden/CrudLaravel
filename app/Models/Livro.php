<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['titulo','assunto','preco','editora_id', 'isbn_id'];


}
