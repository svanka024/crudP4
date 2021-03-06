<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>flyy away</title>
    <script src="script/script.js" defer></script>
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link type="text/css" rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-white super_float">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="" width="160" height="160">
          </a>
        <a class="navbar-brand text-info" href="index.php"> <strong>home</strong></a>
        <button class="navbar-toggler" ty pe="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="php/boeking.php">booking</a>
        <button class="navbar-toggler" ty pe="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="information.html">information</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="php/aboutus.php">about us</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="php/contact.php">contact</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="fotos.html">fotos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="php/login.php">login</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="php/logout.php">logout</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        </div>
      </div>
    </nav>
    <div id="booking" class="section">
      <div class="conttop">
        <div>
          <h1 class="flyaway">flyy<strong class="text-info">away</strong></h1>
        </div>
      </div>
      <div class="section-center">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-md-push-5">
              <div class="booking-cta">
                <h1>maak uw reservering</h1>
                <p>beste reiziger welkom bij Flyaway wij boeken leuke vakantie reizen voor u.
                van spanje tot australie. hiernaast kunt u uw ideale reis samenstellen en boeken.</p>
              </div>
            </div>
            <div class="col-md-4 col-md-pull-7">
              <div class="booking-form">
                <form>
                  <div class="dropdown">
                  <select class="btn btn-light dropdown-toggle" name="cars" id="cars">
                    <option value="spanje">Barcelona</option>
                    <option value="griekenland">Parijs</option>
                    <option value="monaco">Sidney</option>
                    <option value="turkije">Lissabon</option>
                    <option value="italie">Rome</option>
                    <option value="mexico">Istanbul</option>
                    <option value="portugal">Madrid</option>
                    <option value="amerika">Los Angeles</option>
                    <option value="frankrijk">New York</option>
                    <option value="japan">Munchen</option>
                    <option value="china">Las Vegas</option>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <span class="form-label">Check In</span>
                        <input class="form-control" type="date" required />
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <span class="form-label">Check out</span>
                        <input class="form-control" type="date" required />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <span class="form-label">Rooms</span>
                        <select class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <span class="form-label">Adults</span>
                        <select class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <span class="form-label">Children</span>
                        <select class="form-control">
                          <option>0</option>
                          <option>1</option>
                          <option>2</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-btn">
                    <button class="submit-btn">Check availability</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container landen">
        <div class="card" style="width: 18rem;">
        <img src="img/spanje.img" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text"><h1>spanje</h1>
            zin in een warme vakantie aan het strand of in een strad. 
            misschien is spanje dan jou perfecte vakantie bestemming.</p>
        </div>
        </div>
        <div class="card" style="width: 18rem;">
        <img src="img/ibiza.img" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text"><h1>ibiza</h1>
            toe aan een warme strand vakantie? boek dan een weekje naar ibiza en geniet van de zon.
          met vrienden of familie.</p>
        </div>
        </div>
        <div class="card" style="width: 18rem;">
        <img src="img/noorway.img" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text"><h2>noorwegen</h2>
            bent u meer toe aan een avonduurlijke vakantie in noorwegen? noorwegen heeft mooie gebergten en mooie 
          plaatselijke dorpjes</p>
        </div>
        </div>
        <div class="card" style="width: 18rem;">
        <img src="img/france.img" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text"><h1>frankrijk</h1>
            te veel keuze stress? ga dan gewoon naar frankrijk. zee/strand, bergen, liefdes rijs
          frankrijk bied alles. en lekker dicht bij huis. berijkbaar met auto of vliegtuig.</p>
        </div>  
      </div>
    </div>
    </div>`
    <footer class="sticky-footer">
      <ul class="ul1">
        <li><a class="text-info">info@FlyAway.com</a></li>
        <li><a class="text-info">06 16436963</a></li>
        <li><a class="text-info">instagram: fly.away</a></li>
        <li><a class="text-info" href="voorwaarden.html">algemene voorwaarden</a></li>
      </ul>
      <p class="text-info">made by Jasper and Sven</p>
    </footer>
  </body>
</html>
