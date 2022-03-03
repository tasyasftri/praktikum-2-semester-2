<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Form Belanja</title>
</head>

<body>

  <div class="container-fluid">

    <div class="row">
      <div class="col-md-8">
        <h3>Form Belanja</h3>

        <form method="POST" action="form_belanja.php">
          <div class="form-group row">
            <label for="costumer" class="col-4 col-form-label">Costumer</label>
            <div class="col-8">
              <input id="costumer" name="costumer" placeholder="Nama Costumer" type="text" required="required" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Pilih Produk</label>
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" required="required" class="custom-control-input" value="TV">
                <label for="produk_0" class="custom-control-label">TV</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" required="required" class="custom-control-input" value="KULKAS">
                <label for="produk_1" class="custom-control-label">KULKAS</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" required="required" class="custom-control-input" value="MESIN CUCI">
                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
            <div class="col-8">
              <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="proses" value="Simpan" type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-md-4">
        <ul class="list-group">
          <li class="list-group-item bg-info text-white">Daftar Harga</li>
          <li class="list-group-item">TV 4.200.000</li>
          <li class="list-group-item">Kulkas 3.100.000</li>
          <li class="list-group-item">Mesin Cuci 3.800.000</li>
          <li class="list-group-item  bg-info text-white">Harga Dapat Berubah Setiap Saat</li>
        </ul>
      </div>
    </div>

    <?php

    if (isset($_POST["proses"])) {
      $total;

      if ($_POST["produk"] == "TV") {
        $total = 4200000 * $_POST["jumlah"];
      } else if ($_POST["produk"] == "KULKAS") {
        $total = 3100000 * $_POST["jumlah"];
      } else if ($_POST["produk"] == "MESIN CUCI") {
        $total = 3800000 * $_POST["jumlah"];
      }

      echo "Nama Costumer : " . $_POST["costumer"];
      echo "<br>Produk Pilihan : " . $_POST["produk"];
      echo "<br>Jumlah Beli : " . $_POST["jumlah"];
      echo "<br>Total Belanja : Rp. " . number_format($total) . ",-";
    }

    ?>
  </div>

</body>

</html>