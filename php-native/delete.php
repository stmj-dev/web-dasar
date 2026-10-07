<?php
include 'koneksi.php';

$id = $_GET['id'] ?? $_POST['id'] ?? null;

if ($id) {
    pg_query_params($conn, "DELETE FROM native_stocks WHERE id = $1", [$id]);
}

header('Location: index.php');
exit;
