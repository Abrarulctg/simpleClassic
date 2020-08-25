<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Classic</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <style>
        /* header{
            background-color: black;
            height: 120px;
            padding-top: 20px;
        }
        .header-title{
            font-size: 40px;
            color: white;
        }
        .header-title:hover{
            color: white;
        }
        
        .header-text{
            color: lightgray;
            padding-left: 40px;
        }
        header ul li {
            list-style:none;
            display: inline-block;
        }
        header ul li a{
            color: white;
            padding: 10px 20px;
        }
        header ul li a:hover{
            color: white;
        }
        .body{
            padding: 20px 20px;
        }
        footer li{
            list-style: none;
        }
        .sidebar li{
            list-style:none;
        }
        .sidebar .widgettitle{
            background-color: black;
            color: lightgray;
            font-size: 20px;
            padding: 10px;
            text-transform: uppercase;
        }
        .search-box li{
            list-style:none;
        }
        .search-box label{
            display:none;
        }
        .searchform{
    	display:flex;
        } */
    </style>
</head>
<body>

    <header class="header">
        <div class="container">
            <div class="d-flex align-items-center"> 
                <h2><a class="header-title" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
                <p class="header-text"><?php bloginfo('description'); ?> </p>
            </div>
        <nav class="">
            <div class="row">
                <div class="col-md-9">
                    <?php
                    $menu = array(
                    "theme_location" => "primary"
                    );
                    wp_nav_menu($menu);
                    ?>
                </div>
                <div class="col-md-3 search-box">
                        <?php dynamic_sidebar('search'); ?>
                </div>

            </div>
        </nav>

        </div>  
    </header>
