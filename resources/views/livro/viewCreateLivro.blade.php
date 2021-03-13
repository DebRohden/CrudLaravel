@component('nav')
@endcomponent
<div style='width: 55%; margin-left: 23px;'>
    <fieldset class="form-group">
        <legend style='font-size:19px;'>Incluir Livro</legend>
        <form action="{{ route('livros.store')}}" method="post">
            <table class='table'>
                <tr class="row">
                    <td class="col">ISBN
                        @csrf
                        <select class="form-control" id='isbn_id' name='isbn_id'>
                        @foreach($aIsbns as $aIsbn)
                            <option value='{{ $aIsbn['id']}}'>  {{ $aIsbn['isbn']}} </option>
                        @endforeach
                    </td>
                    <td class="col"> Titulo
                        <input class="form-control" type='text' id='titulo' name='titulo'>
                    </td>
                    <td class="col"> Editora
                        <select class="form-control" id='editora_id' name='editora_id'>
                            @foreach($aEditoras as $aEditora)
                                <option value='{{ $aEditora['id']}}'>  {{ $aEditora['nome']}} </option>
                            @endforeach
                    </td>
                    <td class="col"> Preço
                        <input class="form-control" type='number' id='preco' name='preco'>
                    </td>
                </tr>
                <tr class="row">
                    <td class="col" style='text-align:center;'>
                        <input class="btn btn-primary" type='submit' value='Incluir'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>