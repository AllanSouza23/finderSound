<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/main.css">
    <title>Editar Cadastro</title>
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
                <h1 class="text-center text-light mb-5">Verifique os dados do local a ser excluído:</h1>
                <div class="container text-center mb-5">
                    <form action="{{ route('excluir_dados_local', ['id' => $user->id]) }}" method="POST">
                        @csrf
                        <label for="" class="mt-3 mb-3">Proprietário: </label> <br />
                        <input type="text" name=proprietario value="{{ $user->proprietario }}"> <br />

                        <label for="" class="mt-3 mb-3">Tipo: </label> <br />
                        <input type="text" name=tipo value="{{ $user->tipo }}"> <br />

                        <label for="" class="mt-3 mb-3">Nome do local: </label> <br />
                        <input type="text" name=nomeLocal value="{{ $user->nomeLocal }}"> <br />

                        <label for="" class="mt-3 mb-3">Email: </label> <br />
                        <input type="text" name=emailProprietario value="{{ $user->emailProprietario }}"> <br />

                        <label for="" class="mt-3 mb-3">Cidade: </label> <br />
                        <input type="text" name=cidadeLocal value="{{ $user->cidadeLocal }}"> <br />

                        <label for="" class="mt-3 mb-3">Telefone: </label> <br />
                        <input type="text" name=telefoneLocal value="{{ $user->telefoneLocal }}"> <br />
                        <button class="btn-estabelecimento mt-4">Excluir</button>
                    </form>
                </div>
                <footer class="text-center border-top mb-0">
                    <p class="pt-4 text-light">Copyright &copy; 2021 - by Allan Souza</p>
                    <p class="text-light"><strong>&lt; &gt;</strong><a href="https://github.com/AllanSouza23" target="_blank" class="text-light"> GitHub</a></p>
                </footer>
            </div>
        </div>

    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../js/script.js"></script>

</body>
</html>
