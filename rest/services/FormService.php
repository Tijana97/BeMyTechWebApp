<?php

require_once "BaseService.php";
require_once __DIR__."/../dao/FormDao.class.php";

class FormService extends BaseService {
    public function __construct() {
        parent::__construct(new FormDao);
    }
}
?>