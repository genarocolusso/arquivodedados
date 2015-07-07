   <?php 
 
      $dir = "arquivos";
      $numerodearquivos = 0;
 $escape_folder = "folder_to_escape";

      
             $items = glob($dir . '/*' );
             for ($i = 0; $i < count($items); $i++) {
                 if (is_dir($items[$i])) {
                     $add = glob($items[$i] . '/*');
                     $items = array_merge($items, $add);
                 }
             }
            

         foreach ($items as $k=>$n)
           $numerodearquivos ++;

         echo "<span style='color:#00a9c3;'> ".$numerodearquivos. "</span>";
 
         ?>