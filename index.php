<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Funciones_en_php</title>
</head>

<body>

  <?php
   function mostrartitulo($men)
   {
	   echo "<h1 style=\"text-align:center\">";
	   echo $men;
	   echo "</h1>";
   }
   mostrartitulo("Primer titulo");
   echo "<br>";
   mostrartitulo("Segundo titulo");
  ?>
</body>
</html>