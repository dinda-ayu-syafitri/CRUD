<?php require('header.php'); ?><br>
<!-- Content -->
<!-- <div class ="container"> -->
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Agama</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Alamat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        include('koneksi.php');
        $no = 1;
        $sql = mysqli_query($conn, "SELECT * FROM mahasiswa");
        while($data = mysqli_fetch_array($sql)){
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['nim'] ?></td>
            <td><?= $data['nama_mahasiswa'] ?></td>
            <td><?= $data['jenis_kelamin'] ?></td>
            <td><?= $data['agama'] ?></td>
            <td><?= $data['tanggal_lahir'] ?></td>
            <td><?= $data['no_telepon'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td>
              <a href="edit.php?id_mahasiswa=<?= $data['id_mahasiswa']; ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i>Edit</a>
              <a href="hapus.php?id_mahasiswa=<?= $data['id_mahasiswa']; ?>" onclick="return confirm('Apakah data ini ingin dihapus?')" class="btn btn-danger"><i class="bi bi-trash"></i>Delete</a>
            </td>
        </tr>
    <?php
        }
    ?>
  </tbody>
</table>
<!-- <div> -->
<!-- End Content -->
<?php require('footer.php'); ?>