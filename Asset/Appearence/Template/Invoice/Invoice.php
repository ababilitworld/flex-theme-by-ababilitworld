<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f4f7f8;
            padding: 20px;
        }

        .invoice-container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            margin-bottom: 20px;
            position: relative;
            background: linear-gradient(45deg, #007BFF, #28A745);
            padding: 30px;
            border-radius: 10px 10px 0 0;
            color: white;
        }

        .invoice-header h1 {
            font-size: 32px;
            text-transform: uppercase;
        }

        .invoice-header .company-info {
            text-align: right;
        }

        .invoice-header .company-info p {
            font-size: 14px;
            color: white;
        }

        .invoice-badge {
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }

        .paid { background:rgb(43, 206, 81); }
        .due { background:rgb(251, 113, 126); }
        .partial { background: #ffc107; color: #000; }

        .invoice-details, .invoice-items {
            width: 100%;
            margin-bottom: 20px;
        }

        .invoice-details table, .invoice-items table {
            width: 100%;
            border-collapse: collapse;
        }

        .invoice-details td, .invoice-items th, .invoice-items td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .invoice-items table tr:nth-child(1)
        {
            background: linear-gradient(45deg, #007BFF, #28A745);
        }

        .invoice-items th {
            /* background:  #007BFF; */
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
        }

        .invoice-items td {
            font-size: 14px;
        }

        .total {
            text-align: right;
            font-size: 18px;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            font-size: 14px;
            margin-top: 20px;
            color: #555;
            font-weight: bold;
        }

        .print-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .print-button button {
            background: #007BFF;
            color: white;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
            font-weight: bold;
        }

        .print-button button:hover {
            background: #0056b3;
        }

        @media print {
            .print-button {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="invoice-header">
            <div>
                <h1>Invoice ( aba-121 )</h1>
                <p class="invoice-badge due">Due</p> <!-- Change class to 'due' or 'partial' accordingly -->
            </div>
            <div class="company-info">
                <p><strong>Ababil IT World</strong></p>
                <p>Dinajpur, Bangladesh</p>
                <p>Email: ababilitworld@gmail.com</p>
            </div>
        </div>
        
        <div class="invoice-details">
            <table>
                <tr>
                    <td><strong>Bill To:</strong> ECOSURVGROUP.COM</td>
                    <td><strong>Date:</strong> 2025-02-15</td>
                </tr>
                <tr>
                    <td><strong>Invoice #:</strong> aba-121</td>
                    <td><strong>Due Date:</strong> 2025-01-01</td>
                </tr>
            </table>
        </div>
        
        <div class="invoice-items">
            <table>
                <tr>
                    <th>Description</th>
                    <th>Qty</th>
                    <th>Rate</th>
                    <th>Amount</th>
                    <th>Currency</th>
                </tr>
                <tr>
                    <td>Portfolio App</td>
                    <td>1</td>
                    <td>7000</td>
                    <td>7000</td>
                    <td>BDT</td>
                </tr>
                <tr>
                    <td colspan="3" class="total">Total</td>
                    <td>7000</td>
                    <td>BDT</td>
                </tr>
            </table>
        </div>
        
        <div class="footer">
            Thank you for your business! Payment is due upon receipt.
        </div>
        
        <div class="print-button">
            <button onclick="window.print()">Print Invoice</button>
        </div>
    </div>
</body>
</html>
