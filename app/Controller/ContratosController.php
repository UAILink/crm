<?php
App::uses('AppController', 'Controller');
/**
 * Contratos Controller
 *
 * @property Contrato $Contrato
 */
class ContratosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Contrato->recursive = 0;
		$this->set('contratos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Contrato->id = $id;
		if (!$this->Contrato->exists()) {
			throw new NotFoundException(__('Contrato inválido'));
		}
		$this->set('contrato', $this->Contrato->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($pessoaId) {
		if ($this->request->is('post')) {
			$this->Contrato->create();
			if ($this->Contrato->save($this->request->data)) {
				$this->Session->setFlash(__('O contrato foi salvo.'));
				$this->redirect(array('controller' => 'pessoas', 'action' => 'view', $pessoaId));
			} else {
				$this->Session->setFlash(__('O contrato não pode ser salvo. Por favor, tente novamente.'));
			}
		}else{
		    $pessoa = $this->Contrato->Pessoa->findById($pessoaId);
		    $this->set('pessoa', $pessoa);
		}
		$produtos = $this->Contrato->Produto->find('list');
		$this->set(compact('produtos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Contrato->id = $id;
		if (!$this->Contrato->exists()) {
			throw new NotFoundException(__('Contrato inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contrato->save($this->request->data)) {
				$this->Session->setFlash(__('O contrato foi salvo.'));
				$this->redirect(array('controller' => 'pessoas', 'action' => 'view', $this->request->data['Contrato']['pessoa_id']));
			} else {
				$this->Session->setFlash(__('O contrato não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Contrato->read(null, $id);
			$pessoa = array('Pessoa' => $this->request->data['Pessoa']);
		    $this->set('pessoa', $pessoa);
		}		
		$produtos = $this->Contrato->Produto->find('list');
		$this->set(compact('produtos'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Contrato->id = $id;
		if (!$this->Contrato->exists()) {
			throw new NotFoundException(__('contrato inválido.'));
		}
		if ($this->Contrato->delete()) {
			$this->Session->setFlash(__('Contrato excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Contrato não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}
