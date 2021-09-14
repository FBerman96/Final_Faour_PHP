
<?php 

if (isset($_POST['Enviar Mensaje'] )) {
    
    if (!empty($_POST['Nombre']) && !empty($_POST['Email']) && !empty($_POST['Teléfono'])
        && !empty($_POST['Mensaje'])) 
    
    {
        $Nombre = $_POST['Nombre'];
        $Email = $_POST['Email'];
        $Teléfono = $_POST['Teléfono'];
        $Mensaje = $_POST['Mensaje'];
        $Header = "From: noreply@example.com";
        $Header.= "Reply-to: noreply@example.com";
        $Header.= "X-Mailer: PHP/". phpversion();
        $mail =@mail($Email,$Mensaje,$Header);
        
        if ($mail) { 
            
            echo "<h4>¡Mensaje enviado exitosamente!</h4>";    
                    } 
    
    
    
   } 
                                        } 

       