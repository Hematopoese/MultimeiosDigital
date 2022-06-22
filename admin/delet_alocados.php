<?php
include_once('../config/conexao.php');
if(isset($_GET['idNy'])){
	$id = $_GET['idNy'];
	$delete = "DELETE FROM alocados WHERE livro=:id";
	try{
		$resultDel = $conect->prepare($delete);
		$resultDel->bindParam(':id',$id,PDO::PARAM_INT);
		$resultDel->execute();
		//Retorno dinâmico a página de relatório
		$contar = $resultDel->rowCount();
		if($contar>0){
			header("Location: alocados.php");
		}else{
			header("Location: alocados.php");
		}
	}catch(PDOException $e){
        echo "<strong>ERRO DE DELETE: </strong>".$e->getMessage();
    }
}