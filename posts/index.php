<?php 
require 'connect.php';
session_start();
if(!$_SESSION['logado']){
    echo "<script>alert('Ambiente restrito. Favor fazer login para acessar.');window.location='login.php'</script>";
}
?>
<html>
	<head>
		<title>LISTAR CAD</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body style="background-color:#93a3e8;">
		<div class="container" style="background-color:#FFF; margin-top:40px;">
			<div class="row">
				<div class="col-md-12">
					<h2 style="margin-top:20px;">LISTAR CADASTRO</h2>
					<a href = "add_cad.php"class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> ADICIONAR NOVO CADASTRO</a>
					<a href="logout.php" class="btn btn-danger">Sair</a>
					<table width="100%" class="table table-hover table-striped table-condensed table-bordered" style="margin-top:20px;">
						<thead>
							<tr>	
								<th>NOME</th>
								<th>SOBRENOME</th>
								<th>CPF</th>
								<th>RA</th>
								<th>RG</th>
								<th>TELEFONE</th>
								<th>NUMERO</th>
								<th>CIDADE</th>
								
								<th>AÇÕES</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$stmt = $mysqli->prepare("SELECT `ID`, `NOME`, `SOBRENOME`,`CPF`,`RA`,`RG`,`TELEFONE`, `NUMERO` , `CIDADE` FROM `cad` ORDER BY `ID` ASC");
							$stmt->execute();
							$stmt->store_result();
							if( $stmt->num_rows > 0 ) {
								$stmt->bind_result($ID, $NOME, $SOBRENOME,$CPF,$RA,$RG, $TELEFONE, $NUMERO ,$CIDADE);
								while( $stmt->fetch() ) {
							?>
							<tr>
								<td><?=$NOME?></td>
								<td><?=$SOBRENOME?></td>
								<td><?=$CPF?></td>
								<td><?=$RA?></td>
								<td><?=$RG?></td>
								<td><?=$TELEFONE?></td>
								<td><?=$NUMERO?></td>
								<td><?=$CIDADE?></td>
								<td align="center">
									<a href="editar_cad.php?ID=<?=$ID?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> EDITAR</a>
									<a href="deletar_cad.php?ID=<?=$ID?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i> EXCLUIR</a> 
								</td>
							</tr>
							<?php } } else {?>
							<tr>
								<td colspan="8" align="center">NÃO HÁ CADASTRO</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			
		</div>
		
	</body>
</html>