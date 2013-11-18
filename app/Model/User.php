<?php
App::uses('AppModel', 'Model');

App::uses('AuthComponent', 'Controller/Component');

/**
 * User Model
 *
 * @property Project $Project
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
        public $displayField = 'email';

/**
 * Validation rules
 *
 * @var array
 */
        public $validate = array(
                'id' => array(
                        'numeric' => array(
                                'rule' => array('numeric'),
                                //'message' => 'Your custom message here',
                                //'allowEmpty' => false,
                                //'required' => false,
                                //'last' => false, // Stop validation after this rule
                                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                        ),
                ),
                'email' => array(
                        'required' => array(
        'rule' => array('notEmpty'),
        'message' => 'A email is required'
      ),
      'unique' => array(
        'rule' => 'isUnique',
        'required' => 'create'
            ),
                        'notEmpty' => array(
                                'rule' => array('notEmpty'),
                                //'message' => 'Your custom message here',
                                //'allowEmpty' => false,
                                //'required' => false,
                                //'last' => false, // Stop validation after this rule
                                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                        ),
                        'email' => array(
                                'rule' => array('email'),
                                //'message' => 'Your custom message here',
                                //'allowEmpty' => false,
                                //'required' => false,
                                //'last' => false, // Stop validation after this rule
                                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                        ),
                ),
                'password' => array(
                        'required' => array(
        'rule' => array('notEmpty'),
        'message' => 'A email is required'
      ),
                        'notEmpty' => array(
                                'rule' => array('notEmpty'),
                                //'message' => 'Your custom message here',
                                //'allowEmpty' => false,
                                //'required' => false,
                                //'last' => false, // Stop validation after this rule
                                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                        ),
                ),
                'first_name' => array(
                        'required' => array(
        'rule' => array('notEmpty'),
        'message' => 'A email is required'
      ),
                        'notEmpty' => array(
                                'rule' => array('notEmpty'),
                                //'message' => 'Your custom message here',
                                //'allowEmpty' => false,
                                //'required' => false,
                                //'last' => false, // Stop validation after this rule
                                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                        ),
                ),
                'last_name' => array(
                        'required' => array(
        'rule' => array('notEmpty'),
        'message' => 'A email is required'
      ),
                        'notEmpty' => array(
                                'rule' => array('notEmpty'),
                                //'message' => 'Your custom message here',
                                //'allowEmpty' => false,
                                //'required' => false,
                                //'last' => false, // Stop validation after this rule
                                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                        ),
                ),
                'is_active' => array(
                        'boolean' => array(
                                'rule' => array('boolean'),
                                //'message' => 'Your custom message here',
                                //'allowEmpty' => false,
                                //'required' => false,
                                //'last' => false, // Stop validation after this rule
                                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                        ),
                ),
                'is_admin' => array(
                        'boolean' => array(
                                'rule' => array('boolean'),
                                //'message' => 'Your custom message here',
                                //'allowEmpty' => false,
                                //'required' => false,
                                //'last' => false, // Stop validation after this rule
                                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                        ),
                ),
                'created' => array(
                        'datetime' => array(
                                'rule' => array('datetime'),
                                //'message' => 'Your custom message here',
                                //'allowEmpty' => false,
                                //'required' => false,
                                //'last' => false, // Stop validation after this rule
                                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                        ),
                ),
                'modified' => array(
                        'datetime' => array(
                                'rule' => array('datetime'),
                                //'message' => 'Your custom message here',
                                //'allowEmpty' => false,
                                //'required' => false,
                                //'last' => false, // Stop validation after this rule
                                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                        ),
                ),
        );

        //The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
        public $hasMany = array(
                'Project' => array(
                        'className' => 'Project',
                        'foreignKey' => 'user_id',
                        'dependent' => false,
                        'conditions' => '',
                        'fields' => '',
                        'order' => '',
                        'limit' => '',
                        'offset' => '',
                        'exclusive' => '',
                        'finderQuery' => '',
                        'counterQuery' => ''
                )
        );

        public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
        }

}