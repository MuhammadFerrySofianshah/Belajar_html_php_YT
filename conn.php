<?php
    // Mengecek apakah formulir telah disubmit
    if (isset($_POST['submit'])) {
        // Mengambil data dari formulir
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Koneksi ke database MySQL
        $koneksi = new mysqli('localhost', 'root', '', 'form_html_php');

        // Memeriksa koneksi
        if ($koneksi->connect_error) {
            die("Koneksi gagal: " . $koneksi->connect_error);
        }

        // Query untuk memasukkan data ke dalam tabel
        $query = "INSERT INTO registrasi (username, password) VALUES ('$username', '$password')";

        if ($koneksi->query($query) === TRUE) {
            echo "Data berhasil dimasukkan.";
        } else {
            echo "Error: " . $query . "<br>" . $koneksi->error;
        }

        // Menutup koneksi ke database
        $koneksi->close();
    }
    ?>