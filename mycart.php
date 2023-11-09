 <?php
    include("header.php");
    ?>

 <section class="ftco-section ftco-cart mt-5">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-12 ">
                 <div class="car-list">
                     <table class="table">
                         <thead class="thead-primary">
                             <tr class="text-center">
                                 <th>&nbsp;</th>
                                 <th>&nbsp;</th>
                                 <th class="bg-primary heading">Price</th>
                                 <th class="bg-dark heading">Days</th>
                                 <th class="bg-black heading">Total</th>
                                 <th class="bg-primary heading">Per Hour Rate</th>

                             </tr>
                         </thead>


                         <?php
                            $total = 0;
                            $i = 0;
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $key => $value) {

                                    $i++;
                                    echo "
                            <tbody>
                            <tr>
                            <td class='car-image'><img class='img' src='$value[image]'/></td>
                            <td class='product-name'>
                            <h3>$value[title]</h3>
                </td>
                <td class='text-center'>$value[price] <input type='hidden' class='iprice' value='$value[price]'></td>
            <td class='text-center'><input type='number' class='text-center num iquantity'onchange='sub_total()' value='$value[Quantity]' min='1' max='10'/></td>          
            <td class='itotal text-center'> </td>    
            <td>
<form action ='manage_cart.php' method='POST' class='text-center'>
<button class='btn btn-sm btn-outline-danger text-center' name='remove_item'> Remove </button>
<input type='hidden' name='title' value='$value[title]'>
</form>
</td>  
                        </tr>
                        </tbody>
                        ";
                                }
                            }  ?>






                     </table>
                 </div>
             </div>
         </div>
     </div>
     <!-- <form action="checkout.php" method="POST">
    <div class="text-center border rounded bg-light">
        <h1><h3 class="">Grand Total: <span id="gtotal" style="color:green;font-weight:bold;"></span></h3></h1>
        <input type="hidden" name="grand_total" id="grand_total_input">
        <input type="submit" class="btn btn-primary mb-3 mt-2" name="proceeding" value="Proceeding to Checkout" />
    </div>
</form>
</section>

<script>
    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');

    function sub_total() {
        gt = 0;
        for (i = 0; i < iprice.length; i++) {
            itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
            gt = gt + (iprice[i].value) * (iquantity[i].value);
        }
        gtotal.innerText = gt + ' $';
        document.getElementById('grand_total_input').value = gt;
    }
    sub_total();
</script> -->


<form action="checkout.php" method="post">
    <div class="text-center border rounded bg-light">
        <h1><h3 class="">Grand Total: <span id="gtotal" style="color:green;font-weight:bold;"></span></h3></h1>
        <input type="hidden" name="grand_total" id="grand_total_input">
        <input type="submit" class="btn btn-primary mb-3 mt-2" name="proceeding" value="Proceeding to Checkout" />
    </div>
</form>
</section>

<script>
    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');
    var grandTotalInput = document.getElementById('grand_total_input');

    function sub_total() {
        gt = 0;
        for (var i = 0; i < iprice.length; i++) {
            itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
            gt = gt + (iprice[i].value) * (iquantity[i].value);
        }
        gtotal.innerText = gt + ' $';
        grandTotalInput.value = gt;
    }

    sub_total();
</script>







 <?php include("footer.php") ?>