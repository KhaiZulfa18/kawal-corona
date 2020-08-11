<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title><?php echo $headertitle; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" >
  <link href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">

  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/image/favicon.ico" type="image/x-icon">
</head>
<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-faded">
    <a href="#" class="navbar-brand">
      <img src="<?php echo base_url(); ?>assets/image/virus.png" width="30" height="30" class="d-inline-block align-top">
      <b>Me vs Covid19</b>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="https://mondayy.site">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://mondayy.site/aboutme">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://covid.mondayy.site">Covid19</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Other Link about Covid
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="https://kawalcorona.com" target="_blank">kawalcorona.com</a>
            <a class="dropdown-item" href="https://covid19.go.id" target="_blank">covid19.go.id</a>
            <a class="dropdown-item" href="https://corona.jatengprov.go.id" target="_blank">corona.jatengprov.go.id</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="jumbotron jumbotron-fluid" style="background:transparent !important">
    <div class="container text-center">
      <h1>Corona vs Everybody</h1>
      <p>Coronavirus Global & Indonesia Live Data from <a href="https://kawalcorona.com" class="link" target="_blank">kawalcorona.com</a></p>
      <p id="waktu"></p>
      <a href="#page" class="btn btn-lg btn-primary">Lihat dong</a>
    </div>
  </div>
  <div class="container mt-2" id="page">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <select class="form-control" id="located" name="located">
            <option value="global">Global</option>
            <option value="indo">Indonesia</option>
          </select>
        </div>
      </div>

      <!-- <div class="col-md-6">
        <div class="form-group">
          <select class="form-control" id="provinsi" name="provinsi">
            <option value="global">-Semua Provinsi-</option>
          </select>
        </div>
      </div> -->
    </div>
    <div class="row">

      <div class="col-md-3">
        <div class="stati bg-carrot ">
          <i class="fa fa-frown icons"></i>
          <div>
            <b id="positif">0</b>
            <span class="txt-info">Positif</span>
          </div> 
        </div>
      </div> 
      <div class="col-md-3">
        <div class="stati bg-emerald ">
          <i class="fa fa-smile-beam icons"></i>
          <div>
            <b id="sembuh">0</b>
            <span class="txt-info">Sembuh</span>
          </div> 
        </div>
      </div> 
      <div class="col-md-3">
        <div class="stati bg-pomegranate ">
          <i class="fa fa-sad-tear icons"></i>
          <div>
            <b id="meninggal">0</b>
            <span class="txt-info">Meninggal</span>
          </div> 
        </div>
      </div>
      <div class="col-md-3">
        <div class="stati bg-wisteria ">
          <i class="fa fa-globe-asia icons"></i>
          <div>
            <b id="location">-</b>
            <span class="txt-info">Lokasi</span>
          </div> 
        </div>
      </div>  
    </div>
    <!-- <div class="card col-12">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div> -->
  </div>
  <!-- /.card-columns -->
  <div>
    <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
  </div>

  <footer class="mt-5 mb-2">
    <div class="container-fluid bg-faded mt-5">
      <div class="container">
        <div class="row py-3">
          <!-- footer column 1 start -->
          <div class="col-12 text-center">
            <span class="text-white">Copyright &copy; 2020 <a href="https://instagram.com/khaiz.18_" style="color: red; font-weight: bold;" target="_blank">Khai Zulfa</a></span>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php echo base_url(); ?>js/jquery/jquery.slim.min.js" ></script>
  <script src="<?php echo base_url(); ?>js/jquery/jquery.min.js" ></script>
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" ></script>

  <script src="<?php echo base_url(); ?>plugins/jquery-loading-overlay/dist/loadingoverlay.min.js"></script>
  <script src="<?php echo base_url(); ?>js/datacorona.js?v=1.0.3" type="text/javascript"></script>

  <script type="text/javascript">
    $(window).scroll(function () {
      if ($(window).scrollTop() >= 50) {
        $('.navbar').removeClass('bg-faded').addClass('bg-dark');
      } else {
        $('.navbar').addClass('bg-faded').removeClass('bg-dark');
      }
    });
  </script>
</body>
</html>