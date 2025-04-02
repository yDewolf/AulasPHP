<?php
include "index.php";

$login_successful = false;
for ($idx = 0; $idx < count($users); $idx++) {
    if ($_POST["username"] == $users[$idx]["username"]) {
        $login_successful = password_verify($_POST["password"], $users[$idx]["password"]);

        // echo "{$users[$idx]["username"]} | {$users[$idx]["password"]} | {$hashed}";
        break;
    }
}

if ($login_successful) {
    echo "Login Sucessfull";
} else {
    echo "Invalid username or password";
}

?>