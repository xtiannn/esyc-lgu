<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/unified-lgu-logo.png">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>System UI Template</title>

    <!-- Simple bar CSS (for scvrollbar)-->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/custom-css.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <style>
        .avatar-initials {
            width: 165px;
            height: 165px;
            border-radius: 50%;
            display: flex;
            margin-left: 8px;
            justify-content: center;
            align-items: center;
            font-size: 50px;
            font-weight: bold;
            color: #fff;

        }

        .avatar-initials-min {
            width: 40px;
            height: 40px;
            background: #75e6da;
            border-radius: 50%;
            display: flex;
            margin-left: 8px;
            justify-content: center;
            align-items: center;
            font-size: 14px;
            font-weight: bold;
            color: #fff;

        }

        .upload-icon {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            cursor: pointer;
            font-size: 24px;
            color: #fff;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            background-color: #333;
            padding: 10px;
            border-radius: 50%;
            z-index: 1;
        }

        .avatar-img:hover .upload-icon {
            opacity: 1;
        }

        .avatar-img {
            position: relative;
            transition: background-color 0.3s ease-in-out;
        }

        .avatar-img:hover {
            background-color: #a0f0e6;
        }
    </style>

</head>


<div class="loader-mask">
    <div class="loader">
        <div></div>
        <div></div>
    </div>
</div>


<body class="vertical  light">
    <div class="wrapper">
        <!-- Navigation Bar -->
        @include('partials.navbar')
        <!-- End Navigation Bar -->

        <!-- Sidebar  -->
        @include('partials.sidebar')
        <!-- End Sidebar  -->

        <main role="main" class="main-content">

            <!--Notification Modal  -->
            @include('partials.notification-modal')
            <!--End Notification Modal  -->

            <div class="container-fluid">
                {{ $slot }}
            </div>
        </main>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/d3.min.js"></script>
    <script src="js/topojson.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/gauge.min.js"></script>
    <script src="js/jquery.sparkline.min.js"></script>
    <script src="js/apexcharts.min.js"></script>
    <script src="js/apexcharts.custom.js"></script>
    <script src='js/jquery.mask.min.js'></script>
    <script src='js/select2.min.js'></script>
    <script src='js/jquery.steps.min.js'></script>
    <script src='js/jquery.validate.min.js'></script>
    <script src='js/jquery.timepicker.js'></script>
    <script src='js/dropzone.min.js'></script>
    <script src='js/uppy.min.js'></script>
    <script src='js/quill.min.js'></script>
    <script src="js/apps.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src='js/jquery.dataTables.min.js'></script>
    <script src='js/dataTables.bootstrap4.min.js'></script>

</body>

</html>
