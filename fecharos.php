<?php
date_default_timezone_set('America/Sao_Paulo');
@$os = $_REQUEST['os'];


// INCLUI A CONEXAO
include ("conexao/conexao.php");
include ("conexao/fecha_conexao.php");
include ("funcao/funcao_select2.php");

$oss = select("os", "*", "WHERE os = '$os'");


?>

<!DOCTYPE html>
<html  >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="SISTEMA ADM 1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="SISTEMA PARA ADMINISTRAÇÃO">
  
  
  <title>SISTEMA ADM 1.0</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/facebook-plugin/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link href="icons/css/all.css" rel="stylesheet">
  
  
  
</head>
<body>
  <section class="menu cid-sdqRo9y9BT" once="menu" id="menu1-1">

<?php include_once("menu.php"); ?>
</section>

<section class="counters5 counters cid-sdqTVWH4Pj" id="counters5-2">
<br><br><br>
    

    

    <div class="container pt-4 mt-2">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2"> <?php echo $oss[0]['os']; ?></h2>
        
        <div class="row justify-content-center">
            
<table style="width: 100%; border: 1px solid #ccc; padding:3%;">
                                  
<tr>
        <th> Numero</td>
        <th> Solicitante</td>
        <th> Data de Abertura </td>
        <th> Serviço</td>
        <th> Responsável</td>
               
</tr>

<tr>
        <td><?php echo $oss[0]['os']; ?></td>
        <td><?php echo $oss[0]['solicitante']; ?></td>
         <td><?php echo $oss[0]['data']; ?></td>
         <td><?php echo $oss[0]['tipo']; ?></td>
         <td><?php echo $oss[0]['responsavel']; ?></td>
       
      </tr>

<tr>
  <th colspan="5" style="text-align: center;">Motivo</th>
</tr>

<tr>
  <td colspan="5" style="text-align: center;"><?php echo $oss[0]['motivo']; ?></td>
</tr>


<tr>
  <th colspan="5" style="text-align: center;">Tem certeza que quer dar baixa na ordem de serviço?</th>
</tr>

<tr>
  <th colspan="5" style="text-align: center;">
    <a href="baixaros.php?os=<?php echo $oss[0]['os']; ?>"><button style="padding: 1%; background-color: green; border: 1px solid green; background-color:rgba(0,255,0,0.3); cursor: pointer; border-radius: 7px;">TENHO CERTEZA</button></a></th>
</tr>

</table>

        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
  <script src="https://apis.google.com/js/plusone.js"></script>
  <script src="assets/facebook-plugin/facebook-script.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>