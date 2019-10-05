<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lina Doces</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/php.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Dancing+Script|Indie+Flower|Open+Sans|Pacifico" rel="stylesheet">
</head>

<body>

    <header class="header">
        <div class="logo-site" style="display:flex; align-items: center;">
            <div class="logo-header"><i class="fas fa-cookie-bite fa-4x fa-fw"></i></i></div>

            <div class="nome-header">
                <a href="index.html">Confeitaria Lina Doces</a>
            </div>
        </div>

        <nav class="nav-h-desktop">
            <ul>
                <li style="border: none;">
                    <a href="index.html">
                        <i class="fas fa-home fa-xl fa-fw"></i> Home
                    </a>

                </li>
                <li>
                    <a href="comprar.php">
                        <i class="fas fa-dollar-sign"></i> Comprar
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        <i class="fas fa-user fa-xl fa-fw"></i> Login
                    </a>
                </li>
            </ul>
        </nav>
        
    </header>

    <div class="botao-menu" onclick="openNav()">
        <i class="fas fa-bars fa-3x fa-fw"></i>
    </div>

    <nav id="Sidenav" class="sidenav">
        <a class="closebtn" onclick="closeNav()">&times;</a>
        <ul>
            <li>
                <a href="index.html">
                    <i class="fas fa-home fa-xl fa-fw"></i> Home
                </a>
            </li>
            <li>
                <a href="comprar.php">
                    <i class="fas fa-dollar-sign"></i> Comprar
                </a>
            </li>
            <li>
                <a href="login.php">
                    <i class="fas fa-user fa-xl fa-fw"></i> Login
                </a>
            </li>
        </ul>
    </nav>