<?php
    header('Content-Type: text/html; charset=UTF-8');
    
    // Recupero detalles del envío POST
    
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['comentario'];
     
    // crea y envía el mensaje de correo electrónico

    $para = 'secoalvaro00@gmail.com';
    $asunto = 'Nuevos Datos personales';
    $mensaje = "<br> Datos Personales Recibidos desde la Web <br /><br /> ";
    $mensaje .= "Nombre: " . $nombre . " <br /> ";
    $mensaje .= "Dirección: " .$email. "<br /> ";
    $mensaje .= "Edad: " .$telefono. "<br />";
    $mensaje .= "Comentario: " .$comentario. "<br /><br />";
  
    //Así podríamos construir una estructura completa de página HTML si
    //queremos que llegue con más forma
    
    $cabeceras = "MIME-Version: 1.0". "\r\n";
    $cabeceras .= "Content-type: text/html; charset=UTF-8"."\r\n";
    $cabeceras .= "From:secoalvaro00@gmail.com";

    if (mail($para, $asunto, $mensaje, $cabeceras )){
        echo '<span style="font-size:1.3em;color:white;background-color:green;padding:5px;">Se acaba de enviar el correo, revisa tu bandeja de entrada o la de SPAM antes de ponerte nervioso...</span>';
    } else {
        //echo '<span style="font-size:1.3em;color:white;background-color:red;padding:5px;">Error al enviar mensaje</span>';
    }
?>    
    


