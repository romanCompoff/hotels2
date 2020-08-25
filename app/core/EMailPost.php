<?php
namespace Dva\Hotels\core;

use Dva\Hotels\core\SendMailSmtpClass;


	class EMailPost
	{
		public function postMail($phone, $name, $email)
		{
		$mailSMTP = new SendMailSmtpClass('89806347512n', 'marina8811', 'ssl://smtp.gmail.com', '1212', 465);
		
		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
		$headers .= "From: Отель Европа <89806347512n@gmail.com>\r\n"; // от кого письмо
		$result =  $mailSMTP->send('89000145090@mail.ru', 'Отель Европа', 'Уважаемая Администация сайта, вам отправлено письмо через форму обратной связи.
		<br>Ключевое слово: ' . $_GET['utm_term'] . '
		<br>Имя: ' . $name . '
		<br>Номер телефона: ' . $phone . '
		<br>Почта: ' . $email, $headers); 

		}
	}	