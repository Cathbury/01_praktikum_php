<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Nilai Siswa</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
  <form class="form-horizontal" method="GET" action="form_nilai.php">
    <fieldset>

      <!-- Form Name -->
      <legend>Form Nilai Siswa</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
        <div class="col-md-4">
        <input id="nama" name="nama" type="text" placeholder="Nama Lengkap" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="matkul">Mata Kuliah</label>
        <div class="col-md-4">
          <select id="matkul" name="matkul" class="form-control">
            <option value="DDP">Dasar-Dasar Pemrograman</option>
            <option value="BDI">Basis Data I</option>
            <option value="WEB1">Pemgrograman Web</option>
          </select>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nilai_uts">Nilai UTS</label>  
        <div class="col-md-2">
        <input id="nilai_uts" name="nilai_uts" type="text" placeholder="Nilai UTS" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nilai_uas">Nilai UAS</label>  
        <div class="col-md-2">
        <input id="nilai_uas" name="nilai_uas" type="text" placeholder="Nilai UAS" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nilai_tugas">Nilai Tugas/Praktikum</label>  
        <div class="col-md-2">
        <input id="nilai_tugas" name="nilai_tugas" type="text" placeholder="Nilai Tugas" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="proses"></label>
        <div class="col-md-2">
          <button id="proses" name="proses" class="btn btn-primary">Simpan</button>
        </div>
      </div>

    </fieldset>
  </form>
  <?php
    $proses = $_GET['proses'];
    $nama_siswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];
    echo 'Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
  ?>
</body>
</html>