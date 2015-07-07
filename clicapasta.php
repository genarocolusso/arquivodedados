<!DOCTYPE html>

<?php include 'images.php';
?>

  
 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<link rel="icon" type="image/png" href="icon.png" />
    <title>Arquivos de dados</title>

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
<div class="col-md-4  text-center ">
         <h1>Visualizador de dados</h1>
      
        </div>
        <div class="col-md-8  text-center ">
<img src="img/topo.png" class="img-responsive">
        </div>
      </div>
         </div>
     
         
     
 <div class="row">

      <div class="col-md-12   text-center">
  <div class="space"></div>
       <div class="col-md-4 superbox" >
      <div class="selectpasta">
        
       <form action="visualizador.php" method="post"> 
   <b class="pasta" name=""  style="color: #000;">Escolha a pasta: </b>
   <select name="pasta" id="e1" onChange="submit()">
    <option selected>---</option>
      <?php
      $past = $_POST['pasta'];   
 $past = glob("arquivos/*", GLOB_ONLYDIR);
foreach ($past as $k=>$n) // notice NO reference here!
    echo "  <option  >".$n."</option>  \n";

 
 ?>  

      
        </select>

<noscript><input type="submit" value="Submit"></noscript>
</form> 
<?php echo "  <span  style='color: #000;'>pasta atual: ".$_GET['essapasta'].'</span>'; ?>
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
         
           
       
         <?php

   
 $past =  $_GET['essapasta'];
 
$dir = "".$past."";
 
// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
$string = $past;
$array = explode("/",$string);  
array_pop($array); // tira o ultimo
$nova = implode("/",$array); // cola de novo
 

 if(empty($nova)){}
  else
 echo " <tr id= 'listado' ><td> -  </td><td  id='$nova' class='' name='pasta'>  <a href='clicapasta.php?essapasta=$nova'>".$nova."</a> </td> <td> <span class='btn btn-success btn-xs'>Voltar</span> </td></tr> ";
    

 $subpast = glob("".$past."/*", GLOB_ONLYDIR);
foreach ($subpast as $k=>$n){ // notice NO reference here!
       echo "  <tr id= 'listado' ><td> -  </td><td  id='$n' class='' name='pasta'>  <a href='clicapasta.php?essapasta=$n'> $n </a> </td> <td> <span class='btn btn-success btn-xs'>PASTA</span> </td></tr> ";
    
   }
    if ($dh = opendir($dir)) {
       $i = -1;
        while (($file = readdir($dh)) !== false) {

          $file_parts = pathinfo($file);
 
     
   

switch($file_parts['extension'])
{

  case "doc": 
      echo "  <tr id= 'listado' ><td>".$i."  </td><td  id='$dir' class='$file' name='doc'>  $file  </td> <td><span class='btn btn-warning btn-xs'> doc </span> </td></tr> ";
     
    break;
    case "gif": 
      echo "  <tr id= 'listado' ><td>".$i."  </td><td  id='$dir' class='$file' name='img'>  $file  </td> <td><span class='btn btn-warning btn-xs'> GIF </span> </td></tr> ";
     
    break;

  case "docx": 
      echo "  <tr id= 'listado' ><td>".$i."  </td><td  id='$dir' class='$file' name='doc'>  $file  </td> <td><span class='btn btn-warning btn-xs'> doc </span> </td></tr> ";
     
    break;
    case "jpg": 
      echo "  <tr id= 'listado' ><td>".$i."  </td><td  id='$dir' class='$file' name='img'>  $file  </td> <td><span class='btn btn-primary btn-xs'> JPG </span> </td></tr> ";
     
    break;
     case "bmp": 
      echo "  <tr id= 'listado' ><td>".$i."  </td><td id='$dir'  class='$file' name='img'>   $file  </td> <td> <span class='btn btn-primary btn-xs'>BMP </span></td></tr> ";
      
    break;
     case "png": 
      echo " <tr id= 'listado' ><td>".$i."  </td> <td id='$dir'  class='$file' name='img'>   $file  </td><td><span class='btn btn-primary btn-xs'> PNG </span></td> </tr> ";
      
    break;
     case "tif": 
      echo "  <tr id= 'listado' ><td>".$i."  </td><td id='$dir'  class='$file' name='tif'>   $file  </td><td><span class='btn btn-warning btn-xs'> TIF </span></td> </tr>  ";
     
    break;
case "pdf": 
      echo "  <tr id= 'listado' ><td>".$i."  </td><td id='$dir'  class='$file' name='pdf'>  $file  </td> <td> <span class='btn btn-warning btn-xs'>PDF </span></td> </tr>";
    
    break;
    case "mp4": 
      echo "  <tr id= 'listado' ><td>".$i."  </td><td id='$dir'  class='$file' name='mp4'>  $file  </td> <td><span class='btn btn-info btn-xs'> VIDEO </span></td> </tr>";
    
    break;
    case "exe":
    break;

    case "": // Handle file extension for files ending in '.'
    case NULL: // Handle no file extension
    break;
}
      $i++;
        }
        closedir($dh);
    }

 
}
?>?>
      
    
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
  </footer> -->

  
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