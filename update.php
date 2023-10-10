<?php include('connect.php');

// Update Query Logic

if (isset($_POST['update'])) {
    $data_id = $_POST['data_id'];
    $fname = $_POST['fname'];
    $femail = $_POST['femail'];
    $fnumber = $_POST['fnumber'];
    $faddress = $_POST['faddress'];
    $sql = "UPDATE `crud` set fname = '$fname', femail = '$femail', fnumber = '$fnumber', faddress = '$faddress' WHERE id = $data_id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:display.php');
    } else {
        echo "Something went wrong. Please try again later.";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPDATE DATA-PROJECT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Update Data</h1>
        <a href="display.php">View Data</a>
        <?php
        if (isset($_GET['edit'])) {
            $edit_id = $_GET['edit'];
            $get_data = mysqli_query($conn, "SELECT * FROM `crud` WHERE id = $edit_id");
            if (mysqli_num_rows($get_data) > 0) {
                $fecth_data = mysqli_fetch_assoc($get_data);
        ?>
                <form action="" method="post">
                    <div class=" mb-3">
                        <input type="hidden" name="data_id" value="<?php echo $fecth_data['id'] ?>">
                        <div class=" mb-3">
                            <label class="form-label">Enter Your Name</label>
                            <input type="name" class="form-control" id="fname" name="fname" value="<?php echo $fecth_data['fname'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" id="femail" name="femail" value="<?php echo $fecth_data['femail'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Enter Your Number</label>
                            <input type="number" class="form-control" id="fnumber" name="fnumber" value="<?php echo $fecth_data['fnumber'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="address" class="form-control" id="fadderss" name="faddress" value="<?php echo $fecth_data['faddress'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
                        </div>

                </form>

        <?php
            }
        }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>