<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ExpendituresController
 *
 * @author Gustavo Souza Gonçalves
 */
class ExpendituresController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'Expenditures';
    public $components = array('Session');

    // TODO Gustavo: Como salvar campo modified = null

    /**
     * Adiciona nova Expendituria 
     */
    public function add() {

        $this->set('SubCategory', $this->Expenditure->SubCategory->find('list', array('fields' => array('SubCategory.id', 'SubCategory.Name'))));
        $this->set('Account', $this->Expenditure->Account->find('list', array('fields' => array('Account.id', 'Account.Name'))));

        if ($this->request->is('post')) {
            if ($this->Expenditure->save($this->request->data)) {
                $this->Session->setFlash('Sua despesa foi gravada.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    /**
     * Edição de Expendituria
     * @param type $id 
     */
    public function edit($id = null) {
        $this->set('SubCategory', $this->Expenditure->SubCategory->find('list', array('fields' => array('SubCategory.id', 'SubCategory.Name'))));
        $this->set('Account', $this->Expenditure->Account->find('list', array('fields' => array('Account.id', 'Account.Name'))));

        $this->Expenditure->id = $id;
        if (($this->request->is('post')) || ($this->request->is('put'))) {
            $this->Expenditure->save($this->request->data);
            $this->Session->setFlash('Sua Despesa de id: ' . $id . ' foi atualizada.');
            $this->redirect(array('action' => 'index'));
        }
        else
            $this->request->data = $this->Expenditure->read(null, $id);
    }

    /**
     * Remove Expendituria
     * @param type $id 
     */
    public function delete($id = null) {
        $this->Expenditure->id = $id;
        if ($this->request->is('post')) {
            $this->request->data = $this->Expenditure->read();
        } else {
            if ($this->Expenditure->delete($id)) {
                $this->Session->setFlash('Sua Despesa de id: ' . $id . ' foi removida.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    /**
     * Geração de relatório 
     */
    public function report() {
        $this->set('SubCategory', $this->Expenditure->SubCategory->find('list', array('fields' => array('SubCategory.id', 'SubCategory.Name'))));
        $this->set('Account', $this->Expenditure->Account->find('list', array('fields' => array('Account.id', 'Account.Name'))));
        $this->set('Expenditures', $this->Expenditure->find('all'));
    }

    /**
     * Busca uma Expenditurie
     * @param type $id 
     */
    public function find($id = null) {
        $this->set('SubCategory', $this->Expenditure->SubCategory->find('list', array('fields' => array('SubCategory.id', 'SubCategory.Name'))));
        $this->set('Account', $this->Expenditure->Account->find('list', array('fields' => array('Account.id', 'Account.Name'))));

        $this->Expenditure->id = $id;
        $this->set('Expenditures', $this->Expenditure->read());
    }

    public function index() {
        
    }

    public function SaldoMes() {
        $month = 0;
        for ($month = 1; $month <= 12; $month++) {
            if (strlen($month) == 1)
                $month = '0' . $month;
            $query = "SELECT (SUM(ex.ammount) - SUM(br.ammount)) as total , br.created as data
						FROM budget_Records br, expenditure ex 
						where SUBSTRING(br.created, 6, 2) = '" . $month .
                    "' and SUBSTRING(br.created, 6, 2) = SUBSTRING(ex.created, 6, 2)";
            $this->set('Expenditure', $this->Expenditure->query($query));

            foreach ($this->Expenditure->query($query) as $records) {
                $this->set(('Total'), $records[0]['total']);
                $this->set(('Data'), $records['br']['data']);
            }
        }
    }
    
    
    
}

?>
