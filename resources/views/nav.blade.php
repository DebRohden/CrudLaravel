<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Autores
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style='width: 342px;'>
          <a class="dropdown-item" href="/autor/">Visulizar</a>
          <a class="dropdown-item" href="/autor/create">Incluir</a>
          <form class="form-inline" action="/autor/buscaAutor" method="post" >
            @csrf
            <input class="form-control mr-sm-2" id='id_autor' name='id_autor' style='margin-left: 20px;' type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Editoras
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style='width: 342px;'>
          <a class="dropdown-item" href="/editora/">Visualizar</a>
          <a class="dropdown-item" href="/editora/create">Incluir</a>
          <form class="form-inline" action="/editora/buscaEditora" method="post" >
            @csrf
            <input class="form-control mr-sm-2" id='id_editora' name='id_editora' style='margin-left: 20px;' type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Isbn
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style='width: 342px;'>
          <a class="dropdown-item" href="/isbn/">Visualizar</a>
          <a class="dropdown-item" href="/isbn/create">Incluir</a>
          <form class="form-inline" action="/isbn/buscaIsbn" method="post" >
            @csrf
            <input class="form-control mr-sm-2" id='id_isbn' name='id_isbn' style='margin-left: 20px;' type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Livros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style='width: 342px;'>
          <a class="dropdown-item" href="/livros/">Visualizar</a>
          <a class="dropdown-item" href="/livros/create">Incluir</a>
          <form class="form-inline" action="/livros/buscaLivro" method="post" >
            @csrf
            <input class="form-control mr-sm-2" id='id_livro' name='id_livro' style='margin-left: 20px;' type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </div>
      </li>
    </ul>
  </div>
</nav>