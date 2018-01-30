<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'slavoniantrading@gmail.com';
$subject = 'Poruka od posjetioca '.$field_name;

$body_message = 'Šalje: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Poruka: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Hvala Vam na poruci. Kontaktirati cemo Vas ubrzo.');
		window.location = 'index-contact_hr.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Poruka neuspjela. Molimo, kontaktirajte nas na slavoniantrading@gmail.com');
		window.location = 'index-contact_hr.html';
	</script>
<?php
}
?>