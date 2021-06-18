<?php require_once realpath(__DIR__ . "/connect.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if (!empty($name) and !empty($email) and !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $query = "INSERT INTO mails (name, email,message) VALUES ('" . $name . "','" . $email . "','" . $message . "' );";
            $statement = $pdo->prepare($query);
            $statement->execute();
            echo json_encode(["error" => "0"]);
        } else {
            echo json_encode(["error" => "2"]);
        }
    } else {
        echo json_encode(["error" => "1"]);
    }
}
