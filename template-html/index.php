<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BS 4s</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet/less" type="text/css" href="assets/css/custom.less" media="screen, projection" />
    <link rel="stylesheet" href="assets/css/custom.css" media="screen, projection" />
</head>

<body>
    <div class="header">
        <a class="logo" href="#" style="background-image: url('http://www.yesdelftstudents.nl/wp-content/uploads/2018/01/YesStudents.png')">
            <!-- <img class="img" src="http://www.yesdelftstudents.nl/wp-content/uploads/2018/01/YesStudents.png"> -->
        </a>
        <div class="profile-menu">
            <div class="profile rounded-circle">
                <i class="material-icons">account_circle</i>
            </div>
        </div>
    </div>
    <div class="sidebar-left">
        <?php for ($i=0; $i < 3; $i++) { ?>
        <span class="line-pink" href="#">
            <input type="checkbox" id="order-<?=$i?>">
            <label for="order-<?=$i?>" class="menu-parent"><i class="fas fa-home"></i>asd</label>
            <ul class="menu-child">
                <li>asd</li>
                <li>asd</li>
                <li>asd</li>
                <li>asd</li>
                <li>asd</li>
                <li>asd</li>
                <li>asd</li>
            </ul>
        </span>
        <?php } ?>
    </div>
    <div class="content">
        <div class="sidebar-mode">
            <i class="fas fa-arrow-left"></i>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.0.2/less.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    </script>
</body>

</html>