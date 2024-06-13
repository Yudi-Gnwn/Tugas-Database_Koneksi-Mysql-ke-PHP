<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Tugas Connect BasisData</title>
</head>
<body>
   <div class="container">
      <center><h1>Database Siswa</h1></center>
      <div class="main">
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql = 'SELECT * FROM siswa';
         $result = mysqli_query($conn, $sql);
         ?>
         <h3>Tabel Siswa</h3>
         <table>
          <tr>
            <th>NIM</th>
            <th>Nama Siswa</th>
            <th>Alamat</th>
            <th>Tgl Lahir</th>
            <th>No.Telepon</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_siswa'];?></td>
               <td><?= $row['nama_siswa'];?></td>
               <td><?= $row['alamat'];?></td>
               <td><?= $row['tgl_lahir'];?></td>
               <td><?= $row['no_telepon'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM guru';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>Tabel Guru</h3>
         <table>
          <tr>
            <th>id Guru</th>
            <th>nama Guru</th>
            <th>Mata Pelajaran</th>
            <th>No.Telepon</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_guru'];?></td>
               <td><?= $row['nama_guru'];?></td>
               <td><?= $row['mata_pelajaran'];?></td>
               <td><?= $row['no_telepon'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM kelas';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>Tabel kelas</h3>
         <table>
          <tr>
            <th>id kelas</th>
            <th>nama kelas</th>
            <th>id guru</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_kelas'];?></td>
               <td><?= $row['nama_kelas'];?></td>
               <td><?= $row['id_guru'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql2 = 'SELECT * FROM pembayaran';
         $result = mysqli_query($conn, $sql2);
         ?>
         </table>
         <h3>Tabel Pembayaran</h3>
         <table>
          <tr>
            <th>id Pembayaran</th>
            <th>id Siswa</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_pembayaran'];?></td>
               <td><?= $row['id_siswa'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM detail_pembayaran';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>Tabel Detail Pembayaran</h3>
         <table>
          <tr>
            <th>id pembayaran</th>
            <th>Bulan</th>
            <th>Tahun</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_pembayaran'];?></td>
               <td><?= $row['bulan'];?></td>
               <td><?= $row['tahun'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql4 = 'SELECT * FROM ekstrakulikuler';
         $result = mysqli_query($conn, $sql4);
         ?>
         <h3>Tabel Ekstrakulikuler</h3>
         <table>
          <tr>
            <th>id ekstrakulikuler</th>
            <th>nama ekstrakulikuler</th>
            <th>id siswa</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_ekstrakulikuler'];?></td>
               <td><?= $row['nama_kegiatan'];?></td>
               <td><?= $row['id_siswa'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
      </div>
   </div>
</body>
</html>