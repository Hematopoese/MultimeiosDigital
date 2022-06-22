<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Multimeios Digital | Relatório de livros</title>
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
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Relatório e Livros no sistema</a>
                
                
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
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form action="" method="post" enctype="multipart/form-data">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="nome" type="text" data-sb-validations="required" />
                                <label for="name">Título do Livro</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="autor" type="text" data-sb-validations="required,email" />
                                <label for="email">Autor do Livro</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="volume" type="text"  data-sb-validations="required" />
                                <label for="senha">Volume do Livro</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An senha is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="senha:senha">senha is not valid.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="local" type="text" data-sb-validations="required" />
                                <label for="phone">Local do Livro</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="editora" type="text" data-sb-validations="required" />
                                <label for="senha">Editora do Livro</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An senha is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="senha:senha">senha is not valid.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="ano" type="text" data-sb-validations="required" />
                                <label for="senha">Ano de Publicação</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An senha is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="senha:senha">senha is not valid.</div>
                            </div>
                            
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <div><label for="name">Categoria</label></div>
                            <select name="categoria" class="#">
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
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Submit Button-->
                            <button name="btnCContato" class="btn btn-primary" type="submit">Cadastrar / Realocar</button>
                        </form>
                    </section>
                        <?php
                        include_once('../config/conexao.php');
                        if(isset($_POST['btnCContato'])){
                          $nome=$_POST['nome'];
                          $autor=$_POST['autor'];
                          $volume=$_POST['volume'];
                          $local=$_POST['local'];
                          $editora=$_POST['editora'];
                          $ano=$_POST['ano'];
                          $categoria=$_POST['categoria'];
                          
                              $cadastro="INSERT INTO Livros(nomeLivro,autorLivro,volLivro,localLivro,editLivro,anoLivro,cateLivro) VALUES(:nome,:autor,:volume,:local,:editora,:ano,:categoria)";                   try{
                                $result=$conect-> prepare ($cadastro);
                                $result->bindParam(':nome',$nome,PDO::PARAM_STR);
                                $result->bindParam(':autor',$autor,PDO::PARAM_STR);
                                $result->bindParam(':volume',$volume,PDO::PARAM_STR);
                                $result->bindParam(':local',$local,PDO::PARAM_STR);
                                $result->bindParam(':editora',$editora,PDO::PARAM_STR);
                                $result->bindParam(':ano',$ano,PDO::PARAM_STR);
                                $result->bindParam(':categoria',$categoria,PDO::PARAM_STR);
                                $result->execute();
          
                                $contar=$result->rowCount();
                              if($contar > 0){
                                    echo '<div class="container">
                                              <div class="alert alert-success alert-dismissible">
                                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                              <h5><i class="icon fas fa-check"></i> OK!</h5>
                                              Livro cadastrado com sucesso !!!
                                            </div>
                                          </div>';
                                  }else{
                                    echo '<div class="container">
                                              <div class="alert alert-danger alert-dismissible">
                                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                              <h5><i class="icon fas fa-check"></i> Ops!</h5>
                                              Livro não cadastrado !!!
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
        
        
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Livros</h2>
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
                    <th>Título</th>
                    <th>Autor</th>
                    <th>volume</th>
                    <th>Local</th>
                    <th>Editora</th>
                    <th>Ano</th>
                    <th>Categoria</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $select = "SELECT * FROM Livros ORDER BY idLivro DESC LIMIT 30 ";
                      try{
                        $resultado = $conect->prepare($select);
                        $resultado->execute();
                        $contar = $resultado->rowCount();
                        if($contar > 0){
                          while($show = $resultado->FETCH(PDO::FETCH_OBJ)){   
                    ?>
                    <tr>
                    <td style="vertical-align:middle;"><?php echo $show->idLivro;?></td>
                    <td style="vertical-align:middle;"><?php echo $show->nomeLivro;?></td>
                    <td style="vertical-align:middle;"><?php echo $show->autorLivro;?></td>
                    <td style="vertical-align:middle;"><?php echo $show->volLivro;?></td>
                    <td style="vertical-align:middle;"><?php echo $show->localLivro;?></td>
                    <td style="vertical-align:middle;"><?php echo $show->editLivro;?></td>
                    <td style="vertical-align:middle;"><?php echo $show->anoLivro;?></td>
                    <td style="vertical-align:middle;"><?php echo $show->cateLivro;?></td>


                    <td style="vertical-align:middle; text-align:center">
                      <a href="edit_book.php?id=<?php echo $show->idLivro;?>" class="btn btn-success" title="Editar">Alterar</a>
                      <a href="lenovo.php?idDel=<?php echo $show->idLivro;?>" class="btn btn-danger" title="Alocado" onclick="return confirm('Deseja realmente remover <?php echo $show->nomeLivro;?> do sistema ?')">Remover</a>
                    </td>
                  </tr>
                  <?php
                      }
                    }else{
                      echo '<div class="container">
                                <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Ops!</h5>
                                Não há livros cadastrados !!!
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
                    <th>Título</th>
                    <th>Autor</th>
                    <th>volume</th>
                    <th>Local</th>
                    <th>Editora</th>
                    <th>Ano</th>
                    <th>Categoria</th>
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
        <footer class="footer text-center">
                    
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Obrigado por nos visitar, volte sempre :)</small></div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
