$(document).ready(function() {

   function vizualiza(){
 var tipo =  $(this).attr('name');
  var className = $(this).attr('class');
  var dirName = $(this).attr('id');

if(tipo != "pasta"){
  $(".imgside").css("opacity", 1);
 if(tipo=="img"){
  $(".imgside").html(" <img src='"+dirName+"/"+className+" '><div class='icondownload'><a href='"+dirName+"/"+className+" ' target='_blank'><i class='fa fa-save' ></i></a>  </div>  ");

}
if(tipo=="pdf")
{
   $(".imgside").html(" <img src='arquivos/Texto/icon/pdf.png ' ><div class='icondownload'><a href='"+dirName+"/"+className+" ' target='_blank'><i class='fa fa-save' ></i></a>  </div>  ");

}
if(tipo=="tif")
{
   $(".imgside").html(" <img src='arquivos/Texto/icon/tiff.png ' ><div class='icondownload'><a href='"+dirName+"/"+className+" ' target='_blank'><i class='fa fa-save' ></i></a>  </div>  ");

}
if(tipo=="doc" )
{
   $(".imgside").html(" <img src='arquivos/Texto/icon/doc.png ' ><div class='icondownload'><a href='"+dirName+"/"+className+" ' target='_blank'><i class='fa fa-save' ></i></a>  </div>  ");

}
if(tipo=="mp4")
{   
   $(".imgside").html(" <video   height='360' controls><source src='"+dirName+"/"+className+"' type='video/mp4' ></video> <div class='icondownload'><a href='"+dirName+"/"+className+" ' target='_blank' ><i class='fa fa-save' ></i></a>  </div> ");

}
 


}//diferente de pasta
else{
 $(".imgside").css("opacity", 0);

}
   }
  
   $("#listado td").click(vizualiza);

    }); 