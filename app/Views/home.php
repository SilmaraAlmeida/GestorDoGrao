<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- ICON -->
    <link rel="icon" href="<?= base_url('public/assets/images/cafe-favicon.png') ?>" type="image/x-icon">

    <title>Gestor do Grão - Home</title>
    <style>
        .navbar {
            background-color: transparent !important;
            background-color: rgba(0, 0, 0, 0.5) !important; /* Fundo preto com transparência */
            backdrop-filter: blur(10px) !important; /* Efeito de desfoque */
        }

        header {
            background-image: url("https://coopercam.com.br/wp-content/uploads/2022/06/cafe-2-1920x1080.jpg");
            height: 100vh;
            min-height: 400px;
            background-size: cover;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #fff;
            font-size: 18px;
        }

        .navbar-light .navbar-brand {
            color: #fff;
            font-size: 30px;
        }

    </style>
</head>

<body>
    <!-- BACKGROUND IMG -->
    <header>

    </header>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Gestor do Grão</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SOBRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SERVIÇOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTATO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 mb-5">
        <h1 class="text-center mt-5 mb-5">Bem Vindo ao Gestor do Grão</h1>

        <!-- PARA TESTE DA NAVBAR -->
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a doloremque id, labore, illo nemo nam facere rerum cum dolores temporibus voluptas suscipit consequuntur eius! Dignissimos itaque accusantium nobis voluptate?</p>

    <!-- BOOTSTRAP 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
