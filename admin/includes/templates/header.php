<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="1096260590946-9h6pffn85qcbasc4fgak89j7isued8b8.apps.googleusercontent.com">
    <link rel="stylesheet" href="<?php echo $css ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $css ?>admin.css">
    <title>Home</title>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v8.0&appId=718932511896356&autoLogAppEvents=1" nonce="R5c8omeP"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="layouts/images/logo.png" alt="Solo Learn" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container">
                <ul class="navbar-nav mr-auto float-right">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">COURSES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CODE PLAYGROUND</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">DISCUSS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TOP LEARNERS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            BLOG
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Single Post</a>
                            <a class="dropdown-item" href="#">Posts</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>