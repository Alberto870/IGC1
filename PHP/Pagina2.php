
<html>
<head>
<link rel="stylesheet" type="text/css" href="diseno.css">
<title>Pruebas</title>
</head>

 <div id="global">
 <center>
 <h1>FORMATO</h1>
 <br><br>
<?php
$Cintura=$_REQUEST['Cintura'];
$Cuello=$_REQUEST['Cuello'];
$Estatura=$_REQUEST['Estatura'];
$Cadera=$_REQUEST['Cadera'];
$Peso=$_REQUEST['Peso'];
$Edad=$_REQUEST['Edad'];


if ($_REQUEST['Sexo']=="masculino") 
{
  $Aux=1.0324-0.19077 * (log10($Cintura- $Cuello)) + 0.15456*(log10($Estatura));
  $pgc=(495/$Aux)-450;

  $pgc=round($pgc,PHP_ROUND_HALF_DOWN);

  


if ($Edad>=19 && $Edad<=24) {
	if ($pgc<=2) {
		 $condicion="Esencial";
	}
		 if (($pgc>2) && ($pgc<=6)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>6) && ($pgc<=9)) {
			 $condicion="Exelente";
		}
		 if (($pgc>9) && ($pgc<=15)) {
			 $condicion="Bueno";
		}
		if (($pgc>15) && ($pgc<=19)) {
			 $condicion="Estandar";
		}
		 if (($pgc>19) && ($pgc<=23)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>23) {
			 $condicion="Obesidad";
		}
		
			
	}

if ($Edad>=25 && $Edad<=29) {
	if ($pgc<=2) {
		 $condicion="Esencial";
	}
		 if (($pgc>2) && ($pgc<=6)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>6) && ($pgc<=9)) {
			 $condicion="Exelente";
		}
		 if (($pgc>9) && ($pgc<=15)) {
			 $condicion="Bueno";
		}
		if (($pgc>15) && ($pgc<=19)) {
			 $condicion="Estandar";
		}
		 if (($pgc>19) && ($pgc<=23)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>23) {
			 $condicion="Obesidad";
		}
		
			
	}
if ($Edad>=30 && $Edad<=34) {
	if ($pgc<=2) {
		 $condicion="Esencial";
	}
		 if (($pgc>2) && ($pgc<=6)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>6) && ($pgc<=9)) {
			 $condicion="Exelente";
		}
		 if (($pgc>9) && ($pgc<=15)) {
			 $condicion="Bueno";
		}
		if (($pgc>15) && ($pgc<=19)) {
			 $condicion="Estandar";
		}
		 if (($pgc>19) && ($pgc<=23)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>23) {
			 $condicion="Obesidad";
		}
		
			
	}

if ($Edad>=35 && $Edad<=39) {
	if ($pgc<=2) {
		 $condicion="Esencial";
	}
		 if (($pgc>2) && ($pgc<=6)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>6) && ($pgc<=9)) {
			 $condicion="Exelente";
		}
		 if (($pgc>9) && ($pgc<=15)) {
			 $condicion="Bueno";
		}
		if (($pgc>15) && ($pgc<=19)) {
			 $condicion="Estandar";
		}
		 if (($pgc>19) && ($pgc<=23)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>23) {
			 $condicion="Obesidad";
		}
		
			
	}

if ($Edad>=40 && $Edad<=44) {
	if ($pgc<=2) {
		 $condicion="Esencial";
	}
		 if (($pgc>2) && ($pgc<=6)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>6) && ($pgc<=9)) {
			 $condicion="Exelente";
		}
		 if (($pgc>9) && ($pgc<=15)) {
			 $condicion="Bueno";
		}
		if (($pgc>15) && ($pgc<=19)) {
			 $condicion="Estandar";
		}
		 if (($pgc>19) && ($pgc<=23)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>23) {
			 $condicion="Obesidad";
		}
		
			
	}

if ($Edad>=45 && $Edad<=49) {
	if ($pgc<=2) {
		 $condicion="Esencial";
	}
		 if (($pgc>2) && ($pgc<=6)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>6) && ($pgc<=9)) {
			 $condicion="Exelente";
		}
		 if (($pgc>9) && ($pgc<=15)) {
			 $condicion="Bueno";
		}
		if (($pgc>15) && ($pgc<=19)) {
			 $condicion="Estandar";
		}
		 if (($pgc>19) && ($pgc<=23)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>23) {
			 $condicion="Obesidad";
		}
		
			
	}

