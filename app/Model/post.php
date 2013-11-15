<?php
App::uses('AppModel', 'Model');
class Comment extends AppModel {
public $displayField = 'author';
public $validate = array(
'author' => array(
'notEmpty' => array(
'rule' => array('notEmpty'),
),
),
'comment' => array(
'notEmpty' => array(
'rule' => array('notEmpty'),
),
),
);
public $belongsTo = array(
'Post' => array(
'className' => 'Post',
'foreignKey' => 'post_id'
)
);
}