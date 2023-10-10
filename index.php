<?php require('connect.php');

// Inseting data to database

if (isset($_POST['submit'])) {
    // echo "sumit";
    $username =  $_POST['fname'];
    $email    =  $_POST['femail'];
    $mobile   =  $_POST['fnumber'];
    $address  =  $_POST['fadderss'];

    // Insert Query

    $sql = "INSERT INTO `crud` (fname, femail, fnumber, faddress) VALUES ('$username', '$email', '$mobile', '$address')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: display.php');
        exit;
    } else {
        echo die("Data Not Insertad Seccssfully");
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h1>PHP CRUD TUTORIAL</h1>
        <a href="display.php">ViewData</a>
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Enter Your Name</label>
                <input type="name" class="form-control" id="fname" name="fname" placeholder="Enter Your Name" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Enter Your Email</label>
                <input type="email" class="form-control" id="femail" name="femail" placeholder="Enter Your Email" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Enter Your Number</label>
                <input type="number" class="form-control" id="fnumber" name="fnumber" placeholder="Enter Your Number" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Enter Your Address</label>
                <input type="address" class="form-control" id="fadderss" name="fadderss" placeholder="Enter Your Adderss" required>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
    </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>