<?php
//include to get all the config variable
@include '../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- put your css here -->
    <link rel="icon" href="<?php echo $img ?>/isatlogo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="<?php echo $bootstrapcss; ?>">
    <link rel="stylesheet" href="<?php echo $icons; ?>">
    <link rel="stylesheet" href="../public/assets/css/style.css">

    <title>Iloilo Science and Technology</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark" id="header">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img class="img-fluid" height="40" width="40" src="<?php echo $img; ?>/isatlogo.png">
                <h4 class="h4 m-0 text-light text-sm ms-1">
                    Iloilo Science and Technology
                </h4>
            </a>
            <button class="navbar-toggler me-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse collapse-customize " id="navbarSupportedContent">
                <div class="d-flex justify-content-end">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-4">
                            <a class="nav-link text-light text-bold" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link text-light text-bold" href="#">About</a>
                        </li>
                        <?php if (isset($_SESSION['isLogin'])) : ?>

                            <li class="nav-item ">
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link d-flex text-light text-bold" data-bs-toggle="dropdown">
                                        <span class="align-self-center"><i class="fa fa-cog"></i></span>
                                        <i class="ms-1 fa fa-caret-down text-size mt-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end bg-dark rounded-0 rounded-bottom m-0 border-secondary">
                                        <a href="profile.php" class="dropdown-item text-light side-link">
                                            <h6 class="text-bold"><i class="fa fa-user"></i> My Profile</h6>
                                        </a>
                                        <a href="../actions/logout.php" class="dropdown-item text-light side-link logout">
                                            <h6 class="text-bold"><i class="fa fa-sign-out"></i> Logout</h6>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <?php if (isset($_SESSION['isLogin'])) : ?>
        <div class="d-flex">
            <div class="bg-dark sidebar" id="sidebar">
                <div class="col-11 m-auto mt-4">
                    <div class="row m-auto my-2 ms-3" id="div-close">
                        <div class="col-2 px-0" id="profile-close">
                            <img class="img-fluid" src="../public/assets/img/user-logo.png" />
                        </div>
                        <div class="col-9 px-1 d-flex align-items-center">
                            <p class="text-size text-light g-0 text-start text-bold m-0 text-side"><?php if (isset($_SESSION['name'])) :
                                                                                                        echo $_SESSION['name'];
                                                                                                    endif; ?>
                            </p>
                        </div>
                    </div>
                    <hr class="dropdown-divider bg-secondary mx-2 mt-3">
                    <div class="row m-auto mt-3">
                        <div class="col-12 p-0">
                            <div class="row m-auto">
                                <a class="side-link btn py-2">
                                    <div class="d-flex align-items-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="#fff">
                                            <path d="M13.25 9V3.5h7.25V9ZM3.5 12.5v-9h7.25v9Zm9.75 8v-9h7.25v9Zm-9.75 0V15h7.25v5.5Z" />
                                        </svg>
                                        <p class="text-white m-0 ms-2 alig-self-center text-side text-bold">Dashboard</p>
                                    </div>
                                </a>
                            </div>
                            <div class="row m-auto mt-3">
                                <a class="side-link btn py-2">
                                    <div class="d-flex align-items-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="#fff">
                                            <path d="M4.5 20.5V9.25L12 3.6l7.5 5.65V20.5h-5.6v-6.7h-3.8v6.7Z" />
                                        </svg>
                                        <p class="text-white m-0 ms-2 alig-self-center text-side text-bold">Home</p>
                                    </div>
                                </a>
                            </div>
                            <div class="row m-auto mt-3">
                                <a class="side-link btn py-2" href="manage_user.php">
                                    <div class="d-flex align-items-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="#fff">
                                            <path d="M12 11.7q-1.45 0-2.475-1.038Q8.5 9.625 8.5 8.2q0-1.45 1.025-2.475Q10.55 4.7 12 4.7q1.45 0 2.475 1.025Q15.5 6.75 15.5 8.2q0 1.425-1.025 2.462Q13.45 11.7 12 11.7Zm-7.5 7.6v-2.225q0-.725.4-1.35.4-.625 1.075-.975 1.475-.725 2.988-1.088Q10.475 13.3 12 13.3t3.038.362q1.512.363 2.987 1.088.675.35 1.075.975.4.625.4 1.35V19.3Z" />
                                        </svg>
                                        <p class="text-white m-0 ms-2 alig-self-center text-side text-bold">Manage Users</p>
                                    </div>
                                </a>
                            </div>

                            <div class="close-side" id="close-side">
                                <button class="btn p-0 me-1">
                                    <i class="fa fa-angle-left text-light rounded px-2 py-1 bg-secondary" id="icon-close"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 main-content" id="main-content">
            <?php endif; ?>