<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <title>Payment</title>
</head>
<body class="bg-gray-800 flex items-center justify-center min-h-screen">
    <div class="bg-gray-700 text-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-xl font-semibold mb-4">New Payment</h1>
        <div class="text-center text-4xl text-teal-400 mb-4"></div>
        <hr class="border-gray-500 mb-4"/>
        <div class="flex justify-between mb-2">
            <span></span>
            <span></span>
        </div>
        <div class="flex justify-between mb-6">
            <span></span>
            <span></span>
        </div>
        <div class="space-y-4 mb-6">
            <button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded" onclick="showForm('paypal')">
                <i class="fab fa-paypal"></i> PayPal
            </button>
            <button class="w-full bg-blue-800 hover:bg-blue-900 text-white py-2 rounded" onclick="showForm('paypal_credit')">
                <i class="fab fa-paypal"></i> PayPal CREDIT
            </button>
        </div>
        <div class="flex justify-center space-x-2 mb-4">
            <img alt="VISA logo" class="h-8 cursor-pointer" src="https://storage.googleapis.com/a1aa/image/te3SO9_bTSA2VNAy3Gie1ruHZKimXj-nkGiAz6s9hjA.jpg" onclick="showForm('visa')"/>
            <img alt="MasterCard logo" class="h-8" src="https://storage.googleapis.com/a1aa/image/Vow59-j_sGZuUuJn0zF6klsgXYD1igNqsqopnt7MMkg.jpg" onclick="showForm('visa')"/>
            <img alt="AMEX logo" class="h-8" src="https://storage.googleapis.com/a1aa/image/LE6OsBP8JHZj7IY0jBW_BYIW0rrLKM6vnIhyQvbC_Bs.jpg" onclick="showForm('visa')"/>
            <img alt="Discover logo" class="h-8" src="https://storage.googleapis.com/a1aa/image/nlE8vnTAD1rTtue0UspFTtBc0JeGMgCarFoXWgBHVH4.jpg" onclick="showForm('visa')"/>
        </div>
        <div class="text-center text-gray-400 text-sm mb-6">Powered by PayPal</div>
        <div class="flex justify-between">
    <a href="booking-history.php" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded text-center">Back</a>
    <button class="bg-gray-600 hover:bg-gray-700 text-white py-2 px-4 rounded">Cancel</button>
</div>

        <!-- Payment Form -->
        <div id="payment-form" class="hidden mt-6">
            <h2 class="text-lg font-semibold mb-4">Enter Card Details</h2>
            <form action="" method="POST">
                <div class="mb-4">
                    <label class="block mb-1">Card Number</label>
                    <input type="text" name="card_number" class="w-full p-2 rounded text-black bg-white" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-1">CSV Number</label>
                    <input type="text" name="csv" class="w-full p-2 rounded text-black bg-white" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-1">Street No</label>
                    <input type="text" name="street_no" class="w-full p-2 rounded text-black bg-white" required>
                </div>
                <div class="mb-4">
                    <label class=" block mb-1">Apartment No</label>
                    <input type="text" name="apartment_no" class="w-full p-2 rounded text-black bg-white" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-1">City</label>
                    <input type="text" name="city" class="w-full p-2 rounded text-black bg-white" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-1">State</label>
                    <input type="text" name="state" class="w-full p-2 rounded text-black bg-white" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-1">Zip Code</label>
                    <input type="text" name="zip_code" class="w-full p-2 rounded text-black bg-white" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-1">Mobile No</label>
                    <input type="text" name="mobile_no" class="w-full p-2 rounded text-black bg-white" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-1">Email</label>
                    <input type="email" name="email" class="w-full p-2 rounded text-black bg-white" required>
                </div>
                <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white py-2 rounded">Continue</button>
            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Process the form data
            $card_number = $_POST['card_number'];
            $csv = $_POST['csv'];
            $street_no = $_POST['street_no'];
            $apartment_no = $_POST['apartment_no'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip_code = $_POST['zip_code'];
            $mobile_no = $_POST['mobile_no'];
            $email = $_POST['email'];

            // Display success message
            echo "<div class='mt-4 text-center text-green-500'>Payment Successful!</div>";
        }
        ?>
    </div>

    <script>
        function showForm(paymentType) {
            const form = document.getElementById('payment-form');
            form.classList.remove('hidden');
        }
    </script>
</body>
</html>