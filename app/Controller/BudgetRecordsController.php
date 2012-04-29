<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BudgetRecordRecordsController
 *
 * @author Gustavo Souza Gonçalves
 */
class BudgetRecordsController extends AppController{
    public $helpers = array('Html', 'Form');
    public $name = 'BudgetRecords';
    public $components = array('Session');

    // TODO Gustavo: Como salvar campo modified = null

    /**
     * Adiciona nova SubCategoria 
     */
    public function add() {
        if ($this->request->is('post')) {
            if ($this->BudgetRecord->save($this->request->data)) {
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
        $this->BudgetRecord->id = $id;
        if ($this->request->is('post')) {
            $this->request->data = $this->BudgetRecord->read();
        } else {
            if ($this->BudgetRecord->save($this->request->data)) {
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
        $this->BudgetRecord->id = $id;
        if ($this->request->is('post')) {
            $this->request->data = $this->BudgetRecord->read();
        } else {
            if ($this->BudgetRecord->delete($id)) {
                $this->Session->setFlash('Sua SubCategoria de id: ' . $id . ' foi removida.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    /**
     * Geração de relatório 
     */
    public function report() {
        $this->set('BudgetRecords', $this->BudgetRecord->find('all'));
    }

    /**
     * Busca uma SubCategorie
     * @param type $id 
     */
    public function find($id = null) {
        $this->BudgetRecord->id = $id;
        $this->set('BudgetRecord', $this->BudgetRecord->read());
    }

    public function index() {
        $this->set('BudgetRecords', $this->BudgetRecord->find('all'));
    }
}

?>
