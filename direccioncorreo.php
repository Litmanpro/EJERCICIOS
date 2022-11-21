<?php
/*LA VARIABLE POST PERMITE OBTENER EL VALOR DEL ATRIBURTO NOMBRE, 
!empty significa en caso no este vacío la variable que le sigue*/
if (isset($_POST['enviar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['empresa']) && !empty($_POST['pais']) && !empty($_POST['celular']) && !empty($_POST['email']) && !empty($_POST['msg'])) {
        $nombre = $_POST['nombre'];
        $empresa = $_POST['empresa'];
        $pais = $_POST['pais'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        $header ="From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header ="X-Mailer: PHP/" . phpversion();
        $mail =@mail($email,$asunto,$msg,$header);
        if ($mail) {
            echo "<h3>¡mensaje totalmente enviado!</h3>"; 
        }
    }
}

?>