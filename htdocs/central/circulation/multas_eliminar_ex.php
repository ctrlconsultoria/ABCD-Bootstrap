<?php
session_start();
// ELIMINAR MULTAS
if (!isset($_SESSION["permiso"])){
	header("Location: ../common/error_page.php") ;
}
if (!isset($_SESSION["permiso"]["CENTRAL_ALL"]) and !isset($_SESSION["permiso"]["CIRC_CIRCALL"])  and (!isset($_SESSION["permiso"]["CIRC_DELSUS"])or !isset($_SESSION["permiso"]["CIRC_DELFINE"]))){
}

if (!isset($_SESSION["lang"]))  $_SESSION["lang"]="en";
include("../common/get_post.php");
//foreach ($arrHttp as $var=>$value)  echo "$var=$value<br>";die;
include("../config.php");

$lang=$_SESSION["lang"];

include("../lang/prestamo.php");

function ProcesarRegistro($Accion,$Mfn){
	switch ($Accion){
			$Accion="2";
			break;
		case "C":
			$Accion="1";
			break;
	$ValorCapturado="0010$Accion";
	$ValorCapturado=urlencode($ValorCapturado);
	$IsisScript=$xWxis."actualizar.xis";
	$query = "&base=suspml&cipar=$db_path"."par/suspml.par&login=".$_SESSION["login"]."&Mfn=".$Mfn."&Opcion=actualizar&ValorCapturado=".$ValorCapturado;
    include("../common/wxis_llamar.php");


function EliminarRegistro($Mfn){
	$IsisScript=$xWxis."eliminarregistro.xis";
	include("../common/wxis_llamar.php");

$Mfn=explode('|',$arrHttp["Mfn"]);
foreach ($Mfn as $value) {
		switch ($arrHttp["Accion"]){
				EliminarRegistro($value);
				break;
			case "C":  //CANCEL
				ProcesarRegistro("C",$value);
				break;
			case "P":   //PAY
				ProcesarRegistro("P",$value);
				break;


    }
}
if (isset($arrHttp["reserve"])){
header("Location: usuario_prestamos_presentar.php?base=users&usuario=".$arrHttp["usuario"].$reserve);
?>