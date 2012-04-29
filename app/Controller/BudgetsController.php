<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Budgets
 *
 * @author Gustavo Souza Gonçalves
 */
class BudgetsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $name = 'Budgets';
    public $components = array('Session');

    // TODO Gustavo: Como salvar campo modified = null

    /**
     * Adiciona nova SubCategoria 
     */
    public function add() {
        if ($this->request->is('post')) {
            if ($this->Budget->save($this->request->data)) {
                $this->Session->setFlash('Seu orçamento foi gravada.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    /**
     * Edição de SubCategoria
     * @param type $id 
     */
    public function edit($id = null) {
        $this->Budget->id = $id;
        if ($this->request->is('post')) {
            $this->request->data = $this->Budget->read();
        } else {
            if ($this->Budget->save($this->request->data)) {
                $this->Session->setFlash('Sua SubCategoria foi atualizada.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    /**
     * Remove SubCategoria
     * @param type $id 
     */
    public function delete($id = null) {
        $this->Budget->id = $id;
        if ($this->request->is('post')) {
            $this->request->data = $this->Budget->read();
        } else {
            if ($this->Budget->delete($id)) {
                $this->Session->setFlash('Sua SubCategoria de id: ' . $id . ' foi removida.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    /**
     * Geração de relatório 
     */
    public function report() {
        $this->set('Budgets', $this->Budget->find('all'));
    }

    /**
     * Busca uma SubCategorie
     * @param type $id 
     */
    public function find($id = null) {
        $this->Budget->id = $id;
        $this->set('Budget', $this->Budget->read());
    }

    public function index() {
        $this->set('Budgets', $this->Budget->find('all'));
    }
}

?>
