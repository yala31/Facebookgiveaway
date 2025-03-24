<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $dob = $_POST["dob"];

    $data = "Name: $name, Email: $email, Phone: $phone, DOB: $dob\n";
    
    file_put_contents("submissions.txt", $data, FILE_APPEND);
    
    echo "Thank you, $name! Your details have been submitted.";
}
?>
