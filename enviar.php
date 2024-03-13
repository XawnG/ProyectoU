<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    // Correo al que se enviará el formulario
    $destinatario = "jgalvan3@udi.edu.co";
    
    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto desde el formulario";
    
    // Construir el cuerpo del correo
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Correo Electrónico: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje\n";
    
    // Encabezados del correo
    $headers = "From: $nombre <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpoMensaje, $headers)) {
        echo "<script>alert('El mensaje ha sido enviado exitosamente. ¡Gracias por contactarnos!');window.location='index.html';</script>";
    } else {
        echo "<script>alert('Hubo un problema al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.');window.location='index.html';</script>";
    }
} else {
    echo "<script>alert('Ha ocurrido un error al procesar el formulario. Por favor, inténtalo de nuevo más tarde.');window.location='index.html';</script>";
}
?>
