<?php 
  require_once('database/connection.inc.php');
  require_once('includes/url-prams.php');
  require_once('includes/functions.inc.php');
  require_once('includes/constants.inc.php');
  require_once('includes/paths.inc.php');
  require_once('authentication/auth-code.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Data -->
    <?php 
        require_once('includes/meta-data.inc.php');
    ?>
    <!-- Favicon -->
    <!-- Style Sheets -->
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="<?php echo SITE_PATH ?>assets/css/styles.css">
</head>
<body class="bg-blue-50">
    <?php
        if($con){
            if(isset($_SESSION['IS_ADMIN'])&&$_SESSION['IS_ADMIN']!=''){
              ?>
              <main class="flex">
              <?php
                require_once('admin/includes/adminSidebar.inc.php');
              ?>
                <aside class="w-4/5">
                    <?php
                      require_once('admin/includes/adminNavbar.inc.php');
                      require_once('includes/routes.inc.php');
                      require_once('admin/includes/adminFooter.inc.php');
                    ?>
                </aside>
              </main>
              <?php
            }else{
              require_once('includes/navbar.inc.php');
              require_once('includes/routes.inc.php');
              require_once('includes/footer.inc.php');
            }
        }else{
            ?>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-5 mx-auto flex items-center align-middle md:flex-row flex-col">
                    <div class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
                        <h2 class="text-xs text-red-500 tracking-widest font-medium title-font mb-1">Database Connection Failed</h2>
                        <h1 class="md:text-3xl text-2xl font-medium title-font text-gray-900">Please check the credentials</h1>
                    </div>
                </div>
            </section>
            <?php
        }
    ?>
    <script src="<?php echo SITE_PATH ?>assets/js/custom.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!-- Initialize Swiper -->
    <script>
        
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        effect: "fade",
        // lazy: true,
        loop: true,
        // direction: getDirection(),
        centeredSlides: true,
        autoplay: {
          delay: 4500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          dynamicBullets: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        // on: {
        //   resize: function () {
        //     swiper.changeDirection(getDirection());
        //   },
        // },
      });
      function getDirection() {
        var windowWidth = window.innerWidth;
        var direction = window.innerWidth <= 760 ? 'horizontal' : 'vertical';

        return direction;
      }
    </script>
</body>
</html>