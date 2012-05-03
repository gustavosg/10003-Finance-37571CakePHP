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
class BudgetRecordsController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'BudgetRecords';
    public $components = array('Session');

    // TODO Gustavo: Como salvar campo modified = null

    /**
     * Adiciona nova SubCategoria 
     */
    public function add() {

        $this->set('Budgets', $this->BudgetRecord->Budgets->find('list'));
        $this->set('SubCategory', $this->BudgetRecord->SubCategory->find('list'));

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
        //Alimenta Select List Box 
        $this->set('Budgets', $this->BudgetRecord->Budgets->find('list'));
        $this->set('SubCategory', $this->BudgetRecord->SubCategory->find('list'));

        $this->BudgetRecord->id = $id;

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->BudgetRecord->save($this->request->data)) {
                $this->Session->setFlash('Seu Item de Orçamento de ID: ' . $id . ' foi atualizado.');
                $this->redirect(array('action' => 'index'));
            }
        } else {
            $this->request->data = $this->BudgetRecord->read(null, $id);
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
                $this->Session->setFlash('Seu Item de Orçamento de ID: ' . $id . ' foi removido.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    /**
     * Geração de relatório 
     */
    public function report() {
        $this->set('Budgets', $this->BudgetRecord->Budgets->find('list'));
        $this->set('SubCategory', $this->BudgetRecord->SubCategory->find('list'));
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
        //$this->set('BudgetRecords', $this->BudgetRecord->find('all'));
    }

    public function TotalPrevisto() {
        $this->set('BudgetRecord', $this->BudgetRecord->query('SELECT SUM(br.ammount) FROM budget_Records AS br'));
    }

    public function GastoMes($month = null) {
        $month = 0;
        $result = array();
        for ($month = 1; $month <= 12; $month++) {
            if (strlen($month) == 1)
                $month = '0' . $month;
            $query = "SELECT SUM(br.ammount) as total, br.created as data FROM budget_Records as br where SUBSTRING(br.created, 6, 2) between '" . $month . "' and '" . $month."'";
            $this->set('BudgetRecord', $this->BudgetRecord->query($query));
            foreach ($this->BudgetRecord->query($query) as $records) {
                $result[$month] = $records[0]['total'];
                $result[$month] = $records['br']['data'];
            }
            $this->set('Tudo', $result);
        }
        return $result;
    }

}

?>
