<?php 

	include 'conexao.php';
	$dados=$conn->query("SELECT * FROM clientes"); 
	$dados->execute();

	try {

		$pes=$_POST['pesquisa'];

		$count=0;
		while ($pes > 0) {
			
			switch ($pes) {
				
				case $pes:
					header('Location:cliente.php?esc='.$pes);
					break;
				
				default:
					header('Location:cliente.php?esc='.$pes);
					break;
			}

			echo "Selecionado: ".$pes;
			break;
			$count++;
		}


		


	

	} catch(PDOException $e) {

		header('Location: cliente.php?msg='.$res);

		echo "Falha na pesquisa. Erro: ".getMessage();

	}

?>

<!-- 
$pes=$_POST['pesquisa'];

		switch ($pes) {
			case 'n':
				header('Location:cliente.php?esc='.$pes);
				break;
			case 'r':
				header('Location:cliente.php?esc='.$pes);
				break;
			
			default:
				header('Location:cliente.php?esc='.$pes);
				break;
		}
-->