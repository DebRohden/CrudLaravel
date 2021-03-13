@component('nav')
@endcomponent
<div style='width: 30%; margin-left: 23px;'>
    <fieldset class="form-group">
        @csrf
        <legend style='font-size:19px;'>Visualizar Isbn</legend>
            <table class='table'>
                <tr class='row'>
                    <td class='col'>ISBN
                        @csrf
                        <input class="form-control" type='integer' id='isbn' name='isbn' value='{{ $isbn['isbn']}}' readOnly disabled>
                    </td>
                    <td class='col'> Data Cadastro
                        <input class="form-control" type='date' id='dataCadastro' name='dataCadastro' value='{{ $isbn['dataCadastro']}}' readOnly disabled>
                    </td>
                </tr>
            </table>
    </fieldset>
</div>