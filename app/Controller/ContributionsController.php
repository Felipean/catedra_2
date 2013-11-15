<?php
App::uses('AppController', 'Controller');
/**
 * Contributions Controller
 *
 * @property Contribution $Contribution
 * @property PaginatorComponent $Paginator
 */
class ContributionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Contribution->recursive = 0;
		$this->set('contributions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Contribution->exists($id)) {
			throw new NotFoundException(__('Invalid contribution'));
		}
		$options = array('conditions' => array('Contribution.' . $this->Contribution->primaryKey => $id));
		$this->set('contribution', $this->Contribution->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contribution->create();
			if ($this->Contribution->save($this->request->data)) {
				$this->Session->setFlash(__('The contribution has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contribution could not be saved. Please, try again.'));
			}
		}
		$users = $this->Contribution->User->find('list');
		$rewards = $this->Contribution->Reward->find('list');
		$this->set(compact('users', 'rewards'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Contribution->exists($id)) {
			throw new NotFoundException(__('Invalid contribution'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contribution->save($this->request->data)) {
				$this->Session->setFlash(__('The contribution has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contribution could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contribution.' . $this->Contribution->primaryKey => $id));
			$this->request->data = $this->Contribution->find('first', $options);
		}
		$users = $this->Contribution->User->find('list');
		$rewards = $this->Contribution->Reward->find('list');
		$this->set(compact('users', 'rewards'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Contribution->id = $id;
		if (!$this->Contribution->exists()) {
			throw new NotFoundException(__('Invalid contribution'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Contribution->delete()) {
			$this->Session->setFlash(__('The contribution has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contribution could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Contribution->recursive = 0;
		$this->set('contributions', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Contribution->exists($id)) {
			throw new NotFoundException(__('Invalid contribution'));
		}
		$options = array('conditions' => array('Contribution.' . $this->Contribution->primaryKey => $id));
		$this->set('contribution', $this->Contribution->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Contribution->create();
			if ($this->Contribution->save($this->request->data)) {
				$this->Session->setFlash(__('The contribution has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contribution could not be saved. Please, try again.'));
			}
		}
		$users = $this->Contribution->User->find('list');
		$rewards = $this->Contribution->Reward->find('list');
		$this->set(compact('users', 'rewards'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Contribution->exists($id)) {
			throw new NotFoundException(__('Invalid contribution'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contribution->save($this->request->data)) {
				$this->Session->setFlash(__('The contribution has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contribution could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contribution.' . $this->Contribution->primaryKey => $id));
			$this->request->data = $this->Contribution->find('first', $options);
		}
		$users = $this->Contribution->User->find('list');
		$rewards = $this->Contribution->Reward->find('list');
		$this->set(compact('users', 'rewards'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Contribution->id = $id;
		if (!$this->Contribution->exists()) {
			throw new NotFoundException(__('Invalid contribution'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Contribution->delete()) {
			$this->Session->setFlash(__('The contribution has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contribution could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
