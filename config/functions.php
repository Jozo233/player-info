<?php
function get_from_post_or_empty($index_name) {
    return trim(
        filter_input(INPUT_POST, $index_name, FILTER_UNSAFE_RAW, FILTER_REQUIRE_SCALAR | FILTER_FLAG_STRIP_LOW)
            ?: '');
}

// Login logic
function process_login($user, $pass, AuthMeController $controller) {
    if ($controller->checkPassword($user, $pass)) {
        echo '<div class="alert alert-success" role="alert">You logged in ! We redirect you.....</div>';
        sleep(3);
        header("Refresh: 2; URL=../authme/dashboard.php");
        return true;
    } else {
      echo '<div class="alert alert-danger" role="alert">Login failed. Please try again</div>';
	  //header("Refresh: 1; URL=www.lostworldadventure.com");
    }
    return false;
}

// Register logic
function process_register($user, $pass, $email, AuthMeController $controller) {
    if ($controller->isUserRegistered($user)) {
        echo '<div class="alert alert-warning" role="alert">This user already exists</div>';
    } else if (!is_email_valid($email)) {
        echo '<div class="alert alert-warning" role="alert">Invalid Email address</div>';
    } else {
        // Note that we don't validate the password or username at all in this demo...
        $register_success = $controller->register($user, $pass, $email);
        if ($register_success) {
            echo '<div class="alert alert-primary" role="alert">Successfull registered</div>';
            sleep(3);
            header("Refresh: 2; URL=../dashboard.php");
            return true;
        } else {
            echo '<div class="alert alert-danger" role="alert">Problem during registration process</div>';
        }
    }
    return false;
}

function is_email_valid($email) {
    return trim($email) === ''
        ? true // accept no email
        : filter_var($email, FILTER_VALIDATE_EMAIL);
}

?>
