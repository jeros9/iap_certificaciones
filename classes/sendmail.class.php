<?php

class SendMail extends Main
{
	
	public function enviarCorreo($subject, $body, $details_body, $details_subject, $to, $toName, $attachment = array(), $fileName = array(), $from, $fromName) 
	{
			$mail = new PHPMailer(); // defaults to using php "mail()"
			
			$body = nl2br($this->Util()->handle_mail_patterns($body,$details_body));
			$subject = $this->Util()->handle_mail_patterns($subject,$details_subject);
			
			$mail->AddReplyTo($from, $fromName);
			$mail->SetFrom($from, $fromName);
			
			$mail->AddAddress($to, $toName);
			$mail->Subject    = $subject;
			$mail->MsgHTML($body);
			
			foreach($attachment as $key => $attach)
			{
				$mail->AddAttachment($attach, $fileName[$key]);
			}
			$mail->Send();
	}
	
	public function PrepareAttachment($subject, $body, $details_body, $details_subject, $to, $toName, $attachment = array(), $fileName = array(), $from = EMAIL_USERNAME, $fromName = "Administrador del Sistema") 
	{
			$mail = new PHPMailer(); // defaults to using php "mail()"
			$mail->IsSMTP();
			$mail->SMTPDebug  = 1;
			$mail->SMTPAuth   = true;
			$mail->SMTPSecure = "ssl";
			$mail->Host       = "smtp.gmail.com";
			$mail->Port       = 465;
			$mail->Username   = EMAIL_USERNAME;
			$mail->Password   = EMAIL_PASSWORD;

			$tmp_body = nl2br($this->Util()->handle_mail_patterns($body,$details_body));
			if($tmp_body == '')
				$tmp_body = nl2br($this->Util()->str_replace_mail($body, $details_body));
			$subject = $this->Util()->handle_mail_patterns($subject,$details_subject);
			
			$mail->AddReplyTo($from, $fromName);
			$mail->SetFrom($from, $fromName);
			
			$mail->AddAddress($to, $toName);
			$mail->Subject    = $subject;
			$mail->MsgHTML($tmp_body);
			
			if(is_array($attachment))
			{
				if(count($attachment) > 0)
				{
					foreach($attachment as $key => $attach)
					{
						$mail->AddAttachment($attach, $fileName[$key]);
					}
				}
			}
			$mail->Send();
	}

		
	public function Prepare($subject, $body, $details_body, $details_subject, $to, $toName, $attachment = "", $fileName = "", $from = "enlinea@iapchiapas.edu.mx", $fromName = "Administrador del Sistema") 
	{
			$mail = new PHPMailer(); // defaults to using php "mail()"
			
			$body = nl2br($this->Util()->handle_mail_patterns($body,$details_body));
			$subject = $this->Util()->handle_mail_patterns($subject,$details_subject);
			
			$mail->AddReplyTo($from, $fromName);
			$mail->SetFrom($from, $fromName);
			
			$mail->AddAddress($to, $toName);
			$mail->Subject    = $subject;
			$mail->MsgHTML($body);

			if($attachment != "")
			{
				$mail->AddAttachment($attachment, $fileName);
			}
			$mail->Send();
	}

	public function PrepareMulti($subject, $body, $details_body, $details_subject, $to, $toName, $attachment = "", $fileName = "", $from = EMAIL_USERNAME, $fromName = "Administrador del Sistema") 
	{
			$mail = new PHPMailer(); // defaults to using php "mail()"
			
			$body = nl2br($this->Util()->handle_mail_patterns($body,$details_body));
			$subject = utf8_decode($this->Util()->handle_mail_patterns($subject,$details_subject));
			
			$mail->AddReplyTo($from, $fromName);
			$mail->SetFrom($from, $fromName);
			
			$ids = explode(",", $to);
			$student = new User;
			foreach($ids as $id)
			{
				$student->setUserId($id);
				$info = $student->InfoUser();
				$info["names"] = $info["names"];
				$info["lastNamePaterno"] = $info["lastNamePaterno"];
				$info["lastNameMaterno"] = $info["lastNameMaterno"];
				$name = utf8_decode($info["names"]." ".$info["lastNamePaterno"]." ".$info["lastNameMaterno"]);
				//$info["email"] = "dlopez@trazzos.com";
				$mail->AddAddress($info["email"], $name." (".$info["controlNumber"].")");
			}
			
			$mail->Subject    = $subject;
			$mail->MsgHTML($body);

			if($attachment != "")
			{
				$mail->AddAttachment($attachment, $fileName);
			}
			$mail->Send();
	}

	public function enviarEmail($subject, $body, $details_body, $details_subject, $to, $toName, $from = EMAIL_PRODIM, $fromName = "Administrador del Sistema") 
	{
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->SMTPDebug  = 1;
			$mail->SMTPAuth   = true;
			$mail->SMTPSecure = "ssl";
			$mail->Host       = "smtp.gmail.com";
			$mail->Port       = 465;
			$mail->Username   = EMAIL_PRODIM;
			$mail->Password   = EMAIL_PRODIM_PASSWORD;

			$body = nl2br($this->Util()->handle_mail_patterns($body, $details_body));
			$subject = $this->Util()->handle_mail_patterns($subject, $details_subject);
			
			$mail->AddReplyTo($from, $fromName);
			$mail->SetFrom($from, $fromName);
			
			$mail->AddAddress($to, $toName);
			$mail->Subject    = $subject;
			$mail->MsgHTML($body);
			$mail->Send();
	}
	
}


?>