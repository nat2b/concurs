<?php
   if($destino!=""){
   mail($destino, $asunto, "EL mensaje es\n\n\n".$mensaje."");
   echo "Se ha enviado el mensaje a ".$destino." correctamente!";
   }else{
   echo "Debes escribir un destinatario válido para enviar el email";
}
?>