<p><center><strong><big>Ingrese sus Datos Dueño nuevo</big></strong></center></p>
<?= form_open("/central/recibirdatos4")  ?>
<?php
$Nombres = array('name'=>'Nombres','placeholder'=>'Ingrese su nombre');
$Apellidos = array('name'=>'Apellidos','placeholder'=>'Ingrese su apellido');
$Edades = array('name'=>'Edades','placeholder'=>'Ingrese su edad');
$Sexos =  array('name'=>'Sexos','placeholder'=>'Ingrese su sexo');
$Direcciones = array('name'=>'Direcciones','placeholder'=>'Ingrese su direccion');
$Emailes = array('name'=>'Emailes','placeholder'=>'Ingrese su Email');
$Contraseñas =  array('name'=>'Contraseñas','placeholder'=>'Ingrese su contraseña');
$Repetir_contraseñas =  array('name'=>'Repetir_contraseñas','placeholder'=>'Ingrese su contraseña de nuevo');
$Nicknames =  array('name'=>'Nicknames','placeholder'=>'Ingrese su Nickname');
$Nombre_barberia =  array('name'=>'Nombre_barberia','placeholder'=>'Ingrese su Nickname');
?>
<?= form_label('Nombre:','Nombre')?> &nbsp;
<?=form_input($Nombres)?><?php echo form_error('Nombres')?>
<br><br><br>
<?= form_label('Apellido:','Apellido')?> &nbsp;
<?=form_input($Apellidos)?><?php echo form_error('Apellidos')?>
<br><br><br>
<?= form_label('Edad:','Edad')?> 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;<?=form_input($Edades)?><?php echo form_error('Edades')?>
<br><br><br>
<?= form_label('Sexo:','Sexo')?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;<?=form_input($Sexos)?><?php echo form_error('Sexos')?>
<br><br><br>
<?= form_label('Direccion:','Direccion')?>&nbsp;
<?=form_input($Direcciones)?><?php echo form_error('Direcciones')?>
<br><br><br>
<?= form_label('Email:','Email')?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?=form_input($Emailes)?><?php echo form_error('Emailes')?>
<br><br><br>
<?= form_label('Contraseña:','Contraseña')?>&nbsp;
<?=form_input($Contraseñas)?><?php echo form_error('Contraseñas')?>
<br><br><br>
<?= form_label('Repetir_contraseña:','Repetir_contraseña')?>&nbsp;&nbsp;
<?=form_input($Repetir_contraseñas)?><?php echo form_error('Repetir_contraseñas')?>
<br><br><br>
<?= form_label('Nickname:','Nickname')?>&nbsp;&nbsp;
<?=form_input($Nicknames)?><?php echo form_error('Nicknames')?>
<br><br><br>
<?= form_label('Nombre barberia:','Nombre_barberia')?>&nbsp;&nbsp;
<?=form_input($Nombre_barberia)?><?php echo form_error('Nombre_barberia') ?>
<br><br><br>
<center><?=form_submit('','Registrar Datos') ?></center>
<?= form_close()?>
<p><u>Developers: Hernan and Socrates</u></p>
</body>
</html>
