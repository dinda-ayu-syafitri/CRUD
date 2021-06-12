<?php include('header.php') ?>
<br>

<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-dark text-white text-center">Edit data Mahasiswa</div>
            <div class="card-body">
            <?php 
                include('koneksi.php');
                $id = $_GET['id_mahasiswa'];
                $sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id_mahasiswa = '$id' ");
                while($data = mysqli_fetch_array($sql)){
            ?>
                <form method="POST" action="editAct.php">
                    <div class="form-group">
                        <label>NIM Mahasiswa</label>
                        <input type="hidden" name="id_mahasiswa" value="<?= $data['id_mahasiswa']?>">
                        <input type="number" class="form-control" name="nim" value="<?= $data['nim']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama_mahasiswa" value="<?= $data['nama_mahasiswa']; ?>">
                    </div>

                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki" <?php if($data['jenis_kelamin']=='Laki-laki') {echo "checked";} ?>>
                        <label class="form-check-label">
                            Laki-laki
                        </label>
                    </div>

                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" <?php if($data['jenis_kelamin']=='Perempuan') {echo "checked";} ?>>
                        <label class="form-check-label">
                            Perempuan
                        </label>
                    </div>

                    <div class="form-group">
                        <label>Agama</label>
                        <select class="form-control" name="agama">
                            <option value="<?= $data['agama'];?>"><?=$data['agama'] ?></option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="<?= $data['tanggal_lahir']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="number" class="form-control" name="no_telepon" value="<?= $data['no_telepon']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" cols="30" rows="10" ><?= $data['alamat']; ?></textarea>
                    </div>

                    <input type="submit" class="btn btn-primary btn-block" value="SIMPAN DATA">
                </form>
                <?php 
                }
                ?>
            </div>
        </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>