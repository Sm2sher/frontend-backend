<?php

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];


if (isset($_POST['submit'])) {


    $FirstName = isset($_POST['FirstName']) ? mysqli_real_escape_string($conn, $_POST['FirstName']) : '';
    $LastName = isset($_POST['LastName']) ? mysqli_real_escape_string($conn, $_POST['LastName']) : '';
    $Email = isset($_POST['Email']) ? mysqli_real_escape_string($conn, $_POST['Email']) : '';
   
    $sql = "INSERT INTO user(firstName, lastName, email) 
    VALUES ('$FirstName', '$LastName', '$Email')";





if (empty($FirstName)) {
    $errors['firstNameError'] = 'يرجى ادخال الاسم الاول';
    }


    if (empty($LastName)) {
        $errors['lastNameError'] = 'يرجى ادخال الاسم الاخير';
        } 
    if (empty($Email)) {
        $errors['emailError'] = 'يرجى ادخال البريد الالكتروني';
        }
    elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'يرجى ادخال البريد الالكتروني الصحيح';
        } 
    else {
        

        if (mysqli_query($conn, $sql)) {
            header('location: ' . $_SERVER['PHP_SELF']);
            
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }

        }
    }
?>

