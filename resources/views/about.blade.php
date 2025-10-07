<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Laravel</title>
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
            padding: 2rem 0;
        }

        .feature-item {
            background-color: rgba(51, 51, 51, 1) !important;
            border: 1px solid rgba(75, 75, 75, 1) !important;
            transition: all 0.3s ease;
            height: 100%;
        }

        .feature-item:hover {
            background-color: rgba(60, 60, 60, 1) !important;
            border-color: rgba(100, 100, 100, 1) !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .main-text-color {
            color: rgb(255, 53, 40);
        }
    </style>

    <nav
        class="navbar navbar-expand-sm navbar-dark"
    >
        <div class="container">
            <a class="navbar-brand main-text-color" href="./">Laravel 12</a>
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
                        <a class="nav-link" href="./"
                            >Home</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <section class="container-fluid main-content">
        <div class="container">
            <div class="card">
                    <div class="card-body text-white d-flex flex-column justify-content-between h-100">
                        <div class="card-title">
                            <h1>About <span class="main-text-color">Laravel 12</span></h1>
                            <div class="card-text">
                                <p class="lead mb-4">Laravel 12 brings powerful new features and improvements to make development faster and more enjoyable.</p>
                                
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 rounded">
                                            <h5 class="main-text-color mb-2">Improved Performance</h5>
                                            <p class="small mb-0">Significant optimizations with enhanced caching and faster database queries.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 rounded">
                                            <h5 class="main-text-color mb-2">Simplified Routing</h5>
                                            <p class="small mb-0">Refined routing system with improved caching for high traffic handling.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 rounded">
                                            <h5 class="main-text-color mb-2">Enhanced Eloquent ORM</h5>
                                            <p class="small mb-0">Better query performance with new builder features for cleaner code.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 rounded">
                                            <h5 class="main-text-color mb-2">Better Security</h5>
                                            <p class="small mb-0">Enhanced authentication, improved CSRF protection, and stricter policies.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 rounded">
                                            <h5 class="main-text-color mb-2">Blade Enhancements</h5>
                                            <p class="small mb-0">Updated templating engine with new directives and better performance.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 rounded">
                                            <h5 class="main-text-color mb-2">Extended Testing</h5>
                                            <p class="small mb-0">Improved testing tools for writing and running stable, error-free tests.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>