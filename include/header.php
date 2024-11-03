<!DOCTYPE html>
<html>

<head>
  <title>BSIT CPSU</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/css/font.css">
  <link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <style>
    /* Header styling */
    .top_header {
      background-color: #1a1a1a;
      color: #e0e0ff;
      padding: 10px;
    }

    .top_header .contact_info {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .contact_info p,
    .contact_info a {
      margin: 0;
      color: #d1c4e9;
    }

    .header_logo {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .header_logo img {
      height: 60px;
      margin: 5px;
    }

    .header_main {
      background-color: #4c1c8f;
      color: #fff;
      padding: 15px 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .header_main h1 {
      font-size: 2rem;
      font-weight: bold;
      margin: 0;
      color: #fff;
    }

    .navbar-inverse {
      background-color: #1a1a1a;
      border: none;
    }

    .navbar-inverse .navbar-nav>li>a {
      color: #d1c4e9;
      font-weight: bold;
    }

    .navbar-inverse .navbar-nav>li>a:hover,
    .navbar-inverse .navbar-nav>li.active>a {
      color: #fff;
      background-color: #4c1c8f;
    }

    .top_links {
      gap: 15px;
      display: flex;
    }



    .container {
      margin: auto;
      width: 100%;
    }

    .header_top_right {
      float: left;
      display: inline;
      width: 50%;
      text-align: right
    }

    .header_top_right>p {
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      font: bold 12px sans-serif;
      margin: 0;
      padding: 20px 8px 0 0;
      /* Combines padding-top and padding-right */
    }

    .header_top {
      background-color: #2c2c2c;
      display: inline;
      float: left;
      padding: 0 30px;
      width: 100%
    }

    .header_top_left {
      float: left;
      display: inline;
      width: 50%
    }


    /* Responsive styling */
    @media (max-width: 768px) {
      .header_main h1 {
        font-size: 16px;
        margin: auto;
      }


      .contact_info {
        flex-direction: column;
        align-items: flex-start;
        text-align: left;
      }

      .contact_info a {
        margin-bottom: 5px;
      }


      .navbar-collapse {
        padding-left: 15px
      }

      .mobile-show {
        display: block
      }

      .desktop-home {
        display: none
      }

      .navbar-inverse .navbar-nav>li>a {
        display: block
      }

      .header_top_left {
        width: 100%
      }

      .header_top_right>p {
        display: none
      }

      .social_area {
        display: none
      }

      .single_iteam a {
        height: 100%
      }

      .single_iteam a>img {
        height: 100%
      }

      .error_page>a {
        margin-bottom: 25px
      }

      .nav-tabs>li {
        width: 32.6%
      }
    }
  </style>
</head>

<body>
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

  <div class="container1">
    <header id="header1">
      <div class="top_header">
        <div class="contact_info">
          <p><a href="mailto:"><i class="fa fa-envelope"></i> bsit_cpsu@edu.ph</a></p>
          <div class="top_links">
            <a href="#"><i class="fa fa-phone"></i> +63 9173-015-565</a>
            <a href="#"><i class="fa fa-user"></i> Login</a>
          </div>
        </div>
      </div>
      <div class="header_main">
        <div class="header_logo">
          <img src="./assets/image/bsit_logo.png" alt="CPSU Logo">
          <h1>BSIT</h1>
          <img src="./assets/image/cpsu_logo.png" alt="BSIT Logo">
          <h1>Central Philippine State University</h1>
        </div>
      </div>
    </header>

    <header id="header">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="header_top  ">
            <div class="header_top_left">
              <ul class="top_nav ">
                <li class="me-3"><a href="./index.php">Home</a></li>
                <!-- <li class="me-3"><a href="#">Our Gallery</a></li>
                <li class="me-3"><a href="#">Our Faculty</a></li> -->
                <li class="me-3"><a href="./about-us.php">About us</a></li>
                <li class="me-3"><a href="./contact-us.php">Contact Us</a></li>
              </ul>
            </div>
            <div class="header_top_right">
              <p class="mb-0"><?php echo date("l, F d, Y", strtotime("now")); ?></p>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="navArea">
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav main_nav">
            <li class="active"><a href="./index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
            <li><a href="all-posts.php">All</a></li>
            <!-- Dynamic category list -->
            <?php
            require_once "./admin/include/connection.php";
            $get_category = "SELECT * FROM post_category";
            $result = mysqli_query($conn, $get_category);
            if ($result) {
              while ($rows = mysqli_fetch_assoc($result)) {
                $c_name = $rows["c_name"];
            ?>
                <li><a href="read-category.php?category=<?php echo $c_name; ?>"><?php echo $c_name; ?></a></li>
            <?php
              }
            }
            ?>
          </ul>
        </div>
      </nav>
    </section>

    <section id="newsSection">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="latest_newsarea">
            <span>Latest Updates</span>
            <ul id="ticker01" class="news_sticker">
              <!-- Latest news -->
              <?php
              $latest = "SELECT * FROM post_description ORDER BY p_time DESC";
              $latest_n = mysqli_query($conn, $latest);
              if ($latest_n) {
                $i = 1;
                while ($rows = mysqli_fetch_assoc($latest_n)) {
                  $heading = $rows["p_heading"];
                  $img = $rows["p_thumbnail"];
                  $id = $rows["p_id"];
              ?>
                  <li><a href='read-post.php?id=<?php echo $id; ?>'><img src="./admin/upload/thumbnail/<?php echo $img; ?>"> <?php echo $heading ?> </a></li>
              <?php
                  if ($i > 4) {
                    break;
                  }
                  $i++;
                }
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>