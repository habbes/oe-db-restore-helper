<?php

if (!file_exists('instances.txt')) {
    echo "ERROR: instances.txt file required\n";
    exit;
}

$contents = file_get_contents('instances.txt');

$instances = explode('\n', $contents);

foreach ($instances as $instance) {
    $instance = trim($instance);
    if (!trim($instance)) {
        continue;
    }
    echo "Instance: $instance\n";
    chdir($instance);
    $import_script = $instance.DIRECTORY_SEPARATOR."db_restore".DIRECTORY_SEPARATOR."run_db_restore.php";
    shell_exec("php $import_script");
}