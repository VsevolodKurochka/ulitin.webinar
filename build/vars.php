<?php
	$form = array(
		array(
			'name'	=> 'first_name',
			'value'	=> '',
			'type'	=> 'text',
			'label'	=> 'Имя',
			'attributes' 			=> array(
				'placeholder' 	=> 'Введите ваше имя',
				'class' 				=> 'form__control',
				'required'			=> 'required'
			)
		),
		array(
			'name'	=> 'email',
			'value'	=> '',
			'type'	=> 'email',
			'label'	=> 'Email',
			'attributes' 			=> array(
				'placeholder' 	=> 'Введите вашу почту',
				'class' 				=> 'form__control',
				'required'			=> 'required'
			)
		),
		array(
			'name'	=> 'custom_mobile_phone',
			'value'	=> '',
			'type'	=> 'phone',
			'label'	=> 'Телефон',
			'attributes' 			=> array(
				'placeholder' 	=> '+ 7 ( _',
				'class' 				=> 'form__control'
			)
		)
	);
?>