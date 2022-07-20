<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mangansweet.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg bg-warning">
        <div class="container">
          <h3><i class="fa-solid fa-ice-cream text-light me-2"></i></h3>
          <a class="navbar-brand fw-bold" href="#">Mangansweet.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
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
      <div class="col">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
           <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="slide/coba.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="slide/coba2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="slide/coba3.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <h3 class="text-center fw-bold m-4" id="scrollspyHeading2">Best Seller</h3>
        <div class="row">
          <div class="card ms-4 me-3 " style="width: 18rem;">
            <img src="produk/keju1.png" onmouseover="this.src='produk/keju2.jpeg';" onmouseout="this.src='produk/keju1.png';" class="card-img-top mt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">Say Cheese</h5>
              <p class="card-text">Dessert Box</p>
               <p class="card-tittle mt-2 fw-semibold"><strike>Rp 65.000</strike> Rp 42.250 </p>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star-half-stroke text-warning"></i><br>
              <a href="#" class="btn btn-dark mt-2" data-bs-target="#produk1" data-bs-toggle="modal">Detail</a>
            </div>
          </div>
          <div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="col-md-6 ">
                  <img src="produk/keju1.png"class="card-img-top">
                  </div>
                  <div class="col-md-8">
                    <table class="table table-borderless">
                      <tr>
                        <th>Nama Produk</th>
                        <td>Say Cheese</td>
                      </tr>
                      <tr>
                        <th>Jenis Produk</th>
                        <td>Dessert Box</td>
                      </tr>
                       <tr>
                        <th>Berat</th>
                        <td>100gr</td>
                      </tr>
                       <tr>
                        <th>Stok</th>
                        <td>Ada</td>
                      </tr>
                       <tr>
                        <th>Harga</th>
                        <td><strike>Rp 65.000</strike> Rp 42.250</td>
                      </tr>
                      <tr>
                        <th>Ulasan Produk</th>
                        <td>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star-half-stroke text-warning"></i><br>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                  <a href="cetak.php" class="btn btn-warning">Beli</a> 
                </div>
              </div>
            </div>
          </div>

          <div class="card ms-4 me-3 " style="width: 18rem;">
            <img src="produk/lotus1.png" onmouseover="this.src='produk/lotus3.png';" onmouseout="this.src='produk/lotus1.png';" class="card-img-top mt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">Brow Box Lotus</h5>
              <p class="card-text">Brow Box</p>
              <p class="card-tittle mt-2 fw-semibold">Rp 75.000 </p>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star-half-stroke text-warning"></i><br>
              <a href="#" class="btn btn-dark mt-2" data-bs-target="#produk2" data-bs-toggle="modal">Detail</a>
            </div>
          </div>
          <div class="modal fade" id="produk2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="col-md-6 ">
                  <img src="produk/lotus1.png" class="card-img-top">
                  </div>
                  <div class="col-md-8">
                    <table class="table table-borderless">
                      <tr>
                        <th>Nama Produk</th>
                        <td>Brow Box Lotus</td>
                      </tr>
                      <tr>
                        <th>Jenis Produk</th>
                        <td>Brow Box</td>
                      </tr>
                       <tr>
                        <th>Berat</th>
                        <td>500gr</td>
                      </tr>
                       <tr>
                        <th>Stok</th>
                        <td>Ada</td>
                      </tr>
                       <tr>
                        <th>Harga</th>
                        <td>Rp 75.000</td>
                      </tr>
                      <tr>
                        <th>Ulasan Produk</th>
                        <td>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star-half-stroke text-warning"></i><br>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                  <a href="cetak1.php" class="btn btn-warning">Beli</a>
                </div>
              </div>
            </div>
          </div>

          <div class="card ms-4 me-3 " style="width: 18rem;">
            <img src="produk/coklat1.png" onmouseover="this.src='produk/coklat2.png';" onmouseout="this.src='produk/coklat1.png';" class="card-img-top mt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">Choco Heaven</h5>
              <p class="card-text">Dessert Box</p>
              <p class="card-tittle mt-2 fw-semibold"><strike>Rp 75.000</strike> Rp 56.250 </p>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i><br>
              <a href="#" class="btn btn-dark mt-2" data-bs-target="#produk3" data-bs-toggle="modal">Detail</a>
            </div>
          </div>
          <div class="modal fade" id="produk3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="col-md-6 ">
                  <img src="produk/belgium-cake1.png" class="card-img-top">
                  </div>
                  <div class="col-md-8">
                    <table class="table table-borderless">
                      <tr>
                        <th>Nama Produk</th>
                        <td>Choco Heaven</td>
                      </tr>
                      <tr>
                        <th>Jenis Produk</th>
                        <td>Dessert Box</td>
                      </tr>
                       <tr>
                        <th>Berat</th>
                        <td>100gr</td>
                      </tr>
                       <tr>
                        <th>Stok</th>
                        <td>Ada</td>
                      </tr>
                       <tr>
                        <th>Harga</th>
                        <td><strike>Rp 75.000</strike> Rp 56.250</td>
                      </tr>
                      <tr>
                        <th>Ulasan Produk</th>
                        <td>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <br>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                  <a href="cetak2.php" class="btn btn-warning">Beli</a>
                </div>
              </div>
            </div>
          </div>

          <div class="card ms-4 me-3 " style="width: 18rem;">
            <img src="produk/turki2.png" onmouseover="this.src='produk/turki1.png';" onmouseout="this.src='produk/turki2.png';" class="card-img-top mt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">Turkish Dessert</h5>
              <p class="card-text">Dessert Box</p>
              <p class="card-tittle mt-2 fw-semibold"><strike>Rp 75.000</strike> Rp 59.000 </p>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i><br>
              <a href="#" class="btn btn-dark mt-2" data-bs-target="#produk4" data-bs-toggle="modal">Detail</a>
            </div>
          </div>
          <div class="modal fade" id="produk4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="col-md-6 ">
                  <img src="produk/turki1.png" class="card-img-top">
                  </div>
                  <div class="col-md-8">
                    <table class="table table-borderless">
                      <tr>
                        <th>Nama Produk</th>
                        <td>Turkish Dessert</td>
                      </tr>
                      <tr>
                        <th>Jenis Produk</th>
                        <td>Dessert Box</td>
                      </tr>
                       <tr>
                        <th>Berat</th>
                        <td>100gr</td>
                      </tr>
                       <tr>
                        <th>Stok</th>
                        <td class="text-danger">Hampir Habis</td>
                      </tr>
                       <tr>
                        <th>Harga</th>
                        <td><strike>Rp 75.000</strike> Rp 59.000</td>
                      </tr>
                      <tr>
                        <th>Ulasan Produk</th>
                        <td>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i><br>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                  <a href="cetak3.php" class="btn btn-warning">Beli</a>
                </div>
              </div>
            </div>
          </div>

          <div class="card ms-4 me-3 mt-4 " style="width: 18rem;">
            <img src="produk/cakelotus1.png" onmouseover="this.src='produk/cakelotus2.jpeg';" onmouseout="this.src='produk/cakelotus1.png';" class="card-img-top mt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pull Me Up Cake Lotus</h5>
              <p class="card-text">Cheese Cake</p>
              <p class="card-tittle mt-2 fw-semibold">Rp 35.000 </p>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star-half-stroke text-warning"></i><br>
             <a href="#" class="btn btn-dark mt-2" data-bs-target="#produk5" data-bs-toggle="modal">Detail</a>
            </div>
          </div>
          <div class="modal fade" id="produk5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="col-md-6 ">
                  <img src="produk/cakelotus1.png" class="card-img-top">
                  </div>
                  <div class="col-md-8">
                    <table class="table table-borderless">
                      <tr>
                        <th>Nama Produk</th>
                        <td>Pull Me Up Cake Lotus</td>
                      </tr>
                      <tr>
                        <th>Jenis Produk</th>
                        <td>Cheese Cake</td>
                      </tr>
                       <tr>
                        <th>Berat</th>
                        <td>200gr</td>
                      </tr>
                       <tr>
                        <th>Stok</th>
                        <td>Ada</td>
                      </tr>
                       <tr>
                        <th>Harga</th>
                        <td>Rp 35.000</td>
                      </tr>
                      <tr>
                        <th>Ulasan Produk</th>
                        <td>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star-half-stroke text-warning"></i><br>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                  <a href="cetak4.php" class="btn btn-warning">Beli</a>
                </div>
              </div>
            </div>
          </div>

          <div class="card ms-4 me-3 mt-4 " style="width: 18rem;">
            <img src="produk/red-velvet.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">Red Velvet Cake Potong</h5>
              <p class="card-text">Cake Potong</p>
              <p class="card-tittle mt-2 fw-semibold">Rp 350.000 </p>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star-half-stroke text-warning"></i><br>
              <a href="#" class="btn btn-dark mt-2" data-bs-target="#produk6" data-bs-toggle="modal">Detail</a>
            </div>
          </div>
          <div class="modal fade" id="produk6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="col-md-6 ">
                  <img src="produk/red-velvet.png" class="card-img-top">
                  </div>
                  <div class="col-md-8">
                    <table class="table table-borderless">
                      <tr>
                        <th>Nama Produk</th>
                        <td>Red Velvet Cake Potong</td>
                      </tr>
                      <tr>
                        <th>Jenis Produk</th>
                        <td>Cake Potong</td>
                      </tr>
                       <tr>
                        <th>Berat</th>
                        <td>500gr</td>
                      </tr>
                       <tr>
                        <th>Stok</th>
                        <td>Ada</td>
                      </tr>
                       <tr>
                        <th>Harga</th>
                        <td>Rp 350.000</td>
                      </tr>
                      <tr>
                        <th>Ulasan Produk</th>
                        <td>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star-half-stroke text-warning"></i><br>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                  <a href="cetak5.php" class="btn btn-warning">Beli</a>
                </div>
              </div>
            </div>
          </div>
            

          <div class="card ms-4 me-3 mt-4 " style="width: 18rem;">
            <img src="produk/belgium-cake1.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">Belgium Round Cake</h5>
              <p class="card-text">Round Cake</p>
              <p class="card-tittle mt-2 fw-semibold">Rp 400.000 </p>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star-half-stroke text-warning"></i><br>
              <a href="#" class="btn btn-dark mt-2" data-bs-target="#produk7" data-bs-toggle="modal">Detail</a>
            </div>
          </div>
          <div class="modal fade" id="produk7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="col-md-6 ">
                  <img src="produk/belgium-cake1.png" class="card-img-top">
                  </div>
                  <div class="col-md-8">
                    <table class="table table-borderless">
                      <tr>
                        <th>Nama Produk</th>
                        <td>Belgium Round Cake</td>
                      </tr>
                      <tr>
                        <th>Jenis Produk</th>
                        <td>Round Cake</td>
                      </tr>
                       <tr>
                        <th>Berat</th>
                        <td>500gr</td>
                      </tr>
                       <tr>
                        <th>Stok</th>
                        <td>Ada</td>
                      </tr>
                       <tr>
                        <th>Harga</th>
                        <td>Rp 400.000</td>
                      </tr>
                      <tr>
                        <th>Ulasan Produk</th>
                        <td>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star-half-stroke text-warning"></i><br>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                  <a href="cetak6.php" class="btn btn-warning">Beli</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card ms-4 me-3 mt-4 " style="width: 18rem;">
            <img src="produk/cakelove1.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">Monogram Cake Love</h5>
              <p class="card-text">Monogram Cake</p>
              <p class="card-tittle mt-2 fw-semibold">Rp 350.000 </p>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i><br>
              <a href="#" class="btn btn-dark mt-2" data-bs-target="#produk8" data-bs-toggle="modal">Detail</a>
            </div>
          </div>
          <div class="modal fade" id="produk8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="col-md-6 ">
                  <img src="produk/cakelove1.png" class="card-img-top">
                  </div>
                  <div class="col-md-8">
                    <table class="table table-borderless">
                      <tr>
                        <th>Nama Produk</th>
                        <td>Monogram Cake Love</td>
                      </tr>
                      <tr>
                        <th>Jenis Produk</th>
                        <td>Monogram Cake</td>
                      </tr>
                       <tr>
                        <th>Berat</th>
                        <td>500gr</td>
                      </tr>
                       <tr>
                        <th>Stok</th>
                        <td>Ada</td>
                      </tr>
                       <tr>
                        <th>Harga</th>
                        <td>Rp 350.000</td>
                      </tr>
                      <tr>
                        <th>Ulasan Produk</th>
                        <td>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i>
                          <i class="fa-solid fa-star text-warning"></i><br>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                  <a href="cetak7.php" class="btn btn-warning">Beli</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class= "bg-dark text-white p-4 mt-4">
        <div class="col-md-3"></div>
      <h5 class="text-center">© Mangansweet. By Reza</h5>
      <h6 class="text-center">Responsi Pemrograman Web</h6>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>