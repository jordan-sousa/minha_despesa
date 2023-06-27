<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Despesas</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body class="bg-secondary">

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn btn-primary m-1" href="/cadastrar-despesa">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary m-1" href="/listar-despesa">Despesas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary m-1" href="/cadastrar-categorias">Categoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary m-1" href="/listar-categoria">Lista Categoria</a>
                </li>
            </ul>

            <a class="btn btn-primary mb-9 " style="float: right;" href="#" role="button">Sair</a>


        </div>
    </nav>

    <!-- <nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="btn btn-primary m-1 link-underline-opacity-90-hover " href="/cadastrar-despesa">Cadastrar</a>
                </li>

                <li class="nav-item active">
                    <a class="btn btn-primary m-1 link-underline-opacity-90-hover " href="/listar-despesa">Despesas</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-primary m-1 " href="/cadastrar-categorias">Categoria</a>
                </li>
            </ul>    
            <a class="btn btn-primary mb-9 " style="float: right;" href="#" role="button">Sair</a>
    </nav> -->

    <div class="container">
        <div class="row justify-content-center d-flex align-items-center" style="height: 70vh;">
            <div class="col-md-6 text-white"> 
                <h1 >Atualizar Despesas</h1>
                <form method="post" action="/editar-despesa/{{$despesa->id}}">
                @csrf

                    <div class="form-group">
                        <div class="mb-3">
                            <label for="tarefa" class="form-label">Despesas</label>
                            <input type="hidden" name="id" value="{{$despesa->id}}" class="form-control" id="id" >
                            <input type="text" name="nome" value="{{$despesa->nome}}" class="form-control" id="nome" >
                        </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </div>

                </form>
            </div>    
        </div>    
    </div>

    <!-- <footer class="bg-dark text-white p-4 text-center">
        <div >           
            <p>©Copyrigh 2023 - Todos os direitos reservados</p>
        </div>
    </footer> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>