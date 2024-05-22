<?php
// Sertakan file koneksi ke database
include "koneksi.php";

// Periksa apakah 'employee_id' disetel dalam permintaan GET
if (isset($_GET['employee_id'])) {
    $employee_id = $_GET['employee_id'];
    
    // Membersihkan input untuk mencegah SQL injection
    $employee_id = mysqli_real_escape_string($conn, $employee_id);

    // Persiapkan query SQL DELETE
    $sql = "DELETE FROM `mst_users` WHERE `employee_id` = '$employee_id'";

    // Jalankan query
    $result = mysqli_query($conn, $sql);

    // Periksa apakah query berhasil
    if ($result) {
        header("Location: index.php?msg=Rekaman berhasil dihapus");
        exit(); // Pastikan tidak ada kode lain yang dieksekusi setelah pengalihan
    } else {
        echo "Gagal: " . mysqli_error($conn);
    }
}
?>
