<?php

/**
 * Description of CategoriesController
 *
 * @author Gustavo Souza Gonзalves
 */
class CategoriesController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'Categories';
    public $components = array('Session');

    // TODO Gustavo: Como salvar campo modified = null

    /**
     * Adiciona nova categoria 
     */
    public function add() {
        if ($this->request->is('post')) {
            if ($this->Category->save($this->request->data)) {
                $this->Session->setFlash('Sua categoria foi gravada.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    /**
     * Ediзгo de categoria
     * @param type $id 
     */
    public function edit($id = null) {
        $this->Category->id = $id;
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Category->save($this->request->data);
            $this->Session->setFlash('Sua Categoria foi atualizada.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->request->data = $this->Category->read(null, $id);
        }
    }

    /**
     * Remove categoria
     * @param type $id 
     */
    public function delete($id = null) {
        $this->Category->id = $id;
        if ($this->request->is('post')) {
            $this->request->data = $this->Category->read();
        } else {
            if ($this->Category->delete($id)) {
                $this->Session->setFlash('Sua categoria de id: ' . $id . ' foi removida.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    /**
     * Geraзгo de relatуrio 
     */
    public function report() {
        $this->set('Categories', $this->Category->find('all'));
    }

    /**
     * Busca uma Categorie
     * @param type $id 
     */
    public function find($id = null) {
        $this->Category->id = $id;
        $this->set('Category', $this->Category->read());
    }

    public function index() {
        $this->set('Categories', $this->Category->find('all'));
    }

}

?>