<?php
include "db.php";
$id = $_GET["id"];

$sql = "select * from services where id = '{$id}'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Services</title>
        <!-- BOOTSTRAP-CSS-FILE -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>

    <body>
        <?php include "header.php"; ?>
        <div class="container">
            <div class="row py-5">
                <div class="col-12">
                    <div class="card mb-3">
                        <img src="<?php echo "assets/uploads/" . $row['image']; ?>" class="card-img-top img-fluid" alt="..." style="height: 500px; width: 1130px">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $row['title']; ?></h3>
                            <p class="card-text"><?php echo $row['description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>

    <?php include "footer.php"; ?>
    </body>

    </html>