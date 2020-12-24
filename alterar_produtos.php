<?php
// INCLUI A CONEXAO
include ("conexao/conexao.php");
include ("conexao/fecha_conexao.php");
include ("funcao/funcao_select2.php");

$modo = $_REQUEST['modo'];
$id_produto =  $_REQUEST['id'];
$pd = select("produtos", "*", "WHERE id = '$id_produto'" , "ORDER BY produto");


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
  <link href="icons/css/all.css" rel="stylesheet">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <script src="https://kit.fontawesome.com/01416f2abe.js" crossorigin="anonymous"></script>
  
  <style >

table{ width: 100%; border: 1px solid #000;}
tr{border: 1px solid #000;}
th{ padding: 1%; font-size: .4em; background-color: #000; color: #fff;}
td{font-size: .35em; padding: 1%; font-weight: 500;}
.c { background-color: #ccc; }


  </style>

</head>
<body >
  <section class="menu cid-sdqRo9y9BT" once="menu" id="menu1-1">

    
<?php include_once("menu.php"); ?>
   
</section>


                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
 <?php if ($modo == 'entrada'): ?>         
<section style="text-align: center;"  class="counters5 counters cid-sdqTVWH4Pj" id="counters5-2">
        <BR><BR>
   
<p> ENTRADA DE PRODUTOS</p>

</section>


<section  class="counters5 counters cid-sdqTVWH4Pj" id="counters5-2" style="text-align: center;">

<form action="processa_movimentacao.php" method="post"> 
<table>
<tr>
    <th colspan="2">PRODUTO</th>
    <th>ESTOQUE ATUAL</th>
    <th>VALIDADE</th>
    <th>ENTRADA</th>
    <th>CONFIRMAR</th>
</tr>

<input type="hidden" value="entrada" name="modo">
<input type="hidden" value="<?php echo $id_produto; ?>" name="id_produto">
<tr>
<td colspan="2"><?php echo $pd[0]['produto']; ?></td>

<td>3</td>
<td><input type="text" placeholder="EX: DD/MM/AAAA" required name="validade"></td>
<td><input type="number" required name="qtd"></td>
<td colspan="2"><input style="cursor: pointer; padding: 2%; background-color: #fff; color: green; border: 1px solid green;" type="submit" value="CONFIRMAR" name="CONFIRMAR"></td>
</tr>


</table>
 
<!--  SAIDA DE PRODUTOS-->


</form> 
</section>
<?php endif; ?> 

 <?php if ($modo == 'saida'): ?>   

 <section style="text-align: center;"  class="counters5 counters cid-sdqTVWH4Pj" id="counters5-2">
        <BR><BR>
   
<p> SAIDA DE PRODUTOS</p> 
<section  class="counters5 counters cid-sdqTVWH4Pj" id="counters5-2" style="text-align: center;">

<form action="processa_movimentacao.php" method="post"> 
<table>
<tr>
    <th colspan="2">PRODUTO</th>
    <th>ESTOQUE ATUAL</th>
    <th>ENTRADA</th>
    <th>CONFIRMAR</th>
</tr>
<input type="hidden" value="saida" name="modo">
<tr>
<td colspan="2"><?php echo $pd[0]['produto']; ?></td>

<td>3</td>
<td><input type="number" required name="add"></td>
<td colspan="2"><input style="cursor: pointer; padding: 2%; background-color: #fff; color: green; border: 1px solid green;" type="submit" value="CONFIRMAR" name="CONFIRMAR"></td>
</tr>


</table>

</form> 
</section>
 <?php endif; ?>    




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