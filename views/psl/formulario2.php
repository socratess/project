<p><center><strong><big>Ingrese sus Datos Usuario habitual</big></strong></center></p>
<?= form_open("/central/recibirdatos2")  ?>
<?php
$Email = array('name'=>'Email','placeholder'=>'Ingrese su Email');
$Contraseña =  array('name'=>'Contraseña','placeholder'=>'Ingrese su contraseña');
$Nickname =  array('name'=>'Nickname','placeholder'=>'Ingrese su Nickname');
?>
<?= form_label('Email:','Email')?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?=form_input($Email)?><?php echo form_error('Email')?>
<br><br><br>
<?= form_label('Contraseña:','Contraseña')?>&nbsp;
<?=form_input($Contraseña)?><?php echo form_error('Contraseña')?>
<br><br><br>
<?= form_label('Nickname:','Nickname')?>&nbsp;&nbsp;
<?=form_input($Nickname)?><?php echo form_error('Nickname')?>
<br><br><br>
<center><?=form_submit('','Entrar') ?></center>
<?= form_close()?>
<p><u>Developers: Hernan and Socrates</u></p>
</body>
</html>
