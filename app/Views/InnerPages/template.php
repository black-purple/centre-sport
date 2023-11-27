<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sport Club</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="public/favicon.ico">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"> -->

    <!-- STYLES -->
    <link rel="stylesheet" href="public/css/output.css">
</head>

<body class="font-sans bg-gray-100">
    <?php
    echo view('InnerPages/header.php');
    echo view($main_content, $list_reclamation);
    echo view('InnerPages/footer.php');
