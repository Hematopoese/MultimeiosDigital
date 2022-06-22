<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multimeios Digital | Editar Perfil</title>
    <script src="https://kit.fontawesome.com/1e32b8079d.js" crossorigin="anonymous"></script>
    <style>
        *{ 
    margin: 0;
    padding: 0;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    box-sizing: border-box;
}

/*BANNER*/
section.banner{
    background: url(../img/testeLivros.png);
    height: 800px;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    color: #2c3e50;
    
    padding: 150px 0;
    
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

    </style>
</head>
<body>
    <section class="banner">
    <div class="container">
        <?php
        include_once('../config/conexao.php');
        if(!isset($_GET['id'])){
            header("Location: home.php");
            exit;
        }
        $id = filter_input(INPUT_GET,'id',FILTER_DEFAULT);

        $select = "SELECT * FROM tbaluno WHERE idAluno=:id";
        try{
            $resultado = $conect->prepare($select);
            $resultado->bindParam(':id',$id, PDO::PARAM_INT);
            $resultado->execute();

            $cont = $resultado->rowCount();
            if($cont > 0){
                while($show = $resultado->FETCH(PDO::FETCH_OBJ)){
                    $id = $show->idAluno;
                    $nome = $show->nomeAluno;
                    $matricula = $show->matricula;
                    $turma = $show->turmaAluno;
                }
            }else{
                echo '<h5>Ops!</h5>
                não foi possível editar este perfil !!!';
            }
        }catch (PDOException $e){
            echo"<strong> ERRO DE SELECT NO PDO = </strong>". $e->getMessage();
          }
        ?>
        <div class="card">
                    <h2>Editar Perfil</h2>
                    
                            <form class="editar" action="" method="post" enctype="multipart/form-data">
                                
                                    <div class="label-float">
                                        <label for="name">Nome Completo</label>
                                        <input name="nome" type="text" value="<?php echo $nome;?>"/>
                                    </div>
                                    <div class="label-float">
                                        <label for="password">Matrícula</label>
                                        <input name="matricula" type="text" value="<?php echo $matricula;?>"/>
                                    </div>
                                    
                                    <div>
                                        <label for="name">Turma</label>
                                    <select name="turma" class="label-float" value="<?php echo $turmaAluno;?>">
                                            <option>3#INFORMÁTICA</option>
                                            <option>3#ENFERMAGEM</option>
                                            <option>3#COMÉRCIO</option>
                                            <option>3#SEC. ESCOLAR</option>
                                            <option>2#INFORMÁTICA</option>
                                            <option>2#ENFERMAGEM</option>
                                            <option>2#ADMINISTRAÇÃO</option>
                                            <option>1#INFORMÁTICA</option>
                                            <option>1#ENFERMAGEM</option>
                                            <option>1#ADMINISTRAÇÃO</option>
                                            <option>1#CONTABILIDADE</option>
                                    </select>
                                    </div>
                                    <div><button name="btnUp" class="btn" type="submit">Editar</button></div>
                                </form>
                                <?php
                                    include_once('../config/conexao.php');
                                    if(isset($_POST['btnUp'])){
                                        $nome=$_POST['nome'];
                                        $matricula=$_POST['matricula'];
                                        $turma=$_POST['turma'];
                                        $editar="UPDATE tbaluno SET nomeAluno=:nome,matricula=:matricula,turmaAluno=:turma WHERE idAluno=:id";                   
                                        try {
                                          $result = $conect->prepare($editar);
                                          $result->bindParam(':id',$id, PDO::PARAM_INT);
                                          $result->bindParam(':nome',$nome, PDO::PARAM_STR);
                                          $result->bindParam(':matricula',$matricula, PDO::PARAM_STR);
                                          $result->bindParam(':turma',$turma, PDO::PARAM_STR);
                                          $result->execute();
                            
                                          $contar=$result->rowCount();
                                          if($contar > 0){
                                                echo ' <h5>OK!</h5>
                                                          usuário editado com sucesso !!!';
                                              }else{
                                                echo '<h5>Ops!</h5>
                                                        usuário não editado !!!';
                                              }
                                          }catch (PDOException $e){
                                            echo"<strong> ERRO DE CADASTRO PDO = </strong>". $e->getMessage();
                                          }
                                    }
                                    ?>
         </div>
    </div>
    </section>
</body>
</html>