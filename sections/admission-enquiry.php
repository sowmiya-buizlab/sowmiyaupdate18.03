<section class="enq-sec" id="enquiry">


  <div class="enq-wrap">

    <!-- LEFT -->
    <div class="enq-left">

      <p class="enq-tag">ENQUIRE NOW</p>
      <h2>Submit Your Enquiry</h2>

      <p class="enq-desc">
        Fill out the form below and our admission team will get in touch with you shortly.
      </p>

      <form id="enquiryForm">

        <div class="enq-grid">
          <input type="text" name="parentName" placeholder="Parent Name *" required>
          <input type="tel" name="phone" placeholder="Phone Number *" required pattern="[0-9]{10}">
          
          <input type="email" name="email" placeholder="Email Address *" required>
          <input type="text" name="studentName" placeholder="Student Name *" required>
        </div>

        <input type="text" name="grade" placeholder="Grade Applying For *" required>

        <textarea name="message" placeholder="Message / Enquiry"></textarea>

        <button type="submit">Submit Enquiry</button>

      </form>

    </div>

    <!-- RIGHT IMAGE -->
    <div class="enq-right">
      <div class="enq-img-box"><img src="./assets/images/adm-img/form.jpg" alt=""></div>
    </div>

  </div>

</section>
<script>
document.getElementById("enquiryForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const formData = new FormData(this);
  const data = Object.fromEntries(formData.entries());

  // Basic validation
  if (data.phone.length !== 10) {
    alert("Enter valid 10-digit phone number");
    return;
  }

  console.log("Form Data:", data);

  alert("Enquiry Submitted Successfully!");

  this.reset();
});
</script>