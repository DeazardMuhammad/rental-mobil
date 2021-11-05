<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="text-white">Data Karyawan Rental Mobil</h4>
            </div>

            <div class="card-body">
                <!--kotak pencarian data karyawan-->
                <form action="list-karyawan.php" method="get">
                    <input type="text" name="search" 
                    class="form-control mb-2"
                    placeholder="Masukkan Keyword Pencarian" required/>
                </form>
                <ul class="list-group">
                    <?php
                    include("connection.php");
                    if (isset($_GET["search"])) {
                        # jika pada saat load halaman ini
                        # akan mengecek apakah ada data dengan method 
                        # get yang bernama search

                        $search = $_GET["search"];
                        $sql = "select * from karyawan where id_karyawan like '%$search%'
                        or nama_karyawan like '%$search%'
                        or username like '%$search%'  
                        or kontak like '%$search%' ";
                    }else{
                        $sql = "SELECT * FROM `karyawan`";
                    }

                    //eksekusi perintah sql
                    $query = mysqli_query ($connect, $sql);
                    while($karyawan = mysqli_fetch_array($query)) { ?>

                    <li class="list-group-item">
                        <div class="row">
                            <!--bagian data anggota-->
                            <div class="col-lg-8 col-md-10">
                                <h5>Nama Karyawan: <?php echo $karyawan["nama_karyawan"] ?></h5>
                                <h6>Username: <?php echo $karyawan["username"] ?></h6>
                                <h6>Kontak: <?php echo $karyawan["kontak"] ?></h6>
                                <h6>ID Karyawan: <?php echo $karyawan["id_karyawan"] ?></h6>
                            </div>
                            <!--bagian tombol-->
                            <div class="col-lg-4 col-md-2">
                            <a href="form-karyawan.php?id_karyawan=<?=$karyawan["id_karyawan"]?>">
                                <button class="btn btn-info btn-block">
                                    Edit
                                </button>
                                </a>
                                <div class="card-footer">
                                    <a href="delete-karyawan.php?id_karyawan=<?=$karyawan["id_karyawan"]?>"
                                    onClick="return confirm('Apakah Anda Yakin?')">
                                </div>
                                <button class="btn btn-block btn-danger">
                                    Hapus
                                </button>
                                    </a>
                            </div>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                    
                </ul>
            </div>

            <div class="card-footer">
                <a href="form-karyawan.php">
                    <button class="btn btn-success">Tambah Data Petugas</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>