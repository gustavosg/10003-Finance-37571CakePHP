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
        $result = array();
        for ($month = 1; $month <= 12; $month++) {
            if (strlen($month) == 1)
                $month = '0' . $month;
            $query = "SELECT (SUM(ex.ammount) - SUM(br.ammount)) as total , br.created as data
						FROM budget_Records br, expenditure ex 
						where SUBSTRING(br.created, 6, 2) = '" . $month .
                    "' and SUBSTRING(br.created, 6, 2) = SUBSTRING(ex.created, 6, 2)";
            $this->set('Expenditure', $this->Expenditure->query($query));
            foreach ($this->Expenditure->query($query) as $records) {
                $result[$month][0] = $records[0]['total'];
                $result[$month][1] = $records['br']['data'];
            }
        }
        return $this->set('result', $result);
    }

    public function GastoContaMes() {
        $result = array();
        for ($month = 1; $month <= 12; $month++) {
            if (strlen($month) == 1)
                $month = '0' . $month;
            $query = "SELECT EX.account_id, EX.ammount, EX.description, AC.id, AC.name  FROM expenditure EX, accounts AC WHERE month(EX.created) = '" . $month . "'
                order by AC.name";

            //SELECT EX.account_id, EX.description, AC.id, AC.name  FROM expenditure EX, accounts AC WHERE month(EX.created) = '".$month."'
            //and EX.account_ID = '".$this->accountId."' and EX.account_id = AC.id"

            $this->set('Expenditure', $this->Expenditure->query($query));
            foreach ($this->Expenditure->query($query) as $records) {
                $result[$month][0] = $records['EX']['account_id'];
                $result[$month][1] = $records['AC']['name'];
                $result[$month][2] = $records['EX']['ammount'];
                $result[$month][3] = $records['EX']['description'];
            }
        }
        return $this->set('result', $result);
    }

    public function GastoCategoriaMes() {
        $result = array();
        for ($month = 1; $month <= 12; $month++) {
            if (strlen($month) == 1)
                $month = '0' . $month;
            $query = "SELECT EX.ammount, EX.sub_category_id, EX.description, SBC.category_id, CA.id, CA.name  FROM expenditure EX, 
			sub_categories SBC, categories CA WHERE month(EX.created) = '" . $month . "' and 
                            EX.sub_category_id = SBC.id and SBC.category_id = CA.id order by CA.id";

            $this->set('Expenditure', $this->Expenditure->query($query));
            foreach ($this->Expenditure->query($query) as $records) {
                $result[$month][0] = $records['CA']['id'];
                $result[$month][1] = $records['EX']['sub_category_id'];
                $result[$month][2] = $records['EX']['ammount'];
                $result[$month][3] = $records['EX']['description'];
            }
        }
        return $this->set('result', $result);
    }

}

?>
