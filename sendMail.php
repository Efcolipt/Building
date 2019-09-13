<?php 
$data = $_POST;
$i = 0;
	if (isset($data['paymentData'])) {
		$paymentData = $data['paymentData'];

		$MessageError = array();

		if (is_array($paymentData)) {
			
			$to  = "<efcolipt@gmail.com>" ; 
			$subject = "Новая заявка";
			$subject = "=?utf-8?B?".base64_encode($subject)."?=";

			$message .= "<p>Тип объекта:".$paymentData[$i]."</p> <br>\r\n" ;
			$i++;
			$message .= "<p>Площадь объекта:".$paymentData[$i]."</p> <br>\r\n" ;
			$i++;
			$message .= "<p>Начало ремонта:".$paymentData[$i]."</p> <br>\r\n" ;
			$i++;
			$message .= "<p>Бюджет:".$paymentData[$i]."</p> <br>\r\n" ;
			$i++;
			$message .= "<p>Ремонт:".$paymentData[$i]."</p> <br>\r\n" ;
			$i++;
			$message .= "<p>Номер телефона:".$paymentData[$i]."</p> <br>\r\n" ;	

			$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
			$headers .= "From: <baykov.ivan.2002@mail.ru>\r\n"; 
			$headers .= "Reply-To: baykov.ivan.2002@mail.ru\r\n"; 

				

			mail($to, $subject, $message, $headers); 
			echo 1;
		}else{
			echo 0;
		}
	}else{
		echo 0;
	}

	
?>
		
