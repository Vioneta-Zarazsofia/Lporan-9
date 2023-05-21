<?php 
include 'koneksi.php';
$id_siswa = $_POST['id_siswa'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$cita = $_POST['cita'];

// Menyimpan ke database
$sql = mysqli_query($koneksi, "INSERT INTO tb_siswabaru (id_siswa, nama, kelas, alamat, umur, cita) 
VALUES ('$id_siswa', '$nama', '$kelas', '$alamat', '$umur', '$cita')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Lihat Data Exel'); window.location.href='reportdataexsiswa.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Siswa Gagal Ditambahkan!!');";
        }
?>