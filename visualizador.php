<!DOCTYPE html>

<?php include 'images.php';
  
?>

 

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Arquivos de dados</title>

<link rel="icon" type="image/png" href="icon.png" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
 <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>

    <!-- Add custom CSS here -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
 <link href="select2/select2.css" rel="stylesheet"/>
  <link href="estilao.css" rel="stylesheet"/>
    <script src="jquery-1.9.1.js"></script>
<script src="select2/select2.js"></script>
<script src="mostraimagem.js"></script>
   
  </head>

  <body>
 <?php

echo "
 <script  >
            $('.pasta').removeClass( 'pasta' ).addClass( '".$_POST['pasta']." ');
            </script>
 " ?>
    <!-- Side Menu   
    <a id="menu-toggle" href="#" class="btn btn-cinza  btn-lg pull-right toggle"><i class="fa fa-reorder"></i></a>
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-reorder"></i></a>
        <li class="sidebar-brand">Arquivo de dados</li>
        <li><a href="#top">Início</a></li>
         
        <li><a href="#sobre">Sobre</a></li>
        <li><a href="#contato">Contato</a></li>
      </ul>



    </div>
    /Side Menu  -->
  
    <!-- Full Page Image Header Area -->
    <?php include 'header.php';   
?>
    <!-- /Full Page Image Header Area -->
   <div id="sobre" class="services" style="min-height: 520px; padding-top: 40px;">
    <div class="container">
     <div class="row">
        <div class="col-md-12 minibox">
<div class="col-md-12  text-center ">
         <h1>Visualizador de dados</h1>
      
        
          
        </div>
      </div>
         </div>
        
 
 <div class="row">
 
      <div class="col-md-12   text-center">
 
     <div class="space"></div>
       <div class="col-md-4 superbox" >
      <div class="selectpasta">
        
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
   <b class="pasta" name="" style="color: #000;">Escolha a pasta: </b>
   <select name="pasta" id="e1" onChange="submit()">
    <option selected>---</option>
      <?php
      $past = $_POST['pasta'];   
 $past = glob("arquivos/*", GLOB_ONLYDIR);
foreach ($past as $k=>$n) // notice NO reference here!
    echo "  <option  >".$n."</option>  \n";
 s
 ?>  

      
        </select>

<noscript><input type="submit" value="Submit"></noscript>
</form> 
<?php echo " <span  style='color: #000;'>pasta atual: ".$_POST['pasta'].'</span>'; ?>
        <br>
       
</div>

<div style="min-height:2px;max-height: 500px;  overflow-y : scroll; background: #f2f2f2; ">
<table  class="table table-condensed">
        <thead>
          <tr>
            <th>#</th>
            <th>Título</th>
            <th>Tipo</th>
            
          </tr>
        </thead>
        <tbody>
         
           
       
    <?php include 'visualizadorItens.php';
?>
    
        </tbody>
      </table>
   </div> <!-- acaba scroll -->

      </div>

         <div class="space"></div>
      <div  class="col-md-8 "  >

<div class="imgside" > 
     
   </div> 
      </div>
        </div>
 </div><!--row-->


    </div>
   </div>
    
  <!--<footer id="contato">
      <div class="container">

        <div class="col-md-6 col-md-offset-3 text-center">
            
           <p> EaD CTISM - 2013 </p>
        <p> <i class="  fa fa-desktop"></i>
              <a href="http://www.inf.ufsm.br/~gcolusso" target="_blank">gcolusso</a></p>
    
          </div>
          </div>
  </footer> 

  
  <!-- Custom JavaScript for the Side Menu - Put in a custom JS file if you want to clean this up -->
  <script>
      $("#menu-close").click(function(e) {
          e.preventDefault();
          $("#sidebar-wrapper").toggleClass("active");
      });
  </script>
  <script>
      $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#sidebar-wrapper").toggleClass("active");
      });
  </script>
  <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
              || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>

  </body>

</html>