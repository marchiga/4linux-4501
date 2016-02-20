<?php

include_once 'Classes/Medicos.php';
include_once 'Classes/Pacientes.php';
include_once 'Classes/Consultas.php';

// Logica da consulta
$consultas = new Consultas;
$consultas->setNumeroConsulta();
$numeroConsulta = $consultas->getNumeroConsulta();

// Logica do paciente
$pacientes = new Pacientes;
$pacientes->setNomePaciente('4 Linux');
$pacientes->setNumeroConsulta($numeroConsulta);
$impressaoDoutor = $pacientes->getFicha();

// Logica do medico
$medico = new Medicos;
$medico->obtemFicha($impressaoDoutor);
$impressaoDoMedicoEmTela = $medico->lerDadosPaciente();
?>

<html>
	<head>
		<title>::: SISTEMA DE ATENDIMENTO 4 LINUX ::: </title>
	</head>
	<body>
		<table width="100%" border="1">
		<tr height="60" align="center">
			<td>Senhor medico: Joaquim sei la o senhor ira atender o paciente:</td>
		</tr>
		<tr height="60" align="center">
			<td><?php echo $impressaoDoMedicoEmTela?></td>
		</tr>
		</table>
	</body>
</html>
