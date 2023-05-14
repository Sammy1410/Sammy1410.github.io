<html lang="en">
<!--#include virtual="/custom/includes/header.php" -->
<script src="/custom/js/function.js"></script>
<link rel="stylesheet" href="/custom/css/all.css">

<body>

    <h2 style="text-align:center;">Shipping Address</h2>


    <div id="content">
        <div class="container">
            <form id="OrderForm" enctype="multipart/form-data">

                <p><input type="text" class="rounded-input" name="fname" placeholder="First Name" required></p>
                <p><input type="text" class="rounded-input" name="lname" placeholder="Last Name" required></p>
                
                <p><input type="email" name="email" placeholder="Email" required></p>
                <p><input type="tel" name="number" placeholder="Phone No." required></p>
                <p><input type="text" name="address" placeholder="Address" required></p>

                <button type="submit" onclick="submitOrderForm1()">Submit Order</button>
            </form>

        </div>
    </div>

</body>
<!--#include virtual="/custom/includes/footer.php" -->

</html>