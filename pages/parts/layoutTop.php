<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/icons.php') ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/meta.php') ?>

    <style type="text/css">
        #page-preloader {
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100vw;
            height: 100vh;
            background: #fff;
            z-index: 100500;
        }
        #page-preloader .spinner {
            width: 44px;
            height: 44px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -22px 0 0 -22px;
            color: #FFF;
            text-align: center;
        }
    </style>

</head>
<body ontouchstart="">

    <div id="page-preloader">
        <span class="spinner">
            <svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg" stroke="#501b7d">
                <g fill="none" fill-rule="evenodd" stroke-width="2">
                    <circle cx="22" cy="22" r="1">
                        <animate attributeName="r"
                                 begin="0s" dur="1.8s"
                                 values="1; 20"
                                 calcMode="spline"
                                 keyTimes="0; 1"
                                 keySplines="0.165, 0.84, 0.44, 1"
                                 repeatCount="indefinite" />
                        <animate attributeName="stroke-opacity"
                                 begin="0s" dur="1.8s"
                                 values="1; 0"
                                 calcMode="spline"
                                 keyTimes="0; 1"
                                 keySplines="0.3, 0.61, 0.355, 1"
                                 repeatCount="indefinite" />
                    </circle>
                    <circle cx="22" cy="22" r="1">
                        <animate attributeName="r"
                                 begin="-0.9s" dur="1.8s"
                                 values="1; 20"
                                 calcMode="spline"
                                 keyTimes="0; 1"
                                 keySplines="0.165, 0.84, 0.44, 1"
                                 repeatCount="indefinite" />
                        <animate attributeName="stroke-opacity"
                                 begin="-0.9s" dur="1.8s"
                                 values="1; 0"
                                 calcMode="spline"
                                 keyTimes="0; 1"
                                 keySplines="0.3, 0.61, 0.355, 1"
                                 repeatCount="indefinite" />
                    </circle>
                </g>
            </svg>
        </span>
    </div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/svgSprite.php') ?>

<div id="front" class="wrapper">



<?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/header.php') ?>

