<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Despesas</title>

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

            <p class="text-white">{{Auth::user()->nome}}</p>
            <a class="btn btn-primary mb-9 " style="float: right;" href="#" role="button">Sair</a>


        </div>
    </nav>

    <div class="container">
        <!-- Verifica se existem erros de validação -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    <!-- Exibe cada mensagem de erro -->
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center d-flex align-items-center" style="height: 70vh;">

            <div class="col-md-6 text-white"> 
                <h1 >Cadastro de Despesas</h1>
                <form method="post" action="/save-despesa">
                @csrf

                    <div class="form-group">
                        <label for="descricao">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" >
                    </div>

                    <div class="form-group">
                        <label for="descricao">Descrição:</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" >
                    </div>

                    <div class="form-group">
                        <label for="valor">Valor:</label>
                        <input type="number" step="0.01" class="form-control" id="valor" name="valor" >
                    </div>

                    <div class="form-group">
                        <label for="data">Data:</label>
                        <input type="date" class="form-control" id="data" name="data" >
                    </div>

                    <select class="form-control" aria-label="Default select example" name="categoria_id">
                        <option selected>categoria</option>

                        @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}"> {{ $categoria->nome }}</option>
                        @endforeach
                        
                    </select>

                    <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
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