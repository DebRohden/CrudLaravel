@component('nav')
@endcomponent
<div style='width: 35%; margin-left: 23px;'>
    <fieldset class="form-group">
        <legend style='font-size:19px;' >Editoras Cadastradas</legend>
            <table class='table'>
                <tr class='row'>
                    <td class='col'>Id </td>
                    <td class='col'>Nome </td>
                    <td class='col' ></td>
                    <td class='col' ></td>
                    <td class='col' ></td>
                </tr>
            @foreach($aEditoras as $aEditora)
                <tr class='row'>
                    <td class='col'>
                        {{ $aEditora['id']}}
                    </td>
                    <td class='col'>
                        {{ $aEditora['nome']}}
                    </td>
                    <td>
                        <form method="GET" action="{{ route('editora.edit', $aEditora->id)}}">
                            <input class="btn btn-primary" type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{ route('editora.destroy', $aEditora->id)}}">
                            @csrf
                            @method('DELETE') 
                            <input  style='width: 70px; height: 38px;' class="btn btn-danger btn-sm" type="submit" value="Excluir">
                        </form>
                    </td>
                    <td>
                        <form method="GET" action="{{ route('editora.show', $aEditora->id)}}">
                            <input class="btn btn-info" type="submit" value="Visualizar">
                        </form>
                    </td>
                </tr>
            @endforeach
            </table>
    </fieldset>
</div>