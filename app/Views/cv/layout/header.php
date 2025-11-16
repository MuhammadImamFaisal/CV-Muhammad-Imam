<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'CV Muhammad Imam Faisal'; ?></title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

    <style>
        /* ========================== */
        /* 🎨 MODE DARK & LIGHT      */
        /* ========================== */

        body.dark-mode {
            background: #06080f;
            color: #dce7f3;
            font-family: 'Poppins', sans-serif;
        }

        body.light-mode {
            background: #f4f7fb;
            color: #1d1d1d;
        }

        /* LIGHT MODE EFFECT OVERRIDES */
        body.light-mode .navbar-futuristic {
            background: #ffffff !important;
            border-bottom: 1px solid #ccc !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.07);
        }

        body.light-mode .navbar-futuristic .navbar-brand {
            color: #333 !important;
            text-shadow: none;
        }

        body.light-mode .navbar-futuristic .nav-link {
            color: #555 !important;
        }
        body.light-mode .navbar-futuristic .nav-link:hover {
            color: #000 !important;
        }

        body.light-mode .card-custom {
            background: #ffffff !important;
            border: 1px solid #ddd !important;
            box-shadow: 0 0 15px rgba(0,0,0,0.08);
            color: #202020 !important;
        }
    </style>
</head>

<body class="dark-mode">

<!-- Include Navbar -->
<?= $this->include('cv/layout/navbar'); ?>
