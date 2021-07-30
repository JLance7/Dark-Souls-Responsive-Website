<?php
if ($isValid) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",
            $sessionUsername, $sessionPassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $conn->prepare("INSERT INTO registration (userName, password, firstName, lastName,
			address1, address2, city, state, zipCode, phone, email, gender, maritalStatus, 
			dateOfBirth)
			VALUES (:userName, :password, :firstName, :lastName, :address1,
			:address2, :city, :state, :zipCode, :phone, :email, :gender,
			:maritalStatus, :dateOfBirth)");
        $sql->bindParam(':userName', $username);
        $sql->bindParam(':password', $password);
        $sql->bindParam(':firstName', $first);
        $sql->bindParam(':lastName', $last);
        $sql->bindParam(':address1', $address1);
        $sql->bindParam(':address2', $address2);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':state', $state);
        $sql->bindParam(':zipCode', $zip);
        $sql->bindParam(':phone', $phone);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':gender', $gender);
        $sql->bindParam(':maritalStatus', $marital);
        $sql->bindParam(':dateOfBirth', $cal);

        $sql->execute();

        $last_id = $conn->lastInsertId();
        $_SESSION["last_id"] = "$last_id";

        header("Location: confirmation.php");

    }
    catch(PDOException $e) {
        echo "Connection failed nooooooo: " . $e->getMessage();
    } finally {
        $conn = null;
    }
}
?>

