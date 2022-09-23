<?php 
    function retornarConexion(){
        $server="localhost";
        $usuario="root";
        $clave="123456";
        $base="base1";
        $con=mysqli_connect($server,$usuario,$clave,$base,"8111") or die("problemas");
        return $con;
    }

    $con = retornarConexion();

    if ($con) {
        echo "ok";
    }
    else{
        echo "problem";
    }
?>