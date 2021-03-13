@component('nav')
@endcomponent
<div style='width: 30%; margin-left: 23px;'>
    <fieldset class="form-group">
        <legend style='font-size:19px;'>Incluir Isbn</legend>
        <form action="{{ route('isbn.store')}}" method="post">
            <table class='table'>
                <tr class='row'>
                    <td class='col'>ISBN
                        @csrf
                        <input class="form-control" type='number' id='isbn' name='isbn' >
                    </td>
                    <td class='col'> Data Cadastro
                        <input class="form-control" type='date' id='dataCadastro' name='dataCadastro'>
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