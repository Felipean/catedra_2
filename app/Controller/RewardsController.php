<?php
App::uses('AppController', 'Controller');
/**
 * Rewards Controller
 *
 * @property Reward $Reward
 * @property PaginatorComponent $Paginator
 */
class RewardsController extends AppController {

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
		$this->Reward->recursive = 0;
		$this->set('rewards', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reward->exists($id)) {
			throw new NotFoundException(__('Invalid reward'));
		}
		$options = array('conditions' => array('Reward.' . $this->Reward->primaryKey => $id));
		$this->set('reward', $this->Reward->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reward->create();
			if ($this->Reward->save($this->request->data)) {
				$this->Session->setFlash(__('The reward has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reward could not be saved. Please, try again.'));
			}
		}
		$projects = $this->Reward->Project->find('list');
		$this->set(compact('projects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Reward->exists($id)) {
			throw new NotFoundException(__('Invalid reward'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reward->save($this->request->data)) {
				$this->Session->setFlash(__('The reward has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reward could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reward.' . $this->Reward->primaryKey => $id));
			$this->request->data = $this->Reward->find('first', $options);
		}
		$projects = $this->Reward->Project->find('list');
		$this->set(compact('projects'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Reward->id = $id;
		if (!$this->Reward->exists()) {
			throw new NotFoundException(__('Invalid reward'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Reward->delete()) {
			$this->Session->setFlash(__('The reward has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reward could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Reward->recursive = 0;
		$this->set('rewards', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Reward->exists($id)) {
			throw new NotFoundException(__('Invalid reward'));
		}
		$options = array('conditions' => array('Reward.' . $this->Reward->primaryKey => $id));
		$this->set('reward', $this->Reward->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Reward->create();
			if ($this->Reward->save($this->request->data)) {
				$this->Session->setFlash(__('The reward has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reward could not be saved. Please, try again.'));
			}
		}
		$projects = $this->Reward->Project->find('list');
		$this->set(compact('projects'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Reward->exists($id)) {
			throw new NotFoundException(__('Invalid reward'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reward->save($this->request->data)) {
				$this->Session->setFlash(__('The reward has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reward could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reward.' . $this->Reward->primaryKey => $id));
			$this->request->data = $this->Reward->find('first', $options);
		}
		$projects = $this->Reward->Project->find('list');
		$this->set(compact('projects'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Reward->id = $id;
		if (!$this->Reward->exists()) {
			throw new NotFoundException(__('Invalid reward'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Reward->delete()) {
			$this->Session->setFlash(__('The reward has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reward could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
