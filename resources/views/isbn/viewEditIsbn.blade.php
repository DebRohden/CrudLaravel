@component('nav')
@endcomponent
<div style='width: 30%; margin-left: 23px;'>
    <fieldset class="form-group">
        <legend style='font-size:19px;'>Editar Isbn</legend>
        <form action="{{ route('isbn.update', $isbn['id'])}}" method="post">
        @csrf
        @method('PUT')
            <table class='table'>
                <tr class='row'>
                    <td class='col'>ISBN
                        @csrf
                        <input type='integer' id='isbn' name='isbn' value='{{ $isbn['isbn']}}'>
                    </td>
                    <td class='col'> Data Cadastro
                        <input type='date' id='dataCadastro' name='dataCadastro' value='{{ $isbn['dataCadastro']}}' readOnly disabled>
                    </td>
                </tr>
                <tr class='row'>
                    <td class='col' style='text-align:center;'>
                        <input class="btn btn-primary" type='submit' value='Enviar'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>