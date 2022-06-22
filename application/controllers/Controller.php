<?php
namespace application\controllers;

include_once "application/utils/SessionUtils.php";

abstract class Controller {
    public function __construct($action) {  
        // php는 생성자가 없으면 부모의 생성자를 불러온다.   
        $view = $this->$action();
        require_once $this->getView($view); 
    }
    
    protected function addAttribute($key, $val) {
        $this->$key = $val;
    }

    protected function getView($view) {
        if(strpos($view, "redirect:") === 0) {
            header('Location: ' . substr($view, 9));
            return;
        }
        return _VIEW . $view;
        // _VIEW: ""로 감싸져있지 않고 $도 없고 대문자면 상수다.
    }
}

