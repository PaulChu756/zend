<?php

class Application_Model_Guestbook
{
    protected $_comment;
    protected $_created;
    protected $_email;
    protected $_id;

    public function _set($name, $value);
    public function _get($name);

    public function setComment($text);
    public function getComment();

    public function setEmail($email);
    public function getEmail();

    public function setCreated($ts);
    public function getCreated();

    public function setId($id);
    public function getId();
}

class Application_Model_GuestbookMapper
{
    public function save(Application_Model_Guestbook $guestBook);
    public function find($id);
    public function fetchAll();
}

?>