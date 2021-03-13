@component('nav')
@endcomponent
<div style='width: 45%; margin-left: 23px;'>
    <fieldset class="form-group">
        <legend style='font-size:19px;'>Livros Cadastrados</legend>
            <table class='table'>
                <tr class="row">
                    <td class="col"> ISBN </td>
                    <td class="col"> Titulo</td>
                    <td class="col"> Editora</td>
                    <td class="col"> Preço</td>
                    <td class='col' ></td>
                    <td class='col' ></td>
                    <td class='col' ></td>
                </tr>  
            @foreach($aLivros as $oLivro)
                <tr class="row">
                    <td class="col"> {{ $oLivro->isbn->isbn }}</td>
                    <td class="col"> {{ $oLivro->titulo }}</td>
                    <td class="col"> {{ $oLivro->editora->nome }}</td>
                    <td class="col"> {{ $oLivro->preco }}</td>
                    <td>
                        <form method="GET" action="{{ route('livros.edit', $oLivro->id)}}">
                            <input class="btn btn-primary" class="btn btn-danger btn-sm" type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{ route('livros.destroy', $oLivro->id)}}">
                            @csrf
                            @method('DELETE') 
                            <input style='width: 70px; height: 38px;' class="btn btn-danger btn-sm" type="submit" value="Excluir">
                        </form>
                    </td>
                    <td>
                        <form method="GET" action="{{ route('livros.show', $oLivro->id)}}">
                            <input class="btn btn-info" type="submit" value="Visualizar">
                        </form>
                    </td>
                </tr>  
            @endforeach
            </table>
    </fieldset>
</div>