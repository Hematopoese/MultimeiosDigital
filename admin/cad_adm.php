<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro para administrador</title>
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
                    <h2>Cadastre-se para ser Administrador</h2>
                    
                            <form class="editar" action="" method="post" enctype="multipart/form-data">
                                    <div class="label-float">
                                        <label for="">Nome Completo</label>
                                        <input name="nome" type="text"/>
                                    </div>
                                    <div class="label-float">
                                        <label for="">E-mail</label>
                                        <input name="email" type="email"/>
                                    </div>
                                    <div class="label-float">
                                        <label for="">Telefone</label>
                                        <input name="tel" type="phone"/>
                                    </div>
                                    <div class="label-float">
                                        <label for="">senha</label>
                                        <input name="senha" type="password"/>
                                    </div>
                                    <button name="btnCContato" class="btn" type="submit">Entrar</button>
                                    <a href="index.php">Voltar Para Login</a>
                                </form>
                                <?php
                                    include_once('../config/conexao.php');
                                    if(isset($_POST['btnCContato'])){
                                        $nome=$_POST['nome'];
                                        $email=$_POST['email'];
                                        $tel=$_POST['tel'];
                                        $senha=$_POST['senha'];
                                        $cadastro="INSERT INTO tbadm(nomeAdm,emailAdm,telAdm,senhaAdm) VALUES(:nome,:email,:tel,:senha)";                   
                                        try {
                                          $result = $conect->prepare($cadastro);
                                          $result->bindParam(':nome',$nome, PDO::PARAM_STR);
                                          $result->bindParam(':email',$email, PDO::PARAM_STR);
                                          $result->bindParam(':tel',$tel, PDO::PARAM_STR);
                                          $result->bindParam(':senha',$senha, PDO::PARAM_STR);
                                          $result->execute();
                            
                                          $contar=$result->rowCount();
                                          if($contar > 0){
                                                echo ' <h5>OK!</h5>
                                                          contato cadastrado com sucesso !!!';
                                              }else{
                                                echo '<h5>Ops!</h5>
                                                        contato não cadastrado !!!';
                                              }
                                          }catch (PDOException $e){
                                            echo"<strong> ERRO DE CADASTRO PDO = </strong>". $e->getMessage();
                                          }
                                    }
                                    ?>                 
         </div>
    </div>

</body>
</html>