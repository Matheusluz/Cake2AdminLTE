<?php
echo $this->Form->create('User');

echo $this->Form->input(
    'User.id',
    array(
    	'type' => 'hidden',
	)
);

echo $this->Form->input(
    'User.nome',
    array(
    	'type' => 'text',
    	'label' => 'Nome'
	)
);

echo $this->Form->input(
	'User.senha',
	array(
    	'type' => 'password',
    	'label' => 'Senha'
	)
);

echo $this->Form->input(
    'User.email',
    array(
    	'type' => 'text',
    	'label' => 'Email'
	)
);

echo $this->Form->label('User.situacao', 'Situação');
echo $this->Form->select(
	'User.situacao',
	array(1 => 'Ativo', 2 => 'Desativado'),
	array(
		'empty' => false,
		'label' => 'Situação'
	)
);

echo $this->Form->submit('Salvar');

echo $this->Form->end();
?>