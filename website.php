<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ali Hazime</title>
    <style type="text/css">
        @media only screen and (min-width: 360px) {
            /* For mobile */
            .col-m-1 {width: 8.33%;}
            .col-m-2 {width: 16.66%;}
            .col-m-3 {width: 25%;}
            .col-m-4 {width: 33.33%;}
            .col-m-5 {width: 41.66%;}
            .col-m-6 {width: 50%;}
            .col-m-7 {width: 58.33%;}
            .col-m-8 {width: 66.66%;}
            .col-m-9 {width: 75%;}
            .col-m-10 {width: 83.33%;}
            .col-m-11 {width: 91.66%;}
            .col-m-12 {width: 100%;}

            .menu_icon {
                height: 80px;
                text-align: center;
                margin-right: 5px;
                color: #FFFFFF;
            }
        }

        @media only screen and (min-width: 600px) {
            /* For tablets: */
            .col-t-1 {width: 8.33%;}
            .col-t-2 {width: 16.66%;}
            .col-t-3 {width: 25%;}
            .col-t-4 {width: 33.33%;}
            .col-t-5 {width: 41.66%;}
            .col-t-6 {width: 50%;}
            .col-t-7 {width: 58.33%;}
            .col-t-8 {width: 66.66%;}
            .col-t-9 {width: 75%;}
            .col-t-10 {width: 83.33%;}
            .col-t-11 {width: 91.66%;}
            .col-t-12 {width: 100%;}

            .menu_icon {
                height: 80px;
                text-align: center;
                margin-right: 5px;
                color: #FFFFFF;
            }

            .title {
                font: italic bold 35px Monaco, monospace;
                padding-top: 22px;
                padding-left: 18px;
                color: #FFFFFF;
            }

            .hidden_image_div {
                display: none;
            }

            .menu_icon {
                display: none;
            }

            .last_nav {
                margin-right: 50px;
            }

            nav {
                justify-content: right;
                display: flex;
            }

            .nav_dropdown {
                display: none;
            }
        }

        @media only screen and (min-width: 1280px) {
            /* For desktop: */
            .col-1 {width: 8.33%;}
            .col-2 {width: 16.66%;}
            .col-3 {width: 25%;}
            .col-4 {width: 33.33%;}
            .col-5 {width: 41.66%;}
            .col-6 {width: 50%;}
            .col-7 {width: 58.33%;}
            .col-8 {width: 66.66%;}
            .col-9 {width: 75%;}
            .col-10 {width: 83.33%;}
            .col-11 {width: 91.66%;}
            .col-12 {width: 100%;}

            section {
                display: flex;
            }

            section > div {
                margin-top: 50px;
                display: grid;
                justify-content: center;
            }
        }

        @media only screen and (max-width: 600px) {
            .nav_links {
                display: none;
            }

            section {
                display: block;
            }

            section > div {
                display: block;
                margin-top: 50px;
                justify-content: center;
            }

            .hidden_image_div {
                margin-top: 20px;
                width: 100%;
                justify-content: center;
                display: flex;
            }

            .hide_image {
                display: none;
            }
        }

        @media only screen and (max-width: 1280px) {
            .title {
                display: none;
            }
        }

        header {
            height: 80px;
            background-color: #128CFF;
            display: flex;
        }

        .logo {
            display: flex;
        }

        .logo_img {
            max-width: 70px;
            height: auto;
            padding-left: 20px;
            padding-top: 5px;
        }

        nav {
            justify-content: right;
            display: flex;
        }

        .nav_links {
            height: 80px;
            text-align: center;
            margin-right: 30px;
            color: #FFFFFF;
        }

        .nav_links > a {
            height: 80px;
            display: flex;
            font: 35px Monaco, monospace;
            text-decoration: none;
            color: inherit;
            padding-top: 16px;
            padding-left: 20px;
            padding-right: 20px;
        }

        .nav_links:hover {
            background-color: #B3DEE8;
            color: #000000;
        }

        .hamburger {
            max-width: 80px;
            height: auto;
            filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(260deg) brightness(101%) contrast(102%);
            padding-top: 0px;
        }

        .nav_dropdown {
            float: none;
            text-align: center;
            background-color: #2555E6;
            color: #FFFFFF;
        }

        .nav_dropdown_2 {
            display: none
        }

        .nav_dropdown > div {
            height: 80px;
            text-align: center;
        }

        .nav_dropdown > div > a {
            text-align: center;
            font: 35px Monaco, monospace;
            text-decoration: none;
            color: inherit;
            display: block;
            padding-top: 20px;
        }

        .nav_dropdown > div:hover {
            background-color: #B3DEE8;
            color: #000000;
        }

        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #128CFF;
            color: white;
        }

        .footer_text {
            text-align: right; 
            margin: 0; 
            padding: 10px;
            font: 15px Monaco, monospace;
        }

        .my_pic {
            width: 250px;
            height: auto;
            border-radius: 50%;
        }

        figure {
            width: 250px;
            height: auto;
            overflow: hidden;
        }
        
        figure:hover+span {
            bottom: -36px;
            opacity: 1;
        }

        .zoom_in figure img {
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
        }

        .zoom_in figure:hover img {
            transform: scale(1.5);
        }

        .zoom_in {
            justify-content: center;
            display: flex;
        }

        .name {
            font: bold 60px Monaco, monospace;
            text-align: center;
            margin-top: 5px;
            margin-bottom: 5px;
            color: #2555E6;
        }

        .uni {
            font: 35px Monaco, monospace;
            text-align: center;
            margin-top: 5px;
            margin-bottom: 5px;
            color: #2555E6;
        }

        .job_title {
            font: italic 30px Monaco, monospace;
            text-align: center;
            margin-top: 5px;
            margin-bottom: 5px;
            color: #2555E6;
        }

        .email {
            font: 20px Monaco, monospace;
            text-align: center;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 2px #2555E6 solid;
            color: #2555E6;
            margin-left: 20px;
            margin-right: 20px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .section_title {
            margin-top: 0px;
            font: 35px Monaco, monospace;
            text-decoration: underline;
            color: #2555E6;
            text-align: center;
            margin-bottom: 0px;
        }

        .p_text {
            font: 20px Monaco, monospace;
            color: #2555E6;
            border: 2px #2555E6 solid;
            text-align: justify;
            text-justify: inter-word;
            padding-left: 10px;
            padding-right: 10px;
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 50px
        }

        .div_text {
            margin-top: 0px;
        }

        .second_title {
            font: bold 25px Monaco, monospace;
            color: #2555E6;
            padding-left: 25px;
        }

        .football {
            width: 350px;
            height: 233px;
        }

        .image_div {
            margin-top: 20px;
            width: 100%;
            justify-content: center;
            display: flex;
        }

        .one_piece {
            width: 125px;
            height: 188px;
            padding-right: 10px;
        }

        .naruto {
            width: 125px;
            height: 188px;
            padding-right: 10px;
        }

        .dbz {
            width: 125px;
            height: 188px;
        }

    </style>
</head>
<body>
    <?php
        // Top of the webpage
        display("matter/header.txt");

        // Body of the webpage
        if (sizeof($_GET) == 0 || $_GET["Page"] == "Home") {
            // HOME PAGE
            display("matter/home.txt");
        
        } else if ($_GET["Page"]=="Hobbies") {
            // HOBBIES PAGE
            display("matter/hobbies.txt");
        } else {
            // Error Page
            echo "404: Invalid Page!";
        }

        // Bottom of the page
        display("matter/footer.txt");

        function display($path) {
            $file = fopen($path,"r");
            while(!feof($file)) {
                $line = fgets($file);
                echo $line;
            }
            fclose($file);
        }
    ?>
    <script>
        function dropdown() {
            var e = document.getElementById("nav_dropdown");
            if (e.className == "nav_dropdown_2 col-12 col-t-12 col-m-12") {
                e.className = "nav_dropdown col-12 col-t-12 col-m-12";
            } else {
                e.className = "nav_dropdown_2 col-12 col-t-12 col-m-12";
            }    
        }
    </script>
</body>
</html>