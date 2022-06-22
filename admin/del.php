
<?php
include_once('../config/conexao.php');
if(isset($_GET['idDel'])){
	$id = $_GET['idDel'];
	$delete = "DELETE FROM tbaluno WHERE idAluno=:id";
	try{
		$resultDel = $conect->prepare($delete);
		$resultDel->bindParam(':id',$id,PDO::PARAM_INT);
		$resultDel->execute();
		//Retorno dinâmico a página de relatório
		$contar = $resultDel->rowCount();
		if($contar>0){
			header("Location: users.php");
		}else{
			header("Location: users.php");
		}
	}catch(PDOException $e){
        echo "<strong>ERRO DE DELETE: </strong>".$e->getMessage();
    }
}
//APAGAR DO RELATÓRIO DE ALUNOS//