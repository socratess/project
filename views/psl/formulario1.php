<p><center><strong><big>Ingrese sus Datos Usuario nuevo</big></strong></center></p>
<?= form_open("/central/recibirdatos1")  ?>
<?php
$Nombre = array('name'=>'Nombre','placeholder'=>'Ingrese su nombre');
$Apellido = array('name'=>'Apellido','placeholder'=>'Ingrese su apellido');
$Edad = array('name'=>'Edad','placeholder'=>'Ingrese su edad');
$Sexo =  array('name'=>'Sexo','placeholder'=>'Ingrese su sexo');
$Direccion = array('name'=>'Direccion','placeholder'=>'Ingrese su direccion');
$Email = array('name'=>'Email','placeholder'=>'Ingrese su Email');
$Contraseña =  array('name'=>'Contraseña','placeholder'=>'Ingrese su contraseña');
$Repetir_contraseña =  array('name'=>'Repetir_contraseña','placeholder'=>'Ingrese su contraseña de nuevo');
$Nickname =  array('name'=>'Nickname','placeholder'=>'Ingrese su Nickname');
?>
<?= form_label('Nombre:','Nombre')?> &nbsp;
<?=form_input($Nombre)?><?php echo form_error('Nombre')?>
<br><br><br>
<?= form_label('Apellido:','Apellido')?> &nbsp;
<?=form_input($Apellido)?><?php echo form_error('Apellido')?>
<br><br><br>
<?= form_label('Edad:','Edad')?> 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;<?=form_input($Edad)?><?php echo form_error('Edad')?>
<br><br><br>
<?= form_label('Sexo:','Sexo')?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;<?=form_input($Sexo)?><?php echo form_error('Sexo')?>
<br><br><br>
<?= form_label('Direccion:','Direccion')?>&nbsp;
<?=form_input($Direccion)?><?php echo form_error('Direccion')?>
<br><br><br>
<?= form_label('Email:','Email')?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?=form_input($Email)?><?php echo form_error('Email')?>
<br><br><br>
<?= form_label('Contraseña:','Contraseña')?>&nbsp;
<?=form_input($Contraseña)?><?php echo form_error('Contraseña')?>
<br><br><br>
<?= form_label('Repetir_contraseña:','Repetir_contraseña')?>&nbsp;&nbsp;
<?=form_input($Repetir_contraseña)?><?php echo form_error('Repetir_contraseña')?>
<br><br><br>
<?= form_label('Nickname:','Nickname')?>&nbsp;&nbsp;
<?=form_input($Nickname)?><?php echo form_error('Nickname')?>
<br><br><br>
<center><?=form_submit('','Registrar Datos') ?></center>
<?= form_close()?>
<p><u>Developers: Hernan and Socrates</u></p>
</body>
</html>
