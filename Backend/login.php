<?php
session_start();
require_once __DIR__ . '/config/db.connect.php';

function redirectWithMessage(string $message, string $destination): void
{
    $messageJson = json_encode($message, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    $destinationJson = json_encode($destination, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    echo "<script>alert($messageJson); window.location.href=$destinationJson;</script>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../Frontend/login.html');
    exit;
}

$user = trim($_POST['username'] ?? '');
$pass = $_POST['password'] ?? '';

if ($user === '' || $pass === '') {
    redirectWithMessage('Enter your username and password.', '../Frontend/login.html');
}

$stmt = $conn->prepare('SELECT id, username, password FROM users WHERE username = ?');
$stmt->bind_param('s', $user);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row && password_verify($pass, $row['password'])) {
    session_regenerate_id(true);
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $stmt->close();
    $conn->close();
    header('Location: ../Frontend/index.html');
    exit;
}

$stmt->close();
$conn->close();
redirectWithMessage('Invalid username or password.', '../Frontend/login.html');
?>