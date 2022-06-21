<?php 
// mvc(모델-뷰-컨트롤러)패턴
// 뷰에만 html이 들어간다.
// 컨트롤러는 연결역할
// http://localhost/board/list -> http://localhost/index.php?url=board/list의 형태로 변환
// .htaccess가 한 파일로 몰리도록 해준것
    require_once 'application/libs/Config.php';
    require_once 'application/libs/Autoload.php';
    new application\libs\Application();
