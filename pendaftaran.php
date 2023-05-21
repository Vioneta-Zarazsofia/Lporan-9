<?php
    include 'koneksi.php';
?>
<html>

<head>
    <title>Siswa Baru</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

    <?php
    $error_id_siswa = "";
    $error_nama = "";
    $error_kelas = "";
    $error_alamat = "";
    $error_umur = "";
    $error_cita = "";
    
    $id_siswa = "";
    $nama = "";
    $kelas = "";
    $alamat = "";
    $umur = "";
    $cita = "";
 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["id_siswa"])) {
            $error_id_siswa = "id Tidak Boleh Kosong";
        } else {
            $id_siswa = cek_input($_POST["id_siswa"]);
            if (!is_numeric($id)) {
                $error_id = "id Hanya Boleh Angka";
            }
        }
    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <br>
    <h1 class="text-center">SISWA BARU</h1><br>
    <div class="card">
        <div class="card-body">
            <form method="post" action="prosespendaftaran.php">

                <div class="form-group row">
                    <label for="id_siswa" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_siswa" id="id_siswa"
                            class="form-control <?php echo ($error_id_siswa !="" ? "is-invalid" : ""); ?>"
                            placeholder="ID Siswa" value="<?php echo $id_siswa; ?>"> <span
                            class="warning"><?php echo $error_id_siswa ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" id="nama"
                            class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>"
                            placeholder="Nama Siswa" value="<?php echo $nama; ?>"> <span
                            class="warning"><?php echo $error_nama ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" name="kelas" id="kelas"
                            class="form-control <?php echo ($error_kelas !="" ? "is-invalid" : ""); ?>"
                            placeholder="Masukan Kelas" value="<?php echo $kelas; ?>"> <span
                            class="warning"><?php echo $error_kelas ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat" id="alamat"
                            class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>"
                            placeholder="Masukan Alamat" value="<?php echo $alamat; ?>"> <span
                            class="warning"><?php echo $error_alamat ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-10">
                        <input type="text" name="umur" id="umur"
                            class="form-control <?php echo ($error_umur !="" ? "is-invalid" : ""); ?>"
                            placeholder="Masukan umur" value="<?php echo $umur; ?>"> <span
                            class="warning"><?php echo $error_umur ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cita" class="col-sm-2 col-form-label">Cita - Cita</label>
                    <div class="col-sm-10">
                        <input type="text" name="cita" id="cita"
                            class="form-control <?php echo ($error_cita !="" ? "is-invalid" : ""); ?>"
                            placeholder="Masukan Cita - Cita" value="<?php echo $cita; ?>"> <span
                            class="warning"><?php echo $error_cita ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>