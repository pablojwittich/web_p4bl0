<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dev Pablo Wittich</title>
        <style>
            *{
                padding:0;
                margin:0;
                border: 0;
                width: 80%;
                heigth: 100%;
                background-color: #02050d;
            }
            nav{
                list-style-type: none;
                margin: 0;
                padding: 0;
                margin-left: 4em;
                width: 12em;
                height: 22em;
            }
            a{
                display: block;
                margin-bottom: 3em;
                padding: 5em;
                padding: 8px 16px;
                border-radius: 10px;
                text-decoration: none;
                background-color:#02050d;
                text-align: center;
                color: white;
                border: solid 2px #2250d9;
            }
            a:hover{
                background-color:#2250d9;
                color:#02050d;
                border: solid 2px white;
            }
            h1{
                color: white;
                float: right;
                line-height: 100px;
            }
            .img-logo{
               width: 6em;
               height: 6em;
               float: left;
            }
            header{
                display: inline-block;
                margin-left: 30em;
                margin-top: 5em;
            }
            .description{
                margin-left: 40em;
            }
            .description > h3{
               color: white;
               font-size: 1.1em;
            }
            .description > h3:hover{
                font-size:1.5em;
            }
            .description > img{
                width: 2em;
                height: auto;
                margin: top: 1em;
                padding: 0.3em 0.3em 0.3em 0.3em;
            }
        </style>
    </head>
    <body>
        <header>
            <img class="img-logo" src="https://lh3.googleusercontent.com/a/ACg8ocJEfyJ0gbMyNHPaLqT4jJjeX_c-a5rDJUtC5G7z0CLGg46S4iDucA=s576-c-no" >
            <h1>Pablo Javier Wittich</h1>
        </header>
        <section class="description">
            <h3>Desarrollador Backend</h3>
            <img class="php-ico" alt="icono php" src="https://img.icons8.com/?size=100&id=39856&format=png&color=ffffff">
            <img class="laravel-ico" alt="icono laravel" src="https://img.icons8.com/?size=100&id=114956&format=png&color=ffffff">
            <img class="csharp-ico" alt="icono csharp" src="https://img.icons8.com/?size=100&id=55205&format=png&color=ffffff">
            <img class="java-ico" alt="icono java" src="https://img.icons8.com/?size=100&id=2572&format=png&color=ffffff">
            <img class ="sql-ico" alt="icono sql" src="https://img.icons8.com/?size=100&id=oaMmpx1c7yDA&format=png&color=ffffff">
            <img class="mysql-ico" alt="icono mysql" src="https://img.icons8.com/?size=100&id=39855&format=png&color=ffffff">
            <img class="git-ico" alt="icono git" src="https://img.icons8.com/?size=100&id=38389&format=png&color=ffffff">
            <img class="linux-ico" alt="icono linux" src="https://img.icons8.com/?size=100&id=38796&format=png&color=ffffff">
            <img>

        </section>
        <nav>
            <h4><a href="{{route('index')}}">Proyectos</a></h4>
            <h4><a href="{{route('contacto')}}">Contancto</a></h4>
            <h4><a href="{{route('experiencia')}}">Experiencia</a></h4>
            <h4><a href="{{route('sobremi')}}">Sobre mi</a></h4>
        </nav>

    </body>
</html>
