<?php

$message = "Оформлено замовлення!!!";

$mail = mail('jodisklient@gmail.com', 'My google shop', message);
if ($mail){
	echo 'yes';
}
else {
	echo 'no';
}

?>