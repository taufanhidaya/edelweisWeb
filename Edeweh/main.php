<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edeweh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&display=swap" rel="stylesheet">
    <!-- Link CSS -->
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/kegiatan.css">
    <link rel="stylesheet" href="assets/css/struktur.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <!-- <link rel="stylesheet" href="assets/css/periode.css"> -->
    <link rel="stylesheet" href="assets/css/struktur.css">
</head>

<body style="background-image: url('assets/img/edelweis flow.jpg'); background-size: cover; background-position: center; color: white;">

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- Akhir Navbar -->

    <!-- Konten Dinamis -->
    <?php include $page; ?>
    <!-- Akhir Konten Dinamis -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>