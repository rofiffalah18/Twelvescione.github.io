<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = $_POST["Full Name"];
    $email = $_POST["Email"];
    $no_hp = $_POST["Phone Number"];
    $pesan = $_POST["Massage"];

    // Ganti email_admin@example.com dengan alamat email admin yang sebenarnya
    $tujuan_email = "rofiffalah18@gmail.com";
    $subjek = "Pesan Kontak dari $nama";
    $pesan_email = "Nama: $nama\nEmail: $email\nNomor HP: $no_hp\nPesan:\n$pesan";

    // Mengirim email
    mail($tujuan_email, $subjek, $pesan_email);

    // Redirect kembali ke halaman formulir setelah mengirim email
    header("Location: index.html");
} else {
    // Jika bukan metode POST, kembalikan ke halaman formulir
    header("Location: index.html");
}
?>
