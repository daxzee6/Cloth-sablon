<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title); ?></title>
</head>
<style>
    img {
        background: url(<?= base_url('./assets/image/eclooth.png') ?>);
        background-size: cover;
        position: absolute;
    }

    h1,
    h4,
    h3,
    .contact {
        position: static;
        text-align: center;
        align-content: center;
    }

    pre.tanda-tangan {
        position: static;
        text-align: right;
    }
</style>
<?php
$path = realpath('/xampp/htdocs/eclooth/assets/image/eclooth.png');

if ($path === false || !file_exists($path)) {
    throw new ValueError("Path cannot be empty or file does not exist");
}

$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>

<body style="margin: 30px 50px 50px 50px;">

    <img src="<?= $base64; ?>" alt="" style="height:50px;width:20%;right:10px;">
    <h4>Let's Make Something Different</h4>
    <p class="contact">info pemesanan :0896-3271-4288</p>
    <p>===================================================================</p>
    <h3>Sablon & Konveksi</h3>
    <h1>INVOICE</h1>
    <pre>Nama Pemesan           : <?= htmlspecialchars($sales['username']); ?></pre>
    <pre>Alamat Pengiriman      : <?= htmlspecialchars($sales['address']); ?></pre>
    <pre>Nomer Handphone        : <?= htmlspecialchars($sales['phone_number']); ?></pre>
    <!-- <pre>Jasa Pengiriman         : <?= htmlspecialchars($payment['nama_ekspedisi']); ?></pre> -->
    <br>

    <p>===================================================================</p>
    <table style="border:1px solid;width:100%;border-collapse: collapse;text-align:left;">
        <tr>
            <th style="width: 100px; text-align:left;border:1px solid;">Nama Barang</th>
            <th style="width: 50px; text-align:left;border:1px solid;">Size</th>
            <th style="width: 50px; text-align:left;border:1px solid;">Warna</th>
            <th style="width: 50px; text-align:left;border:1px solid;">QTY</th>
            <th style="width: 50px; text-align:left;border:1px solid;">Price</th>
            <th style="width: 50px; text-align:left;border:1px solid;">Total</th>
        </tr>
        <tr>
            <td style="width: 300px;"><?= htmlspecialchars($product['name_product']); ?></td>
            <td style="width: 100px;"><?= htmlspecialchars($sales['size']); ?></td>
            <td style="width: 100px;"><?= htmlspecialchars($sales['warna']); ?></td>
            <td style="width: 100px;"><?= htmlspecialchars($sales['jumlah_beli']); ?></td>
            <td style="width: 100px;"><?= htmlspecialchars($product['selling_price']); ?></td>
            <td style="width: 100px;"><?= htmlspecialchars($sales['amount']); ?></td>
        </tr>
    </table>
    <p>===================================================================</p>
    <br>
    <pre>
    Terima kasih sudah membeli kaos sablon di toko kami,
    Semoga anda puas dengan pelayanan dan produk kami</pre>

    <pre class="tanda-tangan" style="margin-top: 20px; margin-right:50px;font-weight:500;">Hormat Kami</pre>
    <br><br><br>
    <pre class="tanda-tangan" style="font-weight: 700;">Daffa Dzufadhli
    Eclooth Owner
    </pre>

</body>

</html>
