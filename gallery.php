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
            <h2>Our Gallery</h2>
            <p>Our transformation glimpse</p>
        </div>
    </div>

    <div class="container">
        <div class="row py-5">
            <?php
            include 'db.php';
            $sql = "select * from gallery";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-4 g-5">
                        <img src="<?php echo "assets/uploads/" . $row['image']; ?>" alt="" class="img-fluid rounded" style="height: 200px; width: 300px;">
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>


    <?php include "footer.php"; ?>
    <!-- BOOTSTRAP-JS-FILE -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>