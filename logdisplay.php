<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['first_name'])) {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>display data</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-5">
            <h1>Hello, <?php echo $_SESSION['first_name']; ?></h1>
            <form autocomplete="off">
                <div class="form-group">
                    <button class="btn btn-primary"><a href="display.php" class="text-light">your data to view</a></button>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary"><a href="logout.php" class="text-light">Logout</a></button>
                </div>
            </form>
        </div>
    </body>

    </html>
<?php
}
?>