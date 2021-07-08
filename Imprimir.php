<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Su aporte es bendición</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/ico" href="css/favicon.ico">
    <link rel="shortcut icon" href="css/favicon.ico" type="image/vnd.microsoft.icon">

</head>
<body class="container">
<form method="POST" action="Imprimir.php">
    <div class="form-group row ">

<?php
$nombre=$_POST['nombre'];
$dni=$_POST['dni'];
$direccion=$_POST['direccion'];
$cp=$_POST['cp'];
$poblacion=$_POST['poblacion'];
$provincia=$_POST['provincia'];
$mail=$_POST['mail'];
$fono=$_POST['fono'];
$fax=$_POST['fax'];
$monto_letras=$_POST['monto_letras'];
$monto_numeros=$_POST['monto_numeros'];
$period=$_POST['period'];
$cta_dom=$_POST['cta_dom'];
$bco=$_POST['bco'];
$dir_bco=$_POST['dir_bco'];
$num_cta=$_POST['num_cta'];
$fecha=$_POST['fecha'];
$rBAyuda=$_POST['rBAyuda'];
$respuesta="";
$cantColab=$_POST['cantColab'];
$cantApadr=$_POST['cantApadr'];

switch ($rBAyuda)
{
    case "como socio":
        $respuesta="";
        break;
    case "como colaborador":
        $respuesta="Deseo asociarme como COLABORADOR/A en becas de estudio y alimentación, por lo que 
        abonaré la cantidad de ". $cantColab.".";
        break;
    case "en apadrinar a un niño":
        $respuesta="Deseo apadrinar a un niño, por lo que abonaré la cantidad de ". $cantApadr.".";
        break;

}


?>

<div class="form-group row txtImprimir backImprimir">
    <div class="col-lg-12"  style="padding-top: 5px">
        <div class="form-row ">


            <div class="col-lg-9 col-md-10 col-sm-9"> <p style="font-size:25px; text-align: center">Deseo Participar en Misión Esperanza <?php echo $rBAyuda?></p></div>





            <div class="col-lg-3 col-md-2 hidden-xs hidden-sm " style=" text-align: center""><img src="images/sello_me.png" width="100%" ></div>
            <div class="col-sm-3 hidden-lg hidden-md" style=" text-align: center""><img src="images/sello_me.png" width="30%" ></div>
            <div class ="col-md-12">


                <div style="font-size: xx-large" class="hidden-xs">No olvide revisar los datos e imprimir<br> </div>
                <div style="font-size: medium">Por favor enviar firmado a <b>Conchita Lázaro.</b> a nuestra dirección.<br></div>

            <div class ="col-md-12">
        <div class="col-sm-6">
           <table class="table">
               <tbody>
               <thead>
               <th></th>
               <td><b>DATOS PERSONALES</b></td>
               <td></td>
               </thead>
                <tr>
                    <th></th>
                    <td><b>Nombre Completo:</b></td>
                    <td><?php echo $nombre?></td>
                </tr>
                <tr>
                    <th></th>
                    <td><b>DNI:</b> </td>
                    <td><?php echo $dni?></td>
                </tr>
                <tr>
                    <th></th>
                    <td><b>Dirección: </b></td>
                    <td><?php echo $direccion?></td>
                </tr>
                <tr>
                    <th></th>
                    <td><b>Codigo Postal:</b></td>
                    <td><?php echo $cp?></td>
                </tr>
                <tr>
                    <th></th>
                    <td><b>Población:</b></td>
                    <td><?php echo $poblacion?></td>
                </tr>
                <tr>
                    <th></th>
                    <td><b>Provincia:</b></td>
                    <td><?php echo $provincia?></td>
                </tr>
                <tr>
                    <th></th>
                    <td><b>Mail:</b></td>
                    <td><?php echo $mail?></td>
                </tr>
                <tr>
                    <th></th>
                    <td><b>Fono:</b></td>
                    <td><?php echo $fono?></td>
                </tr>
               <tr>
                   <th></th>
                   <td><b>Fax:</b></td>
                   <td><?php echo $fax?></td>
               </tr>
                </tbody>
            </table>
        </div>


                <div class="col-sm-6">
                    <h3>Muy señores míos:</h3>
                    <p style="font-size: large; font-weight: bold"><?php echo $respuesta?><br></p>
                    <p style="font-size: medium">Les ruego que a partir del día <b><?php echo $fecha?></b>, carguen en mi cuenta la cantidad en letra, de
                   <b><?php echo $monto_letras?> euros</b>, en cifra <b><?php echo $monto_numeros?>&nbsp;€</b>, Con periodicidad
                    <b><?php echo $period?></b>.<br>
                   La cuenta de domiciliación es <b><?php echo $cta_dom?></b>, en banco o caja de ahorros <b><?php echo $bco?></b>
                        con dirección en <b><?php echo $dir_bco?></b> con número de cuenta <b><?php echo $num_cta?></b>.<br>

                   Agradeciendo su atención y deseándonles Paz.
                   <br>
                   En <?php echo $provincia?>,</p>

                </div>
                <div class="col-sm-3" style="padding-top: 60px">
                    ____________________________<br>
                    Firme Aquí</div>
</div>
        <div style="text-align: right" class="col-md-12 hidden-xs ">
            <input type='button' class="btn btn-success" onclick='window.print();' value='Para Imprimir Presione Aquí' />
            <a href="misionmesp.html#ayuda"><input type='button' class="btn btn-success" value='Volver' /></a>




        </div>
</form>
</div>

</body>



</html>