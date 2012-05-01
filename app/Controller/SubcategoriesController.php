<?php

/**
 * Description of SubSubCategoriesController
 *
 * @author Gustavo Souza Gonçalves
 */
class SubCategoriesController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'SubCategories';
    public $components = array('Session');

    // TODO Gustavo: Como salvar campo modified = null

    /**
     * Adiciona nova SubCategoria 
     */
    public function add() {
        //Alimenta Select List Box com todas as Categorias
        $this->set('Category', $this->SubCategory->Category->find('list'));

        if ($this->request->is('post')) {
            if (!empty($this->request->data)) {
                $this->SubCategory->save($this->request->data);
                $this->Session->setFlash('Sua SubCategoria foi gravada.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    /**
     * Edição de SubCategoria
     * @param type $id 
     */
    public function edit($id = null) {

        //Alimenta Select List Box com todas as Categorias
        $this->set('Category', $this->SubCategory->Category->find('list'));

        $this->SubCategory->id = $id;

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->SubCategory->save($this->request->data)) {
                $this->Session->setFlash('Sua SubCategoria foi atualizada.');
                $this->redirect(array('action' => 'index'));
            }
        } else {
            $this->request->data = $this->SubCategory->read(null, $id);
        }
    }

    /**
     * Remove SubCategoria
     * @param type $id 
     */
    public function delete($id = null) {
        $this->SubCategory->id = $id;
        if ($this->request->is('post')) {
            $this->request->data = $this->SubCategory->read();
        } else {
            if ($this->SubCategory->delete($id)) {
                $this->Session->setFlash('Sua SubCategoria de id: ' . $id . ' foi removida.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    /**
     * Geração de relatório 
     */
    public function report() {
        $this->set('Category', $this->SubCategory->Category->find('all'));
        $this->set('SubCategories', $this->SubCategory->find('all'));
    }

    /**
     * Busca uma SubCategorie
     * @param type $id 
     */
    public function find($id = null) {
        $this->SubCategory->id = $id;
        $this->set('SubCategory', $this->SubCategory->read());
    }

    /**
     * 
     */
    public function index() {
        
    }

}

?>
