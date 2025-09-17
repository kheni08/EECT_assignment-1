<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 flex items-center justify-center min-h-screen">
    <div class="bg-gray-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-xl font-bold mb-4">New Payment</h2>
        <div class="border-t border-gray-700 pt-4">
            <h3 class="text-teal-400 text-lg font-semibold mb-4">Payment Information</h3>
            <form>
                <div class="mb-4">
                    <label class="block text-teal-400 mb-2" for="company">Company</label>
                    <select id="company" class="w-full p-2 bg-gray-800 border border-gray-700 rounded">
                        <option>Please Select Here</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-teal-400 mb-2" for="account-name">Account Name</label>
                    <input type="text" id="account-name" class="w-full p-2 bg-gray-800 border border-gray-700 rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-teal-400 mb-2" for="account-number">Account Number</label>
                    <input type="text" id="account-number" class="w-full p-2 bg-gray-800 border border-gray-700 rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-teal-400 mb-2" for="amount-to-pay">Amount to Pay</label>
                    <input type="text" id="amount-to-pay" class="w-full p-2 bg-gray-800 border border-gray-700 rounded">
                </div>
                <div class="flex justify-end space-x-2">
                <tr>
<td class="d-none d-sm-table-cell"><a href="pay.php"  class="btn btn-primary">PAYMENT</a></td>
</tr>
  <button type="button" class="bg-gray-600 text-white px-4 py-2 rounded">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>