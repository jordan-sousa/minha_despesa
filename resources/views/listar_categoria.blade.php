<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de categoria</title>

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

    <div class="container">
        <div class="row justify-content-center text-white" style="float: 40vh;">
            <div>
                <h1 style="margin-top: 20px;">Lista de Categoria</h1>
            </div>
           
            <div class="col-md-12 text-white ">

                <table class="table text-white">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Categoria</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td> {{ $categoria->id }} </td>
                            <td> {{ $categoria->nome }} </td>
                            <td>
                                <a href="/delete-categoria/{{$categoria->id}}" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/> -->
                                    </svg> 
                                </a>
                            </td>
                        </tr>
                    @endforeach
                        
                    </tbody>
                </table>
            </div>    
        </div>    
    </div>
    
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>