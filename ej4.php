<html>
 <head>
  <title>Please Log In</title>
  <h1>Ejercicio 4</h1>
 </head>
 <body>
  <form id="formulario" method="post" action="ej4b.php">
    <ol>
        <li>
            <label for="color">Elije el color:</label>
            <input type="color" name="color" id="color">
        </li>
        <li>
            <label for="fuente">Escoge una fuente:</label>
            <input type="text" name="fuente" id="fuente">
        </li>
        <li>
            <label for="size">Escoge el tamaño:</label>
            <input type="number" name="size" id="size"  required minlength="1" maxlength="50">
        </li>
        <li>
            <label for="write">Escriba aquí:</label>
            <input type="text" name="text" id="text">
        </li>
        <input type="checkbox" name="cbox" id="cbox1"> <label>Desea guardar sus datos?</label><br>
        <p>
            <input type="submit" name="submit" value="submit"/>
        </p>
    </ol>
  </form>
 </body>
</html>
<?php 
  
session_start();
   
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;
      
echo"views = ".$_SESSION['views'];
  
?>
<?php include "header.php";?>
