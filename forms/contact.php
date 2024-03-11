<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $phone_number = '6281234567'; // Ganti dengan nomor WhatsApp Anda
  $message = urlencode($_POST['message']);

  // Membangun URL untuk mengarahkan ke link WhatsApp dengan pesan yang ditentukan
  $whatsapp_url = "https://wa.me/{$phone_number}?text={$message}";

  // Mengarahkan pengguna ke link WhatsApp
  header("Location: {$whatsapp_url}");
  exit;
}
?>
