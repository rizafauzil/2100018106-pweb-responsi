<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="cetak.css">
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg bg-warning">
        <div class="container">
          <h3><i class="fa-solid fa-ice-cream text-light me-2"></i></h3>
          <a class="navbar-brand fw-bold" href="index.php">Mangansweet.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#scrollspyHeading2">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://www.buatlink.my.id/contact-us" target="_blank">Hubungi Kami</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
              <button class="btn btn-dark" type="submit">Cari</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="card">
      <div class="card-header pesanan">
        <h3>Pesanan</h3>
      </div> 
      <div class="card-body">
      <form name="form1" method="post" action="nota.php">
        <table width="58%" border="0">
          <tr>
            <td>Nama Pemesan</td>
            <td><input class="form-control mb-2" name="nama" type="text" id="nama" required></td>
          </tr>

          <tr>
            <td>Alamat Pemesan</td>
            <td><input class="form-control mb-2" name="alamat" type="text" id="alamat" required></td>
          </tr>

          <tr>
            <td>Produk di beli</td>
            <td><input class="form-control mb-2" type="text" name="jenis" id ="jenis" value="Choco Heaven - Dessert Box" readonly="readonly" /></td>
          </tr>

          <tr>
            <td>Jumlah</td>
            <td>
              <select class="form-select mb-2" name="jumlah" id="jumlah">
                <option>1</option>
              </select>
            </td>
          </tr>

          <tr>
            <td>Harga</td>
            <td><input class="form-control-plaintext mb-2" type="text" name="harga"  size="8" id ="harga" value="Rp 56.250" readonly="readonly" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input class="btn btn-warning" type="submit" name="Submit" value="Kirim" onclick="alert('Pesanan sukses!,Terimakasih')"> <input class="btn btn-danger" type="reset" name="Submit2" value="Batal">
          </td>
          </tr>
        </table>
      </form>
    </div>
      </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>





