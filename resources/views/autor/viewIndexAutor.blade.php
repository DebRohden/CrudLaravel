@component('nav')
@endcomponent
<fieldset style='width: 35%; margin-left: 23px;'>
    <legend style='font-size:19px;'>Autores Cadastrados</legend>
        <table class='table'>
            <tr class="row">
                <td class="col">Id </td>
                <td class="col">Nome </td>
                <td class='col' ></td>
                    <td class='col' ></td>
                    <td class='col' ></td>
            </tr>
        @foreach($aAutores as $aAutor)
            <tr class="row">
                <td class="col">
                    {{ $aAutor['id']}}
                </td>
                <td class="col">
                    {{ $aAutor['nome']}}
                </td>
                <td>
                    <form method="GET" action="{{ route('autor.edit', $aAutor->id)}}">
                        <input class="btn btn-primary" type="submit" value="Editar">
                    </form>
                </td>
                <td>
                    <form method="post" action="{{ route('autor.destroy', $aAutor->id)}}">
                        @csrf
                        @method('DELETE') 
                        <input  style='width: 70px; height: 38px;' class="btn btn-danger btn-sm" type="submit" value="Excluir">
                    </form>
                </td>
                <td>
                    <form method="GET" action="{{ route('autor.show', $aAutor->id)}}">
                        <input class="btn btn-info" type="submit" value="Visualizar">
                    </form>
                </td>
            </tr>
        @endforeach
        </table>
</fieldset>