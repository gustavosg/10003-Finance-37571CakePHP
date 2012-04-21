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
    public function add() {
        if ($this->request->is('post')) {
            $this->request->data['Accounts']['modified'] = null;
            if ($this->Account->save($this->request->data)) {
                $this->Session->setFlash('Sua conta foi gravada.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function edit() {
        
    }

    public function report() {
        $this->set('Accounts', $this->Account->find('all'));
    }


    public function find($id = null) {
        $this->Account->id = $id;
        $this->set('Account', $this->Account->read());
    }

    public function index() {
        $this->set('Account', $this->Account->find('all'));
    }

}

?>
