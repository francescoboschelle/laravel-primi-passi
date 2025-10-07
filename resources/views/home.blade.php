<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <style>
        body {
            background-color: rgba(27, 27, 27, 1);
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .card,
        nav {
            background-color: rgba(39, 39, 39, 1);
        }

        .main-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 76px); /* Approximate navbar height */
        }

        .main-text-color {
            color: rgb(255, 53, 40);
        }
    </style>

    <nav
        class="navbar navbar-expand-sm navbar-dark"
    >
        <div class="container">
            <a class="navbar-brand main-text-color" href="./">{{$framework}}</a>
            <button
                class="navbar-toggler d-lg-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="./"
                            >Home</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container-fluid main-content">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://media.licdn.com/dms/image/v2/D5612AQFhmK3GsvVAOw/article-cover_image-shrink_720_1280/B56ZjvLaReHAAM-/0/1756359404556?e=2147483647&v=beta&t=D5UPvkrP9GRJyMpEcl5Bcx5NKKWsTGoNf4PX8ke5jMs" class="img-fluid rounded-start" alt="Laravel 12">
                </div>
                <div class="col-md-8">
                    <div class="card-body text-white d-flex flex-column justify-content-between h-100">
                        <div class="card-title">
                            <h1>Hello <span class="main-text-color">{{$framework}}</span>!</h1>
                            <div class="card-text">
                                <p>My first laravel project.</p>
                            </div>
                        </div>
                        <small class="text-white">I <span class="text-danger">&hearts;</span> Laravel</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>