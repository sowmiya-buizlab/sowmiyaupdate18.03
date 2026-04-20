// Sticky Navbar
window.addEventListener("scroll", function() {
  document.querySelector(".navbar").classList.toggle("sticky", window.scrollY > 0);
});

// Simple form alert
function submitForm() {
  alert("Form submitted successfully");
}
const video = document.getElementById("heroVideo");
const btn = document.getElementById("soundBtn");

btn.addEventListener("click", () => {
  if (video.muted) {
    video.muted = false;
    btn.innerHTML = "🔊";
  } else {
    video.muted = true;
    btn.innerHTML = "🔇";
  }
});
document.addEventListener("DOMContentLoaded", function () {

  const video = document.getElementById("heroVideo");
  const btn = document.getElementById("soundBtn");

  // 👉 VERY IMPORTANT: check if elements exist
  if (video && btn) {

    btn.addEventListener("click", function () {

      if (video.muted) {
        video.muted = false;
        video.volume = 1;
        video.play();
        btn.innerHTML = "🔊";
      } else {
        video.muted = true;
        btn.innerHTML = "🔇";
      }

    });

  }

});


