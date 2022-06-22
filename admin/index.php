<?php
ob_start(); //ARMAZENA MEUS DADOS EM CACHE
session_start(); //INICIA A SESSÃO
if(isset($_SESSION['loginUser']) && (isset($_SESSION['senhaUser']))){
    header("Location: admin.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multimeios Digital | Login do Administrador</title>
    <script src="https://kit.fontawesome.com/1e32b8079d.js" crossorigin="anonymous"></script>
    <style>
        *{ 
    margin: 0;
    padding: 0;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    box-sizing: border-box;
}

/*BANNER*/
body.banner{
    background: url(../img/testeLivros.png);
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    color: #2c3e50;
    padding: 150px 0;
}
h1{
    text-align: center;
    color: #fff;
    padding-bottom: 30px;
    font-size: 40px;
}
/*FORMULÁRIO*/
.container{
    display: flex;
    justify-content: center;
    width: 100%;
}
.card{
    background-color: #ffffff85;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 3px 3px 3px 0;
}
h2{
    text-align: center;
    margin-bottom: 20px;
}
input, select{
    width: 100%;
    padding: 5px;
    display: inline-block;
    border: 0;
    border-bottom: 1px solid #2c3e50;
    background-color: transparent;
    outline: none;
    min-width: 180px;
    font-size: 16px;
    transition: all .3s ease-out;
    border-radius: 0;
}
.label-float{
    position: relative;
    padding-top: 13px;
    margin-top: 5%;
    margin-bottom: 5%;

}
button{
    background-color: green;
    border: 0;
    border-radius: 6px;
    color: #fff;
    padding: 10px;
    font-size: 12pt;
    cursor: pointer;
}
button:hover{
    background-color: darkgreen;
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
<body class="banner">    
    <div class="container">
        <div class="card">
                    <h2>Faça Login</h2>
                    
                            <form class="editar" action="" method="post" enctype="multipart/form-data">
                                
                                    <div class="label-float">
                                        <label for="">E-mail</label>
                                        <input name="email" type="email"/>
                                    </div>
                                    
                                    <div class="label-float">
                                        <label for="">Senha</label>
                                        <input name="senha" type="password"/>
                                    </div>
                                    <button name="btnlogin" class="btn" type="submit">Entrar</button>
                                    <a href="cad_adm.php">Torne-se um Administrador</a>
                                </form>
                                <?php
                                    include_once('../config/conexao.php');
                                    if(isset($_POST['btnlogin'])){
                                        $login=$_POST['email'];
                                        $senha=$_POST['senha'];
                                        $select="SELECT * FROM tbadm WHERE emailAdm=:emailLogin AND senhaAdm=:senhaLogin";
                                        try {
                                          $resultLogin = $conect->prepare($select);
                                          $resultLogin->bindParam(':emailLogin',$login, PDO::PARAM_STR);
                                          $resultLogin->bindParam(':senhaLogin',$senha, PDO::PARAM_STR);
                                          $resultLogin->execute();
                              
                                          $verificar = $resultLogin->rowCount();
                                          if ($verificar>0) {
                                            $login=$_POST['email'];
                                            $senha=$_POST['senha'];
                                            //CRIAR SESSAO »»
                                            $_SESSION['loginUser'] = $login;
                                            $_SESSION['senhaUser'] = $senha;
                              
                                            echo 'Bem-vindo(a) de volta ao centro Multimeios Digital :)';
                                          
                                            header("Refresh: 3, admin.php");
                                          }else{
                                            echo "Usuário inválido";
                                          }
                                        } catch(PDOException $e){
                                          echo "<strong>ERRO DE LOGIN = </strong>".$e->getMessage();
                                        }
                                      }
                                    ?>
         </div>
    </div>

</body>
</html>