<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            margin: 20px;
            font-family: "Roboto Mono", monospace;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }




        .struk {
            width: 80mm;
            max-width: 100%;
            border: 1px solid black;
            padding: 10px;
            margin: 0 auto;
        }

        .struk-header,
        .struk-footer {
            text-align: center;
            margin-bottom: 10px;

        }

        .struk-header h1 {
            font-size: 18px;
            margin: 0;
        }

        .struk-body {
            margin-bottom: 10px;
        }

        .struk-body table {
            width: 100%;
            border-collapse: collapse;
        }

        .struk-body table th,
        .struk-body table td {
            padding: 5px;
            text-align: left;
        }

        .struk-body table th {
            border-bottom: 1px solid black;
        }

        .total,
        .payment,
        .change {
            display: flex;
            justify-content: space-between;
            padding: 5px 0px;
        }

        .total {
            font-weight: bold;
            border-top: 1px solid black;
            margin-top: 10px;

        }

        @media print {

            body {
                margin: 0;
                padding: 0;
            }

            .struk {
                width: auto;
                border: none;
                margin: 0px;
                padding: 0px;
            }

            .struk-header h1,
            .struk-footer {
                font-size: 14;
            }

            .struk-body table th,
            td {
                padding: 2px;
                text-align: left;
            }
        }
    </style>
</head>

<body>
    <div class="struk">
        <div class="struk-header">
            <h1>Tabitakum</h1>
            <p>Jl.Karet Bendhil Kota Jakarta</p>
            <p>Tlp (021) 8367309867</p>
        </div>


        <div class="struk-body">
            <table>
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Sub Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detail_sales as $detail)
                        <tr>
                            <td>{{ $detail->product->product_name }}</td>
                            <td>{{ $detail['qty'] }}</td>
                            <td>{{ $detail->product->product_price }}</td>
                            <td>{{ $detail['sub_total'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="total">
                <span>Total:</span>
                <span>{{ 'Rp.' . number_format($sales['trans_total_price']) . '.00,-' }}</span>
            </div>
            <div class="payment">
                <span>Kembali:</span>
                <span>{{ 'Rp.' . number_format($sales['trans_paid']) . '.00,-' }}</span>
            </div>
            <div class="change">
                <span>Kembali</span>
                <span>{{ 'Rp.' . number_format($sales['trans_change']) . '.00,-' }}</span>
            </div>
        </div>


        <div class="struk-footer">
            <p>Terimakasih Atas Kunjuangan Anda</p>
            <p>Selamat Berbelanja Kembali</p>
        </div>
    </div>
</body>

</html>
<script>
    window.onload = function() {
        window.print();
    };
</script>
