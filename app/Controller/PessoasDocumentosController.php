<?php
App::uses('AppController', 'Controller');
/**
 * PessoasDocumentos Controller
 *
 * @property PessoasDocumento $PessoasDocumento
 */
class PessoasDocumentosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PessoasDocumento->recursive = 0;
		$this->set('pessoasDocumentos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PessoasDocumento->id = $id;
		if (!$this->PessoasDocumento->exists()) {
			throw new NotFoundException(__('Pessoas documento inválido'));
		}
		$this->set('pessoasDocumento', $this->PessoasDocumento->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($pessoaId) {
		if ($this->request->is('post')) {
			$this->PessoasDocumento->create();
			if ($this->PessoasDocumento->save($this->request->data)) {
				$this->Session->setFlash(__('O pessoas documento foi salvo.'));
				$this->redirect(array('controller' => 'pessoas', 'action' => 'view', $pessoaId));
			} else {
				$this->Session->setFlash(__('O pessoas documento não pode ser salvo. Por favor, tente novamente.'));
			}
		}else{
		    $pessoa = $this->PessoasDocumento->Pessoa->findById($pessoaId);
		    $this->set('pessoa', $pessoa);
		}
		$tipoDocumentos = $this->PessoasDocumento->TipoDocumento->find('list');
		$this->set('tipoDocumentos', $tipoDocumentos);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PessoasDocumento->id = $id;
		if (!$this->PessoasDocumento->exists()) {
			throw new NotFoundException(__('Pessoas documento inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PessoasDocumento->save($this->request->data)) {
				$this->Session->setFlash(__('O pessoas documento foi salvo.'));
				$this->redirect(array('controller' => 'pessoas', 'action' => 'view', $this->request->data['PessoasDocumento']['pessoa_id']));
			} else {
				$this->Session->setFlash(__('O pessoas documento não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->PessoasDocumento->read(null, $id);
			$pessoa = array('Pessoa' => $this->request->data['Pessoa']);
		    $this->set('pessoa', $pessoa);
		}
		$tipoDocumentos = $this->PessoasDocumento->TipoDocumento->find('list');
		$this->set('tipoDocumentos', $tipoDocumentos);

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
		$this->PessoasDocumento->id = $id;
		if (!$this->PessoasDocumento->exists()) {
			throw new NotFoundException(__('pessoas documento inválido.'));
		}
		if ($this->PessoasDocumento->delete()) {
			$this->Session->setFlash(__('Pessoas documento excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pessoas documento não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}
