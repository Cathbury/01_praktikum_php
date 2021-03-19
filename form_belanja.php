<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 mt-4">
        <form class="form-horizontal" method="GET" action="form_belanja.php">
          <fieldset>

            <!-- Form Name -->
            <legend>Belanja Online</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="customer">Customer</label>  
              <div class="col-md-8">
              <input id="customer" name="customer" type="text" placeholder="Nama Customer" class="form-control input-md">
                
              </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="produk">Pilih Produk</label>
              <div class="col-md-8"> 
                <label class="radio-inline" for="produk-0">
                  <input type="radio" name="produk" id="produk-0" value="TV" checked="checked">
                  TV
                </label> 
                <label class="radio-inline" for="produk-1">
                  <input type="radio" name="produk" id="produk-1" value="KULKAS">
                  KULKAS
                </label> 
                <label class="radio-inline" for="produk-2">
                  <input type="radio" name="produk" id="produk-2" value="MESINCUCI">
                  MESIN CUCI
                </label>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="jumlah">Jumlah</label>  
              <div class="col-md-4">
              <input id="jumlah" name="jumlah" type="text" placeholder="Jumlah" class="form-control input-md">
                
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="kirim"></label>
              <div class="col-md-4">
                <button id="proses" name="proses" class="btn btn-success">Kirim</button>
              </div>
            </div>

          </fieldset>
        </form>
        <?php
          $proses = $_GET['proses'];
          $customer= $_GET['customer'];
          $produk = $_GET['produk'];
          $jumlah = $_GET['jumlah'];
          if ($produk == 'TV'){
            $total = $jumlah*4200000;
          }
          elseif ($produk == 'KULKAS'){
            $total = $jumlah*3100000;
          }
          else{
            $total = $jumlah*3800000;
          }
          echo 'Nama Customer : '.$customer;
          echo '<br/>Produk Pilihan : '.$produk;
          echo '<br/>Jumlah Beli : '.$jumlah;
          echo '<br/>Total Belanja : '.$total;
        ?>
      </div>
    </div>
  </div>
</body>
</html>