<?php include("header.php"); ?>


<section class="ftco-section contact-section mt-5">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 block-9">

                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Bond Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM history";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
$i=0;
                            while ($row = $result->fetch_assoc()) {
                        ?>
<tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['user_email']; ?></td>
                            <td><?php echo $row['rent_date']; ?></td>
                            <td><?php echo $row['bond_amount']; ?></td>
                            </tr>
                        <?php
                            }
                        }
                        ?>



                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>

<?php include("footer.php"); ?>