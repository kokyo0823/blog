<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php echo wp_get_document_title(); ?></title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/c236a2e30d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_single.css">

  <?php wp_head();?>
</head>
<body>
  <header class="header">
    <a href="#"><h1 class="header_title">クオラフ</h1></a>
    <div class="header_menu">
      <ul>
        <li class="header_menu_item"><a href="#">クオラフについて</a></li>
        <li class="header_menu_item"><a href="#">投稿一覧</a></li>
        <li class="header_menu_item"><a href="#">お問い合わせ</a></li>
      </ul>
    </div>
    <div class="header_serch">
      <i class="fas fa-search fa-lg"></i>
    </div>
  </header>
  <main>
    <div class="topImg"></div>
