<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap-5.1.3/dist/css/bootstrap.css">
    <title>Web Absensi</title>
</head>
<body>
<div class="preloader">
        <div class="circle-container">
            <svg class="circle-ring" width="588" height="589" viewBox="0 0 588 589" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="circle-ring">
                    <path id="Vector" d="M293.979 588.069C226.068 588.069 160.258 564.522 107.761 521.44C55.2655 478.358 19.3316 418.407 6.0827 351.8C-7.16624 285.194 3.08946 216.055 35.1024 156.163C67.1152 96.2706 118.905 49.3313 181.646 23.3428C244.388 -2.64573 314.199 -6.07546 379.186 13.638C444.173 33.3514 500.314 74.9883 538.043 131.454C575.773 187.92 592.756 255.721 586.099 323.305C579.443 390.889 549.559 454.074 501.538 502.095C474.345 529.437 441.998 551.115 406.37 565.872C370.743 580.63 332.542 588.174 293.979 588.069V588.069ZM293.979 3.24069C133.359 3.24069 2.68504 133.914 2.68504 294.534C2.68504 455.154 133.359 585.828 293.979 585.828C454.598 585.828 585.272 455.154 585.272 294.534C585.272 133.914 454.598 3.24069 293.979 3.24069V3.24069Z" fill="#2F2E41"/>
                    <path id="circle" d="M474.357 120.879C505.294 120.879 530.375 95.7987 530.375 64.8608C530.375 33.9229 505.294 8.84277 474.357 8.84277C443.419 8.84277 418.339 33.9229 418.339 64.8608C418.339 95.7987 443.419 120.879 474.357 120.879Z" fill="#38373F"/>
                </g>
            </svg>

        </div>

        <div class="cube-container">
            <svg class="cube" width="306" height="348" viewBox="0 0 306 348" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="cube">
                    <path id="Vector" d="M305.908 266.443L305.875 266.46L161.201 347.019L2.77896 267.808L0.0489502 266.443L8.27095 102.003L151.334 0.0499878L152.913 1.03699L300.975 93.781L305.908 266.443Z" fill="#7222ED"/>
                    <path id="Vector_2" opacity="0.3" d="M305.875 266.46L161.201 347.019L2.77905 267.808L143.112 169.424L305.875 266.46Z" fill="black"/>
                    <path id="Vector_3" opacity="0.1" d="M305.908 266.443L143.112 169.424L152.913 1.03699L300.975 93.781L305.908 266.443Z" fill="black"/>
                    <path id="Vector_4" d="M6.16496 152.745L5.36096 151.607L150.021 49.5L302.834 145.309L302.094 146.49L150.066 51.173L6.16496 152.745Z" fill="#F2F2F2"/>
                    <path id="Vector_5" d="M3.36098 208.61L2.57898 207.458L146.505 109.743L146.882 109.957L302.963 198.417L302.275 199.629L146.571 111.382L3.36098 208.61Z" fill="#F2F2F2"/>
                    <path id="Vector_6" d="M58.276 295.965L57.542 294.781L202.595 204.9V32.594H203.988V205.676L58.276 295.965Z" fill="#F2F2F2"/>
                    <path id="Vector_7" d="M115.209 324.428L114.469 323.248L254.138 235.645V64.879H255.531V236.416L115.209 324.428Z" fill="#F2F2F2"/>
                    <path id="Vector_8" d="M253.612 295.982L91.176 205.73L91.199 205.296L99.75 36.281L101.141 36.352L92.612 204.933L254.289 294.764L253.612 295.982Z" fill="#F2F2F2"/>
                    <path id="Vector_9" d="M202.507 324.455L41.895 240.288L41.92 239.841L51.388 70.742L52.779 70.82L43.337 239.471L203.154 323.221L202.507 324.455Z" fill="#F2F2F2"/>
                </g>
            </svg>
        </div>
    
</div>
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->
  <svg id="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="position-absolute">
    <path fill="#5000ca" fill-opacity="0.85" d="M0,64L60,96C120,128,240,192,360,197.3C480,203,600,149,720,154.7C840,160,960,224,1080,224C1200,224,1320,160,1380,128L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
  </svg>
  <!-------------- navbar -------------->
  <nav class="navbar navbar-expand-sm navbar-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse">
        <a class="navbar-brand me-auto"></a>
        <div class="collapse d-flex mt-2">
          <a href="#"><button class="btn btn-light me-3 rounded-pill px-4 px-md-5 py-2" type="submit">Sign up</button></a>
          <a href="login.php"><button class="btn btn-outline-light rounded-pill px-4 px-md-5 py-2" type="submit">Log in</button></a>
        </div>
      </div>
    </div>
  </nav>

  <!-------------- konten -------------->
  <div class="container mt-2 mt-sm-5">
    <div class="row">
      <div class="col-12 mt-0 mt-sm-5">&nbsp</div>
    </div>
    <div class="row">
      <div class="col-sm-6 pt-5 pt-md-5">
          <h1 class="">Web Absensi</h1>
          <h5>Silakan bagi kalian warga kelas G untuk mengisi absen hari ini, ya!</h5>
          <!-- ------------------------------------------------- -->
          <a href="login.php">
            <button class="cta mt-5">
              <span>Get Started</span>
              <svg width="15px" height="10px" viewBox="0 0 13 10">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
              </svg>
            </button>
        </a>
          <!-- ------------------------------------------------- -->
      </div>
      <div class="col-sm-6">
          <img src="assets/image/5584.svg" alt="" class="img-fluid" />
      </div>
    </div>
  </div>
  <script src="assets/js/main.js"></script>
</body>
</html>