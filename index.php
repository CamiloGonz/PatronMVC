<?php

    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', realpath(dirname(__FILE__)). DS);
    define('APP_PATH', ROOT. 'aplication'. DS);
    
    require_once APP_PATH. 'config.php';
    require_once APP_PATH. 'Request.php';
    require_once APP_PATH. 'Bootstrap.php';
    require_once APP_PATH. 'Controller.php';
    require_once APP_PATH. 'Model.php';
    require_once APP_PATH. 'View.php';
    require_once APP_PATH. 'Registro.php';
    
    echo '<pre>';print_r(get_required_files());
    
?>
