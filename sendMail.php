<?php
 
 require_once('phpmailer/PHPMailerAutoload.php');
$data = $_POST;
	if (isset($data['paymentData'])) {
		$paymentData = $data['paymentData'];
		if (is_array($paymentData)) {
			
			$mail = new PHPMailer;
			$mail->CharSet = 'utf-8';

			$messageBody = '<p>Тип объекта:'.$paymentData[0].'<p> 
			 <p>Площадь помещения:'.$paymentData[1].'<p> 
			  <p>Начало ремонта:'.$paymentData[2].'<p>  
			  <p>Бюджет:'.$paymentData[3].'<p> 
			  <p>Класс ремонта :'.$paymentData[4].'<p> 
			   <p>Номер :'.$paymentData[5].'<p> ';

			$mail->isSMTP();                                    
			$mail->Host = 'smtp.mail.ru';  						
			print_r($paymentData);
			echo "<br>";

			$mail->SMTPAuth = true;                              
			$mail->Username = 'bbp116@mail.ru'; 
			$mail->Password = '!@9diosdj'; 
			$mail->SMTPSecure = 'ssl';                            
			$mail->Port = 465; 
			$mail->setFrom('bbp116@mail.ru'); 
			// $mail->addAddress('bpkzn2015@mail.ru');     
			$mail->addAddress('bpkzn2015@mail.ru');     
			$mail->isHTML(true);                                  
			$mail->Subject = 'Новая заявка с http://bp116.ru';
			$mail->Body  = $messageBody;
			$mail->AltBody = '';

			if(!$mail->send()) {
			    echo 'Не отправилось';
			} else {
			    echo "Отправилось";
			}

		}else{
			echo 0;
		}
	}else{
		echo 0;
	}

	
?>
		
