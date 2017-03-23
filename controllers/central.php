<?php

class Central extends CI_Controller{

function  __construct(){
parent::__construct();
$this->load->helper('form');
$this->load->helper('url');
$this->load->library('form_validation');
}

function index(){
$this->load->view('psl/decision1');
$this->load->view('psl/decision2');
}
function perfilU(){
$this->load->view('psl/decision1');
$this->load->view('psl/decision');

}
function perfilD(){
$this->load->view('psl/decision1');
$this->load->view('psl/decision3');

}

function nuevousuario(){
$this->load->view('psl/decision1');
$this->load->view('psl/formulario1');

}

function nuevodueno(){
$this->load->view('psl/decision1');
$this->load->view('psl/formulario4');

}

function habitualusuario(){
$this->load->view('psl/decision1');
$this->load->view('psl/formulario2');

}

function habitualdueno(){
$this->load->view('psl/decision1');
$this->load->view('psl/formulario3');

}


function recibirdatos4(){
$n=$this->input->post('Nombres');
$a=$this->input->post('Apellidos');
$e=$this->input->post('Edades');
$s=$this->input->post('Sexos');
$d=$this->input->post('Direcciones');
$e=$this->input->post('Emailes');
$c=$this->input->post('Contraseñas');
$r=$this->input->post('Repetir_contraseñas');
$ni=$this->input->post('Nicknames');
$no=$this->input->post('Nombre_barberia');

$this->form_validation->set_rules('Nombres','Nombres','required|min_length[3]');
$this->form_validation->set_rules('Apellidos','Apellidos','required|min_length[3]');
$this->form_validation->set_rules('Edades','Edades','required|integer|min_length[1]|max_length[3]');
$this->form_validation->set_rules('Sexos','Sexos','required|callback_compare[$s]');
$this->form_validation->set_rules('Direcciones','Direcciones','required|alpha_dash|min_length[3]');
$this->form_validation->set_rules('Emailes','emailes','required|valid_email');
$this->form_validation->set_rules('Contraseñas','Contraseñas','required|matches[Repetir_contraseñas]|min_length[3]|alpha_dash');
$this->form_validation->set_rules('Repetir_contraseñas','Repetir_contraseñas','required|min_length[3]|alpha_dash');
$this->form_validation->set_rules('Nicknames','Nicknames','required|min_length[3]|alpha_dash');
$this->form_validation->set_rules('Nombre_barberia','Nombre_barberia','required|min_length[3]|alpha_dash');

if ($this->form_validation->run() == True){
//echo "Datos Buenos";
$this->load->view('psl/decision1');
$this->load->view('psl/formulario3');

}
else {
$this->load->view('psl/formulario4');
}




}


function recibirdatos3(){
$em=$this->input->post('Emails');
$co=$this->input->post('Contraseñas');
$nic=$this->input->post('Nicknames');


$this->form_validation->set_rules('Email','emails','required|valid_email');
$this->form_validation->set_rules('Contraseña','Contraseñas','required|min_length[3]|alpha_dash');
$this->form_validation->set_rules('Nickname','Nicknames','required|min_length[3]|alpha_dash');

if ($this->form_validation->run() == True){
echo "Bienvenido Señor Dueño De Una Barberia";
}
else {
$this->load->view('psl/formulario3');
}





}


function recibirdatos2(){
$em=$this->input->post('Email');
$co=$this->input->post('Contraseña');
$nick=$this->input->post('Nickname');


$this->form_validation->set_rules('Email','email','required|valid_email');
$this->form_validation->set_rules('Contraseña','Contraseña','required|min_length[3]|alpha_dash');
$this->form_validation->set_rules('Nickname','Nickname','required|min_length[3]|alpha_dash');

if ($this->form_validation->run() == True){
echo "Bienvenido Señor Usuario-Cliente";
}
else {
$this->load->view('psl/formulario2');
}





}
function recibirdatos1(){
$no=$this->input->post('Nombre');
$ap=$this->input->post('Apellido');
$ed=$this->input->post('Edad');
$se=$this->input->post('Sexo');
$di=$this->input->post('Direccion');
$em=$this->input->post('Email');
$con=$this->input->post('Contraseña');
$re=$this->input->post('Repetir_contraseña');
$nick=$this->input->post('Nickname');


$this->form_validation->set_rules('Nombre','Nombre','required|min_length[3]');
$this->form_validation->set_rules('Apellido','Apellido','required|min_length[3]');
$this->form_validation->set_rules('Edad','Edad','required|integer|min_length[1]|max_length[3]');
$this->form_validation->set_rules('Sexo','Sexo','required|callback_compare[$se]');
$this->form_validation->set_rules('Direccion','Direccion','required|alpha_dash|min_length[3]');
$this->form_validation->set_rules('Email','email','required|valid_email');
$this->form_validation->set_rules('Contraseña','Contraseña','required|matches[Repetir_contraseña]|min_length[3]|alpha_dash');
$this->form_validation->set_rules('Repetir_contraseña','Repetir_contraseña','required|min_length[3]|alpha_dash');
$this->form_validation->set_rules('Nickname','Nickname','required|min_length[3]|alpha_dash');





if ($this->form_validation->run() == True){
//echo "Datos Buenos";
$this->load->view('psl/decision1');
$this->load->view('psl/formulario2');
}
else {
$this->load->view('psl/formulario1');
}




}

public function compare($se)
    {
        if (($se == 'masculino') or ($se == 'Masculino') or ($se == 'femenino') or ($se == 'Femenino'))
        {
            return True;
        }
        else
        {
            $this->form_validation->set_message('compare', 'The Sexo field is required.');
            return FALSE;
        }
    }





}




?>