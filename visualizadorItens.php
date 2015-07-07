 <?php
 echo '    <meta charset="utf-8">';
 
 $past =  $_POST['pasta'];
 
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
       echo " <tr id= 'listado' ><td> -  </td><td  id='$n' class='' name='pasta'>  <a href='clicapasta.php?essapasta=$n'> $n </a> </td> <td> <span class='btn btn-success btn-xs'>PASTA</span> </td></tr> ";
    
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
?>