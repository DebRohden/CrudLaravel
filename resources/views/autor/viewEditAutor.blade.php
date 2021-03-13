@component('nav')
@endcomponent
<div style='width: 30%; margin-left: 23px;'>
    <fieldset class="form-group">
        <legend style='font-size:19px;'>Editar Autor</legend>
        <form action="{{ route('autor.update', $autor['id'])}}" method="post">
        @csrf
        @method('PUT')
            <table class='table'>
                <tr class="row">
                    <td class="col">Nome
                        @csrf
                        <input type='integer' id='nome' name='nome' value='{{ $autor['nome']}}'>
                    </td>
                </tr>
                <tr class="row">
                    <td class="col" style='text-align:center;'>
                        <input class="btn btn-primary" type='submit' value='Enviar'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>