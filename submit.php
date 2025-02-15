<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category = $_POST["category"];
    $product_name = $_POST["product_name"];
    $model = $_POST["model"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $pickup_date = $_POST["pickup_date"];
    $pickup_address = $_POST["pickup_address"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $contact_person = $_POST["contact_person"];

    $conn = new mysqli("localhost", "root", "", "e_waste");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO products (category, product_name, model, description, price, pickup_date, pickup_address, state, city, contact_person) 
            VALUES ('$category', '$product_name', '$model', '$description', '$price', '$pickup_date', '$pickup_address', '$state', '$city', '$contact_person')";

    if ($conn->query($sql) === TRUE) {
        echo "Product listed successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
