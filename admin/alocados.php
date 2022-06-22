<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Livros Alocados</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <style>
header.banner{
                    background: url(../img/testeLivros.png);
                    height: 100%;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-attachment: fixed;
                    color: #fff;
                    text-align: center;
                    padding: 150px 0;
    
}
        </style>
        
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Tabela de Livros alocados</a>
                
                
            </div>
        </nav>
        <!-- Masthead-->
        <header class="banner">
            <div class="container d-flex align-items-center flex-column">
               
                <img style="width: 190px; border-radius: 100%; margin-bottom: 80px" src="../img/logo.png" alt="..." />
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
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
            
                        <?php
                        include_once('../config/conexao.php');
                        if(isset($_POST['btnCContato'])){
                          $nome=$_POST['nome'];
                          $matricula=$_POST['matricula'];
                          $turma=$_POST['turma'];

                              $cadastro="INSERT INTO tbaluno(nomeAluno,matricula,turmaAluno) VALUES(:nome,:matricula,:turma)";                   
                              try{
                                $result=$conect-> prepare ($cadastro);
                                $result->bindParam(':nome',$nome,PDO::PARAM_STR);
                                $result->bindParam(':matricula',$matricula,PDO::PARAM_STR);
                                $result->bindParam(':turma',$turma,PDO::PARAM_STR);
                                $result->execute();
          
                                $contar=$result->rowCount();
                              if($contar > 0){
                                    echo '<div class="container">
                                              <div class="alert alert-success alert-dismissible">
                                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                              <h5><i class="icon fas fa-check"></i> OK!</h5>
                                              contato cadastrado com sucesso !!!
                                            </div>
                                          </div>';
                                  }else{
                                    echo '<div class="container">
                                              <div class="alert alert-danger alert-dismissible">
                                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                              <h5><i class="icon fas fa-check"></i> Ops!</h5>
                                              contato não cadastrado !!!
                                            </div>
                                          </div>';
                                  }
                              }catch (PDOException $e){
                                echo"<strong> ERRO DE CADASTRO PDO = </strong>". $e->getMessage();
                              }
                        }
                        ?>
                    </div>
                </div>
            </div>
                <div class="text-center" class="col-md-7">
            <div class="card card-primary">
              <div class="card-header">
              
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                 
                <table class="table table-sm">
                  <thead>
                    <tr>
                    <th>Ordem</th>
                    <th>Usuário</th>
                    <th> ID do livro</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $select = "SELECT * FROM alocados ORDER BY idUser DESC" ;
                      try{
                        $resultado = $conect->prepare($select);
                        $resultado->execute();
                        $contar = $resultado->rowCount();
                        if($contar > 0){
                          while($show = $resultado->FETCH(PDO::FETCH_OBJ)){   
                    ?>
                    <tr>
                    <td style="vertical-align:middle;"><?php echo $show->idUser;?></td>
                    <td style="vertical-align:middle;"><?php echo $show->nomeUser;?></td>
                    <td style="vertical-align:middle;"><?php echo $show->livro;?></td>
                    <td style="vertical-align:middle; text-align:center">
                      <a href="delet_alocados.php?idNy=<?php echo $show->livro;?>" class="btn btn-success" title="Alocado" onclick="return confirm('Deseja realmente remover <?php echo $show->nomeLivro;?> do sistema ?')">OK</a>
                    </td>
                  </tr>
                  <?php
                      }
                    }else{
                      echo '<div class="container">
                                <div class="alert alert-danger alert-dismissible">
                                
                                <h5><i class="icon fas fa-check"></i> Ops!</h5>
                                Não há livros alocados no momento !!!
                              </div>
                            </div>';
                    }
                  }catch(PDOException $e){
                    echo '<strong>ERRO DE PDO= </strong>'.$e->getMessage();
                  }
                    ?>
                     </tbody>
                  <tfoot>
                  <tr>
                    <th>Ordem</th>
                    <th>Usuário</th>
                    <th>ID livro</th>
                  </tr>
                  </tfoot>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
      </div>
    
    </section>
    <!-- /.content -->
  </div>
        
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Obrigado por nos visitar, volte sempre :)</small></div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
