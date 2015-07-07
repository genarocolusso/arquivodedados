<?php
// Turn off all error reporting
error_reporting(0);
 
$action = 0;
// Conexão com o banco de dados
//$conn = @mysql_connect("localhost", "root", "") or die ("Problemas na conexão.");
//$db = @mysql_select_db("images", $conn) or die ("Problemas na conexão");

// Se o usuário clicou no botão cadastrar efetua as ações
  
if ($_POST['cadastrar']) {
  $action = 0;
  // Recupera os dados dos campos
  $nome =  strtolower($_POST['nome']);
  $foto = $_FILES["foto"];
  $error = array();
  $pasta = $_POST['pasta'];
  // Se a foto estiver sido selecionada
  if (!empty($foto["name"])) {
    
  
     
    // Pega as dimensões da imagem
    $dimensoes = getimagesize($foto["tmp_name"]);
  
     
    // Se não houver nenhum erro
    if (count($error) == 0) {
    
      // Pega extensão da imagem
      preg_match("/\.(gif|bmp|png|jpg|jpeg|tiff|tif|cdr|doc|docx|pdf){1}$/i", $foto["name"], $ext);

        
foreach($_POST['e9'] as $selectedOption){
    $TEXTMID = $TEXTMID."_" . $selectedOption ."";

}        
    $nomefoto = explode(".", $foto["name"]);
          // Gera um nome único para a imagem
          $nome_imagem = $nome."".$TEXTMID. "." . $ext[1];

          // Caminho de onde ficará a imagem
          $caminho_imagem = $pasta."/".$nome_imagem ;

      // Faz o upload da imagem para seu respectivo caminho
      move_uploaded_file($foto["tmp_name"], $caminho_imagem);
    
       


   
    }
  
    // Se houver mensagens de erro, exibe-as 
  }

}
?>