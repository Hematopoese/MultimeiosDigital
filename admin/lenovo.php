<?php
include_once('../config/conexao.php');
if(isset($_GET['idDel'])){
	$id = $_GET['idDel'];
	$delete = "DELETE FROM livros WHERE idLivro=:id";
	try{
		$resultDel = $conect->prepare($delete);
		$resultDel->bindParam(':id',$id,PDO::PARAM_INT);
		$resultDel->execute();
		//Retorno dinâmico a página de relatório
		$contar = $resultDel->rowCount();
		if($contar>0){
			header("Location: relatorio.php");
		}else{
			header("Location: relatorio.php");
		}
	}catch(PDOException $e){
        echo "<strong>ERRO DE DELETE: </strong>".$e->getMessage();
    }
}
//Apagar do relatório de livros//