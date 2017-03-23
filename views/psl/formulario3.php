<p><center><strong><big>Ingrese sus Datos Dueño habitual</big></strong></center></p>
<?= form_open("/central/recibirdatos3")  ?>
<?php
$Emails = array('name'=>'Email','placeholder'=>'Ingrese su Email');
$Contraseñas =  array('name'=>'Contraseña','placeholder'=>'Ingrese su contraseña');
$Nicknames =  array('name'=>'Nickname','placeholder'=>'Ingrese su Nickname');
?>
<?= form_label('Email:','Email')?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?=form_input($Emails)?><?php echo form_error('Email')?>
<br><br><br>
<?= form_label('Contraseña:','Contraseña')?>&nbsp;
<?=form_input($Contraseñas)?><?php echo form_error('Contraseña')?>
<br><br><br>
<?= form_label('Nickname:','Nickname')?>&nbsp;&nbsp;
<?=form_input($Nicknames)?><?php echo form_error('Nickname')?>
<br><br><br>
<center><?=form_submit('','Entrar') ?></center>
<?= form_close()?>
<p><u>Developers: Hernan and Socrates</u></p>
</body>
</html>