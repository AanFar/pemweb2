<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Belanja Online</h1>
<div style="display: flex;">
<form style="width: 500px; margin-right: 500px;" method="POST" action="hasil_belanja.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Product</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="product" id="product_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="product_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="product" id="product_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="product_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="product" id="product_2" type="radio" class="custom-control-input" value="mesin cuci"> 
        <label for="product_2" class="custom-control-label">MESIN CUCI</label>
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
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<table border="1">
    <thead>
        <tr>
            <th>Daftar Harga</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>TV : 4.200.000</td>
        </tr>
        <tr>
            <td>Kulkas: 3.200.000</td>
        </tr>
        <tr>
            <td>Mesin cuci: 3.800.000</td>
        </tr>
        <tr>
            <td>Harga dapat berubah setiap saat</td>
        </tr>
        <!-- Tambahkan baris sesuai kebutuhan -->
    </tbody>
</table>
</div>