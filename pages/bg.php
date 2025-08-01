<!DOCTYPE html>


<?php error_reporting(0);
include __DIR__ . '/../global.inc.php';
?>


<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Cache-Control" content="no-cache">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">

        <link rel="apple-touch-icon" href="logo.png">
        <link rel="icon" href="logo.png">

        <title>WebGL Fluid Simulation</title>
        <meta name="description" content="A WebGL fluid simulation that works in mobile browsers.">

        <meta property="og:type" content="website">
        <meta property="og:title" content="Webgl Fluid Simulation">
        <meta property="og:description" content="A WebGL fluid simulation that works in mobile browsers.">
        <meta property="og:url" content="https://paveldogreat.github.io/WebGL-Fluid-Simulation/">
        <meta property="og:image" content="https://paveldogreat.github.io/WebGL-Fluid-Simulation/logo.png">

        <style>
            @font-face {
                font-family: 'iconfont';
                src: url('iconfont.ttf') format('truetype');
            }

            * {
                user-select: none;
            }

            html, body {
                overflow: hidden;
                background-color: #000;
            }

            body {
                margin: 0;
                position: fixed;
                width: 100%;
                height: 100%;
            }

            canvas {
                width: 100%;
                height: 100%;
            }

            .dg {
                opacity: 0.9;
            }

            .dg .property-name {
                overflow: visible;
            }

            .bigFont {
                font-size: 150%;
                color: #8C8C8C;
            }

            .cr.function.appBigFont {
                font-size: 150%;
                line-height: 27px;
                color: #A5F8D3;
                background-color: #023C40;
            }

            .cr.function.appBigFont .property-name {
                float: none;
            }

            .cr.function.appBigFont .icon {
                position: sticky;
                bottom: 27px;
            }

            .icon {
                font-family: 'iconfont';
                font-size: 130%;
                float: right;
            }

            .twitter:before {
                content: 'a';
            }

            .github:before {
                content: 'b';
            }

            .app:before {
                content: 'c';
            }

            .discord:before {
                content: 'd';
            }

            .promo {
                display: none;
                /* display: table; */
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
                overflow: auto;
                color: lightblue;
                background-color: rgba(0,0,0,0.4);
                animation: promo-appear-animation 0.35s ease-out;
            }

            .promo-middle {
                display: table-cell;
                vertical-align: middle;
            }

            .promo-content {
                width: 80vw;
                height: 80vh;
                max-width: 80vh;
                max-height: 80vw;
                margin: auto;
                padding: 0;
                font-size: 2.8vmax;
                font-family: Futura, "Trebuchet MS", Arial, sans-serif;
                text-align: center;
                background-image: url("promo_back.png");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                border-radius: 15px;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            }

            .promo-header {
                height: 10%;
                padding: 2px 16px;
            }

            .promo-close {
                width: 10%;
                height: 100%;
                text-align: left;
                float: left;
                font-size: 1.3em;
                /* transition: 0.2s; */
            }

            .promo-close:hover {
                /* transform: scale(1.25); */
                cursor: pointer;
            }

            .promo-body {
                padding: 8px 16px 16px 16px;
                margin: auto;
            }

            .promo-body p {
                margin-top: 0;
                mix-blend-mode: color-dodge;
            }

            .link {
                width: 100%;
                display: inline-block;
            }

            .link img {
                width: 100%;
            }

            @keyframes promo-appear-animation {
                0% {
                    transform: scale(2.0);
                    opacity: 0;
                }
                100% {
                    transform: scale(1.0);
                    opacity: 1;
                }
            }
        </style>
        <script>
            window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
            ga('create', 'UA-105392568-1', 'auto');
            ga('send', 'pageview');
        </script>
        <script async src="https://www.google-analytics.com/analytics.js"></script>
    </head>
    <body>
        <canvas></canvas>

        <!-- Mother of God, pls forgive me -->
        <div class="promo">
            <div class="promo-middle">
                <div class="promo-content">
                    <div class="promo-header">
                        <span class="promo-close">&times;</span>
                    </div>
                    <div class="promo-body">
                        <p>Try Fluid Simulation app!</p>
                        <div class="links-container">
                            <a class="link" id="apple_link" target="_blank">
                                <img class="link-img" alt="Download on the App Store" src="app_badge.png"/>
                            </a>
                            <a class="link" id="google_link" target="_blank">
                                <img class="link-img" alt="Get it on Google Play" src="gp_badge.png"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="<?= SITE_URL; ?>assets/js/dat.gui.min.js"></script>
    <script src="<?= SITE_URL; ?>assets/js/fluid_bg.js"></script>
    </body>
</html>