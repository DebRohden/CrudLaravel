@component('nav')
@endcomponent
<div style='width: 50%; margin-left: 23px;'>
    <fieldset class="form-group">
        <legend style='font-size:19px;'>Visualizar Livro</legend>
            <table class='table'>
                <tr class='row'>
                    <td class='col'>ISBN
                        @csrf
                        <input class="form-control" type='number' id='id' name='id' disabled value='{{ $oLivro->isbn->isbn }}'>
                    </td>

                    <td class='col'> Titulo
                        <input class="form-control" type='text' id='nome' disabled name='nome' value='{{ $oLivro->titulo }}'>
                    </td>
                    <td class='col'> Editora
                        <select class="form-control" id='editora_id' name='editora_id' disabled>
                            <option value='{{ $oLivro->editora->id }}'>  {{ $oLivro->editora->nome }} </option>
                    </td>
                    <td class='col'> Preço
                        <input class="form-control" type='number' id='preco' disabled name='preco' value='{{ $oLivro->preco }}'>
                    </td>
                </tr>   
            </table>
    </fieldset>
    <fieldset class="form-group">
        <legend style='font-size:19px;'>Autores</legend>
        <table class='table'>
            @foreach ($oLivro->autores as $oAutor) 
            <tr class='row'>
                <td class='col'> {{ $oAutor->id}}
                </td>
                <td class='col'> {{ $oAutor->nome}}
                </td>
                <td class='col'>  
                    <form method="post" action="/livros/removeAutor">
                        @csrf
                        <input type="hidden" name="autor_id" value="{{ $oAutor->id}}">
                        <input type="hidden" name="livro_id" value="{{ $oLivro->id}}">
                        <input class="btn btn-danger btn-sm" type="submit" value="Excluir">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </fieldset>
</div>