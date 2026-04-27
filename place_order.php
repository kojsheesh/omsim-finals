<?php
session_start();
include "reservedb.php";

// Get the JSON data sent from the cart.php JavaScript
$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data['items'])) {
    // This ID should be passed from your insert.php via session 
    // or sent in the JavaScript payload
    $res_id = $_SESSION['last_reservation_id'] ?? 0; 

    $stmt = $conn->prepare("INSERT INTO order_items (reservation_id, food_name, price, quantity, subtotal) VALUES (?, ?, ?, ?, ?)");

    foreach ($data['items'] as $item) {
        $stmt->bind_param("isdid", 
            $res_id, 
            $item['name'], 
            $item['price'], 
            $item['qty'], 
            $item['subtotal']
        );
        $stmt->execute();
    }
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error", "message" => "Cart is empty"]);
}
?>