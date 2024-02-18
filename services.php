<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- BOOTSTRAP-CSS-FILE -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FONTAWESOME-CSS-FILE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- CUSTOM-CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "header.php"; ?>
    <div class="banner">
        <img src="assets/banner-1.jpg" alt="Banner Image">
        <div class="overlay">
            <h2>Our Services</h2>
            <p>Get a chance to transform your body</p>
        </div>
    </div>


    <div class="container py-5">
        <div class="row py-5">
            <div class="col">
                <h3 class="h3 text-capitalize text-center">our services</h3>
            </div>
        </div>
        <div class="row g-5">

            <?php
            include "db.php";
            $sql = "select * from services";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo "assets/uploads/" . $row['image']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                <p class="card-text"><?php echo substr($row['description'], 0, 50); ?></p>
                                <a href="<?php echo "http://localhost/fitness_club/inner-services.php?id=" . $row['id']; ?>" class="btn btn-primary capitalize">know more</a>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>


    <?php include "footer.php"; ?>
    <!-- BOOTSTRAP-JS-FILE -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>