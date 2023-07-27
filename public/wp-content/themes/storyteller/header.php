<!DOCTYPE html>
<html lang="en">

<head>
  <!-- NB : Load files -->
  <?php wp_head(); ?>
</head>

<body style="
    background: url(<?php echo get_theme_file_uri('/assets/images/bg.jpg') ?>); background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    overflow-x: hidden;
">

  <!-- NAVIGATION -->
  <nav class="navigation">
    <!-- LOGO -->
    <img src=<?php echo get_theme_file_uri('/assets/images/logo.png') ?> alt="logo" class="logo" id="logo">

    <!-- NAV LINKS -->
    <ul class="nav-links">
      <li class="link-item">
        <a class="link active">
          Home
        </a>
      </li>
      <li class="link-item">
        <a class="link active">
          About Us
        </a>
      </li>


      <li class="link-item">
        <a class="link" href="#why-mentor">
          Why Mentor?
        </a>
      </li>
      <li class="link-item">
        <a class="link">
          Blog
        </a>
      </li>

      <!-- CTA -->
      <a class="cta">
        <button class="cta-btn">
          Donate Your Time
          <i class="fa-solid fa-caret-right"></i>
        </button>
      </a>
    </ul>

    <!-- SIDE NAVIGATION -->
    <a class="side-navigation-toggle">
      <i class="bar-icon fa-solid fa-bars"></i>
    </a>
  </nav>