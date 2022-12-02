<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Generate Barcode Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container mt-4">
    <div style="margin-top: 50px;"></div>
        <div class="mb-3">{!! DNS2D::getBarcodeHTML('This is laravel QR/Bar Code', 'QRCODE') !!}</div>
        <div style="margin-top: 150px;">
            <div class="mb-3">{!! DNS1D::getBarcodeHTML('12345678', 'PHARMA', 2, 100) !!}</div>
            <div style="margin-top: 100px;"></div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML('7893643630', 'PHARMA', 2, 100) !!}</div>
        </div>
    </div>
</body>
</html> 