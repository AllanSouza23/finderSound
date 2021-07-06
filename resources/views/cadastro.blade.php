<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/main.css" media="All">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Cadastre-se</title>
</head>
<body>
    <div class="bg-dark">
        <div class="container border-end border-start bg-dark mb-0 pb-1">
            <header class="border-bottom">
                <aside>
                    <nav class="navbar navbar-expand-lg navbar-light nav">
                        <a href="{{ route('_index_') }}" class="navbar-brand">
                            <img src="../../img/logo.png" alt="Logo" class="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavAltMarkup" aria-controls="navbarNavDropdown">
                            <span class="material-icons text-light">menu</span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarNavAltMarkup">
                            <ul class="navbar-nav w-100">
                                <li class="nav-item active ms-auto">
                                    <a href="{{ route('_index_') }}" class="text-light nav-link">Home</a>
                                </li>
                                <li class="nav-item ms-auto">
                                    <a href="{{ route('_objetivos_') }}" class="text-light nav-link">Objetivos</a>
                                </li>
                                <li class="nav-item ms-auto">
                                    <a href="{{ route('_cadastro_') }}" class="text-light nav-link">Cadastre-se</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </aside>
            </header>
            <main class="mb-3 mt-5">
                <h1 class="text-center text-light mb-5">Entre em contato conosco!</h1>
                <div class="container mb-5">
                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores quod et libero voluptas, ullam eligendi vero laboriosam ratione incidunt cupiditate nulla sunt earum aliquid illo obcaecati pariatur ea doloremque eveniet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor blanditiis ratione esse dolorem illo aspernatur, ipsum non aliquid doloribus, cumque iusto nesciunt rem maiores optio. Quia, omnis ducimus? Excepturi, vero?</p>

                </div>
                <h2 class="text-center text-light mb-5">Por favor, escolha uma das opções abaixo:</h2>
                <div class="row mt-5">
                    <div class="col text-center mb-3">
                        <button class="btn btn-primary btn-estabelecimento" data-bs-toggle="collapse" href="#LocalForm" role="button" aria-expanded="false" type="button" aria-controls="LocalForm" id="botao-estabelecimento" onclick="$('#ArtistaForm').collapse('hide');">SOU UM ESTABELECIMENTO</button>
                    </div>
                    <div class="col text-center mb-3">
                        <button class="btn btn-primary btn-artista" type="button" data-bs-toggle="collapse" data-bs-target="#ArtistaForm" aria-expanded="false" aria-controls="ArtistaForm" onclick="$('#LocalForm').collapse('hide');">SOU UM ARTISTA/BANDA</button>
                    </div>
                </div>

                <div class="collapse" id="LocalForm">
                    <div class="card card-body mx-auto text-center w-50 bg-dark">
                        <form action="{{ route('cadastrar_local') }}" method="post" class="needs-validation">
                            @csrf
                            <div class="row">
                                <div class="col-md-5 alinhaLabel">
                                    <label for="proprietario" class="ms-3 mt-2">Proprietário:</label>
                                </div>
                                <div class="col-md-7 text-start">
                                    <input type="text" name=proprietario id="proprietario" placeholder="Digite seu nome" class="ms-3 mt-2" required>
                                </div>
                                <div class="col-md-5 alinhaLabel">
                                    <label for="tipo" class="ms-3 mt-4">Tipo:</label>
                                </div>
                                <div class="col-md-7 text-start">
                                    <input type="text" name=tipo id="tipo" placeholder="Informe o tipo de local" class="ms-3 mt-4" required>
                                </div>
                                <div class="col-md-5 alinhaLabel">
                                    <label for="nomeLocal" class="ms-3 mt-4">Nome do local:</label>
                                </div>
                                <div class="col-md-7 text-start">
                                    <input type="text" name=nomeLocal id="nomeLocal" placeholder="Digite o nome do local" class="ms-3 mt-4" required>
                                </div>
                                {{-- <div class="col-md-5 alinhaLabel">
                                    <label for="capacidadeLocal" class="ms-3 mt-4">Capacidade do local:</label>
                                </div>
                                <div class="col-md-7 text-start">
                                    <input type="number" name=capacidadeLocal id="capacidadeLocal" placeholder="Digite a capacidade do local" class="ms-3 mt-4" required>
                                </div> --}}
                                <div class="col-md-5 alinhaLabel">
                                    <label for="emailProprietario" class="ms-3 mt-4">E-mail:</label>
                                </div>
                                <div class="col-md-7 text-start">
                                    <input type="email" name=emailProprietario id="emailProprietario" placeholder="exemplo@seuemail.com" class="ms-3 mt-4" required>
                                </div>
                                <div class="col-md-5 alinhaLabel">
                                    <label for="cidadeLocal" class="ms-3 mt-4">Cidade:</label>
                                </div>
                                <div class="col-md-7 text-start">
                                    <select class="form-select form-select-sm ms-3 mt-4 w-75" name=cidadeLocal id="cidadeLocal">
                                        <option value="Aracaju">Aracaju</option>
                                        <option value="Belém">Belém</option>
                                        <option value="Belo Horizonte">Belo Horizonte</option>
                                        <option value="Boa Vista">Boa Vista</option>
                                        <option value="Brasília">Brasília</option>
                                        <option value="Campo Grande">Campo Grande</option>
                                        <option value="Cuiabá">Cuiabá</option>
                                        <option value="Curitiba">Curitiba</option>
                                        <option value="Florianópolis">Florianópolis</option>
                                        <option value="Fortaleza">Fortaleza</option>
                                        <option value="Goiânia">Goiânia</option>
                                        <option value="João Pessoa">João Pessoa</option>
                                        <option value="Macapá">Macapá</option>
                                        <option value="Maceió">Maceió</option>
                                        <option value="Manaus">Manaus</option>
                                        <option value="Natal">Natal</option>
                                        <option value="Palmas">Palmas</option>
                                        <option value="Porto Alegre">Porto Alegre</option>
                                        <option value="Porto Velho">Porto Velho</option>
                                        <option value="Recife">Recife</option>
                                        <option value="Rio Branco">Rio Branco</option>
                                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                                        <option value="Salvador">Salvador</option>
                                        <option value="São Luís">São Luís</option>
                                        <option value="São Paulo">São Paulo</option>
                                        <option value="Teresina">Teresina</option>
                                        <option value="Vitória">Vitória</option>
                                    </select>
                                </div>
                                <div class="col-md-5 alinhaLabel">
                                    <label for="telefoneLocal" class="ms-3 mt-4">Telefone: </label>
                                </div>
                                <div class="col-md-7 text-start">
                                    <input type="text" name=telefoneLocal id="telefoneLocal" class="ms-3 mt-4" placeholder="Insira seu telefone" required>
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-primary mt-3 btn-cadastro" id="btnCadastroLocal" type="submit" value="cadastrarLocal">CADASTRAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="collapse" id="ArtistaForm">
                    <div class="card card-body mx-auto text-center w-50 bg-dark">
                        <form action="{{ route('cadastrar_artista') }}" method="post" class="needs-validation">
                            @csrf
                            <div class="row">
                                <div class="col-md-5 alinhaLabel">
                                    <label for="name" class="ms-3 mt-2">Artista/Banda:</label>
                                </div>
                                <div class="col-md-7 text-start">
                                    <input type="text" name=artista id="artista" placeholder="Digite seu nome" class="ms-3 mt-2" required>
                                </div>
                                <div class="col-md-5 alinhaLabel">
                                    <label for="genero" class="ms-3 mt-4">Gênero:</label>
                                </div>
                                <div class="col-md-7 text-start">
                                    <input type="text" name=genero id="genero" placeholder="Informe o gênero musical" class="ms-3 mt-4" required>
                                </div>
                                <div class="col-md-5 alinhaLabel">
                                    <label for="emailArtista" class="ms-3 mt-4">E-mail:</label>
                                </div>
                                <div class="col-md-7 text-start">
                                    <input type="email" name=emailArtista id="emailArtista" placeholder="exemplo@seuemail.com" class="ms-3 mt-4" required>
                                </div>
                                <div class="col-md-5 alinhaLabel">
                                    <label for="cidadeArtista" class="ms-3 mt-4">Cidade:</label>
                                </div>
                                <div class="col-md-7 text-start">
                                    <select class="form-select form-select-sm ms-3 mt-4 w-75" name=cidadeArtista id="cidadeArtista">
                                        <option value="Aracaju">Aracaju</option>
                                        <option value="Belém">Belém</option>
                                        <option value="Belo Horizonte">Belo Horizonte</option>
                                        <option value="Boa Vista">Boa Vista</option>
                                        <option value="Brasília">Brasília</option>
                                        <option value="Campo Grande">Campo Grande</option>
                                        <option value="Cuiabá">Cuiabá</option>
                                        <option value="Curitiba">Curitiba</option>
                                        <option value="Florianópolis">Florianópolis</option>
                                        <option value="Fortaleza">Fortaleza</option>
                                        <option value="Goiânia">Goiânia</option>
                                        <option value="João Pessoa">João Pessoa</option>
                                        <option value="Macapá">Macapá</option>
                                        <option value="Maceió">Maceió</option>
                                        <option value="Manaus">Manaus</option>
                                        <option value="Natal">Natal</option>
                                        <option value="Palmas">Palmas</option>
                                        <option value="Porto Alegre">Porto Alegre</option>
                                        <option value="Porto Velho">Porto Velho</option>
                                        <option value="Recife">Recife</option>
                                        <option value="Rio Branco">Rio Branco</option>
                                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                                        <option value="Salvador">Salvador</option>
                                        <option value="São Luís">São Luís</option>
                                        <option value="São Paulo">São Paulo</option>
                                        <option value="Teresina">Teresina</option>
                                        <option value="Vitória">Vitória</option>
                                    </select>
                                </div>
                                <div class="col-md-5 alinhaLabel">
                                    <label for=telefoneArtista class="ms-3 mt-4">Telefone: </label>
                                </div>
                                <div class="col-md-7 text-start">
                                    <input type="text" name="telefoneArtista" id="telefoneArtista" class="ms-3 mt-4" placeholder="Insira seu telefone" required>
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-primary mt-3 btn-cadastro" id="btnCadastroArtista" type="submit" value="cadastrarArtista">CADASTRAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>

                <footer class="text-center border-top mb-0">
                    <p class="pt-4 text-light">Copyright &copy; 2021 - by Allan Souza</p>
                    <p class="text-light"><strong>&lt; &gt;</strong><a href="https://github.com/AllanSouza23" target="_blank" class="text-light"> GitHub</a></p>
                </footer>
            </div>
        </div>

    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
