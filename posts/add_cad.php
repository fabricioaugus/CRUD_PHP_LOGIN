<?php

require 'connect.php';
	//CLICAR PAR ENVIAR
if( isset($_POST['btnSubmit']) ) {

	
	$NOME = $mysqli->real_escape_string( $_POST['NOME'] );
	$SOBRENOME = $mysqli->real_escape_string( $_POST['SOBRENOME'] );
	$CPF = $mysqli->real_escape_string( $_POST['CPF'] );
	$RA = $mysqli->real_escape_string( $_POST['RA'] );
	$RG = $mysqli->real_escape_string( $_POST['RG'] );
	$TELEFONE = $mysqli->real_escape_string( $_POST['TELEFONE'] );
	$NUMERO = $mysqli->real_escape_string( $_POST['NUMERO'] );
	$CIDADE = $mysqli->real_escape_string( $_POST['CIDADE'] );


	

	
	$stmt = $mysqli->prepare("INSERT INTO `cad` (`NOME`, `SOBRENOME`,`CPF`,`RA`,`RG`, `TELEFONE`,`NUMERO`,`CIDADE` ) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt->bind_param( "ssssssss", $NOME, $SOBRENOME,  $CPF, $RA, $RG, $TELEFONE, $NUMERO, $CIDADE );

	if( $stmt->execute() ) {
		$alert_message = "SALVANDO O CADASTRO ";
	} else {
		$alert_message = "HÁ ERRO NÃO TENTAR NOVAMENTE ";
	}

	//FECHAR STMT
	$stmt->close();

	// FECHAR A CONEXÃO COM BANCO DE DADOS 
	$mysqli->close();

}


?>
<html>
	<head>
		<title>ADICIONAR NOVO CADASTRO</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<table width="70%" cellpadding="2" cellspacing="2" align="center" style="margin-top:20px;">
			<tr>
				<td align="center"><h2>ADICIONAR NOVO CADASTRO</h2></td>
			</tr>
			<tr>
				<td>
					<?php 
					if( isset( $alert_message ) AND !empty( $alert_message )) {
						echo "<div class='alert alert-success'>".$alert_message."</div>";
					}
					?>
					<form method="post">
						<table width="60%" cellpadding="5" cellspacing="5" align="center">
						<tr>
							<td style="width:30%">NOME:</td>
							<td><input required type="text" class="form-control" name="NOME" style="width:100%;" placeholder="nome"></td>
						</tr>
						<tr>
							<td style="width:30%">SOBRENOME:</td>
							<td><input required type="text" class="form-control" name="SOBRENOME" style="width:100%;" placeholder="sobrenome"></td>
						</tr>
						<tr>
							<td style="width:30%">CPF:</td>
							<td><input required type="number" class="form-control cpf-mask" name="CPF" style="width:100%;" placeholder="ex.: 000.000.000-00"></td>
						</tr>
						<tr>
							<td style="width:30%">RA:</td>
							<td><input required type="text" class="form-control" name="RA" style="width:100%;" placeholder="ex.: 000.000.000"></td>
						</tr>
						<tr>
							<td style="width:30%">RG:</td>
							<td><input required type="text" class="form-control" name="RG" style="width:100%;" placeholder="ex.: 00.000.000"></td>
						</tr>
						<tr>
							<td style="width:30%">TELEFONE:</td>
							<td><input required type="text" class="form-control " name="TELEFONE" style="width:100%;" placeholder="ex.: (00)0000-0000"></td>
						</tr>
						<tr>
							<td style="width:30%">NUMERO:</td>
							<td><input required type="number" class="form-control" name="NUMERO" style="width:100%;" placeholder="ex.: 000"></td>
						</tr>
						<tr>
							<td style="width:30%">CIDADE:</td>
							<td><input required type="text" class="form-control" name="CIDADE" style="width:100%;" placeholder="ex.: São Paulo"></td>
						</tr>
						
						
						<tr>
							<td></td>
							<td>
								<button type="submit" name="btnSubmit" class="btn btn-primary">Enviar</button>
								<a href="index.php" class="btn btn-info">voltar para lista</a>
							</td>
						</tr>
						</table>
					</form>
				</td>
			</tr>
		</table>
	</body>
</html>