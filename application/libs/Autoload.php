<?php
    spl_autoload_register(function ($path) {
        $path = str_replace('\\','/',$path);
        $paths = explode('/', $path);
        if (preg_match('/model/', strtolower($paths[1]))) {
            $className = 'models';
        } else if (preg_match('/controller/',strtolower($paths[1]))) {
            $className = 'controllers';
        } else {
            $className = 'libs';
        }

        $loadpath = $paths[0].'/'.$className.'/'.$paths[2].'.php';
        
       // echo 'autoload $path : ' . $loadpath . '<br>';
        
        if (!file_exists($loadpath)) {
            echo " --- autoload : file not found. ($loadpath) ";
            exit();
        }
        require_once $loadpath;
        // require_once는 클래스로 만들어 놓은 파일을 읽어서 사용함 
        // include_once와 require_once의 차이_once : 같은 파일을 반복적으로 읽지 않게 함
        // include_once : 오류가 났을 때 경고만 하고 처리는 계속
        // require_once : 오류가 났을 때 처리는 중단
    });
