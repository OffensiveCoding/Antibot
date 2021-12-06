<?php
$victim_redirect = "./example.php";
$session = $_POST['e84c04c00c8e6f1117a0c7c603adab81'];
if(isset($session)) {
    session_start();
    session_destroy();
    session_start();
    $_SESSION['bot'] = false;
    header("location: ". $victim_redirect);
} else {
    http_response_code(404);
}
?>
