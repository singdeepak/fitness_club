<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitnessClub - Home</title>
    <!-- BOOTSTRAP-CSS-FILE -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FONTAWESOME-CSS-FILE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- CUSTOME-CSS -->
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
    <!-- HEADER-SECTION-BEGIN -->
    <?php include "header.php"; ?>
    <!-- HEADER-SECTION-END -->

    <!-- CAROUSEL-SECTION-BEGIN -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="assets/banner-1.jpg" class="d-block w-100 home_banner" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="assets/banner-2.jpg" class="d-block w-100 home_banner" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="assets/banner-3.jpg" class="d-block w-100 home_banner" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- CAROUSEL-SECTION-END -->

    <!-- SERVICES-SECTION-BEGIN -->
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
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
        ?>
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo "assets/uploads/".$row['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['title']; ?></h5>
                        <p class="card-text"><?php echo substr($row['description'], 0, 50); ?></p>
                        <a href="<?php echo "http://localhost/fitness_club/inner-services.php?id=".$row['id']; ?>" class="btn btn-primary capitalize">know more</a>
                    </div>
                </div>
            </div>
            <?php }} ?>
        </div>
    </div>
    <!-- SERVICES-SECTION-END -->

    <!-- MAP-SECTION-BEGIN -->
    <div class="container-fluid py-5 bg-warning">
        <div class="row">
            <div class="col align-items-center d-flex justify-content-center">
                <h2 class="text-capitalize">our location</h2>
            </div>

            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3147.7629959508627!2d73.07710167425093!3d19.045141952942448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c39dfb43c2b3%3A0xbda5ae1033b59546!2sThe%20Roarr%20Fitness%20Club!5e1!3m2!1sen!2sin!4v1707923904807!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- MAP-SECTIN-END -->

    <!-- FOOTER-SECTION-BEGIN -->
    <?php
    include "footer.php";
    ?>
    <!-- FOOTER-SECTION-END -->

    <!-- BOOTSTRAP-JS-FILE -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>