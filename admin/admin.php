<?php
ob_start(); //ARMAZENA MEUS DADOS EM CACHE
session_start(); //INICIA A SESSÃO
if(!isset($_SESSION['loginUser']) && (!isset($_SESSION['senhaUser']))){
    header("Location: admin.php?acao=negado");
    exit;
}
include_once('sair.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Administrador</title>
    <script src="https://kit.fontawesome.com/1e32b8079d.js" crossorigin="anonymous"></script>
    <style>
        *{ 
    margin: 0;
    padding: 0;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    box-sizing: border-box;
}
/*MENU*/
header{
    
    background: #343440;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 100px;
    position: fixed;
}
header h1{
    color: #fff;
}
nav, ul{
    list-style: none;
}
header nav,ul{
    display: flex;
}
nav li a{
    color: #fff;
    text-decoration: none;
    font-size: 20px;
}
nav li a:hover{
    color:rgb(30, 255, 0) ;
}
nav li{
    margin: 0 30px;
}
/*BANNER*/
section.banner{
    background-color: #23232e;
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    color:rgb(30, 255, 0);
    text-align: center;
    padding: 150px 0;
    
}
div.coluna{
    background-color: #343440;
    border-radius: 8px;
    height: 250px;
    width: 45%;
    margin: 8px;
    padding: 6px;
    box-shadow: 3px 3px 3px 0;
    display: inline-block;
    
}
.coluna a{
    color:rgb(30, 255, 0);
    text-decoration: none;
    font-size: 20px;
    justify: center;
}

    </style>
</head>
<body >
<header class="kabessalio">
        <h1>Seja bem-vindo(a) ao centro de Multimeios digital!</h1>
        
        <nav>
            <ul>
                <li><a href="?sair">Sair</a></li>
            </ul>
        </nav>
    </header>
    <section class="banner">
            <div class="coluna">
               <article>
                <div>
                    <a href="../home.php">
                        <i class="fa-solid fa-landmark"></i>
                        <h1>Biblioteca</h1>
                    </a>
                </div>
               </article>
            </div>
            <div class="coluna">
               <article>
                <div>
                <a href="users.php">
                    <i class="fa-solid fa-users"></i>
                    <h1>Usuários</h1>
                </a>
                </div>
               </article>
            </div>
            <div class="coluna">
               <article>
                <div>
                    <a href="relatorio.php">
                        <i class="fa-solid fa-book"></i>
                        <h1>Livros</h1>
                    </a>
                </div>
               </article>
            </div>
            <div class="coluna">
               <article>
                <div>
                    <a href="alocados.php">
                    <i class="fa-solid fa-book"></i>
                        <h1>Livros Alocados</h1>
                    </a>
                </div>
               </article>
            </div>
    </section>
    
</body>
</html>