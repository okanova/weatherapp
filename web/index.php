<?php $config = require_once '../config/app.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= env('SITE_ADI'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#"><?=env('SITE_ADI');?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?=(@$_GET['page'] == "home")?"active":""?>" href="?page=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=(@$_GET['page'] == "about-us")?"active":""?>" href="?page=about-us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=(@$_GET['page'] == "weather")?"active":""?>" href="?page=weather">Weather</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?=(@$_GET['page'] == "contact-us")?"active":""?>" href="?page=contact-us">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
switch (@$_GET['page']) {
    default:
    case "home":
template('home');
        break;
    case "about-us":
        template('about');
        break;
    case "contact-us":
        template('contact');
        break;
    case "weather":
        template('weather');
        break;
}
?>

</body>
</html>