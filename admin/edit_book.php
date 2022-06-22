<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realocar livro</title>
    <script src="https://kit.fontawesome.com/1e32b8079d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="alocar.css" type="text/css">
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
    <?php
        include_once('../config/conexao.php');
        if(!isset($_GET['id'])){
            header("Location: admin.php");
            exit;
        }
        $id = filter_input(INPUT_GET,'id',FILTER_DEFAULT);

        $select = "SELECT * FROM livros WHERE idLivro=:id";
        try{
            $resultado = $conect->prepare($select);
            $resultado->bindParam(':id',$id, PDO::PARAM_INT);
            $resultado->execute();

            $cont = $resultado->rowCount();
            if($cont > 0){
                while($show = $resultado->FETCH(PDO::FETCH_OBJ)){
                    $id = $show->idLivro;
                    $nome = $show->nomeLivro;
                    $autor = $show->autorLivro;
                    $volume = $show->volLivro;
                    $local = $show->localLivro;
                    $editora = $show->editLivro;
                    $ano = $show->anoLivro;
                    $categoria = $show->cateLivro;
                }
            }else{
                echo '<h5>Ops!</h5>
                não foi possível editar as informações deste livro !!!';
            }
        }catch (PDOException $e){
            echo"<strong> ERRO DE SELECT NO PDO = </strong>". $e->getMessage();
          }
        ?>
        <div class="card">
                    <h2>Edite as informações do seu livro</h2>
                    
                            <form class="editar" action="" method="post" enctype="multipart/form-data">
                                
                                    <div class="label-float">
                                        <label for="">Título do Livro</label>
                                        <input name="nome" type="text" value="<?php echo $nome;?>"/>
                                    </div>
                                    <div class="label-float">
                                        <label for="">Autor do livro</label>
                                        <input name="autor" type="text" value="<?php echo $autor;?>"/>
                                    </div>
                                    <div class="label-float">
                                        <label for="">Volume do Livro</label>
                                        <input name="volume" type="text" value="<?php echo $volume;?>"/>
                                    </div>
                                    <div class="label-float">
                                        <label for="">Local do Livro</label>
                                        <input name="local" type="text" value="<?php echo $local;?>"/>
                                    </div>
                                    <div class="label-float">
                                        <label for="">Editora</label>
                                        <input name="editora" type="text" value="<?php echo $editora;?>"/>
                                    </div>
                                    <div class="label-float">
                                        <label for="">Ano de publicação</label>
                                        <input name="ano" type="text" value="<?php echo $ano;?>"/>
                                    </div class="botao">
                                    <div>
                                        <label for="name">Categoria</label>
                                    <select name="categoria" class="label-float" value="<?php echo $categoria;?>">
                                            <option>ASSUNTOS DIVERSOS</option>
                                            <option>BIOGRAFIA</option>
                                            <option>CIÊNCIAS HUMANAS E SOCIAIS</option>
                                            <option>CIÊNCIAS DA NATUREZA</option>
                                            <option>COLEÇÃO</option>
                                            <option>CRÔNICA</option>
                                            <option>CULTURA</option>
                                            <option>DICIONÁRIO</option>
                                            <option>EIXO TÉCNICO</option>
                                            <option>ESPIRITUALIDADE</option>
                                            <option>EXATAS</option>
                                            <option>FICÇÃO CIÊNTIFICA</option>
                                            <option>FORMAÇÃO DE PROFESSORES</option>
                                            <option>INFANTO JUVENIL</option>
                                            <option>LINGUAGENS E CÓDIGOS</option>
                                            <option>ROMANCES</option>
                                    </select>
                                    </div>
                                    <button name="btnUp" class="btn" type="submit">Alocar</button>
                                </form>
                                <?php
                                    include_once('../config/conexao.php');
                                    if(isset($_POST['btnUp'])){
                                        $nome=$_POST['nome'];
                                        $autor=$_POST['autor'];
                                        $volume=$_POST['volume'];
                                        $local=$_POST['local'];
                                        $editora=$_POST['editora'];
                                        $ano=$_POST['ano'];
                                        $categoria=$_POST['categoria'];
                                        $editar="UPDATE livros SET nomeLivro=:nome,autorLivro=:autor,volLivro=:volume,localLivro=:local,editLivro=:editora,anoLivro=:ano,cateLivro=:categoria WHERE idLivro=:id";                   
                                        try {
                                          $result = $conect->prepare($editar);
                                          $result->bindParam(':id',$id, PDO::PARAM_INT);
                                          $result->bindParam(':nome',$nome, PDO::PARAM_STR);
                                          $result->bindParam(':autor',$autor, PDO::PARAM_STR);
                                          $result->bindParam(':volume',$volume, PDO::PARAM_STR);
                                          $result->bindParam(':local',$local, PDO::PARAM_STR);
                                          $result->bindParam(':editora',$editora, PDO::PARAM_STR);
                                          $result->bindParam(':ano',$ano, PDO::PARAM_STR);
                                          $result->bindParam(':categoria',$categoria, PDO::PARAM_STR);
                                          $result->execute();
                            
                                          $contar=$result->rowCount();
                                          if($contar > 0){
                                            
                                                echo ' <h5>OK!</h5>
                                                          livro editado com sucesso !!!';
                                                          
                                                          
                                              }else{
                                            
                                                echo '<h5>Ops!</h5>
                                                        livro não editado !!!';
                                                        
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