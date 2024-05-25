<?php
// First Check if file exists
// $response = array('status'=>false);
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
header('Content-type:application/json;charset=utf-8');

$file = $_POST['file'];
$filepath =dirname(__FILE__) . '/files/'.$file;
$id = $_POST['id'];

if(file_exists($filepath)) {
    unlink($filepath);
    echo json_encode([
        'status' => true,
        'msg' => 'Data berhasil dihapus!'
    ]);
    exit;
} 
     
?>