<?php
  if ( isset($_GET['login']) ){
    $for_login = "?login=";
    $for_login .= $_GET['login'];
  }
  else{
    $for_login = "";
  }
?>

<?php
  $input=$_POST['top-search'];
  $conn = new mysqli("localhost", "root", "", "sdi1500057");
  if ($conn->connect_error) die($conn->connect_error);
  mysqli_set_charset($conn, "utf8");

  $query = "SELECT * FROM book WHERE title LIKE '%$input%' OR isbn LIKE '%$input%' OR author LIKE '%$input%' OR publisher LIKE '%$input%' OR bookstore LIKE '%$input%' OR year LIKE '%$input%' OR info LIKE '%$input%'";
  $result = $conn->query($query);
  if (!$result) die($conn->error);
  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Εύδοξος</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area wow fadeInDown" data-wow-delay="500ms">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="index.php<?php echo $for_login; ?>"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Search & Login Area -->
                        <div class="search-login-area d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="search.php<?php echo $for_login; ?>" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Αναζήτηση">
                                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <!-- Login Area -->
                            <div class="login-area">
                              <?php
                                if ( isset($_GET['login']) ){
                              ?>
                                <a href="profil.php?login=<?php echo $_GET['login']; ?>"><span><?php echo $_GET['login'] ?></span> <i class="fa fa-lock" aria-hidden="true"></i></a>
                              <?php
                                } else{
                              ?>
                                <a href="login.php"><span>Είσοδος / Εγγραφή</span> <i class="fa fa-lock" aria-hidden="true"></i></a>
                              <?php
                              }
                              ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="egames-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="egamesNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#">Φοιτητής</a>
                                        <ul class="dropdown">
                                            <li><a href="dhlwsh.php<?php echo $for_login; ?>">Δήλωση Συγγραμμάτων</a></li>
                                            <li><a href="#">Εύδοξος +</a></li>
                                            <li><a href="map.php<?php echo $for_login; ?>">Σημεία Διανομής</a></li>
                                            <li><a href="#">Παράδοση Συγγραμμάτων</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Γραμματεία</a>
                                        <ul class="dropdown">
                                          <li><a href="insertbook.php<?php echo $for_login; ?>">Προσθήκη Βιβλίου</a></li>
                                            <li><a href="#">Διαχείριση Συγγραμμάτων</a></li>
                                            <li><a href="#">Διαχείριση Γραμματείας</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Εκδότης</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Διαχείριση Συγγραμμάτων</a></li>
                                            <li><a href="#">Υπηρεσία Ταχυμεταφοράς</a></li>
                                            <li><a href="#">Κοστολόγηση</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#l">Βιβλιοπωλείο</a>
                                        <ul class="dropdown">
                                          <li><a href="#">Διαχείριση Συγγραμμάτων</a></li>
                                          <li><a href="#">Παράδοση Συγγραμμάτων</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="announcement.php<?php echo $for_login; ?>">Ανακοινώσεις</a></li>
                                    <li><a href="contact.php<?php echo $for_login; ?>">Επικοινωνία</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>

                    <ul class="breadcrumb">
                     <li><a href="index.php<?php echo $for_login; ?>">Αρχική</a></li>
                     <li>  »  <li>
                     <li><a href="search.php<?php echo $for_login; ?>">Αναζήτηση</a></li>
                   </ul>
                </div>
            </div>
        </div>

    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Articles Area Start ##### -->
    <section class="articles-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Articles Post Area -->
                <div class="col-12 col-lg-8">
                    <div class="mt-100">

                        <ol>
                        <!-- *** Single Articles Area *** -->
                        <?php
                          if ( strlen($input)!=0){
                            $rows = $result->num_rows;
                            // echo $rows;
                            for ( $j=0; $j<$rows; ++$j ){
                              $result->data_seek($j);
                              $line = $result->fetch_assoc();
                            // if($row['title'] == $title ){
                            //   echo $row['title'];
                        ?>
                          <li>
                            <div class="single-articles-area d-flex flex-wrap mb-30">
                                <div class="article-thumbnail">
                                    <img src="<?php echo $line['img']; ?>" alt="">
                                </div>
                                <div class="article-content">
                                    <a href="single-post.html" class="post-title">  <?php echo $line['title']; ?> </a>
                                    <div class="post-meta">
                                        <a href="#" class="post-date"><?php echo $line['year']; ?></a>
                                        <a href="#" class="post-comments"><?php echo $line['author']; ?></a>
                                    </div>
                                    <p><?php echo $line['info']; ?></p>
                                </div>
                            </div>
                          </li>
                        <?php
                          }}
                        ?>
                      </ol>
                      <p class="signup"><a ><?php echo "Βρέθηκαν $rows αποτελέσματα" ?></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Articles Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="300ms">
                            <div class="widget-title">
                                <h4>Φοιτητής</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="info_foithth.php<?php echo $for_login; ?>">Πως να δηλώσω σύγγραμμα;</a></li>
                                        <li><a href="info_foithth.php<?php echo $for_login; ?>">Γιατί να ανταλλάξω βιβλία;</a></li>
                                        <li><a href="info_foithth.php<?php echo $for_login; ?>">Πως να κάνω ανταλλαγή;</a></li>
                                        <!-- <li><a href="#">God of war</a></li>
                                        <li><a href="#">Persona 5</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="300ms">
                            <div class="widget-title">
                                <h4>Γραμματεία</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="info_grammateias.php<?php echo $for_login; ?>">Ποιές είναι οι αρμοδιότητές μου;</a></li>
                                        <li><a href="info_grammateias.php<?php echo $for_login; ?>">Πως να διαχειριστώ συγγράμματα;</a></li>
                                        <li><a href="info_grammateias.php<?php echo $for_login; ?>">Πως να διαχειριστώ μαθήματα;</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="500ms">
                            <div class="widget-title">
                                <h4>Εκδότης</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="#">Ποιές είναι οι ενέργειές μου;</a></li>
                                        <li><a href="#">Τι μου προσφέρει ο Εύδοξος;</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="700ms">
                            <div class="widget-title">
                                <h4>Βιβλιοπωλείο</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="#"></a></li>
                                        <li><a href="#">Ποιές είναι οι αρμοδιότητές μου;</a></li>
                                        <li><a href="#">Πως να προσθέσω βιβλία;</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
