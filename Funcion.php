<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php
 function mostrartitulo($men)
 {
 echo "<h1 style=\"text-align:center\">";
 echo $men;
 echo "</h1>";
}
 mostrartitulo("Primer título");
echo "<br>";
mostrartitulo("Segundo título");
 ?>

</body>
</html>