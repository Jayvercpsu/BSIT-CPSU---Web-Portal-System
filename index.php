<?php
require_once "include/header.php";
?>

<section id="sliderSection">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="slick_slider">
        <!-- Welcome Carousel -->
        <?php
        $welcome_message = "SELECT * FROM welcome_messages ORDER BY created_at DESC LIMIT 3"; // Limit to 3 rows
        $welcome_result = mysqli_query($conn, $welcome_message);

        if ($welcome_result) {
          while ($row = mysqli_fetch_assoc($welcome_result)) {
            $welcome_heading = $row["heading"];
            $welcome_text = $row["message"];
            $images = [$row["image_1"], $row["image_2"], $row["image_3"]];

            // Loop through each image to create individual slides
            foreach ($images as $image) {
        ?>
            <div class="single_iteam">
              <a href="#">
                <img src="admin/upload/welcome/<?php echo $image; ?>" alt="Welcome Image" class="carousel-image">
              </a>
              <div class="slider_article">
                <h2><a class="slider_tittle" href="#"><?php echo $welcome_heading; ?></a></h2>
                <p><?php echo $welcome_text; ?></p>
              </div>
            </div>
        <?php
            }
          }
        }
        ?>
        <!-- End Welcome Carousel -->
      </div> 
    </div>
  </div>
</section>

<!-- Include jQuery and Slick Carousel JS and CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
$(document).ready(function(){
  $('.slick_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    prevArrow: $('.slick-prev'),
    nextArrow: $('.slick-next')
  });
});
</script>

<!-- CSS Styling for Centered Text Overlay -->
<style>
  .single_iteam {
    position: relative;
    text-align: center;
  }

  .carousel-image {
    width: 100%;
    height: auto;
  }

  .slider_article {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
    padding: 20px;
    border-radius: 8px;
    width: 80%; /* Adjust width as needed */
  }

  .slider_tittle {
    font-size: 24px;
    color: white;
    text-decoration: none;
  }

  .slider_article p {
    color: white;
    margin: 0;
  }
</style>












<!-- 
<section id="sliderSection">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="slick_slider"> -->

        <!-- Adding Main News Carousel -->
        <?php
        // $latest = "SELECT * FROM post_description ORDER BY p_time DESC LIMIT 5";
        // $latest_n = mysqli_query($conn, $latest);
        // if ($latest_n) {
        //   while ($rows = mysqli_fetch_assoc($latest_n)) {
        //     $heading = $rows["p_heading"];
        //     $img = $rows["p_carousel"];
        //     $description = $rows["p_description"];
        //     $news_id = $rows["p_id"];
        ?>
            <!-- <div class="single_iteam"> <a href="read-post.php?id=<?php echo $news_id ?>"> <img src="admin/upload/carousel/<?php echo $img; ?>"></a>
              <div class="slider_article">
                <h2><a class="slider_tittle" href="read-post.php?id=<?php echo $news_id ?>"><?php echo $heading; ?></a></h2>
                <p> <?php echo $description; ?> </p>
              </div>
            </div> -->
        <?php
        //   }
        // }
        ?>
        <!-- End Main News Carousel -->
      </div>
    </div>
  </div>
</section>

<section id="contentSection">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="left_content">
        <div class="single_post_content">
          <?php
          // Selecting Category Name-----------------------------------------------
          $select_cat = "SELECT * FROM post_category";
          $result = mysqli_query($conn, $select_cat);

          if ($result) {
            while ($rows = mysqli_fetch_assoc($result)) {
              $cat_name =  $rows["c_name"];
              echo "<h2><span> $cat_name </span></h2>";

              // Selecting category latest 1 news-------------------------------------------------
              if ($cat_name) {

                $select_news = "SELECT * FROM post_description WHERE p_category = '$cat_name' ORDER BY p_time DESC LIMIT 1 ";
                $result_news = mysqli_query($conn, $select_news);
                if ($result_news) {
                  while ($rows_news = mysqli_fetch_assoc($result_news)) {
                    $news_thumb = $rows_news["p_thumbnail"];
                    $news_heading = $rows_news["p_heading"];
                    $news_description = $rows_news["p_description"];
                    $id_n = $rows_news["p_id"];
          ?>

                    <!-- Display Big News Left Side -->
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <ul class="wow fadeInDown">
                          <li>
                            <a href="read-post.php?id=<?php echo $id_n ?>"> <img alt="" style="height:300px;" class="img-fluid img-responsive" src="admin/upload/thumbnail/<?php echo $news_thumb; ?>"> </a>
                            <div> <a href="read-post.php?id=<?php echo $id_n ?>">
                                <h3> <?php echo ucwords($news_heading); ?> </h3>
                              </a> </div>
                            <div> <a href="read-post.php?id=<?php echo $id_n ?>"> <?php echo ucwords($news_description); ?> </a> </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                  <?php
                  }
                }

                $select_small_news = "SELECT * FROM post_description WHERE p_category = '$cat_name' ORDER BY p_time DESC LIMIT 5 OFFSET 1 ";
                $small_news_result = mysqli_query($conn, $select_small_news);
                if ($small_news_result) {
                  while ($small_rows = mysqli_fetch_assoc($small_news_result)) {
                    $small_headline = $small_rows["p_heading"];
                    $small_thumb = $small_rows["p_thumbnail"];
                    $id_n = $small_rows["p_id"];
                  ?>

                    <!-- Adding 5 Small News Right Side -->
                    <div class="d-flex flex-row justify-content-start">
                      <div class="col-lg-2 col-md-2 col-sm-6">
                        <ul class="wow fadeInDown">
                          <li>
                            <div> <a href="read-post.php?id=<?php echo $id_n ?>"> <img style="height:60px;" class="img-fluid img-responsive" src="admin/upload/thumbnail/<?php echo $small_thumb; ?>"> </a> </div>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-6">
                        <ul class="wow fadeInDown">
                          <li>
                            <div> <a href="read-post.php?id=<?php echo $id_n ?>"> <?php echo ucwords($small_headline); ?> </a> </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                <?php
                  }
                }
                ?>

                <!-- See More Link -->
                <div style="position: relative;">
                  <a href="read-category.php?category=<?php echo $cat_name; ?>" style="position: absolute; bottom: 8px; right: 16px; color:blue;">see more...</a>
                </div>
                <!-- End See More -->
          <?php
              }
            }
          }
          ?>

        </div>
      </div>
    </div>

    <?php
    require_once "include/footer.php";
    ?>