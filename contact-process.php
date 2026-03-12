<?php
session_start();

// Cek method POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit();
}

// Ambil data form
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validasi
$errors = [];

if (empty($name)) {
    $errors[] = 'Nama harus diisi';
}

if (empty($email)) {
    $errors[] = 'Email harus diisi';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Format email tidak valid';
}

if (empty($message)) {
    $errors[] = 'Pesan harus diisi';
}

// Jika ada error
if (!empty($errors)) {
    $_SESSION['contact_error'] = implode('<br>', $errors);
    header('Location: contact.php');
    exit();
}

// Di sini Anda bisa:
// 1. Simpan ke database
// 2. Kirim email
// 3. Simpan ke file

// Contoh simpan ke file
$log = date('Y-m-d H:i:s') . " | $name | $email | $subject | $message\n";
file_put_contents('contacts.log', $log, FILE_APPEND);

// Contoh kirim email sederhana
$to = "agungang09@gmail.com";
$email_subject = "Kontak Baru dari $name" . (!empty($subject) ? " - $subject" : "");
$email_body = "
Nama: $name
Email: $email
Subjek: $subject

Pesan:
$message
";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Kirim email (aktifkan jika server support mail)
// mail($to, $email_subject, $email_body, $headers);

// Set session success
$_SESSION['contact_success'] = "Terima kasih $name! Pesan Anda sudah terkirim. Kami akan segera menghubungi Anda.";

// Redirect balik ke contact page
header('Location: contact.php');
exit();
?>