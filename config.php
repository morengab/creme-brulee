<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    $medoo_server = 'http://www.gabymorenocesar.com/ttr/downloads/medoo.min.php';
    $medoo_local = '/Applications/MAMP/htdocs/creme-brulee/downloads/medoo.min-local.php';

    // $server_name = 'd53482573gb7uf';
    // $local_name = 'macadamia_cluster_02';

    // require_once $medoo_local; 
    require_once $medoo_server; 

    function newMedoo() {
        return new medoo('d53482573gb7uf');
    }
 ?>