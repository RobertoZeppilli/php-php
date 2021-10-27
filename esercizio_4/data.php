<?php

// controllo se la richiesta del form è attiva, se si creo le variabili dei dati ricevuti
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $city = $_POST['city'];

    // controllo se tutti i campi siano stati completati
    if (empty($name) || empty($surname) || empty($age) || empty($gender) || empty($email) || empty($city)) {
        header('Location: ./form.php?data=empty');
        exit();
    } else {
        
        // controllo la validità della mail, portandomi dietro il resto dei dati 
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('Location: ./form.php?data=email&name='.ucfirst($name).'&surname='.ucfirst($surname).'&age='.$age.'&gender='.$gender.'&city='.$city.'');
            exit();
        } else {
            // in caso tutto vada bene, siamo dentro!
            header('Location: ./form.php?data=success&name='.ucfirst($name).'&surname='.ucfirst($surname).'&age='.$age.'&gender='.$gender.'&city='.$city.'');
            exit();
        }
    }

} else {
    // per qualsiasi altro problema riporto l'utente alla pagina del form
    header('Location: ./form.php');
}
