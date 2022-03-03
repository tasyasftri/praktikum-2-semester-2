<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Form Nilai</title>
</head>

<body>

  <div class="container pt-4">
    <h3 class="text-center mb-4">FORM NILAI</h3>

    <div class="card border-0">
      <div class="card-body bg-light">

        <form action="form_nilai_1.php" method="GET">
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
              <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
            <div class="col-8">
              <select id="matkul" name="matkul" required="required" class="custom-select">
                <option value="DDP">Dasar - Dasar Pemrograman</option>
                <option value="DB1">Basis Data I</option>
                <option value="WEB1">Pemrograman Web</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="nilai-uts" class="col-4 col-form-label">Nilai UTS</label>
            <div class="col-8">
              <input id="nilai-uts" name="nilai_uts" placeholder="Nilai UTS" type="number" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="nilai-uas" class="col-4 col-form-label">Nilai UAS</label>
            <div class="col-8">
              <input id="nilai-uas" name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="nilai-tugas" class="col-4 col-form-label">Nilai Tugas/Pratikum</label>
            <div class="col-8">
              <input id="nilai-tugas" name="nilai_tugas" placeholder="Nilai Tugas/Pratikum" type="number" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="proses" value="Simpan" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>

        <?php


        if (!empty($_GET["proses"])) {

          $proses = $_GET["proses"];
          $nama_siswa = $_GET["nama"];
          $mata_kuliah = $_GET["matkul"];
          $nilai_uts = $_GET["nilai_uts"];
          $nilai_uas = $_GET["nilai_uas"];
          $nilai_tugas = $_GET["nilai_tugas"];

          $grade;
          $predikat;

          echo 'Proses : ' . $proses;
          echo '<br>Nama : ' . $nama_siswa;
          echo '<br>Mata Kuliah : ' . $mata_kuliah;
          echo '<br>Nilai UTS : ' . $nilai_uts;
          echo '<br>Nilai UAS : ' . $nilai_uas;
          echo '<br>Nilai Tugas : ' . $nilai_tugas;

          echo "<br><br>";
          $total = ($nilai_uts * 30 / 100) + ($nilai_uas * 35 / 100) + ($nilai_tugas * 35 / 100);
        }


        ?>

      </div>
    </div>
  </div>

</body>

</html>