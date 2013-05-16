<?php
return array(
	'title' => 'Пожалуйста, представьтесь',
	'elements' => array(
		'email' => array(
			'type' => 'text',
			'maxlength' => 32,
		),
		'password' => array(
			'type' => 'password',
			'maxlength' => 32,
		),
	),
	'buttons' => array(
		'login' => array(
			'type' => 'submit',
			'label' => 'Войти',
			'class' => 'btn btn-primary btn-large'
		),
	),
);