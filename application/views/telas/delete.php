<?php
/**
 * Created by PhpStorm.
 * User: caio
 * Date: 22/04/2016
 * Time: 17:56
 */
$iduser = $this->uri->segment(3);
if($iduser == NULL) redirect('crud/retrieve');
$query = $this->crud->get_byid($iduser)->row();
echo form_open("crud/delete/$iduser");
echo form_label('Nome completo:');
echo form_input(array('placeholder'=> 'Nome','id'=>'nome','name'=>'nome'),set_value('nome',$query->nome),'disabled="disabled"');
echo form_label('Email:');
echo form_input(array('placeholder'=> 'E-mail','id'=>'email','name'=>'email'),set_value('email',$query->email),'disabled="disabled"');
echo form_label('Login:');
echo form_input(array('placeholder'=> 'Login','id'=>'login','name'=>'login'),set_value('login',$query->login),'disabled="disabled"');
echo form_submit(array('name'=>'cadastrar'),'Excluir registro');
echo form_hidden('idusuario',$query->id);
echo form_close();