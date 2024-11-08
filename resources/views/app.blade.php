<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&display=swap" rel="stylesheet">
        <style>
            /* CONFIG GOBLAL*/
            *{
                padding:0;
                margin:0;
                border: 0;
                width: 80%;
                height: auto;
                scroll-behavior: auto;
                scroll-behavior: smooth;
                scroll-behavior: inherit;
                scroll-behavior: initial;
                scroll-behavior: unset;

                font-family: "Fira Code", monospace;
            }
            body{
                background-color: #0b0a13;
                color: white;
            }
            .fira-code-<uniquifier> {
                font-family: "Fira Code", monospace;
                font-optical-sizing: auto;
                font-weight: <weight>;
                font-style: normal;
            }

            /* NAV */
            nav{
                list-style-type: none;
                margin: 0;
                padding: 0;
                margin-left: 4em;
                width: 12em;
                height: 22em;
            }
            .a-nav{
                display: block;
                margin-bottom: 3em;
                padding: 5em;
                padding: 8px 16px;
                border-radius: 10px;
                text-decoration: none;
                background-color:#0b0a13;
                text-align: center;
                color: white;
                border: solid 2px #2250d9;
            }
            .a-nav:hover{
                background-color:#2250d9;
                color:#0b0a13;
                border: solid 2px white;
            }
            nav > h4{
                font-size: 1em;
            }
            nav > h4:hover{
                font-size: 1.15em;
            }

            /* CONFIG DESCRIPTION */
            header >.logo-img{
                width: 8em;
                height: 8em;
                float:left;
                margin-top: 2em;
            }
            h1{
                float: right;
                line-height: 5em;
                padding-left: 1em;
                margin-bottom: 1em;
            }
            header{
                display: flex;
                justify-content: center;
                align-text: center;
            }
            .description{
                display: inline-block;
                align-items: center;
                margin-left: 10em;
                margin-top: -3em;
            }
            .description > a > img{
                width: 2em;
                height: auto;
                padding: 0.3em 0.3em 0.3em 0.3em;
            }
            .description > a > img:hover{
                width: 3em;
                height: auto;
            }
            .description > a{
                color:#0b0a13;
            }
            .description >  h4 {
                margin-bottom: 1em;
            }
            .description-prima{
                margin-left: 25em;
            }

            /* CONFIG MAIN */
            .main-prima{
                background-color: #1b1929;
                border-radius: 10px;
                border: solid 2px #2250d9;
                width: 50em;
                height: 40em;
                display: inline-block;
                float: right;
                margin-top: 1em;
                margin-right: -15em;

            }
        </style>
    </head>
    <body>
        <section class="description-prima">
            <header>
                <img class="logo-img" src="https://lh3.googleusercontent.com/a/ACg8ocJEfyJ0gbMyNHPaLqT4jJjeX_c-a5rDJUtC5G7z0CLGg46S4iDucA=s576-c-no" >
                <h1>Pablo Javier Wittich</h1>
            </header>
                <section class="description">
                    <h3>Backend Developer</h3>
                    <h4>Tecnologias:</h4>
                    <a href="https://www.php.net/manual/es/index.php" target="_blank">
                        <img class="php-ico" alt="icono php" src="https://img.icons8.com/?size=100&id=39856&format=png&color=ffffff">
                    </a>

                    <a href="https://laravel.com/docs/11.x" target="_blank">
                        <img class="laravel-ico" alt="icono laravel" src="https://img.icons8.com/?size=100&id=114956&format=png&color=ffffff">
                    </a>

                    <a href="https://learn.microsoft.com/en-us/dotnet/csharp/" target="_blank">
                        <img class="csharp-ico" alt="icono csharp" src="https://img.icons8.com/?size=100&id=55205&format=png&color=ffffff">
                    </a>

                    <a href="https://docs.oracle.com/en/java/" target="_blank">
                        <img class="java-ico" alt="icono java" src="https://img.icons8.com/?size=100&id=2572&format=png&color=ffffff">
                    </a>

                    <a href="https://es.wikipedia.org/wiki/SQL" target="_blank">
                        <img class ="sql-ico" alt="icono sql" src="https://img.icons8.com/?size=100&id=oaMmpx1c7yDA&format=png&color=ffffff">
                    </a>

                    <a href="https://dev.mysql.com/doc/" target="_blank">
                        <img class="mysql-ico" alt="icono mysql" src="https://img.icons8.com/?size=100&id=39855&format=png&color=ffffff">
                    </a>

                    <a href="https://git-scm.com/book/es/v2" target="_blank">
                        <img class="git-ico" alt="icono git" src="https://img.icons8.com/?size=100&id=38389&format=png&color=ffffff">
                    </a>

                    <a href="https://www.kernel.org/doc/html/latest/translations/sp_SP/index.html" target="_blank">
                        <img class="linux-ico" alt="icono linux" src="https://img.icons8.com/?size=100&id=38796&format=png&color=ffffff">
                    </a>
                </section>
        </section>
        <section class="main-prima">
            <main>
            </main>
        </section>
        <nav>
            <h4><a class="a-nav" href="{{route('index')}}">Proyectos</a></h4>
            <h4><a class="a-nav" href="{{route('contacto')}}">Contancto</a></h4>
            <h4><a class="a-nav" href="{{route('experiencia')}}">Experiencia</a></h4>
            <h4><a class="a-nav" href="{{route('sobremi')}}">Sobre mi</a></h4>
        </nav>
    </body>
</html>
