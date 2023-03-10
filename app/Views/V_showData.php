<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MAHASISWA FT</title>
    

    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel ="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link disabled"></a>
      </div>
    </div>
  </div>
</nav>

<a href="data/insertData" class="btn btn-primary">Tambah Data</a>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>

<table id="example" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <td>NIM</td>
            <td>Nama</td>
            <td>Fakultas</td>
            <td>Alamat</td>
            <td>Aksi</td>
        </tr>
        </thread>

        <tbody>
        <?php 
            foreach ($hasil as $row) {

            
        
        ?>
        <tr>
            <td><?php echo $row->nim; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->fakultas; ?></td>
            <td><?php echo $row->alamat; ?></td>
            <td><a href="data/editData/<?php echo $row->nim; ?>">Edit </a>
                <a href="data/hapusData/<?php echo $row->nim; ?>">Hapus </a>
            <td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
    <script>
    $(document).ready(function () 
    {
        $('#example').DataTable();
    });
    </script>


</body>
<footer class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center text-md-start">
        <p>&copy; 2023 My Website. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-center text-md-end">
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
          <li class="list-inline-item"><a href="#">Terms of Use</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

</html>