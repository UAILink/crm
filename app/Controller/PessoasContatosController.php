<?php
App::uses('AppController', 'Controller');
/**
 * PessoasContatos Controller
 *
 * @property PessoasContato $PessoasContato
 */
class PessoasContatosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PessoasContato->recursive = 0;
		$this->set('pessoasContatos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PessoasContato->id = $id;
		if (!$this->PessoasContato->exists()) {
			throw new NotFoundException(__('Pessoas contato inválido'));
		}
		$this->set('pessoasContato', $this->PessoasContato->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($pessoaId) {
		if ($this->request->is('post')) {
			$this->PessoasContato->create();
			if ($this->PessoasContato->save($this->request->data)) {
				$this->Session->setFlash(__('O pessoas contato foi salvo.'));
				$this->redirect(array('controller' => 'pessoas', 'action' => 'view', $pessoaId));
			} else {
				$this->Session->setFlash(__('O pessoas contato não pode ser salvo. Por favor, tente novamente.'));
			}
		}else{
		    $pessoa = $this->PessoasContato->Pessoa->findById($pessoaId);
		    $this->set('pessoa', $pessoa);
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PessoasContato->id = $id;
		if (!$this->PessoasContato->exists()) {
			throw new NotFoundException(__('Pessoas contato inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PessoasContato->save($this->request->data)) {
				$this->Session->setFlash(__('O pessoas contato foi salvo.'));
				$this->redirect(array('controller' => 'pessoas', 'action' => 'view', $this->request->data['PessoasEndereco']['pessoa_id']));
			} else {
				$this->Session->setFlash(__('O pessoas contato não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->PessoasContato->read(null, $id);			
			$pessoa = array('Pessoa' => $this->request->data['Pessoa']);
		    $this->set('pessoa', $pessoa);
		}
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
		$this->PessoasContato->id = $id;
		if (!$this->PessoasContato->exists()) {
			throw new NotFoundException(__('pessoas contato inválido.'));
		}
		if ($this->PessoasContato->delete()) {
			$this->Session->setFlash(__('Pessoas contato excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pessoas contato não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}
