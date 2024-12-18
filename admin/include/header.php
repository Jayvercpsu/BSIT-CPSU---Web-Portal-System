<?php
session_start();
if (empty($_SESSION["email"])) {
    header("Location: login.php?login-first");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>BSIT CPSU - Admin Pannel</title>

    <link href="./resorce/css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <!-- <script src="ckeditor/ckeditor.js"></script> -->

    <style>
        .hidden {
            display: none;
        }

        .nav-header {
        background-color: #333;
        padding: 15px 20px;
        display: flex;
        justify-content: center;
    }

    .brand-logo {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .brand-title {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .logo-container img {
        height: 70px;
        width: 70px;
        border-radius: 50%; /* Adds a rounded effect */
        transition: transform 0.3s;
    }

    .logo-container img:hover {
        transform: scale(1.1); /* Hover effect */
    }

    .brand-title .bsit {
        color: #fff;
        font-size: 32px;
        font-family: 'Arial', sans-serif;
        font-weight: bold;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }

    @media (max-width: 768px) {
        .brand-title .bsit {
            font-size: 24px;
        }

        .logo-container img {
            height: 50px;
            width: 50px;
        }

        .nav-header {
            padding: 10px 15px;
        }
    }

    @media (max-width: 480px) {
        .brand-title {
            flex-direction: column;
            text-align: center;
        }

        .brand-title .bsit {
            font-size: 20px;
        }
    }
</style>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->






<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <div class="brand-logo">
            <span class="brand-title">
                <div class="logo-container">
                    <img src="../assets/image/bsit_logo.png" alt="BSIT">
                </div>
                <div class="bsit">
                    BSIT
                </div>
            </span>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->







        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="text-center">
                    <h2 class="pt-3"> NewsFeed </h2>
                </div>

            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <br> <br>
                    <li>
                        <a href="./index.php">
                            <i class="icon-home menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-list-alt menu-icon"></i><span class="nav-text">Post Topic</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-category.php"> <i class="icon-plus menu-icon"></i>Add Topic</a></li>
                            <li><a href="./manage-category.php"><i class="fa fa-cog menu-icon"></i>Manage Topic</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-pencil-square-o menu-icon"></i><span class="nav-text">Post Content</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-post-desc.php"> <i class="icon-plus menu-icon"></i>Add Post Content</a></li>
                            <li><a href="./manage-post-desc.php"><i class="fa fa-cog menu-icon"></i>Manage Post Content</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-pencil-square-o menu-icon"></i><span class="nav-text">Post</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-post-details.php"><i class="icon-plus menu-icon"></i>Add Post</a></li>
                            <li><a href="./manage-post-details.php"><i class="fa fa-cog menu-icon"></i>Manage Post</a></li>

                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-users menu-icon"></i><span class="nav-text">All Professors</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-professor.php"><i class="icon-plus menu-icon"></i>Add Professor</a></li>
                            <li><a href="./manage-professor.php"><i class="fa fa-cog menu-icon"></i>Manage Professor</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-users menu-icon"></i><span class="nav-text">All Students</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-students.php"><i class="icon-plus menu-icon"></i>Add Student</a></li>
                            <li><a href="./manage-students.php"><i class="fa fa-cog menu-icon"></i>Manage Student</a></li>

                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-list-alt menu-icon"></i><span class="nav-text">Welcome Message</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-welcome-message.php"> <i class="icon-plus menu-icon"></i>Add Message</a></li>
                            <li><a href="./manage-welcome-message.php"><i class="fa fa-cog menu-icon"></i>Manage Message</a></li>
                        </ul>
                    </li>
 

                    <li>
                        <a href="./about-us.php">
                            <i class="fa fa-address-card menu-icon"></i><span class="nav-text">About Us</span>
                        </a>
                    </li>


                    <li>
                        <a href="./contact-us.php">
                            <i class="fa fa-address-book menu-icon"></i><span class="nav-text">Contact Us</span>
                        </a>
                    </li>

                    <li>
                        <a href="./logout.php">
                            <i class="icon-logout menu-icon"></i><span class="nav-text">Logout</span>
                        </a>
                    </li>
                    <li>
                        <a href="./profile.php">
                            <i class="fa fa-user menu-icon"></i><span class="nav-text">Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">




            <div class="modal fade" id="showModal" data-backdrop="static" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div id="modalHead" class="modal-header">
                            <button id="modal_cross_btn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p id="addMsg" class="text-center font-weight-bold"></p>
                        </div>
                        <div class="modal-footer ">
                            <div class="mx-auto">
                                <a type="button" id="linkBtn" href="#" class="btn btn-primary">Add Expense For the Day</a>
                                <a type="button" id="closeBtn" href="#" data-dismiss="modal" class="btn btn-primary">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- row -->

            <div class="container-fluid">