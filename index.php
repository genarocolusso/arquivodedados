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
   <link href="estilao2.css" rel="stylesheet"/>
<script src="select2/select2.js"></script>
    <script>
$(document).ready(function() {
$(".alert").alert()

   
  $("#e9").select2();
 


    }); 
</script>
  </head>

  <body>

  

    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary  btn-lg pull-right toggle"><i class="fa fa-reorder"></i></a>
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-reorder"></i></a>
        <li class="sidebar-brand">Arquivo de dados</li>
        <li><a href="#top">Início</a></li>
         <li><a href="visualizador.php">Visualizador</a></li>
        <li><a href="#sobre">Sobre</a></li>
        <li><a href="#contato">Contato</a></li>
      </ul>
    </div>
    <!-- /Side Menu -->
  
    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
        <h1>Arquivo de dados</h1>
        <h3>Escolha Suas Categorias E Clique Em <em>Upload</em> Para Salvar Seu Arquivo</h3>
       <br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="cadastro" style="text-align: left" class="formmid">
<table> <tr> <td><b> Nome:</b> </td> <td><input type="text" name="nome" /> </td></tr>
<tr><td><b>categoria: </b></td> <td>
<select multiple name='e9[]' id="e9" style="width:300px" class="populate select2-offscreen" tabindex="-1">
  
<?php
    $arr = array("orange", "banana", "apple", "raspberry");

$i = 0;
while ($i < count($arr)) {
   $a = $arr[$i];
    echo "<option value='".$a."'   >".$a."</option>";
   
   $i++;
}
           
 
?>
           
        </select></td> </tr>
     
     <tr> <td> <b> Pasta: </b> </td>
    <td>
    <select name="pasta" id="e1">
      <?php 
      $dir = "arquivos";
 $escape_folder = "folder_to_escape";

      
             $items = glob($dir . '/*', GLOB_ONLYDIR);
             for ($i = 0; $i < count($items); $i++) {
                 if (is_dir($items[$i])) {
                     $add = glob($items[$i] . '/*',GLOB_ONLYDIR);
                     $items = array_merge($items, $add);
                 }
             }
            

         foreach ($items as $k=>$n)
          echo "  <option  >".$n."</option>  \n"; 
         ?>

      
    </select>
  </td>
   </tr>   
<!--<input type="text" name="categoria" /><br /><br />-->
 <tr><td><b>Foto de exibição :</b></td><td>
<input type="file"  name="foto" />  </td></tr>
  </table>




  <button type="submit" id="cadastrar"  name="cadastrar" value="Upload"  class="btn btn-default btn-lg" style="margin-left: 150px;margin-top: 30px;"> <i class="fa fa-cloud-upload"></i> Upload</button>
 
</form>
 
      </div>
 
    </div> 
    <!-- /Full Page Image Header Area 
   <div id="sobre" class="services">
    <div class="container">
      <div class="row">
<div class="col-md-4 col-md-offset-4 text-center">
         <h1>Arquivo de dados</h1>
        <h3></h3>
       <hr>
        </div>
         </div>
      
       <div class="row">
          <div class="col-md-2 col-md-offset-2 text-center">
            <div class="service-item">
              <i class="service-icon fa fa-archive"></i>
              <h4>Arquivos</h4>
              <p>A organização começa com a escolha dos arquivos que serão armazenados. Extensões como .jpg, .png, .tif, .cdr e outras são aceitas!</p>
            </div>
          </div>

          <div class="col-md-2   text-center">
            <div class="service-item">
              <i class="service-icon fa fa-cloud-upload"></i>
              <h4>Upload</h4>
              <p>Os campos com categorias e nome do arquivo devem ser preenchidos, logo o arquivo está pronto para ser salvo na pasta! </p>
            </div>
          </div>

          <div class="col-md-2   text-center">
            <div class="service-item">
              <i class="service-icon fa fa-gears"></i>
              <h4>O que acontece?</h4>
              <p>Uma simples renomeação do arquivo é feita e estamos quase prontos...</p>
            </div>
          </div>
            <div class="col-md-2   text-center">
            <div class="service-item">
              <i class="service-icon fa fa-folder-open"></i>
              <h4>Pronto!</h4>
              <p>Uma forma melhor de organizar os arquivos foi realizada, mas temos muito o que melhorar ainda, isso é apenas um protótipo bonito.</p>
            </div>
          </div>

       </div>
    </div>
   </div>
    
  <footer id="contato">
      <div class="container">

        <div class="col-md-6 col-md-offset-3 text-center">
            
           <p> EaD CTISM - 2013 </p>
        <p> <i class="  fa fa-desktop"></i>
              <a href="http://www.inf.ufsm.br/~gcolusso" target="_blank">gcolusso</a></p>
    
          </div>
          </div>
  </footer>
  -->
 


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