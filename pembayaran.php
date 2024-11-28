<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Diamond Mobile Legends</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 100px;
            height: auto;
        }
        .diamond-options, .payment-options {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
            justify-content: center;
        }
        .diamond-option, .payment-option {
            display: inline-block;
            width: 150px;
            height: 100px;
            background: #f2f2f2;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 2px solid transparent;
        }
        .diamond-option:hover, .payment-option:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .diamond-option.selected, .payment-option.selected {
            border-color: #007BFF;
        }
        .diamond-option input, .payment-option input {
            display: none;
        }
        .diamond-option label, .payment-option label {
            display: block;
            padding: 20px 10px;
            font-weight: bold;
            color: #333;
        }
        .diamond-option span, .payment-option span {
            font-size: 1.2em;
            color: #007BFF;
        }
        .buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        button.cancel {
            background-color: #FF4B4B;
        }
        button.cancel:hover {
            background-color: #C73737;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const diamondOptions = document.querySelectorAll(".diamond-option");
            const paymentOptions = document.querySelectorAll(".payment-option");
            const cancelButton = document.querySelector("#cancel-button");

            const resetSelections = () => {
                diamondOptions.forEach(option => option.classList.remove("selected"));
                paymentOptions.forEach(option => option.classList.remove("selected"));
                document.querySelectorAll("input[type='radio']").forEach(input => input.checked = false);
            };

            const addSelectionEffect = (options, className) => {
                options.forEach(option => {
                    option.addEventListener("click", () => {
                        options.forEach(opt => opt.classList.remove(className));
                        option.classList.add(className);
                        option.querySelector("input").checked = true;
                    });
                });
            };

            cancelButton.addEventListener("click", resetSelections);
            addSelectionEffect(diamondOptions, "selected");
            addSelectionEffect(paymentOptions, "selected");
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="header">
            <img alt="Mobile Legends" src="image-removebg-preview (26).png">
            <h1>Pembelian Diamond Mobile Legends</h1>
        </div>
        <h2>Pilih Paket Diamond</h2>
        <form action="process_order.php" method="POST">
            <div class="diamond-options">
                <div class="diamond-option">
                    <input type="radio" name="diamond" value="86" id="diamond-86">
                    <label for="diamond-86">
                        86 Diamond<br>
                        <span>Rp 20.000</span>
                    </label>
                </div>
                <div class="diamond-option">
                    <input type="radio" name="diamond" value="172" id="diamond-172">
                    <label for="diamond-172">
                        172 Diamond<br>
                        <span>Rp 40.000</span>
                    </label>
                </div>
                <div class="diamond-option">
                    <input type="radio" name="diamond" value="257" id="diamond-257">
                    <label for="diamond-257">
                        257 Diamond<br>
                        <span>Rp 60.000</span>
                    </label>
                </div>
                <div class="diamond-option">
                    <input type="radio" name="diamond" value="344" id="diamond-344">
                    <label for="diamond-344">
                        344 Diamond<br>
                        <span>Rp 80.000</span>
                    </label>
                </div>
                <div class="diamond-option">
                    <input type="radio" name="diamond" value="464" id="diamond-464">
                    <label for="diamond-464">
                        464 Diamond<br>
                        <span>Rp 100.000</span>
                    </label>
                </div>
            </div>

            <h2>Metode Pembayaran</h2>
            <div class="payment-options">
                <div class="payment-option">
                    <input type="radio" name="payment_method" value="OVO" id="payment-ovo" required>
                    <label for="payment-ovo">OVO</label>
                </div>
                <div class="payment-option">
                    <input type="radio" name="payment_method" value="GoPay" id="payment-gopay">
                    <label for="payment-gopay">GoPay</label>
                </div>
                <div class="payment-option">
                    <input type="radio" name="payment_method" value="ShopeePay" id="payment-shopeepay">
                    <label for="payment-shopeepay">ShopeePay</label>
                </div>
                <div class="payment-option">
                    <input type="radio" name="payment_method" value="Bank Transfer" id="payment-bank">
                    <label for="payment-bank">Bank Transfer</label>
                </div>
            </div>

            <div class="buttons">
                <button type="submit">Lanjutkan Pembayaran</button>
                <button type="button" id="cancel-button" class="cancel">Batal</button>
            </div>
        </form>
    </div>
</body>
</html>
