<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
    <title>Gestion - Register</title>
    
</head>
<style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Set a common background color */
        }
</style>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid mx-5">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-outline-success" >Login</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-outline-primary">Register</button></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mb-5 ">
    <div class="row h-100 justify-content-center align-items-center mt-5 mx-xl-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm overflow-hidden">
                <div class="row no-gutters ">
                    <div class="col-12 col-lg-5 ">
                        <div class="card-body ">
                        <form action="{{ route('register') }}" method="POST">
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                @csrf
                                
                                <div class="mb-3">
    <label for="name" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom">
</div>
<div class="mb-3">
    <label for="prenom" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="prenom" name="prenom">
</div>
<div class="mb-3">
    <label for="username" class="form-label">Nom d'utilisateur</label>
    <input type="text" class="form-control" id="username" name="username">
</div>

<div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" required>
</div>
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                </div>
                                <div class="mb-3">
    <label for="tenant_societe_id" class="form-label">ID de la société</label>
    <input type="text" class="form-control" id="tenant_societe_id" name="tenant_societe_id">
</div>

<div class="mb-3">
    <label for="telephone" class="form-label">Téléphone</label>
    <input type="text" class="form-control" id="telephone" name="telephone">
</div>

<div class="mb-3">
    <label for="role" class="form-label">Role</label>
    <input type="text" class="form-control" id="role" name="role">
</div>

<div class="mb-3">
    <label for="full_name" class="form-label">Nom complet</label>
    <input type="text" class="form-control" id="full_name" name="full_name">
</div>

<div class="mb-3">
    <label for="last_login" class="form-label">Dernière connexion</label>
    <input type="text" class="form-control" id="last_login" name="last_login">
</div>

<div class="mb-3">
    <label for="statut" class="form-label">Statut</label>
    <input type="text" class="form-control" id="statut" name="statut">
</div>

                                <div class="mb-3">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 bg-primary d-none d-lg-flex flex-fill background-size-cover background-position-center" style="background-image: url({{ asset('img/login.svg') }})">
                        <div class="card-body p-lg-5 d-flex flex-column flex-fill position-absolute top-0 right-0 bottom-0 left-0">
                            <div class="d-flex align-items-center d-flex flex-fill">
                                <div class="text-light {{ (__('lang_dir') == 'rtl' ? 'mr-5' : 'ml-5') }}">
                                    <div class="h2 font-weight-bold">
                                        {{ __('Register') }}
                                    </div>
                                    <div class="font-size-lg font-weight-medium">
                                        {{ __('Join Us.') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<footer class="navbar fixed-bottom footer-light bg-light">
   
        <a class="navbar-brand" href="#">© copyright 2023 . All rights reserved.</a>
   
</footer>-->

</body>
</html>
