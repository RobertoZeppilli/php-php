<!-- Usando come base l'esercizio 3, realizza un form in grado di inviare i dati 
necessari al completameno dell'anagrafica realizzata. gradita verifica pre-invio -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css?v=<?php echo time(); ?>">
    <title>Add User</title>
</head>

<body>



    <form class="form" action="data.php" method="POST">
        <h2>Insert Student</h2>
        <div class="form-control">
            <label for="name">Name</label>
            <!-- in caso di email non valida, tengo i valori inseriti al submit del form -->
            <?php
            if (isset($_GET['name'])) {
                $value = $_GET['name'];
                echo '<input id="name" name="name" type="text" value="' . $value . '">';
            } else {
                echo '<input id="name" name="name" type="text">';
            }
            ?>
        </div>
        <div class="form-control">
            <label for="surname">Surname</label>
            <!-- in caso di email non valida, tengo i valori inseriti al submit del form -->
            <?php
            if (isset($_GET['surname'])) {
                $value = $_GET['surname'];
                echo '<input id="surname" name="surname" type="text" value="' . $value . '">';
            } else {
                echo ' <input id="surname" name="surname" type="text">';
            }
            ?>
        </div>
        <div class="form-control">
            <label for="email">Email</label>
            <input id="email" name="email" type="text">
        </div>
        <select name="gender" id="gender" class="form-control">
            <option value="">Select Gender</option>
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <div class="form-control">
            <label for="age">Age</label>
            <!-- in caso di email non valida, tengo i valori inseriti al submit del form -->
            <?php
            if (isset($_GET['age'])) {
                $value = $_GET['age'];
                echo '<input id="age" name="age" type="text" value="' . $value . '">';
            } else {
                echo ' <input id="age" name="age" type="number">';
            }
            ?>
        </div>
        <div class="form-control">
            <label for="city">City</label>
            <!-- in caso di email non valida, tengo i valori inseriti al submit del form -->
            <?php
            if (isset($_GET['city'])) {
                $value = $_GET['city'];
                echo '<input id="city" name="city" type="text" value="' . $value . '">';
            } else {
                echo ' <input id="city" name="city" type="text">';
            }
            ?>
        </div>
        <div class="form-control">
            <button name="submit" type="submit">Submit</button>
        </div>


    </form>

    <?php

    if (!isset($_GET['data'])) {
        echo '';
    } else {
        $data = $_GET['data'];
        if ($data == 'empty') {
            echo "<p class='error'>You did not fill in all fields!</p>";
        } elseif ($data == 'email') {
            echo "<p class='error'>Invalid Email!</p>";
        } elseif ($data == 'success') {
            echo "<p class='success'>Great you're in!</p>";
        }
    }
    ?>

</body>

</html>