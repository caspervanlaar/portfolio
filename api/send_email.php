<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /");
    exit;
}

$name    = trim($_POST["name"] ?? "");
$email   = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");
$to      = "casperdvanlaar@hotmail.com";

/* basic validation */
if ($name === "" || $email === "" || $message === "") {
    die("Missing required fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address.");
}

$subject = "New contact form message from $name";

$body = "Name: $name\n";
$body .= "Email: $email\n\n";
$body .= "Message:\n$message\n";

$headers = [
    "From: $name <$email>",
    "Reply-To: $email",
    "Content-Type: text/plain; charset=UTF-8"
];

$success = mail($to, $subject, $body, implode("\r\n", $headers));

if ($success) {
    echo "Message sent successfully.";
} else {
    echo "Message failed to send.";
}
