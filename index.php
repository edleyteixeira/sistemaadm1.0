<?php 
// INCLUI A CONEXAO
include ("conexao/conexao.php");
include ("conexao/fecha_conexao.php");
include ("funcao/funcao_select2.php");

$os = select("os", "*");
$estoque = select("estoque", "*"); 

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
<body >
  <section class="menu cid-sdqRo9y9BT" once="menu" id="menu1-1">

    
<?php include_once("menu.php"); ?>
   
</section>
<section class="counters1 counters cid-sdqQaVN399" id="counters1-0">

    

    

    <div class="container">
        
        

        <div class="container pt-4 mt-2">
            <div class="media-container-row">
                <div class="card p-3 align-center col-12 col-md-6">
                    <div class="panel-item p-3">
                        

                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">

                                  <?php if ($os == false) {
                                    echo "0";
                                  }else{ echo count($os); } ?>
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                OS EM ABERTO</h4>
                            
                        </div>
                    </div>
                </div>


                <div class="card p-3 align-center col-12 col-md-6">
                    <div class="panel-item p-3">
                        
                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  <?php echo count($estoque); ?>
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">ITENS NO ESTOQUE</h4>
                            
                        </div>
                    </div>
                </div>

                


                
            </div>
        </div>
   </div>
</section>

<section  class="counters5 counters cid-sdqTVWH4Pj" id="counters5-2">
<?php

$data = date('D');
$mes = date('M');
$dia = date('d');
$ano = date('Y');

$semana = array(
    'Sun' => 'Domingo',
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terca-Feira',
    'Wed' => 'Quarta-Feira',
    'Thu' => 'Quinta-Feira',
    'Fri' => 'Sexta-Feira',
    'Sat' => 'Sábado'
);

$mes_extenso = array(
    'Jan' => 'Janeiro',
    'Feb' => 'Fevereiro',
    'Mar' => 'Marco',
    'Apr' => 'Abril',
    'May' => 'Maio',
    'Jun' => 'Junho',
    'Jul' => 'Julho',
    'Aug' => 'Agosto',
    'Nov' => 'Novembro',
    'Sep' => 'Setembro',
    'Oct' => 'Outubro',
    'Dec' => 'Dezembro'
);


?>



  <h1 style="width: 100%; text-align: center; font-size: 1.5em;">Seja bem vinda Eliza Teixeira, hoje é  <?php echo $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";?>.</h1>
    


        
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