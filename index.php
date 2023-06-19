<?php
$path = parse_url($_SERVER['REQUEST_URI']);
$path = strtolower($path['path']);
$path = trim($path,'');

$systemFolders = [
    "sistema-erp-escola-do-funileiro",
    "sistema-erp-escola-do-mecanico",
    "sistema-erp-unimuniz",
    "portal-aluno-em",
    "sistema-erp-compacta"
];

foreach ($systemFolders as $key => $search) {
    if(preg_match("/{$search}/i", $path)) {
        require $search . '/public/index.php';
        die();
    }
}

if ($_SERVER["REMOTE_ADDR"] == "169.254.129.1") {

    /*
    $path = parse_url($_SERVER['REQUEST_URI']);
    $path = strtolower($path['path']);
    $path = trim($path,'');

    $_SERVER['HTTP_HOST']
    */

    var_dump($_SERVER);

    /*
    compacta.sis-impacta.com.br
    escoladofunileiro.sis-impacta.com.br
    escoladomecanico.sis-impacta.com.br
    unimuniz.sis-impacta.com.br
    */

    die();
}
?>