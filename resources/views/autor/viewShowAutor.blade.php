@component('nav')
@endcomponent
<div style='width: 30%; margin-left: 23px;'>
    <fieldset class="form-group" >
        <legend style='font-size:19px;'>Visualizar Autor</legend>
            <table class='table'>
                <tr class="row" >
                    <td class="col">Nome
                        @csrf
                        <input type='integer' id='nome' name='nome' value='{{ $autor['nome']}}' readOnly disabled>
                    </td>
                </tr>
            </table>
    </fieldset>
</div>