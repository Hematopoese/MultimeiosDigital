<?php
ob_start(); //ARMAZENA MEUS DADOS EM CACHE
session_start(); //INICIA A SESSÃO
if(!isset($_SESSION['loginUser']) && (!isset($_SESSION['senhaUser']))){
    header("Location: home.php?acao=negado");
    exit;
}
include_once('sair.php')
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multimeios Digital | Home</title>
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
    background: #23232e;
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
    background: url(img/testeLivros.png);
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    color: #fff;
    text-align: center;
    padding: 150px 0;
    
}
/*SOBRE*/
.sobre{
    padding: 120px 100px;
    
}
.sobre h1{
    font-size: 50px;
    text-align: center;
    padding-bottom: 40px;
    color: #23232e;
}
.sobre p{
    font-size: 20px;
}

/*CATÁLOGO*/
.catalogo{
    padding: 120px 100px;
}
.catalogo h1{
    font-size: 50px;
    text-align: center;
    padding-bottom: 40px;
    color: #23232e;
}
div.colunas{
    display: flex;
    justify-content: space-between;
    margin: 50px 6px;
    text-align: center;
}
div.colunas img{
    border-radius: 8px;
}

div.colunas a{
    text-decoration: none;
}
div.colunas a:hover{
    color:rgb(30, 255, 0) ;
}
div.colunas2{
    display: flex;
    justify-content: space-between;
    margin: 50px 6px;
    text-align: center;
}
div.colunas2 img{
    border-radius: 8px;
}
div.colunas2 a{
    text-decoration: none;
}


/*RODAPE*/
footer div.insta{
    background: #23232e;
    color: rgb(255, 255, 255);
    padding: 40px 0;
    text-align: center;
    font-family:'Opens sans';  
}
div.insta h4{
    font-size: 20px;
    padding-bottom: 10px;
}
div.insta a{
    color: #fff;
    font-size: 40px;
}
div.insta a:hover{
    color:rgb(30, 255, 0) ;
}

@media (max-width: 700px){
    header{
        flex-direction: column;
    }
    header h1{
        padding-bottom: 15px;
    }
}
    </style>
</head>
<body>
    
    <header>
        <h1 class="cartaoPostal">Seja bem-vindo(a) ao centro de Multimeios digital!</h1>
        
        <nav>
            <ul>
                <li><a href="?sair">Sair</a></li>
            </ul>
        </nav>
    </header>
    <section class="banner">
    <div class="container d-flex align-items-center flex-column">
               
               <img style="width: 190px; border-radius: 100%; margin-bottom: 80px" src="img/logo.png" alt="..." />
               <!-- Masthead Heading-->
               <h1 class="masthead-heading text-uppercase mb-0">Multimeios</h1>
               <!-- Icon Divider-->
               <div class="divider-custom divider-light">
                   <div class="divider-custom-line"></div>
                   <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                   <div class="divider-custom-line"></div>
               </div>
               <!-- Masthead Subheading-->
               <p class="masthead-subheading font-weight-light mb-0">E.E.E.P José Maria Falcão</p>
           </div>
    </section>
    <section class="sobre">
        <h1 id="sobre">Sobre Nós</h1>
        
        <p>Nosso objetivo é promover projetos voltados para desenvolver o gosto, o interesse e a aprendizagem da leitura e da escrita.</p>
        <p>A Multimeios digital foi criada com o intúito de organizar e facilitar o processo de empréstimo do livro, podendo escolher com antecedência a obra literária de forma remota.</p>
        
    </section>
    <section class="catalogo">
        <h1 id="categorias">Categorias</h1>
        <div class="colunas">
        <a href="livros/livro1.php"><article>
                            <img src="img/portfolio/divesos.png" alt="" width="250px">
                            <h3>Assuntos Diversos</h3>
                        </article>
                </a>
                <a href="livros/livro2.php"><article>
                            <img src="img/portfolio/biografia.png" alt="" width="250px">
                            <h3>Biografia</h3>
                        </article>
                </a>
            <a href="livros/livro3.php"><article>
                            <img src="img/portfolio/cienciasSociais.png" alt="" width="250px">
                            <h3>Ciências Humanas e Sociais</h3>
                        </article>
                </a>
            <a href="livros/livro4.php"><article>
                            <img src="img/portfolio/cienciasDaNatureza.png" alt="" width="250px">
                            <h3>Ciências da Natureza</h3>
                        </article>
                </a>
            
        </div>
        <div class="colunas">
        <a href="livros/livro5.php"><article>
                            <img src="img/portfolio/colecao.png" alt="" width="250px">
                            <h3>Coleção</h3>
                        </article>
                </a>
                <a href="livros/livro6.php"><article>
                            <img src="img/portfolio/circus.png" alt="" width="250px">
                            <h3>Crônica</h3>
                        </article>
                </a>
            <a href="livros/livro7.php"><article>
                            <img src="img/portfolio/cultura.png" alt="" width="250px">
                            <h3>Cultura</h3>
                        </article>
                </a>
            <a href="livros/livro8.php"><article>
                            <img src="img/portfolio/dicionario.png" alt="" width="250px">
                            <h3>Dicionários</h3>
                        </article>
                </a>
            
        </div>
        <div class="colunas">
        <a href="livros/livro9.php"><article>
                            <img src="img/portfolio/eixotecnico.png" alt="" width="250px">
                            <h3>Eixo Técnico</h3>
                        </article>
                </a>
                <a href="livros/livro10.php"><article>
                            <img src="img/portfolio/espiritualidade.png" alt="" width="250px">
                            <h3>Espiritualidade</h3>
                        </article>
                </a>
            <a href="livros/livro11.php"><article>
                            <img src="img/portfolio/exatas.png" alt="" width="250px">
                            <h3>Exatas</h3>
                        </article>
                </a>
            <a href="livros/livro12.php"><article>
                            <img src="img/portfolio/ficcaoCientifica.png" alt="" width="250px">
                            <h3>Ficção Científica</h3>
                        </article>
                </a>
            
        </div>
        <div class="colunas">
        <a href="livros/livro13.php"><article>
                            <img src="img/portfolio/formacaoProfessores.png" alt="" width="250px">
                            <h3>Formação de Professores</h3>
                        </article>
                </a>
                <a href="livros/livro14.php"><article>
                            <img src="img/portfolio/infantoJuvenil.png" alt="" width="250px">
                            <h3>Infanto Juvenil</h3>
                        </article>
                </a>
            <a href="livros/livro15.php"><article>
                            <img src="img/portfolio/linguagensCodigos.png" alt="" width="250px">
                            <h3>Linguagens e Códigos</h3>
                        </article>
                </a>
            <a href="livros/livro16.php"><article>
                            <img src="img/portfolio/rom.png" alt="" width="250px">
                            <h3>Romances</h3>
                        </article>
                </a>
            
        </div>
    </section>
    <footer>
        <div class="insta">
            <h4>Estamos no instagram!</h4>
            <a href="https://instagram.com/multimeios_jmf?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>