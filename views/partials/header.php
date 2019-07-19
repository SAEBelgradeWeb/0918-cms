<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        nav {
            display: block;
            overflow: hidden;
        }
        nav ul {
            margin: 0;
            padding: 0;

        }
        nav ul li {
            list-style-type: none;
            float: left;
            margin: 10px;
        }

        nav ul li a {
            display: block;
            padding: 4px;
            background-color: gainsboro;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: aqua;
        }


    </style>
</head>
<body>
<?php require "nav.php" ?>