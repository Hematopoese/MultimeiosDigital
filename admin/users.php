<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tabela de usuários</title>
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
                <a class="navbar-brand" href="#page-top">Tabela de Usuários cadastrados</a>
                
                
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
                <!-- Portfolio Section Heading-->
              
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Cadastro</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!--FORMULÁRIO-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                       
                        <form action="" method="post" enctype="multipart/form-data">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="nome" type="text" data-sb-validations="required" />
                                <label for="name">Nome Completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="matricula" type="text" data-sb-validations="required,email" />
                                <label for="email">Número da matrícula</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>  
                            <div class="form-floating mb-3">
                                <div><label for="name">Turma</label></div>
                            <select name="turma" class="#">
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
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Submit Button-->
                            <button name="btnCContato" class="btn btn-primary" type="submit">Cadastrar</button>
                        </form>
                    </section>
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
        
        <!--TABELA DE CONTATOS-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Usuários</h2>
                <div class="text-center" class="col-md-7">
            <div class="card card-primary">
              <div class="card-header">
              
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                 
                <table class="table table-sm">
                  <thead>
                    <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Número da matrícula</th>
                    <th>Turma</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $select = "SELECT * FROM tbaluno ORDER BY idAluno";
                      try{
                        $resultado = $conect->prepare($select);
                        $resultado->execute();
                        $contar = $resultado->rowCount();
                        if($contar > 0){
                          while($show = $resultado->FETCH(PDO::FETCH_OBJ)){   
                    ?>
                    <tr>
                    <td style="vertical-align:middle;"><?php echo $show->idAluno;?></td>
                    <td style="vertical-align:middle;"><?php echo $show->nomeAluno;?></td>
                    <td style="vertical-align:middle;"><?php echo $show->matricula;?></td>
                    <td style="vertical-align:middle;"><?php echo $show->turmaAluno;?></td>
                    <td style="vertical-align:middle; text-align:center">
                      <a href="update_perfil.php?id=<?php echo $show->idAluno;?>" class="btn btn-success" title="Editar">Editar</a>
                      <a href="del.php?idDel=<?php echo $show->idAluno;?>" class="btn btn-danger" title="Remover" onclick="return confirm('Deseja remover o contato <?php echo $show->nomeAluno;?>?')">Remover</a>
                    </td>
                  </tr>
                  <?php
                      }
                    }else{
                      echo '<div class="container">
                                <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Ops!</h5>
                                Não há contatos cadastrados !!!
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
                    <th>#</th>
                    <th>Nome</th>
                    <th>Número da matrícula</th>
                    <th>Turma</th>
                  </tr>
                  </tfoot>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
        <!-- Footer-->
        <footer class="footer text-center">
                    
        </footer>
        <!-- Copyright Section-->
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
