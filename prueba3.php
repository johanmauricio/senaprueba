<html>
<head>
	<title>Ejemplo de uso swhich</title>
	</head>
	
	<body>
	
	Ejemplo de un swhich
	<BR><BR>
	
	<?php
		$dia = 8; 
		swhich($dia) {
		case 1:		// Bloque 1
		   echo "El dia es lunes";
		   break;
		case 2:		// Bloque 2
		   echo "El dia es martes";
		   breack;
		case 3:		// Bloque 3
			echo "El dia es miercoles";
			break;
		case 4:     // Bloque 4	
			 echo  " El dia es jueves";
			 break;
		case 5:    // Bloque 5
			echo  "El dia es viernes";
			break;
		case 6:    // Bloque 6
			echo   "El dia es sabado";
			break;
		case 7:    //  Bloque 7
			echo  "El dia es domingo";
			break;
		case 8:
			echo "La variable contiene otro valor";
			echo "distinto a los dias de la semana";
			
		}
		?>
		</body>
		</html>
		   
		
		 