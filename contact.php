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
            <h2>Our Contact</h2>
            <p>This is the text overlaid on the image.</p>
        </div>
    </div>


    <div class="container py-5">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="row mb-4">
                <div class="col">
                    <h3 class="h3 text-center">Get in Touch</h3>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <input type="text" name="name" placeholder="Enter your name" class="form-control">
                </div>
                <div class="col">
                    <input type="text" name="contact" placeholder="Enter your contact" class="form-control">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <input type="text" name="email" placeholder="Enter your email" class="form-control">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="form-control"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>


    <?php include "footer.php"; ?>
    <!-- BOOTSTRAP-JS-FILE -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>