<?php
  include('article-data.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon/favicon-16x16.png">
    <link rel="shortcut icon" href="img/icons/favicon/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700&amp;display=swap&amp;subset=latin-ext" rel="stylesheet">
    <link href="styles/defaults.css" rel="stylesheet">
    <link href="styles/blocks.css" rel="stylesheet">
    <link href="styles/pages.css" rel="stylesheet">
    <title>ThaiBusiness.Online</title>
  </head>
  <body>
    <header class="header">
      <div class="header__container"><a href="/" class="header__logo"></a>
        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item"><a href="category.php" class="header__nav-link">เรื่องราว</a></li>
            <li class="header__nav-item"><a href="category.php" class="header__nav-link">บุคคล</a></li>
            <li class="header__nav-item"><a href="category.php" class="header__nav-link">บริษัท</a></li>
            <li class="header__nav-item"><a href="category.php" class="header__nav-link">น่าสนใจ</a></li>
            <li class="header__nav-item"><a href="category.php" class="header__nav-link">ข้อเท็จจริง</a></li>
          </ul>
        </nav>
        <div class="header__panel">
          <button class="header__btn-search btn btn--light btn--search"></button>
          <button class="header__burger btn btn--light btn--burger"></button>
        </div>
        <div class="header__search">
          <form action="#" method="get" class="header__search-form">
            <button type="submit" class="header__search-submit btn btn--light btn--search"></button>
            <input type="text" name="search" class="header__search-input">
            <button class="header__search-close btn btn--light btn--cross"></button>
          </form>
        </div>
      </div>
    </header>
    <div class="mobile-menu-cover"></div>