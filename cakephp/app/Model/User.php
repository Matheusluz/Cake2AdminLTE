<?php
class User extends AppModel {
    public $name = 'User';
	public $useTable = 'user';
	
	public $hasMany = array(
	
	);
	
	public $belongsTo = array(
		 /*'PedidoDeVenda' => array(
			 'className' => 'PedidoDeVenda',
			 'foreignKey' => 'pedido_de_venda_id'
		 )*/
	);
	
	public $validate = array(
		'nome' => array(
			'required' => array(
				'rule'			=> 'notEmpty',
				'message'		=> "Preenchimento Obrigatório!",
				'required'		=> true,
			)
		),
		'senha' => array(
			'password' => array(
		        'rule'    => array('lengthBetween', 3, 15),
		        'message' => 'Senha deve ter entre 3 e 15 caracteres.'
		    )
		),
		'email' => array(
			'required' => array(
				'rule'			=> 'notEmpty',
				'message'		=> "Preenchimento Obrigatório!",
				'required'		=> true,
			),
			'email' => array(
				'rule' => 'email',
				'message' => 'E-mail inválido!'
			),
			'unique' => array(
		        'rule' => 'isUnique',
		        'required' => 'create',
		        'message' => 'Esse e-mail está sendo utilizado!'
		    ),
		),
	);
}