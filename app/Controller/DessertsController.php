<?php
App::uses('AppController', 'Controller');
/**
 * Desserts Controller
 *
 * @property Dessert $Dessert
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DessertsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dessert->recursive = 0;
		$this->set('desserts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dessert->exists($id)) {
			throw new NotFoundException(__('Invalid dessert'));
		}
		$options = array('conditions' => array('Dessert.' . $this->Dessert->primaryKey => $id));
		$this->set('dessert', $this->Dessert->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dessert->create();
			if ($this->Dessert->save($this->request->data)) {
				$this->Session->setFlash(__('The dessert has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dessert could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Dessert->exists($id)) {
			throw new NotFoundException(__('Invalid dessert'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dessert->save($this->request->data)) {
				$this->Session->setFlash(__('The dessert has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dessert could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dessert.' . $this->Dessert->primaryKey => $id));
			$this->request->data = $this->Dessert->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Dessert->id = $id;
		if (!$this->Dessert->exists()) {
			throw new NotFoundException(__('Invalid dessert'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Dessert->delete()) {
			$this->Session->setFlash(__('The dessert has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dessert could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function search() {
		$this->viewClass = 'Json'; 
		$desserts = $this->Dessert->find('all', [
		]); //array()
		$this->set("desserts", $desserts);
		$this->set('_serialize', ['desserts']);
	}
}
