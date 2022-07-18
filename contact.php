<?php

$nume = $_POST["nume"];
$email = $_POST["email"];
$telefon = $_POST["telefon"];
$mesaj = $_POST["mesaj"];

    $receiver = "consultatie@psyhology.ro";  //email receiver, email address
    $subject = "De la: $nume <$email>";
    $body = "Nume: $nume\nEmail: $email\nTelefon: $telefon\nMesaj: $mesaj";
    $sender = "From: $email";
    if(mail($receiver, $subject, $body, $sender)) {
        header("Location:index.html");
    } else {
        echo "A aparut o eroare!";
    }
?>
