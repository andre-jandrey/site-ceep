<?php
  session_start();

  	if(!isset($_SESSION['usuario'])){
		header("location:../login");
	}
	require_once("convenio.class.php");
	require_once("estagio.class.php");
	require_once("empresa.class.php");
	require_once("aluno.class.php");

	require_once("professor.class.php");
	require_once("../util.php");

	$c = new Convenio();
	$a = new Aluno();
	$e = new Empresa();
	$es = new Estagio();
	//$s = new Supervisor();
	$p = new Professor();

	$max = $es->getMaxId();

	if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['codigo'])){
		$es->__set('idestagio',$_GET['codigo']);
		$es->__set('ano',$_GET['ano']);
		$es->carregar();  

		//echo "carregou o coidog é:" .$es->__get("idestagio");
	}


?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gerar termo de compromisso</title>

		<link href="css/chosen.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<script src="js/jquery.min.js"></script>
	 
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.maskedinput.min.js"></script>
		<script src="js/chosen.jquery.js"></script>
		
		<script type="text/javascript">
  $(document).ready(function() {
   $('.chosen-select').chosen({
    //disable_search_threshold: 10,
    no_results_text: "Oops, nada encontrado!",
    width: "100%"
  }); 

  } );
</script>
	</head>
	<body>
	<?php
	include("menu.php");
	?>
	<div id="main" class="container-fluid">
					<br>
			<br><h3 class="page-header">Gerar termo de compromisso</h3>
			<form action="" method="post">
				<!-- 1° linha do formulário -->
				<div class="row">
					<div class="form-group col-md-2">
						<label for="idempresa">NÚMERO:</label>
						<input type="text" class="form-control"  name="numero_termo" value="<?php if(isset($_GET['codigo'])){
								echo $es->__get("idestagio")."/".	$es->__get('ano');
							}else{
								echo ++$max."/".Date("Y"); 
							}

						?>" required>

					</div>	
					<div class="form-group col-md-4">
						<label for="idconvenio">SELECIONE A EMPRESA:</label>
						<select class="form-control chosen-select" name="idconvenio">
						<?php
							$dados = $c->listarEmpresas();
							foreach($dados as $linha){
								echo "<option "; 
								if ($es->__get("idconvenio")==$linha['idconvenio']){echo "selected";}

								echo " value='".$linha['idconvenio']."/".$linha['ano']."'>".$linha['nome']."</option>";
							}


						?> 
						</select>
					</div>
					<div class="form-group col-md-3">
						<label for="setor">SETOR:</label>
						<input type="text" class="form-control"  name="setor" value="<?php echo $es->__get('setor');?>" required>
					</div>
					<div class="form-group col-md-3">
						<label for="id">SUPERVISOR</label>
						<input type="text" class="form-control"  name="supervisor" value="<?php echo $es->__get('idsupervisor');?>" required>

						
					</div>
				
					</div>
					<div class="row">
						<div class="form-group col-md-4">
						<label for="idempresa">SELECIONE O ALUNO:</label>
						<select class="form-control chosen-select" name="idaluno">
						<?php
							$dados = $a->listarAlunosComProfessor();
							foreach($dados as $linha){
								echo "<option "; 
								if ($es->__get("idestagiario")==$linha['idaluno']){echo "selected";}

								echo " value='".$linha['idaluno']."'>".$linha['nome']."</option>";
							}


						?> 
						</select>
					</div>
				
					<div class="form-group col-md-2">
						<label for="data_inicio">DATA DE INÍCIO:</label>
						<input type="date" class="form-control"  name="data_inicio" value="<?php echo $es->__get('data_inicio');?>" required>
					</div>
					<div class="form-group col-md-2">
						<label for="data_FIM">DATA DE INÍCIO:</label>
						<input type="date" class="form-control"  name="data_fim" value="<?php echo $es->__get('data_fim');?>" required>
					</div>
					<div class="form-group col-md-2">
						<label for="carga_horaria">CARGA HORÁRIA:</label>
						<input type="number" class="form-control"  name="carga_horaria" value="<?php echo $es->__get('carga_horaria');?>" required>
					</div>
					<div class="form-group col-md-2">
						<label for="idempresa">N° APÓLICE SEGURO:</label>
						<input type="text" class="form-control"  name="numero_apolice" value="<?php echo $es->__get('apolice');?>" required>

					</div>
					</div>
	
				<!-- 3° linha do formulário -->
				<div class="row">
					<div class="form-group col-md-3">
						<label for="">&nbsp;</label>
						<a href='estagio.form.php'><input class='btn btn-primary form-control' type='button' value='Novo'></a>
					</div><div class="form-group col-md-3">
						<label for="">&nbsp;</label>
						<input class="btn btn-primary form-control" type="submit" name="gravar" value="Gravar">
						</div>
							<div class="form-group col-md-3">
						<label for="">&nbsp;</label>
						<input class="btn btn-primary form-control" type="submit" name="alterar" value="Alterar">
						</div>
							<div class="form-group col-md-3">
						<label for="">&nbsp;</label>
						<input class="btn btn-primary form-control" formnovalidate="formnovalidate" type="submit" name="excluir" value="Excluir">
					</div>

				</div>
				
					<div id="msg">
						
					</div>

	<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){

			$convenio = explode("/",$_POST['idconvenio']);
	 		$c->__set('idconvenio',$convenio[0]);
	 		$c->__set('ano',$convenio[1]);
      $c->carregar();

      $e->__set('idempresa',$c->__get('idempresa'));
      $e->carregar();
			
			$a->__set('idaluno',$_POST['idaluno']);
			$a->carregar();

			$numero_termo = explode("/",$_POST['numero_termo']);
      $es->__set("idestagio",$numero_termo[0]);
      $es->__set("ano",$numero_termo[1]);
     
      $es->__set("idconvenio",$c->__get("idconvenio"));
      $es->__set("convenioano",$c->__get("ano"));
      $es->__set("idestagiario",$a->__get("idaluno"));
      $es->__set("idsupervisor",$_POST['supervisor']);
     

      $p->__set("idprofessor",$a->__get("idprofessor_supervisor"));
      $p->carregar();
   
      $es->__set("idresponsavel",$p->__get("nome"));//nome do professor
      $es->__set("rg_professor",$p->__get("rg"));//rg do professor

      $es->__set("curso",$a->__get("curso"));
      $es->__set("setor",$_POST["setor"]);
      //$es->__set("rg_professor",$_POST["rg_professor"]);
      $es->__set("numero_apolice", $_POST['numero_apolice']);
      $es->__set("data_inicio",$_POST["data_inicio"]);
      $es->__set("data_fim",$_POST["data_fim"]);
      $es->__set("carga_horaria",$_POST["carga_horaria"]);
      $es->__set("apolice",$_POST["numero_apolice"]);

			$resposta = "NULL"	;		
			if(isset($_POST['alterar'])){
				$resposta = $es->alterar();	
			}

			if(isset($_POST['excluir'])){
				$resposta = $es->excluir();
			}

			if(isset($_POST['gravar'])){
				$resposta = $es->gravar();
			}



			echo "<h2>". $resposta."</h2>";
			
		}
	?>
	
				</div>
				<table class="table table-striped table-hover table-condensed">
				<tr>
					<th>CÓDIGO</th>
					<th>NOME ALUNO</th>
					<th>EMPRESA</th>
					<th>DATA INICIO</th>
					<th>DATA FIM</th>
					<th>CARGA HORARIA</th>
				</tr>
	<?php

	//if(isset($_GET['idempresa']) && $_GET['idempresa']>0){
	//	$dados = $c->find($_GET['idempresa']);
	//}else{
		$dados = $es->listar();  
	//}


	if($dados->rowCount()>0){

		foreach($dados as $linha){
		 echo "<tr style='cursor:pointer' onclick=\"location.href='estagio.form.php?codigo=".$linha['idestagio']."&ano=".$linha['ano']."'\"><td>";
			echo $linha ['idestagio']. "/".$linha ['ano'];
			echo "</td><td>";
			echo $linha ['nome_aluno'];
			echo "</td><td>";
			echo $linha ['nome_empresa'];
			echo "</td><td>";
			echo Util::inverteData($linha ['data_inicio']);
			echo "</td><td>";
			echo Util::inverteData($linha ['data_fim']);		
			echo "</td><td>";
			echo $linha ['carga_horaria'];
			
			echo "</td><td>";
			echo "<a href='estagio.termo.php?codigo=".$linha['idestagio']."&ano=".$linha['ano']."'><input class='btn btn-primary form-control' type='button' value='Imprimir'></a>";
			echo "</td></tr></a>";
		}
	}
	?>
	</table>
			</form>
		</div>
		   <script src="js/jquery-ui.js"></script>
		   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">