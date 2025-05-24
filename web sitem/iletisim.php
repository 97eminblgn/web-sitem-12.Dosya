<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim Sonucu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ad = htmlspecialchars(trim($_POST['ad']));
        $telefon = htmlspecialchars(trim($_POST['telefon']));
        $email = htmlspecialchars(trim($_POST['email']));
        $mesaj = htmlspecialchars(trim($_POST['mesaj']));
        $konu = htmlspecialchars(trim($_POST['konu']));

        if ($ad && $telefon && $email && $mesaj && $konu) {
            echo "
            <div class='alert alert-success'>
                <h4 class='alert-heading'>Mesajınız Başarıyla İletildi!</h4>
                <hr>
                <p><strong>Ad:</strong> $ad</p>
                <p><strong>Telefon:</strong> $telefon</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Konu:</strong> $konu</p>
                <p><strong>Mesaj:</strong> $mesaj</p>
            </div>";
        } else {
            echo "
            <div class='alert alert-danger'>
                <h4 class='alert-heading'>Hata!</h4>
                <hr>
                <p>Tüm alanların doldurulması zorunludur. Lütfen formu eksiksiz doldurun.</p>
            </div>";
        }
    } else {
        echo "
        <div class='alert alert-warning'>
            <h4 class='alert-heading'>Geçersiz Erişim!</h4>
            <hr>
            <p>Bu sayfaya doğrudan erişim yapılamaz. Lütfen <a href='iletişim.html' class='alert-link'>iletişim</a> formunu kullanın.</p>
        </div>";
    }
    ?>
    <a href="iletişim.html" class="btn btn-primary mt-3"> Geri Dönmek İçin</a>
</div>

</body>
</html>