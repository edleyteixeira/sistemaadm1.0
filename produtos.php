<?php
// INCLUI A CONEXAO
include ("conexao/conexao.php");
include ("conexao/fecha_conexao.php");
include ("funcao/funcao_select2.php");

@$entrada = $_REQUEST['entrada'];

$categoria =  $_REQUEST['cat'];
$alimentos = select("produtos", "*", "WHERE categoria = '$categoria'" , "ORDER BY produto");



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
tr:hover{ background-color: #000; color: #fff; }

  </style>

</head>
<body >
  <section class="menu cid-sdqRo9y9BT" once="menu" id="menu1-1">

    
<?php include_once("menu.php"); ?>
   
</section>


                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
          
<section style="text-align: center;"  class="counters5 counters cid-sdqTVWH4Pj" id="counters5-2">
        <BR><BR>
    <h1 style="text-align: center;">PRODUTOS CADASTRADOS</h1>
<p> 
<a href="produtos.php?cat=Alimentos"><button style="padding: 1%; border-radius: 7px; border: 1px solid #fff; cursor: pointer;">Alimentos</button></a> 
<a href="produtos.php?cat=Descartáveis"><button style="padding: 1%; border-radius: 7px; border: 1px solid #fff; cursor: pointer;">Descartáveis</button></a> 
<a href="produtos.php?cat=Limpeza"><button style="padding: 1%; border-radius: 7px; border: 1px solid #fff; cursor: pointer;">Limpeza</button></a> 
</p>

</section>


<section  class="counters5 counters cid-sdqTVWH4Pj" id="counters5-2" style="text-align: center;">

    <h1 style="font-size: .5em; text-align: center;"><?php echo $categoria; ?></h1>
    <p style="font-size: .3em;">Aperte CTRL + F e digite o produto que deseja</p>
    <?php if($entrada == 'sucesso' ):?>
      <p style="font-size: .5em; color: green;">Entrada de produtos efetuada com sucesso!</p>
    <?php endif; ?>
     <?php if($entrada == 'fail' ):?>
      <p style="font-size: .5em; color: red;">Desculpe! Houve um erro, tente novamente.</p>
    <?php endif; ?>

<table>

  <tr>
    <th>Cod</th>
    <th colspan="2">Produtos</th>
    <th>Quantidade</th>
    <th>Validade</th>
    <th>Entrada</th>
    <th>Saida</th>
    <th>Editar</th>
    <th>Excluir</th>

  </tr>

<?php for ($i=0; $i < count($alimentos) ; $i++) {  ?>

  <tr <?php if ($i % 2 == 1): ?>class="c" <?php endif; ?>>
  

    <td style="background-color: #000; color: #fff;"><?php echo $alimentos[$i]['id']; ?></td>

    <td colspan="2"><?php echo $alimentos[$i]['produto']; $id = $alimentos[$i]['id']; ?></td>
<?php  $qtd = select("estoque", "*", "WHERE id_produto = '$id'"); 
if( $qtd == '0'):?>
  <td>0</td>
<?php else: ?>
   <td><?php echo count($qtd); ?></td>
<?php endif; ?>
<td><?php echo $qtd[0]['validade']; ?></td>

<td><a href="alterar_produtos.php?modo=entrada&id=<?php echo $alimentos[$i]['id']; ?>"><i class="fa fa-plus-square" aria-hidden="true"></i></a></td>

<td><a href="alterar_produtos.php?modo=saida&id=<?php echo $alimentos[$i]['id']; ?>"><i class="fa fa-minus-circle" aria-hidden="true"></i></a></td>

<td><a href="alterar_produtos.php?modo=editar&id=<?php echo $alimentos[$i]['id']; ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></td>
    
<td><a href="alterar_produtos.php?modo=excluir&id=<?php echo $alimentos[$i]['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>


  </tr>

<?php } ?>

</table>

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