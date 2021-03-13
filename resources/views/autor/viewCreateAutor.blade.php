@component('nav')
@endcomponent
<div style='width: 30%; margin-left: 23px;'>
    <fieldset class="form-group" > 
        <legend style='font-size:19px;'>Incluir Autor</legend>
        <form action="{{ route('autor.store')}}" method="post">
            <table class='table'>
                <tr class="row">
                    <td class="col" >Nome
                        @csrf
                        <input class="form-control" type='text' id='nome' name='nome' >
                    </td>
                </tr>
                <tr class="row" >
                    <td class="col" style='text-align:center;'>
                        <input class="btn btn-primary" type='submit' value='Enviar'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>