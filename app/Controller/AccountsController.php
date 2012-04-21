<?php

/**
 * Description of AccountsController
 *
 * @author Gustavo Souza Gonçalves
 */
class AccountsController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'Accounts';
    public $components = array('Session');

    // TODO Gustavo: Como salvar campo modified = null

    /**
     * Adiciona nova conta 
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->request->data['Accounts']['modified'] = null;
            if ($this->Account->save($this->request->data)) {
                $this->Session->setFlash('Sua conta foi gravada.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    /**
     * Edição de Conta
     * @param type $id 
     */
    public function edit($id = null) {
        $this->Account->id = $id;
        if ($this->request->is('post')) {
            $this->request->data = $this->Account->read();
        } else {
            if ($this->Account->save($this->request->data)) {
                $this->Session->setFlash('Sua conta foi atualizada.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function delete($id = null) {
        $this->Account->id = $id;
        if ($this->request->is('post')) {
            $this->request->data = $this->Account->read();
        } else {
            if ($this->Account->delete($id)) {
                $this->Session->setFlash('Sua conta de id: '. $id .' foi removida.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    /**
     * Geração de relatório 
     */
    public function report() {
        $this->set('Accounts', $this->Account->find('all'));
    }

    /**
     * Busca uma Account
     * @param type $id 
     */
    public function find($id = null) {
        if ($this->request->is('post')) {
            $this->Account->id = $id;
            $this->set('Account', $this->Account->read());
        }
    }

    public function index() {
        $this->set('Account', $this->Account->find('all'));
    }

}

?>
