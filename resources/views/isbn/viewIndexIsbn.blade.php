@component('nav')
@endcomponent
<div style='width: 35%; margin-left: 23px;'>
    <fieldset class="form-group">
        <legend style='font-size:19px;'>Isbn Cadastrados</legend>
            <table class='table'>
                <tr class='row'>
                    <td class='col'>ISBN </td>
                    <td class='col'> Data Cadastro</td>
                    <td class='col' ></td>
                    <td class='col' ></td>
                    <td class='col' ></td>
                </tr>
            @foreach($aIsbns as $aIsbn)
                <tr class='row'>
                    <td class='col'>
                        {{ $aIsbn['isbn']}}
                    </td>
                    <td class='col'>
                        {{ $aIsbn['dataCadastro']}}
                    </td>
                    <td>
                        <form method="GET" action="{{ route('isbn.edit', $aIsbn->id)}}">
                            <input class="btn btn-primary" type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{ route('isbn.destroy', $aIsbn->id)}}">
                            @csrf
                            @method('DELETE') 
                            <input style='width: 70px; height: 38px;' class="btn btn-danger btn-sm" type="submit" value="Excluir">
                        </form>
                    </td>
                    <td>
                        <form method="GET" action="{{ route('isbn.show', $aIsbn->id)}}">
                            <input class="btn btn-info" type="submit" value="Visualizar">
                        </form>
                    </td>
                </tr>
            @endforeach
            </table>
    </fieldset>
</div>