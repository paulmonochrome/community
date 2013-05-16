<?php
return array(
	'title' => 'Заполните поля, пожалуйста',
	'elements' => array(
		'first_name' => array(
			'type' => 'text',
			'maxlength' => 32,
		),
		'last_name' => array(
			'type' => 'text',
			'maxlength' => 32,
		),
		'email' => array(
			'type' => 'text',
			'maxlength' => 32,
		),
		'phone' => array(
			'type' => 'text',
			'maxlength' => 32,
		),
		'password' => array(
			'type' => 'password',
			'maxlength' => 32,
		),
		'passwordRepeat' => array(
			'type' => 'password',
			'maxlength' => 32,
		),
	),
	'buttons' => array(
		'register' => array(
			'type' => 'submit',
			'label' => 'Принять участие',
			'class' => 'btn btn-primary btn-large'
		),
	),
);