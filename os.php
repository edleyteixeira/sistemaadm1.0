<?php
// INCLUI A CONEXAO
include ("conexao/conexao.php");
include ("conexao/fecha_conexao.php");
include ("funcao/funcao_select2.php");

@$info = $_REQUEST['info'];

$os = select("os", "*", "WHERE situacao = '0'");
$oss = select("os", "*", "WHERE situacao = '1s'", "ORDER BY id Desc");

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
  
  <style >
td {font-size: .35em; text-align: center; padding: 1%;}
.b { font-weight: 600;  }

  </style>

</head>
<body >
  <section class="menu cid-sdqRo9y9BT" once="menu" id="menu1-1">

    
<?php include_once("menu.php"); ?>
   
</section>


                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
          
<section  class="counters5 counters cid-sdqTVWH4Pj" id="counters5-2">
        <BR><BR>
    <h1 style="text-align: center;">GERENCIAMENTO DE ORDENS DE SERVIÇO</h1>

    <p style="text-align: center; margin: 2% 0;"><a href="abriros.php"><button style="margin-top: 2%; width: 60%;background-color: #fff; cursor: pointer; border-radius: 7px;">ABRIR OS</button></a></p>



      
</section>


<section  class="counters5 counters cid-sdqTVWH4Pj" id="counters5-2">

   

<?php if ($os==false): ?>

  <h1 style="text-align: center; color: green;"><br>Você não tem ordens em aberto.</h1>

<?php else: ?>
  <h1 style="text-align: center;" >ORDENS EM ABERTO</h1>
    <table id="baixa" style="width: 100%; border: 1px solid #ccc; padding: 1%;">

      <tr>
        <td> <span class="b">Numero</td>
        <td><span class="b">Solicitante</td>
        <td> <span class="b">Data</span> </td>
        <td> <span class="b">Serviço</span></td>
         <td> <span class="b">Responsável</span></td>
        <td> <span class="b">Baixa</span></td>
         <td> <span class="b">Consultar</span></td>
       
      </tr>

<?php for ($i=0; $i < count($os); $i++) { ?>
      <tr>
        <td><?php echo $os[$i]['os']; ?></td>
        <td><?php echo $os[$i]['solicitante']; ?></td>
         <td><?php echo $os[$i]['data']; ?></td>
         <td><?php echo $os[$i]['tipo']; ?></td>
         <td><?php echo $os[$i]['responsavel']; ?></td>
        <td> <a href="fecharos.php?os=<?php echo $os[$i]['os']; ?>"><button style="border: 1px solid blue; border-radius: 7px; color: blue; cursor: pointer; background-color:rgba(0,0,255,0.3);}">BAIXA</button></a></td>
        <td> <a href="veros.php?os=<?php echo $os[$i]['os']; ?>"><button style="border: 1px solid green; border-radius: 7px; color: green; cursor: pointer; background-color:rgba(0,255,0,0.3);}">VER</button></a></td>
      </tr>

<?php }  ?>


  </table>
<?php endif; ?>

</section>

<section  class="counters5 counters cid-sdqTVWH4Pj" id="counters5-2">

<?php if ($oss==false): ?>

  <h1 style="text-align: center; color: green;"><br>Você não tem ordens finalizadas.</h1>

<?php else: ?>
   <h1 style="text-align: center; margin-top: 3%;">ORDENS FINALIZADAS</h1>

<?php if ($info=='sucesso'): ?>

<h1 style="text-align: center; color: green; font-size: .5em;"><br>Ordem baixada com sucesso!!</h1>

<?php endif; ?>

<table style="width: 100%; border: 1px solid #ccc; padding: 1%;">

      <tr>
        <td> <span class="b">Numero</td>
        <td><span class="b">Solicitante</td>
        <td> <span class="b">Data</span> </td>
        <td> <span class="b">Serviço</span></td>
         <td> <span class="b">Responsável</span></td>
        <td> <span class="b">Consultar</span></td>
         <td> <span class="b">Situação</span></td>
       
      </tr>

<?php for ($i=0; $i < count($oss); $i++) { ?>
      <tr>
        <td><?php echo $oss[$i]['os']; ?></td>
        <td><?php echo $oss[$i]['solicitante']; ?></td>
         <td><?php echo $oss[$i]['data']; ?></td>
         <td><?php echo $oss[$i]['tipo']; ?></td>
         <td><?php echo $oss[$i]['responsavel']; ?></td>
        <td> <a href="veros.php?os=<?php echo $oss[$i]['os']; ?>"><button style="border: 1px solid green; border-radius: 7px; color: green; cursor: pointer; background-color:rgba(0,255,0,0.3);}">VER</button></a></td>
        <td>CONCLUÍDA</td>
        
      </tr>

<?php } ?>


  </table>
<?php endif;?>
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