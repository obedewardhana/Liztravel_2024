<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-type:application/json;charset=utf-8');
$id = $_GET['id'];
$path = array();
$file = array();
$filename = array();
foreach (glob($directory = dirname(__FILE__) . '/files/*.*') as $url) {
    $first = substr($url, strrpos("/$url", '/'));
    $idfile = strtok($first, '_');
    $fn = explode('_', $first, 3)[2];
    if (strpos($url, $id)) {
        $filename[] = $fn;
        $file[] = $first;
    }
}

echo json_encode([
    'status' => 'ok',
    'id' => $id,
    'filename' => $filename,
    'file' => $file
]);
?>