<section class="quiz-sec">

  <div class="quiz-container">

    <!-- LEFT STEPS -->
    <div class="quiz-steps">
      <div class="step active">1</div>
      <div class="step">2</div>
      <div class="step">3</div>
      <div class="step">4</div>
      <div class="step">5</div>
    </div>

    <!-- QUESTIONS -->
    <div class="quiz-content">

      <h2 id="question-title"></h2>

      <div class="options">
        <div class="option" data-type="D"><span>A</span> <p id="optA"></p></div>
        <div class="option" data-type="I"><span>B</span> <p id="optB"></p></div>
        <div class="option" data-type="S"><span>C</span> <p id="optC"></p></div>
        <div class="option" data-type="C"><span>D</span> <p id="optD"></p></div>
      </div>

    </div>

  </div>

</section>

<!-- RESULT -->
<section class="result-sec" id="result" style="display:none;">
  <h1 id="result-title"></h1>
  <h3 id="result-sub"></h3>
  <p id="result-desc"></p>
  <button>Book A Campus Visit</button>
</section>
<script>
const questions = [
  {
    q: "1. IN GROUP ACTIVITIES AT SCHOOL, WHAT WILL YOU USUALLY",
    A: "Take the lead and tell everyone what to do",
    B: "Talk a lot and share your ideas",
    C: "Help your friends and work together",
    D: "Watch first and make sure everything is done correctly"
  },
  {
    q: "2. WHEN A TEACHER GIVES YOU A NEW TASK, WHAT WILL YOU DO",
    A: "Start quickly without waiting",
    B: "Get excited and talk about it with friends",
    C: "Do it slowly and carefully step by step",
    D: "First understand everything clearly, then start"
  },
  {
    q: "3. WHAT MAKES YOU FEEL HAPPY IN SCHOOL?",
    A: "Winning or getting top marks",
    B: "Getting appreciation from teachers or friends",
    C: "Helping friends or working as a team",
    D: "Understanding lessons really well"
  },
  {
    q: "4. WHAT DO YOU LIKE DOING AFTER SCHOOL?",
    A: "Playing games and competitions",
    B: "Talking with friends",
    C: "Relaxing peacefully",
    D: "Reading or learning new things"
  },
  {
    q: "5. IF YOU MAKE A MISTAKE, WHAT WILL YOU DO?",
    A: "Fix quickly",
    B: "Talk to someone",
    C: "Stay calm",
    D: "Analyze and correct"
  }
];

let current = 0;

let score = {
  D: 0,
  I: 0,
  S: 0,
  C: 0
};

const title = document.getElementById("question-title");
const optA = document.getElementById("optA");
const optB = document.getElementById("optB");
const optC = document.getElementById("optC");
const optD = document.getElementById("optD");

function loadQuestion() {
  title.innerText = questions[current].q;
  optA.innerText = questions[current].A;
  optB.innerText = questions[current].B;
  optC.innerText = questions[current].C;
  optD.innerText = questions[current].D;

  document.querySelectorAll(".step").forEach((s, i) => {
    s.classList.toggle("active", i === current);
  });
}

loadQuestion();

/* CLICK */
document.querySelectorAll(".option").forEach(opt => {
  opt.addEventListener("click", () => {

    let type = opt.dataset.type;
    score[type]++;

    current++;

    if (current < questions.length) {
      loadQuestion();
    } else {
      showResult();
    }

  });
});

/* RESULT */
function showResult() {
  document.querySelector(".quiz-sec").style.display = "none";
  document.getElementById("result").style.display = "block";

  let resultType = Object.keys(score).reduce((a, b) => score[a] > score[b] ? a : b);

  const data = {
    D: ["DOMINANCE", "You're a natural leader!", "You like taking charge and solving problems quickly."],
    I: ["INFLUENCE", "You're a great communicator!", "You love interacting and sharing ideas."],
    S: ["STEADINESS", "You're calm and supportive!", "You enjoy helping others and teamwork."],
    C: ["CONSCIENTIOUSNESS", "You're a thoughtful learner!", "You focus on details and accuracy."]
  };

  document.getElementById("result-title").innerText = data[resultType][0];
  document.getElementById("result-sub").innerText = data[resultType][1];
  document.getElementById("result-desc").innerText = data[resultType][2];
}
</script>