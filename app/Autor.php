<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores';
    protected $fillable = ['nome'];

    public function livros(){
        return $this->belongsToMany('App\Autor','Autor_livros')->withPivot('id');
    }
}
