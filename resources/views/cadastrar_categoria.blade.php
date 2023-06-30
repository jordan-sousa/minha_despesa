<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Categoria</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body class="bg-secondary">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container collapse navbar-collapse">    
            <ul class="navbar-nav">
                <li class="nav-item active">
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

            <p class="text-white">{{Auth::user()->nome}}</p>
            <a class="btn btn-primary mb-9 " style="float: right;" href="/logout" role="button">Sair</a>


        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center d-flex align-items-center" style="height: 50vh;">
            <div class="col-md-6 text-white"> 
                <h1 >Cadastrar Categoria</h1>
                <form action="/save-categoria" method="POST">
                @csrf

                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>

            </div>    
        </div>    
    </div>
    
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>