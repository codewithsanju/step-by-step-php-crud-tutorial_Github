<?php include('connect.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center mt-3">
        <h1>Display Data</h1>
        <div class="row">
            <a href="index.php" class="mt-5">Back</a>

            <div class="col-lg-12 justify-content-center d-flex">


                <?php
                // Write Query
                $display_data = mysqli_query($conn, "SELECT * FROM `crud`");
                $num = 1;
                if (mysqli_num_rows($display_data) > 0) {
                    echo '<table style="border:1px double #000; padding:8px;">
                    <thead style="border:1px double #000; padding:8x;">
                        <th style="border:1px double #000; padding:8px;">SL NO</th>
                        <th style="border:1px double #000; padding:8px;">USERNAME</th>
                        <th style="border:1px double #000; padding:8px;">EMAIL ID</th>
                        <th style="border:1px double #000; padding:8px;">NUMBER</th>
                        <th style="border:1px double #000; padding:8px;">ADDERSS</th>
                        <th style="border:1px double #000; padding:8px;">Opretaions</th>
                        </thead>
                        <tbody style="border:1px double #000">';
                    while ($row = mysqli_fetch_assoc($display_data)) {
                ?>
                        <tr>
                            <td style="border:1px double #000; padding:8px;"><?php echo $num; ?></td>
                            <td style="border:1px double #000; padding:8px;"><?php echo $row['fname'] ?></td>
                            <td style="border:1px double #000; padding:8px;"><?php echo $row['femail'] ?></td>
                            <td style="border:1px double #000; padding:8px;"><?php echo $row['fnumber'] ?></td>
                            <td style="border:1px double #000; padding:8px;"><?php echo $row['faddress'] ?></td>
                            <td>
                                <a href="delete.php?delete=<?php echo $row['id'] ?>" onclick="return confirm('Are You Sure You Delete Your Data');">Delete</a>
                                <a href="update.php?edit=<?php echo $row['id'] ?>">Edit</a>
                            </td>
                        </tr>
                <?php
                        $num++;
                    }
                } else {
                    echo "No data found";
                }
                ?>



                </tbody>

                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>