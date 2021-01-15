<?php 

include("con_db.php");

if (isset($_POST["enviar"])) {
    if(strlen($_POST["name"]) >0 && strlen($_POST["nro"]) >0 && strlen($_POST["ciudad"]) >0 && strlen($_POST["modelo"]) >0 && strlen($_POST["email"]) >0 ) {

        $name= trim($_POST["name"]);
        $nro= trim($_POST["nro"]);
        $ciudad= trim($_POST["ciudad"]);
        $modelo= trim($_POST["modelo"]);
        $email= trim($_POST["email"]);
        $fechareg= date("d/m/y");
        $consulta ="INSERT INTO datos(nombre, nro_celular, ciudad, email, modelo_moto, fecha_registro) VALUES ('$name','$nro','$ciudad','$modelo','$email','$fechareg')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            ?>
                <h3> Se a enviado correctamente</h3>
            <?php
            }else{
            ?>
                <h3> Error</h3>
            <?php
    }
    }else{
        ?>
            <h3> Complete los campos</h3>
        <?php
    }
}

if($conex){
    echo "todo ok";
}else{
    echo"error";
}

?>