<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lina Doces</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/php.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Dancing+Script|Indie+Flower|Open+Sans|Pacifico" rel="stylesheet">
</head>

<body>

    <header class="header">
        <div class="logo-site" style="display:flex; align-items: center;">
            <div class="nome-header">
                <a href="index.html">Confeitaria Lina Doces</a>
            </div>
        </div>

        <nav class="nav-h-desktop">
            <ul>
                <li style="border: none;">
                    <a href="index.html">
                        Home
                    </a>

                </li>
                <li>
                    <a href="comprar.php">
                        Comprar
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        Login
                    </a>
                </li>
            </ul>
        </nav>
        
    </header>

    <div class="botao-menu" onclick="openNav()">
        <div class="botao-menu-icone"></div>
        <div class="botao-menu-icone"></div>
        <div class="botao-menu-icone"></div>
    </div>

    <nav id="Sidenav" class="sidenav">
        <a class="closebtn" onclick="closeNav()">&times;</a>
        <ul>
            <li>
                <a href="index.html">
                    Home
                </a>
            </li>
            <li>
                <a href="comprar.php">
                    Comprar
                </a>
            </li>
            <li>
                <a href="login.php">
                    Login
                </a>
            </li>
        </ul>
    </nav>