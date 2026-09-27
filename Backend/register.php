<?php
require_once __DIR__ . '/config/db.connect.php';

function redirectWithMessage(string $message, string $destination): void
{
    $messageJson = json_encode($message, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    $destinationJson = json_encode($destination, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    echo "<script>alert($messageJson); window.location.href=$destinationJson;</script>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../Frontend/register.html');
    exit;
}

$first = trim($_POST['first_name'] ?? '');
$last = trim($_POST['last_name'] ?? '');
$user = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$gender = trim($_POST['gender'] ?? '');
$pass = $_POST['password'] ?? '';
$confirm = $_POST['confirm_password'] ?? '';

if ($first === '' || $last === '' || $user === '' || $email === '' || $pass === '' || $confirm === '') {
    redirectWithMessage('Please complete all required fields.', '../Frontend/register.html');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirectWithMessage('Please enter a valid email address.', '../Frontend/register.html');
}

if ($pass !== $confirm) {
    redirectWithMessage('Passwords do not match.', '../Frontend/register.html');
}

$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
$stmt = $conn->prepare(
    'INSERT INTO users (first_name, last_name, username, email, phone, gender, password) VALUES (?, ?, ?, ?, ?, ?, ?)'
);
$stmt->bind_param('sssssss', $first, $last, $user, $email, $phone, $gender, $hashedPassword);

if ($stmt->execute()) {
    $stmt->close();
    $conn->close();
    redirectWithMessage('Registration successful. Please log in.', '../Frontend/login.html');
}

$stmt->close();
$conn->close();
redirectWithMessage('Registration failed. The username or email may already be in use.', '../Frontend/register.html');
?>