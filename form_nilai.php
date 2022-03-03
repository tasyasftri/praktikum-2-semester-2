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

        <form action="form_nilai.php" method="POST">
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

        <div class="row">
          <div class="col-md-4">

            <?php


            if (!empty($_POST["proses"])) {

              $proses = $_POST["proses"];
              $nama_siswa = $_POST["nama"];
              $mata_kuliah = $_POST["matkul"];
              $nilai_uts = $_POST["nilai_uts"];
              $nilai_uas = $_POST["nilai_uas"];
              $nilai_tugas = $_POST["nilai_tugas"];

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

              echo "</div>";

              echo "<div class='col-md-8'>";

              if ($total > 55) {
                echo "LULUS<br>";
              } else {
                echo "TIDAK LULUS<br>";
              }

              if ($total <= 100 && $total >= 85) {
                $grade = "A";
              } else if ($total < 85 && $total >= 70) {
                $grade = "B";
              } else if ($total < 70 && $total >= 56) {
                $grade = "C";
              } else if ($total < 56 && $total >= 36) {
                $grade = "D";
              } else if ($total < 36 && $total >= 0) {
                $grade = "E";
              } else {
                $grade = "I";
              }

              switch ($grade) {
                case "A":
                  $predikat = "Sangat Memuaskan";
                  break;
                case "B":
                  $predikat = "Memuaskan";
                  break;
                case "C":
                  $predikat = "Cukup";
                  break;
                case "D":
                  $predikat = "Kurang";
                  break;
                case "E":
                  $predikat = "Sangat Kurang";
                  break;
                case "I":
                  $predikat = "Tidak Ada";
                  break;
              }

              echo "Grade : " . $grade;
              echo "<br>Predikat : " . $predikat;
            }


            ?>
          </div>
        </div>


      </div>
    </div>
  </div>

</body>

</html>