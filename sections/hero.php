<section class="hero">
<!-- SLIDER ARROWS -->
<div class="hero-arrows">
  <span class="arrow prev">&#10094;</span>
  <span class="arrow next">&#10095;</span>
</div>

<div class="hero-bg">


  <!-- SLIDE 1 -->
  <div class="hero-slide active">
    <video autoplay muted loop playsinline>
      <source src="assets/video/Infrastructure.mp4" type="video/mp4">
    </video>

    <div class="hero-content">
      <h1>An AI-Powered, Future-Ready School with a Next-Gen Learning Approach</h1>
      <p>A CBSE-based, co-educational, structured learning environment that blends 
      academic excellence, skill development, and future technologies to 
      prepare students for real-world success.</p>
      <a href="admission.php#enquiry" class="hero-btn">Enquire Now</a>
    </div>
  </div>

  <!-- SLIDE 2 -->
  <div class="hero-slide">
    <video autoplay muted loop playsinline>
      <source src="assets/video/Busfacility.mp4" type="video/mp4">
    </video>

    <div class="hero-content">
      <h1> Advanced Transport with GPS Ensuring Student Safety & Comfort</h1>
      <p>All school buses are GPS-enabled, providing real-time tracking access for the school to ensure complete safety and transparency.</p>
      <a href="admission.php#enquiry" class="hero-btn">Enquire Now</a>
    </div>
  </div>

  <!-- SLIDE 3 -->
  <div class="hero-slide">
    <video autoplay muted loop playsinline>
      <source src="assets/video/LabFacilities_1.mp4" type="video/mp4">
    </video>

    <div class="hero-content">
      <h1>Innovative Lab Spaces Designed for Hands-On Excellence </h1>
      <p>Well-equipped science and computer labs that encourage hands-on experiments, innovation, and real-world understanding beyond textbooks. </p>
      <a href="admission.php#enquiry" class="hero-btn">Enquire Now</a>
    </div>
  </div>

  <!-- SLIDE 4 -->
  <div class="hero-slide">
    <video autoplay muted loop playsinline>
      <source src="assets/video/Sports.mp4" type="video/mp4">
    </video>

    <div class="hero-content">
      <h1>Empowering Students with Strength, Discipline & Teamwork </h1>
      <p>A wide range of indoor and outdoor sports activities designed to promote physical fitness, teamwork, and overall student well-being. </p>
      <a href="admission.php#enquiry" class="hero-btn">Enquire Now</a>
    </div>
  </div>

</div>



  <!-- Dark Overlay -->
  <!-- <div class="overlay"></div> -->

  <!-- Top Announcement Bar -->
  <div class="announcement">
    <marquee>
       <a href="admission.php#enquiry" class="marquee-link">
          
      ADMISSIONS IN FULL SWING ⭐ PRE-KG to IX and XI ~AY 2026-27 ⭐ CONTACT NOW: 8015973533, 8807373533 ⭐
      ADMISSIONS IN FULL SWING ⭐ PRE-KG to IX and XI ~AY 2026-27 ⭐ CONTACT NOW: 8015973533, 8807373533 ⭐
      ADMISSIONS IN FULL SWING ⭐ PRE-KG to IX and XI ~AY 2026-27 ⭐ CONTACT NOW: 8015973533, 8807373533 ⭐
      ADMISSIONS IN FULL SWING ⭐ PRE-KG to IX and XI ~AY 2026-27 ⭐ CONTACT NOW: 8015973533, 8807373533 ⭐

</a>
    </marquee>

  </div>


  <!-- Floating Icons -->
  <!-- <div class="floating-icons">
    <a href="#" class="icon whatsapp">💬</a>
    <a href="#" class="icon mail">✉️</a>
  </div> -->

</section>
<script>
let slides = document.querySelectorAll(".hero-slide");
let index = 0;
let interval;

/* SHOW SLIDE */
function showSlide(i) {
  slides.forEach(slide => slide.classList.remove("active"));
  slides[i].classList.add("active");
}

/* NEXT */
function nextSlide() {
  index++;
  if (index >= slides.length) index = 0;
  showSlide(index);
}

/* PREV */
function prevSlide() {
  index--;
  if (index < 0) index = slides.length - 1;
  showSlide(index);
}

/* AUTO SLIDE */
function startAutoSlide() {
  interval = setInterval(nextSlide, 5000);
}

/* STOP AUTO (optional smooth UX) */
function stopAutoSlide() {
  clearInterval(interval);
}

/* EVENTS */
document.querySelector(".next").addEventListener("click", () => {
  nextSlide();
  stopAutoSlide();
  startAutoSlide();
});

document.querySelector(".prev").addEventListener("click", () => {
  prevSlide();
  stopAutoSlide();
  startAutoSlide();
});

/* INIT */
showSlide(index);
startAutoSlide();
</script>
</body>