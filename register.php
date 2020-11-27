<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jual Beli Handphone</title>

    <!-- Scripts -->
    <script src="public/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="public/css/app.css" rel="stylesheet">
      <!-- Bootstrap Core CSS -->
    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="public/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/stylish-portfolio.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="">
                    Jual Beli Handphone
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="register.php">Register</a>
                                </li>
                        <!--
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#page-top">Start Bootstrap</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    
                                    </form>
                                </div>
                            </li>
                            -->
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Register</div>
                            <div class="card-body">
                                <form method="POST" action="verify.php">

                                <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">Nama</label>

                                        <div class="col-md-6">
                                            <input id="nama" type="nama" class="form-control" name="nama" required autofocus>
                                        
                                                <span class="invalid-feedback" role="alert">
                                                    <strong></strong>
                                                </span>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="">

                                        
                                                <span class="invalid-feedback" role="alert">
                                                    <strong></strong>
                                                </span>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right">Nomor Telepon</label>

                                        <div class="col-md-6">
                                            <input id="phone" type="text" class="form-control" name="phone" value="">

                                        
                                                <span class="invalid-feedback" role="alert">
                                                    <strong></strong>
                                                </span>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">

                                    
                                                <span class="invalid-feedback" role="alert">
                                                    <strong></strong>
                                                </span>
                                       
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="konpassword" class="col-md-4 col-form-label text-md-right">Konfirmasi Password</label>

                                        <div class="col-md-6">
                                            <input id="konpassword" type="password" class="form-control" name="konpassword" required autocomplete="current-password">

                                    
                                                <span class="invalid-feedback" role="alert">
                                                    <strong></strong>
                                                </span>
                                       
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
