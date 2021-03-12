<?php
	
	include('../config.php');
	$data = array();
	$assunto = 'Novo mensagem do site!';
	$corpo = '';
	foreach ($_POST as $key => $value) {
		$corpo.=ucfirst($key).": ".$value;
		$corpo.="<hr>";
	}
	$info = array('assunto'=>$assunto,'corpo'=>$corpo);
	$mail = new Email('smtp.gmail.com','kausinhobrunow@gmail.com','kalzinho2005','Kausinho');
	$mail->addAdress('gandalfcurso@gmail.com','Klaussio');
	$mail->formatarEmail($info);
	if($mail->enviarEmail()){
		$data['sucesso'] = true;
	}else{
		$data['sucesso'] = false;
	}
	
	//$data['retorno'] = 'sucesso';

	die(json_encode($data));
?>