<?php date_default_timezone_set('America/Sao_Paulo');
@$info = $_REQUEST['info']; 

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

    
<BR><BR><BR><BR><BR><BR>
    

    <div class="container pt-4 mt-2">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">ABERTURA DE OS</h2>

            <?php if ($info == 'fail'): ?>
        <h4 style="color: red; text-align: center;">Algo nao foi como esperado, tente novamente.</h4>
        <?php endif; ?>
        <div class="row justify-content-center">
            
                                <form method="post" action="geraos.php" style="width: 60%;">

<label style="width: 100%"> <input required style="padding: 1%; border: 1px solid #ccc; border-radius: 7px; width: 100%;" placeholder="Nome" type="text" name="solic" value="Eliza Belo"></label>

<label style="width: 100%"> <SELECT required  style="padding: 1%; border: 1px solid #ccc; border-radius: 7px; width: 48%;" placeholder="Nome" type="text" name="servico" >


  <option value="TERCEIRIZADO">TERCEIRIZADO</option>
  <option value="INTERNO">INTERNO</option>

</SELECT><input required style="margin-left: 4%; padding: 1%; border: 1px solid #ccc; border-radius: 7px; width: 48%;" placeholder="RESPONSAVEL" type="text" name="resp"></label>

<label style="width: 100%"> <input required style="padding: 1%; border: 1px solid #ccc; border-radius: 7px; width: 48%;" type="text" value="<?php echo date('d/m/Y'); ?>" name="data"><input style="margin-left: 4%; padding: 1%; border: 1px solid #ccc; border-radius: 7px; width: 48%;" type="text" value="<?php echo date('H:i'); ?>" name="hora" ></label>

<label style="width: 100%"> <textarea required style="padding: 1%; border: 1px solid #ccc; border-radius: 7px; width: 100%;" placeholder="Descrição/Motivo" rows="4" type="text" name="motivo"></textarea></label>

<button style="width: 100%; margin-bottom: 5%; cursor: pointer;" type="submit">ABRIR OS</button>

                                </form>

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