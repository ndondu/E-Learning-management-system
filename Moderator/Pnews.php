<?php
session_start();

?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard|moonelearning</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">


    <!--=======fontawesome css========-->
    <link rel="stylesheet" href="./css/all.min.css">
    <!--=======styles css========-->
    <link rel="stylesheet" href="../css/styles.css">

</head>

<body>




    <div class="container main-dash ">

        <div class="  start-dash">

            <div class="  page-wrapper chiller-theme toggled ">
                <a id="show-sidebar" class="btn btn-sm btn-primary" href="#">
                    <i class="fas fa-bars"></i>
                </a>
                <nav id="sidebar" class="sidebar-wrapper pt-2">
                    <div class="  sidebar-content">
                        <div class="sidebar-brand">
                            <a href="#">Moon Academy</a>
                            <div id="close-sidebar">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                        <div class="sidebar-header">
                            <div class="user-pic">
                                <img class="img-responsive img-rounded" src="../images/university-avatar-education-icon-vector-1979314(1).jpg" alt="User picture">
                            </div>
                            <div class="user-info">
                                <span class="user-name text-dark"> <b> <?php echo $_SESSION['name'] ?> </b> </span>
                                <span class="user-role">student</span>
                                <span class="user-status">
                                    <i class="fa fa-circle"></i>
                                    <span>Online</span>
                                </span>
                            </div>
                        </div>
                        <!-- sidebar-header  -->
                        <div class="sidebar-search">
                            <div>
                                <div class="input-group">
                                    <input type="text" class="form-control search-menu" placeholder="Search course..">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sidebar-search  -->
                        <div class="sidebar-menu">
                            <ul>
                                <li class="header-menu">
                                    <span>General</span>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="./mdashboard.php">
                                        <i class="fa fa-tachometer-alt"></i>
                                        <span>Dashboard</span>

                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="./dashboard.php">main

                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">My courses</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="../Sections/eventscalendar.php">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span> Events </span>
                                        <span class="badge badge-pill badge-danger">3</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>

                                            <li>
                                                <a href="#">New</a>
                                            </li>
                                            <li>
                                                <a href="#">Upcoming Events</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="far fa-gem"></i>
                                        <span>Dapartments</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Ict</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="../Sections/enrollcourse.php">
                                        <i class="fa fa-chart-line"></i>
                                        <span>All Courses</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Web Development</a>
                                            </li>
                                            <li>
                                                <a href="#">Android Programming</a>
                                            </li>
                                            <li>
                                                <a href="#">Networking</a>
                                            </li>
                                            <li>
                                                <a href="#">Graphic Design</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-globe"></i>
                                        <span>Activities</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Chess club</a>
                                            </li>
                                            <li>
                                                <a href="#">code challenge</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-globe"></i>
                                        <span>News and Announcements</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#exampleModal">Post News</a>
                                            </li>
                                            <li>
                                                <a href="#">Edit News </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="header-menu">
                                    <span>Extra</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-book"></i>
                                        <span>Documentation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./eventscalendar.php">
                                        <i class="fa fa-calendar"></i>
                                        <span>Calendar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-bookmark"></i>
                                        <span>Badges</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-th"></i>
                                        <span>Attendance</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- sidebar-menu  -->
                    </div>
                    <!-- sidebar-content  -->
                    <div class="sidebar-footer">
                        <a href="#">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-pill badge-warning notification">3</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-envelope"></i>
                            <span class="badge badge-pill badge-success notification">3</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-cog"></i>

                        </a>
                        <a href="../Includes/logout.php">
                            <i class="fa fa-power-off"></i>
                        </a>
                    </div>
                </nav>

                <!--============= END NAVBAR ============ -->
                <!-- sidebar-wrapper  -->

                <!-- PAGE CONTENT DASHBOARD -->


                <main class="page-content pt-5">
                    <div class="container">
                        <div class=" moon-logo container  ">

                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="../images/university-avatar-education-icon-vector-1979314(1).jpg" alt="">

                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 pt-5" style="margin-left: -5rem;">
                                    <p class=" logo-text text-uppercase text-primary ">Moon Academy</p>
                                </div>
                            </div>

                        </div>

                        <div class=" row pt-5">
                            <?php
                            include "../Includes/connect.php";
                            $query = mysqli_query($conn, "SELECT news.id, news.title, news.message, news.posted, news.user_id,
                                    users_table.id as nid, users_table.name
                                     from users_table
                                     inner join news on  news.user_id = users_table.id
                                     ");

                            while ($row = mysqli_fetch_array($query)) {
                            ?>

                                <div class="col-md-12 col-lg-12 bg-white ">
                                    <div>

                                        <p class="posted-by">
                                            <span class="topic"><?php echo $row['title']; ?></span><br>
                                            Posted By: <span><?php echo $row['name'] ?></span> on <span><?php echo $row['posted'] ?></span>
                                        </p>
                                    </div>
                                    <p>
                                        <?php echo $row['message'] ?>
                                    </p>
                                    <div class="news-btn">
                                        <div class="like-btn">
                                            <i></i>
                                            <a href="#">
                                                <button class="btn btn-primary">like</button>
                                            </a>
                                        </div>
                                        <div class="comment-btn">

                                            <i></i>
                                            <a href="#">
                                                <button class="btn btn-primary">comment</button>
                                            </a>

                                        </div>
                                    </div>
                                </div>





                            <?php } ?>
                        </div>
                    </div>


                </main>

                <!--end  page-content" -->



            </div>

        </div>




    </div>

    <!-- <div class="pop-container">
        <div class="pop-content">
            <div class="close-popup" id="close">
                <i class="fas fa-times"></i>
            </div>
            <div class="form-group">
              

            </div>
        </div>
    </div> -->

    <!-- Modal -->
    <div class="pop-conainer">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Post News</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="../Includes/news.php" method="post">
                        <div class="modal-body">
                            <div class="col-lg-12">
                                <input type="text" name="title" class="form-control" placeholder="title">
                            </div><br>
                            <div class="col-lg-12">
                                <textarea name="message" cols="20" rows="5" type="text" class="form-control" placeholder="message"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- dashboard navbar jquery -->
    <script src="../js/main.js"></script>
</body>

</html>