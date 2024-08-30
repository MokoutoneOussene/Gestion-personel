<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layouts.style')
</head>

<body class="d-flex justify-content-center align-items-center">
{{-- //un formulaire laravel a deux attributs a savoir METHOD et ACTION --}}
    <form method="POST" action="{{ route('login') }}" class="shadow p-4" style="width: 25%"> 
        {{-- //pour valider le formulaire --}}
        @csrf 
        <div class="text-center">
            <img class="img-fluid rounded-circle" src="{{ asset('images/conn1.jpg') }}" alt=""
                style="width: 50%">
        </div>
        <p class="text-center fs-2 fw-bold mt-3 mb-3">Gestion du personnel</p>
        <p class="text-center fs-4">Page de connexion</p>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom d'utilisateur</label>
            <input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>

    @include('layouts.script')
</body>

</html>
