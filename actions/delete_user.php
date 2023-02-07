<?php
require_once '../config/config.php';

$id = $_GET['id'];
$delete = delete('users', ['id' => $id]);
if ($delete) {
    setFlash('success', 'Deleted Sucessfully'); //set message
    redirect('manage_user');
} else {
    setFlash('failed', 'Deletion failed'); //set message
    redirect('manage_user');
    
    header("location:manage_user.php");
}
