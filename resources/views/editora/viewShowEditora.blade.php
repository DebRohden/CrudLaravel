@component('nav')
@endcomponent
<div style='width: 30%; margin-left: 23px;'>
    <fieldset  class="form-group">
        <legend style='font-size:19px;'>Visualizar Editora</legend>
            <table class='table'>
                <tr class='row'>
                    <td class='col'>Nome
                        @csrf
                        <input class="form-control" type='text' id='nome' name='nome' value='{{ $editora['nome']}}' readOnly disabled>
                    </td>
                </tr>
            </table>
    </fieldset>
</div>