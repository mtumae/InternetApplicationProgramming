<?php
require_once 'conf.php';
$dirs = ['layout', 'forms', 'hello'];


spl_autoload_register(function ($class) use ($dirs) {
    foreach ($dirs as $dir) {
        $file = __DIR__ . "/$dir/$class.php";
        if (file_exists($file)) {
            //print"<p>Found file: $file</p>";
            require_once $file;
            return;
        }
    }
});


// $hello = new hello();
// $form = new forms();
// $layout = new layout();
