<?php
$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$email = $_POST['email'] ?? '';
$gender = $_POST['gender'] ?? '';
$dobDay = $_POST['dobDay'] ?? '';
$dobMonth = $_POST['dobMonth'] ?? '';
$dobYear = $_POST['dobYear'] ?? '';
$phone = $_POST['phone'] ?? '';
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['confirmPassword'] ?? '';
$errors = [];

function validateName($name) {
    if (empty($name)) {
        return "Name cannot be empty.";
    } else if (!preg_match("/^[a-zA-Z\s.-]*$/", $name)) {
        return "Name can only contain letters, spaces, periods, and dashes.";
    } else if (!str_contains($name, " ")) {
        return "Name must contain at least two words.";
    } else if (!ctype_alpha($name[0])) {
        return "Name must start with a letter.";
    }
    return "";
}

$firstNameError = validateName($firstName);
$lastNameError = validateName($lastName);
if (!empty($firstNameError)) $errors['firstName'] = $firstNameError;
if (!empty($lastNameError)) $errors['lastName'] = $lastNameError;

if (empty($email)) {
    $errors['email'] = "Email cannot be empty.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Invalid email format.";
}

if (empty($gender)) {
    $errors['gender'] = "Please select a gender.";
}

if (empty($dobDay) || empty($dobMonth) || empty($dobYear)) {
    $errors['dob'] = "Date of Birth cannot be empty.";
} elseif (!checkdate($dobMonth, $dobDay, $dobYear)) {
    $errors['dob'] = "Invalid Date of Birth.";
}

if (empty($phone)) {
    $errors['phone'] = "Phone cannot be empty.";
}

if (empty($password)) {
    $errors['password'] = "Password cannot be empty.";
} elseif (strlen($password) < 8) {
    $errors['password'] = "Password must be at least 8 characters long.";
} elseif ($password !== $confirmPassword) {
    $errors['confirmPassword'] = "Passwords do not match.";
}

if (!empty($errors)) {
    foreach ($errors as $field => $error) {
        echo "<p>Error in $field: $error</p>";
    }
} else {
    echo "Form submitted successfully.";
}

?>
