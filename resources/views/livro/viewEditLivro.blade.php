
@component('nav')
@endcomponent
<div style='width: 30%; margin-left: 23px;'>
    <form action="{{ route('livros.update', $oLivro['id'])}}" method="post">
        @csrf
        @method('PUT')
        <fieldset class="form-group">
            <legend style='font-size:19px;'>Editar Livro</legend>
                <table class='table'>
                    <tr class="row">
                        <td class="col">ISBN
                            @csrf
                            <input class="form-control" type='number' id='id' name='id' readOnly='true'  value='{{ $oLivro->isbn->isbn }}'>
                        </td>

                        <td class="col"> Titulo
                            <input class="form-control" type='text' id='nome' readOnly='true' name='nome' value='{{ $oLivro->titulo }}'>
                        </td>
                        <td class="col"> Editora
                            <select class="form-control" id='editora_id' name='editora_id' disabled>
                                <option value='{{ $oLivro->editora->id }}'>  {{ $oLivro->editora->nome }} </option>
                        </td>
                        <td class="col"> Preço
                            @if($bAdicionaAutores)
                                <input class="form-control" type='number' readOnly id='preco' name='preco' value='{{ $oLivro->preco }}'>
                            @else 
                                <input class="form-control" type='number' id='preco' name='preco' value='{{ $oLivro->preco }}'>
                            @endif
                        </td>
                    </tr>  
                    @if(!$bAdicionaAutores)
                        <tr class="row">
                            <td class="col">
                                <input class="btn btn-primary" type='submit' value='Salvar'>
                            </td>
                        </tr>
                    @endif
                </table>
        </fieldset>
    </form>

    @if($bAdicionaAutores)
    <form action="/livros/adicionaAutor" method="post">
        @csrf
        <fieldset class="form-group">
            <legend style='font-size:19px;'>Autores</legend>
            <table class='table'>
                <tr class="row">
                    <td class="col">
                        <select class="form-control" id='autor_id' name='autor_id' >
                        @foreach($aAutores as $aAutor)
                            <option value='{{ $aAutor['id']}}'>  {{ $aAutor['nome']}} </option>
                        @endforeach
                    </td>
                    <td class="col">
                        <input type='hidden' id='livro_id' name='livro_id' readOnly='true'  value='{{ $oLivro->id }}'>
                    </td>
                </tr>
                <tr class="row">
                    <td class="col" style='text-align:right'>
                        <input style='width: 134px;' class="btn btn-success btn-sm" type='submit' value='Adicionar Autor'>
                    </td>
                    <td class="col" style='text-align:left'>
                        <input style='width: 134px;' class="btn btn-danger btn-sm" type='button' value='Voltar' onclick='onClickVoltar()'>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    @endif
</div>

<script>
    function onClickVoltar(){ 
        location.href = "/livros/"
    }
</script>