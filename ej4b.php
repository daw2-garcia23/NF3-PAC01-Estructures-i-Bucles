<html>
    <body>
    </body>
</html>
<?php
    session_start();
    $color=$_POST["color"];
    $fuente=$_POST["fuente"];
    $size=$_POST["size"];
    $text=$_POST["text"];
    
    if(isset($_POST["cbox"])){ //si el cbox está seleccionado
        setcookie("color",$color,time()+60);
        setcookie("fuente",$fuente,time()+60);
        setcookie("size",$size,time()+60);
        setcookie("text",$text,time()+60);
        echo "dentro";
        }
        echo "<a href='ej4c.php'>Pulsa aquí</a>";
        ?>

<?php include "header.php";?>