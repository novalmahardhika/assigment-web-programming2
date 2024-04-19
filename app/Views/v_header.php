<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Prog II | Merancang Template sederhana dengan Codeigniter</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/latihan5-style.css') ?>">
</head>
<body>
    <div >
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Template Sederhana dengan CodeIgniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?= site_url('latihan5') ?>">Home</a></li>
                    <li><a href="<?= site_url('latihan5/about') ?>">About</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
        <!-- Rest of your content -->
    </div>
</body>
</html>
