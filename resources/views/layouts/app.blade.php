<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @yield('css')

    <title>Ardhika Rafi</title>
  </head>
  <body>
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom box-shadow">
          <nav class="navbar fixed-top navbar-light" style="background-color: #e3f2fd;" >
            <!-- Image and text -->
            <nav class="navbar navbar-light ">
            <a class="navbar-brand" href="#">
              <img src="http://icons.iconarchive.com/icons/graphicloads/100-flat/256/home-icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
              PesonaNusantara
            </a>
            </nav>
            
            <div>
            </div>
            <div>
            <a class="p-2 link-navbar" href="/">Home</a>
            <a class="p-2 link-navbar" href="#">Daftar Lombaku</a>
            <a class="p-2 link-navbar" href="#">Pengumuman <span class="badge badge-pill badge-success">9</span></a>
            </div>            
            <div>
              @yield('tambahdata')
            </div>
            <div>
              @yield('akunsign')            
            </div>
          </nav>
        </div>
      </header>

      <main role="main">
        @yield('content')
      </main>
   

      <footer class="text-muted">
        <div class="container">
          <p class="float-right">
            <a href="#">Back to top</a>
          </p>
          <p>© Copyright LOMBA NUSANTARA 2018</p>
        </div>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @yield('js')
  </body>
</html>