<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/main.css" media="All">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Bem-vindo a FinderSound</title>
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
                <h1 class="text-center text-light">Projeto FinderSound</h1>
                <p class="text-justify mt-4 mb-5">O <em>Projeto FinderSound</em> é a mais nova plataforma que conecta
                    músicos e estabelecimentos do país! Atendemos à todas as capitais do Brasil e logo expandiremos a
                    mais localidades! Venha ja para FinderSound!</p>
                <div class="row">
                    <div class="col borda-direita text-center">
                        <p class="text-justify mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus
                            odio, labore eius pariatur blanditiis dolores expedita, quos soluta beatae fugit laborum.
                            Tenetur, dolorum ad! Assumenda eos cum iusto officiis corrupti.</p>
                        <p class="text-justify mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Accusantium fuga magni dolorum aliquid aliquam numquam doloribus iusto possimus, quod optio
                            ipsa modi molestias earum libero hic officia distinctio? Esse, aliquid.</p>
                        <iframe width="400" height="200" src="https://www.youtube.com/embed/doE-mNaoHlY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mb-3"></iframe>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime eum dolores alias sed nesciunt at corporis ipsum. Laborum, molestiae, vero veniam eius delectus doloribus, cum fugiat molestias voluptatem deserunt corrupti.</p>
                    </div>
                    <div class="col">
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odio, labore eius pariatur blanditiis dolores expedita, quos soluta beatae fugit laborum. Tenetur, dolorum ad! Assumenda eos cum iusto officiis corrupti.</p>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sint quas tenetur quo reprehenderit at dolore dolorum nihil iure nostrum eligendi illo delectus, repellat mollitia, consequatur ipsa molestiae corporis facere!</p>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime eum dolores alias sed nesciunt at corporis ipsum. Laborum, molestiae, vero veniam eius delectus doloribus, cum fugiat molestias voluptatem deserunt corrupti.</p>
                        <iframe width="500" height="250" class="mb-3 ms-5 ps-5" src="https://www.youtube.com/embed/nvxjwtYDtYM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
