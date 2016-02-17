<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$attributes = array();
$birthyear = array();
	echo form_open('Login/create', $attributes);

	echo form_label('First Name','fname');
	echo '<br>';
	echo form_input('fname');
	echo '<br>';

	echo form_label('Last Name', 'lname');
	echo '<br>';
	echo form_input('lname');
	echo '<br>';

	echo form_label('Email Address', 'email');
	echo '<br>';
	echo form_input('email');
	echo '<br>';

	echo form_label('Username', 'username');
	echo '<br>';
	echo form_input('username');
	echo '<br>';

	echo form_label('Password', 'password');
	echo '<br>';
	echo form_password('password');
	echo '<br>';

	echo form_label('Confirm Password', 'passwordConfirm');
	echo '<br>';
	echo form_password('passwordConfirm');
	echo '<br>';

	// echo form_label('Birthday', 'birthday');
	// echo '<br>';
	// echo '<input type="date" name="birthday">';
	// echo '<input type="date">';
	// echo form_dropdown('passwordConfirm');
	// echo '<br>';


	echo form_hidden('profile_img', 'defaultImg.png');
	echo form_hidden('currency', '50');
	echo '<br>';

	echo form_submit('submit', 'Register');
	echo form_close();

	echo '<br>';
	echo anchor('Login/login', 'Already a uBet-er? Click here to login!');

	echo validation_errors();
 ?>