if ($Edad>=50 && $Edad<=54) {
	if ($pgc<=2) {
		 $condicion="Esencial";
	}
		 if (($pgc>2) && ($pgc<=6)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>6) && ($pgc<=9)) {
			 $condicion="Exelente";
		}
		 if (($pgc>9) && ($pgc<=15)) {
			 $condicion="Bueno";
		}
		if (($pgc>15) && ($pgc<=19)) {
			 $condicion="Estandar";
		}
		 if (($pgc>19) && ($pgc<=23)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>23) {
			 $condicion="Obesidad";
		}
		
			
	}

if ($Edad>=55 && $Edad<=59) {
	if ($pgc<=2) {
		 $condicion="Esencial";
	}
		 if (($pgc>2) && ($pgc<=6)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>6) && ($pgc<=9)) {
			 $condicion="Exelente";
		}
		 if (($pgc>9) && ($pgc<=15)) {
			 $condicion="Bueno";
		}
		if (($pgc>15) && ($pgc<=19)) {
			 $condicion="Estandar";
		}
		 if (($pgc>19) && ($pgc<=23)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>23) {
			 $condicion="Obesidad";
		}
		
			
	}

if ($Edad>60) {
	if ($pgc<=2) {
		 $condicion="Esencial";
	}
		 if (($pgc>2) && ($pgc<=6)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>6) && ($pgc<=9)) {
			 $condicion="Exelente";
		}
		 if (($pgc>9) && ($pgc<=15)) {
			 $condicion="Bueno";
		}
		if (($pgc>15) && ($pgc<=19)) {
			 $condicion="Estandar";
		}
		 if (($pgc>19) && ($pgc<=23)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>23) {
			 $condicion="Obesidad";
		}
		
			
	}							
	

}

