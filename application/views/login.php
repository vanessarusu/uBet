<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	$attributes = array();
	echo form_open('Login/login');

	echo form_label('Username', 'username');
	echo '<br>';
	echo form_input('username');
	echo '<br>';

	echo form_label('Password', 'password');
	echo '<br>';
	echo form_password('password');
	echo '<br>';

	echo form_submit('submit', 'Login');
	echo form_close();

	echo validation_errors();
	
 ?>