<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/employee_cards/php/connection.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/employee_cards/php/Employee.php';
    
/* $mysql is ready */
$id = $_GET['id'];
$query = "SELECT * FROM employees WHERE id = $id";
$result = mysqli_query($mysqli, $query);

$rows = array();

while($row = mysqli_fetch_assoc($result)) {
    $rows[] = array(
    'id' => $row['id'], 
    'name' => $row['name'],
    'position' => $row['position'], 
    'phone' => $row['phone'],
    'email' => $row['email']);    
}    

echo json_encode($rows);