if ($_REQUEST['Sexo']=="femenino") 
{
  $Aux=1.29579-0.35004 * (log10($_REQUEST['Cintura']+$_REQUEST['Cadera']-$_REQUEST['Cuello'])) + 0.221*(log10($_REQUEST['Estatura']));
  $pgc=(495/$Aux)-450;

  $pgc=round($pgc,PHP_ROUND_HALF_DOWN);

  if ($Edad>=19 && $Edad<=24) {
	if ($pgc<=7) {
		 $condicion="Esencial";
	}
		 if (($pgc>7) && ($pgc<=12)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>12) && ($pgc<=15)) {
			 $condicion="Exelente";
		}
		 if (($pgc>15) && ($pgc<=20)) {
			 $condicion="Bueno";
		}
		if (($pgc>20) && ($pgc<=25)) {
			 $condicion="Estandar";
		}
		 if (($pgc>25) && ($pgc<=30)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>30) {
			 $condicion="Obesidad";
		}
		
			
	}

	if ($Edad>=25 && $Edad<=29) {
	
	if ($pgc<=7) {
		 $condicion="Esencial";
	}
		 if (($pgc>7) && ($pgc<=12)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>12) && ($pgc<=15)) {
			 $condicion="Exelente";
		}
		 if (($pgc>15) && ($pgc<=20)) {
			 $condicion="Bueno";
		}
		if (($pgc>20) && ($pgc<=25)) {
			 $condicion="Estandar";
		}
		 if (($pgc>25) && ($pgc<=30)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>30) {
			 $condicion="Obesidad";
		}
			
	}

	if ($Edad>=30 && $Edad<=34) {
	
	if ($pgc<=7) {
		 $condicion="Esencial";
	}
		 if (($pgc>7) && ($pgc<=12)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>12) && ($pgc<=15)) {
			 $condicion="Exelente";
		}
		 if (($pgc>15) && ($pgc<=20)) {
			 $condicion="Bueno";
		}
		if (($pgc>20) && ($pgc<=25)) {
			 $condicion="Estandar";
		}
		 if (($pgc>25) && ($pgc<=30)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>30) {
			 $condicion="Obesidad";
		}
			
	}

	if ($Edad>=35 && $Edad<=39) {
	
	if ($pgc<=7) {
		 $condicion="Esencial";
	}
		 if (($pgc>7) && ($pgc<=12)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>12) && ($pgc<=15)) {
			 $condicion="Exelente";
		}
		 if (($pgc>15) && ($pgc<=20)) {
			 $condicion="Bueno";
		}
		if (($pgc>20) && ($pgc<=25)) {
			 $condicion="Estandar";
		}
		 if (($pgc>25) && ($pgc<=30)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>30) {
			 $condicion="Obesidad";
		}
			
	}

	if ($Edad>=40 && $Edad<=44) {
	
	if ($pgc<=7) {
		 $condicion="Esencial";
	}
		 if (($pgc>7) && ($pgc<=12)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>12) && ($pgc<=15)) {
			 $condicion="Exelente";
		}
		 if (($pgc>15) && ($pgc<=20)) {
			 $condicion="Bueno";
		}
		if (($pgc>20) && ($pgc<=25)) {
			 $condicion="Estandar";
		}
		 if (($pgc>25) && ($pgc<=30)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>30) {
			 $condicion="Obesidad";
		}
			
	}

	if ($Edad>=45 && $Edad<=49) {
	
	if ($pgc<=7) {
		 $condicion="Esencial";
	}
		 if (($pgc>7) && ($pgc<=12)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>12) && ($pgc<=15)) {
			 $condicion="Exelente";
		}
		 if (($pgc>15) && ($pgc<=20)) {
			 $condicion="Bueno";
		}
		if (($pgc>20) && ($pgc<=25)) {
			 $condicion="Estandar";
		}
		 if (($pgc>25) && ($pgc<=30)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>30) {
			 $condicion="Obesidad";
		}
			
	}
	if ($Edad>=50 && $Edad<=54) {
	
	if ($pgc<=7) {
		 $condicion="Esencial";
	}
		 if (($pgc>7) && ($pgc<=12)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>12) && ($pgc<=15)) {
			 $condicion="Exelente";
		}
		 if (($pgc>15) && ($pgc<=20)) {
			 $condicion="Bueno";
		}
		if (($pgc>20) && ($pgc<=25)) {
			 $condicion="Estandar";
		}
		 if (($pgc>25) && ($pgc<=30)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>30) {
			 $condicion="Obesidad";
		}
			
	}
	if ($Edad>=55 && $Edad<=59) {
	
	if ($pgc<=7) {
		 $condicion="Esencial";
	}
		 if (($pgc>7) && ($pgc<=12)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>12) && ($pgc<=15)) {
			 $condicion="Exelente";
		}
		 if (($pgc>15) && ($pgc<=20)) {
			 $condicion="Bueno";
		}
		if (($pgc>20) && ($pgc<=25)) {
			 $condicion="Estandar";
		}
		 if (($pgc>25) && ($pgc<=30)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>30) {
			 $condicion="Obesidad";
		}
			
	}

	if ($Edad>60) {
	
	if ($pgc<=7) {
		 $condicion="Esencial";
	}
		 if (($pgc>7) && ($pgc<=12)) {
			 $condicion="Atleta"; 
		}

		 if (($pgc>12) && ($pgc<=15)) {
			 $condicion="Exelente";
		}
		 if (($pgc>15) && ($pgc<=20)) {
			 $condicion="Bueno";
		}
		if (($pgc>20) && ($pgc<=25)) {
			 $condicion="Estandar";
		}
		 if (($pgc>25) && ($pgc<=30)) {
			 $condicion="Sobre peso";
		}
		if ($pgc>30) {
			 $condicion="Obesidad";
		}
			
	}
}

?>
<body>
<div id="resultado">
  <p>RESULTADO</p>
<?php
   echo $_REQUEST['Nombre']. " su indice de masa corporal es de: ". $pgc ." el cual esta situado en el rango de: ". $condicion . " para personas de su sexo";
	echo "<br><br>"; 
	echo "Edad: ".$Edad;
	echo "<br><br>";
	echo "Peso: ".$Peso;
	echo "<br>";
	echo "Estatura: ".$Estatura;
	echo "<br>";
	echo "Cintura: ".$Cintura;
	echo "<br>";
	Echo "Cuello: ".$Cuello;
?>	



</center>
</div>
</body>
</html>