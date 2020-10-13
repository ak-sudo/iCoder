<?php
session_start();

if(!isset($_SESSION['username'])){
echo "Logged out successfully";
    header('location:login.php');
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>iCoder-Heaven for Programmers</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">iCoder</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Topics
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="tech.html">Technology</a>
                        <a class="dropdown-item" href="web.html">Web Development</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="support.html">Support Us</a>
                        <a class="dropdown-item" href="write.html">Write for Us</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <div style="color: lightcoral; font-style: italic; font-size: small; font-weight: 200; padding-left: 205px; padding-top: 6px; letter-spacing: 1.5px; word-spacing: 5px">
                      <u><b><h5>Welcome <?php echo $_SESSION['username']; ?></h5></b></u>
                </div>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="mx-2">
                <button class="btn btn-danger" >
                 <a href="logout.php">Log Out</a>
                </button>
                <button class="btn btn-warning" style="text-decoration: none;">
                  <a href="regis.php" style="color: white; text-decoration: none;">SignUp</a></button>
            </div>
        </div>
    </nav>
  
  <!-- Login Modal -->
  
  

  <!-- Sign Up Modal -->
 
  <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="signupModalLabel">Get an iCoder Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="cexampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="cexampleInputPassword1">
                  </div>
                <button type="submit" class="btn btn-primary">Create Account</button>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
      </div>
    </div>
  </div>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <u><h4 style="color: red;"><b><?php echo $_SESSION['username']; ?></b></u></h4>
                    <h2>Welcome to iCoder</h2>
                    <p>Technology News, Development and Trends</p>
                    <button class="btn btn-danger">Technology</button>
                    <button class="btn btn-primary">Web Development</button>
                    <button class="btn btn-success">Tech Fun</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>The Best Coding Blog</h2>
                    <p>Technology News, Development and Trends</p>
                    <button class="btn btn-danger">Technology</button>
                    <button class="btn btn-primary">Web Development</button>
                    <button class="btn btn-success">Tech Fun</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Award Winning Blog</h2>
                    <p>Technology News, Development and Trends</p>
                    <button class="btn btn-danger">Technology</button>
                    <button class="btn btn-primary">Web Development</button>
                    <button class="btn btn-success">Tech Fun</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Highly Recommended For Web Developers</h2>
                    <p>Technology News, Development and Trends</p>
                    <button class="btn btn-danger">Technology</button>
                    <button class="btn btn-primary">Web Development</button>
                    <button class="btn btn-success">Tech Fun</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">World</strong>
                  <h3 class="mb-0">Global Conferences</h3>
                  <div class="mb-1 text-muted">Nov 12</div>
                  <p class="card-text mb-auto">SignUp to iCoder's account and you can get chance to take up best Web Developing conferences all around the world.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="200" height="250" src="thumb5.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-success">Design</strong>
                  <h3 class="mb-0">Learn Designing</h3>
                  <div class="mb-1 text-muted">Nov 11</div>
                  <p class="mb-auto">After signing in to iCoder's account you can get easy access to learn, write and design Web Sites.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="thumb4.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
    </div>

    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-danger">FrontEnd</strong>
                  <h3 class="mb-0">BootstrapTemplates</h3>
                  <div class="mb-1 text-muted">Nov 12</div>
                  <p class="card-text mb-auto">No tension for FrontEnd when you have all the access to Bootstrap Templates.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/500x700/?bootstrap" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-warning">Python</strong>
                  <h3 class="mb-0">Learn Python</h3>
                  <div class="mb-1 text-muted">Nov 11</div>
                  <p class="mb-auto">HURRY UP! Signup and get a chance to get free Python coding classes this month.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/500x700/?tech,code,laptop" alt="">
                </div>
              </div>
            </div>
          </div>
    </div>

    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2020-2021 iCoder, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
     </footer>


     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>
</html>