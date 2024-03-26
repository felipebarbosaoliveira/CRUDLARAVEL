
<!DOCTYPE html>

<html lang="pt-br" data-bs-theme="dark">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>


<body>
    <div class="container">
        <div class="container">
            <header class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link active"
                            aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="{{ route('carros.index') }}" class="nav-link">Listar os carros</a></li>
                    <li class="nav-item"><a href="{{route('carros.create')}}" class="nav-link">Adicionar um carro</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Excluir</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                </ul>
            </header>
        </div>

      @yield('content')
      
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
                </ul>
                <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
            </footer>
        </div>
    </div>
</body>

</html>
