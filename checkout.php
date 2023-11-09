<?php include('header.php') ?>

<section class="ftco-section contact-section mt-5">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">


            <div class="col-md-12 block-9">
                <form action="" class="bg-light p-5  form-horizontal" method="POST">

                    <div class="form-group row">
                        <label class="control-label col-sm-2 text-center" style="color:black">Full Name: <span style="color:red;font-weight:bold;">*</span></label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="text" placeholder="Enter Full Name" name="fullname" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="control-label col-sm-2 text-center" style="color:black">Email: <span style="color:red;font-weight:bold;">*</span></label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="text" placeholder="Enter Email" name="email" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2 text-center" style="color:black">Address: <span style="color:red;font-weight:bold;">*</span></label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="text" placeholder="Enter Address" name="address" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2 text-center" style="color:black">City: <span style="color:red;font-weight:bold;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="text" placeholder="Enter City" name="city" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2 text-center" style="color:black">State: <span style="color:red;font-weight:bold;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="text" placeholder="Enter State" name="state" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2 text-center" style="color:black">Post Code <span style="color:red;font-weight:bold;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="text" placeholder="Postal Code" name="postal_code" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2 text-center" style="color:black">Payment Type: <span style="color:red;font-weight:bold;">*</span></label>

                        <div class="col-sm-10">
                            <select class="form-control" id="sel1" name="payment_type" required>
                                <option>Visa Card</option>
                                <option>Debit Card</option>
                                <option>Credit Card</option>
                                <option>Apple Pay</option>
                            </select>
                        </div>
                    </div>
                    <h1>You are require to Pay : <?php if (isset($_POST['proceeding'])) {echo $_POST['grand_total']; $_SESSION['bond']=$_POST['grand_total'];}?>$</h1>
<input type="hidden" name="bond_money" value="$_POST['grand_total']">
                    <div class="form-group text-right">
                    <a href="index.php" class="btn btn-primary text-right"> Continue Selection </a>
                        <input type="submit" class="btn btn-info text-right" name="book" value="Confirm Booking">
                </form>

            </div>
        </div>

    </div>

</section>

<?php
if (isset($_POST['book'])) {
    $user_email = $_POST['email'];
    $mydate = getdate(date("U"));
    $rental_date = "$mydate[month], $mydate[mday], $mydate[year]";
    $bond_money = $_SESSION['bond'];

    $sql = "INSERT INTO `history` (user_email, rent_date, bond_amount) VALUES ('$user_email', '$rental_date', '$bond_money')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Booking has been Completed Successfully');
window.location.href='index.php';
</script>";
session_destroy();
}
}
?>


<?php include('footer.php'); ?>