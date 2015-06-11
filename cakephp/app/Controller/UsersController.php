<?php
class UsersController extends AppController {
	var $name = 'Users';
	var $helpers = array('Html', 'Form');
	
	function consultar(){
		$arrayUsers = $this->User->find('all');
		$this->set('arrayUsers', $arrayUsers);
	}
	
	function adicionar($id = null){
		if(isset($this->data) && !empty($this->data)){
			if($this->User->saveAll($this->data)){
				$this->redirect('consultar');
			}
		}
		if(!empty($id)){
			$user = $this->User->find('first', array(
				'conditions' => array('User.id' => $id),
				'recursive' => -1
			));
			$this->request->data = $user;
			$this->render('adicionar');
		}
	}
	
	function editar($id){
		$this->adicionar($id);
	}
	
	function deletar($id){
		$this->User->delete($id);
		$this->redirect('consultar');
	}
}
