<?php

	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$company=$_POST['company'];
		$subject=$_POST['subject'];
		$msg=$_POST['msg'];

		$to='info@telesmacg.com'; // Receiver Email ID, Replace with your email ID
		$subject='Formulario enviado';
		$message=
			"Nombres y Apellidos: ".$name."\n"."Teléfono: ".$phone."\n"."Email: ".$email."\n"."Empresa: ".$company."\n"."Asunto: ".$subject."\n"."Mensaje: ".$msg;
		$headers="De: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h3>Mensaje enviado con exito!"." ".$name.", Nos contactaremos en la brevedad posible!</h3>";
			header("refresh:3; index.html");
		}
		else{
			echo "Algo salió mal, porfavor inténtalo nuevamente";
		}
		exit();
	} 
    
?>
