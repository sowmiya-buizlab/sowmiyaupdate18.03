<!-- <nav class="navbar">
  <div class="nav-container">


    <div class="logo">
      <img src="assets/images/logo.png" alt="ViSa School Logo">
    </div>
 <ul class="nav-menu">

  <li><a href="index.php" class="active">Home</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="life-at-visa.php">Life AtViSa</a></li>
<li><a href="core-value.php">Core Values</a></li>
<li><a href="admission.php">Admissions</a></li>
<li><a href="gallery.php">Gallery</a></li>

 </ul>

    <div class="nav-cta">
      <a href="#" class="btn-enquire">Enquire Now</a>
    </div>

  </div>
</nav> -->
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar">
  <div class="nav-container">

    <!-- Logo -->
    <div class="logo">
      <img src="assets/images/logo.png" alt="ViSa School Logo">
    </div>

    <ul class="nav-menu">

      <li>
        <a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>"><b>Home</b></a>
      </li>

      <li>
        <a href="about.php" class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>"><b>About Us</b></a>
      </li>

      <li>
        <a href="life-at-visa.php" class="<?= ($currentPage == 'life-at-visa.php') ? 'active' : '' ?>"><b>Life At ViSa</b></a>
      </li>

      <li>
        <a href="core-value.php" class="<?= ($currentPage == 'core-value.php') ? 'active' : '' ?>"><b>Core Values</b></a>
      </li>

      <li>
        <a href="admission.php" class="<?= ($currentPage == 'admission.php') ? 'active' : '' ?>"><b>Admissions</b></a>
      </li>

      <li>
        <a href="gallery.php" class="<?= ($currentPage == 'gallery.php') ? 'active' : '' ?>"><b>Gallery</b></a>
      </li>

    </ul>

    <!-- CTA Button -->
    <div class="nav-cta">
      <!-- <a href="#" class="btn-enquire">Enquire Now</a> -->
       <a href="admission.php" class="btn-enquire">Enquire Now</a>

    </div>

  </div>
</nav>
