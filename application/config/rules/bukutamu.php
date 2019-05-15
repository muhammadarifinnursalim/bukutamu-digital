<?php
	$config['bukutamu'] = [
		[
			'field' => 'nama',
			'label' => 'Nama Lengkap',
			'rules' => 'required|min_length[10]'
		],
		[
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|valid_email'
		],
		[
			'field' => 'komentar',
			'label' => 'Komentar',
			'rules' => 'required|min_length[10]'
		]
	];
