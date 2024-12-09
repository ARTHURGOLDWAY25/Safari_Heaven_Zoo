<?php

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($email === false || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Please enter a valid email address.";
    } else {
        $query = 'SELECT COUNT(*) FROM ZOO_PROJECT WHERE EMAIL = :email';
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $row_count = $stmt->fetchColumn();

        if($row_count > 0){
            echo 'User with this email exists already.';
        } else {
            $query_insert = 'INSERT INTO ZOO_PROJECT (first_name, last_name, email, phone) 
                             VALUES (:first_name, :last_name, :email, :phone)';

            $query_stmt = $pdo->prepare($query_insert);
            $query_stmt->bindParam(':first_name', $first_name);
            $query_stmt->bindParam(':last_name', $last_name);
            $query_stmt->bindParam(':email', $email);
            $query_stmt->bindParam(':phone', $phone);

            if($query_stmt->execute()){
                echo "New user successfully entered.";
            } else {
                $errorInfo = $query_stmt->errorInfo();
                echo "Could not enter new user. " . print_r($errorInfo, true);
            }
        }
    }
} catch (Exception $e) {
    echo "Could not connect to database. " . $e->getMessage();
}
?>




