<section class="testimonials">
  <div class="container">

    <h2>What Parents say</h2>

    <div class="slider">

      <div class="slides">

        <!-- Slide 1 -->
        <div class="slide">
          <div class="card">
            <p>
             ViSa SCHOOL HAS TRANSFORMED MY CHILD’S CONFIDENCE AND LEARNING APPROACH.
              THE TEACHERS ARE INCREDIBLY SUPPORTIVE.
            </p>
            <div class="stars">★★★★★</div>
            <span>KANIKA</span>
          </div>

          <div class="card">
            <p>
              A PERFECT BLEND OF ACADEMICS AND ACTIVITIES. MY CHILD LOVES GOING TO
              SCHOOL EVERY DAY! THE BEST DECISION WE MADE FOR OUR CHILD’S FUTURE.
            </p>
            <div class="stars">★★★★☆</div>
            <span>LAVENYA</span>
          </div>
        </div>

        <!-- Slide 2 (duplicate for smooth loop) -->
        <div class="slide">
          <div class="card">
            <p>
              AMAZING SCHOOL WITH GREAT FACULTY. MY CHILD HAS IMPROVED A LOT.
            </p>
            <div class="stars">★★★★★</div>
            <span>PRIYA</span>
          </div>

          <div class="card">
            <p>
              VERY GOOD ENVIRONMENT AND CARING STAFF. HIGHLY RECOMMENDED.
            </p>
            <div class="stars">★★★★★</div>
            <span>ARUN</span>
          </div>
        </div>

              <!-- Slide 3 (duplicate for smooth loop) -->


        <div class="slide">
  <div class="card">
    <p>
      VISA SCHOOL HAS HELPED MY CHILD GROW CONFIDENTLY BOTH IN STUDIES AND PERSONALITY. THE TEACHERS ARE VERY SUPPORTIVE AND CARING.
    </p>
    <div class="stars">★★★★★</div>
    <span>MEENA R</span>
  </div>

  <div class="card">
    <p>
      EXCELLENT SCHOOL WITH A STRONG FOCUS ON VALUES AND SKILL DEVELOPMENT. I CAN SEE GREAT IMPROVEMENT IN MY CHILD'S LEARNING AND BEHAVIOR.
    </p>
    <div class="stars">★★★★★</div>
    <span>KARTHIK S</span>
  </div>
</div>
      </div>





      </div>

      <!-- Buttons -->
      <div class="controls">
        <button id="prev">❮</button>
        <button id="next">❯</button>
      </div>

    </div>

  </div>
</section>
<script>
  const slides = document.querySelector('.slides');
  const slide = document.querySelectorAll('.slide');

  let index = 0;

  document.getElementById('next').onclick = () => {
    index++;
    if (index >= slide.length) {
      index = 0;
    }
    slides.style.transform = `translateX(-${index * 100}%)`;
  };

  document.getElementById('prev').onclick = () => {
    index--;
    if (index < 0) {
      index = slide.length - 1;
    }
    slides.style.transform = `translateX(-${index * 100}%)`;
  };
</script>

