<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>DISC Assessment</title>
<link rel="stylesheet" href="./style.css">

</head>

<body>


<div class="disc-layout">
  
  <!-- LEFT -->
  <div class="disc-left">
    <div class="disc-header">
      <span class="disc-label">DISC ASSESSMENT</span>
      <h1>Discover Your Child’s Personality</h1>
      <p>
        Our DISC-based assessment helps identify your child’s natural personality style,
        how they approach learning, communicate with others, and respond to challenges.
      </p>
    </div>
  </div>
</div>

<div class="disc-container">
  <!-- PROGRESS -->
  <div class="disc-progress">
    <div class="disc-line"></div>
    <div class="disc-line-active" id="discProgress"></div>

    <div class="disc-step active">1</div>
    <div class="disc-step">2</div>
    <div class="disc-step">3</div>
    <div class="disc-step">4</div>
    <div class="disc-step">5</div>
  </div>

  <!-- FORM -->
  <div class="disc-form">

    <!-- Q1 -->
    <div class="disc-question active">
      <h2>1. In group activities at school, what will you usually do?</h2>
      <div class="disc-option" data-type="D">Take the lead and tell everyone what to do</div>
      <div class="disc-option" data-type="I">Talk a lot and share your ideas</div>
      <div class="disc-option" data-type="S">Help your friends and work together</div>
      <div class="disc-option" data-type="C">Watch first and make sure everything is correct</div>
    </div>

    <!-- Q2 -->
    <div class="disc-question">
      <h2>2. When a teacher gives you a new task, what will you do?</h2>
      <div class="disc-option" data-type="D">Start quickly without waiting</div>
      <div class="disc-option" data-type="I">Get excited and talk about it</div>
      <div class="disc-option" data-type="S">Do it slowly and carefully</div>
      <div class="disc-option" data-type="C">Understand everything first</div>
    </div>

    <!-- Q3 -->
    <div class="disc-question">
      <h2>3. What makes you happy in school?</h2>
      <div class="disc-option" data-type="D">Winning or getting top marks</div>
      <div class="disc-option" data-type="I">Getting appreciation</div>
      <div class="disc-option" data-type="S">Helping friends</div>
      <div class="disc-option" data-type="C">Understanding lessons well</div>
    </div>

    <!-- Q4 -->
    <div class="disc-question">
      <h2>4. What do you like doing after school?</h2>
      <div class="disc-option" data-type="D">Playing games</div>
      <div class="disc-option" data-type="I">Talking with friends</div>
      <div class="disc-option" data-type="S">Relaxing</div>
      <div class="disc-option" data-type="C">Learning new things</div>
    </div>

    <!-- Q5 -->
    <div class="disc-question">
      <h2>5. If you make a mistake, what will you do?</h2>
      <div class="disc-option" data-type="D">Fix quickly</div>
      <div class="disc-option" data-type="I">Stay positive</div>
      <div class="disc-option" data-type="S">Stay calm</div>
      <div class="disc-option" data-type="C">Analyze and correct</div>
    </div>

    <!-- RESULT -->
    <div class="disc-result" id="discResult"></div>

  </div>
</div>


<script>
  const questions = document.querySelectorAll(".disc-question");
const steps = document.querySelectorAll(".disc-step");
const progressLine = document.getElementById("discProgress");
const optionLabels = ["A", "B", "C", "D"];

let current = 0;
const answers = {};

syncProgressUI();

questions.forEach((question, questionIndex) => {
  const questionOptions = question.querySelectorAll(".disc-option");

  questionOptions.forEach((option, optionIndex) => {
    const label = optionLabels[optionIndex] || "";
    if (!option.querySelector(".disc-option-prefix")) {
      option.innerHTML = `<span class="disc-option-prefix">${label}</span><span class="disc-option-text">${option.textContent.trim()}</span>`;
    }

    option.addEventListener("click", () => {
      const selectedType = option.getAttribute("data-type");

      questionOptions.forEach((opt) => opt.classList.remove("selected"));
      option.classList.add("selected");
      answers[questionIndex] = selectedType;

      setTimeout(nextQuestion, 250);
    });
  });
});

function nextQuestion() {
  questions[current].classList.remove("active");
  current += 1;
  syncProgressUI();

  if (current < questions.length) {
    questions[current].classList.add("active");
  } else {
    showResult();
  }
}

function updateProgress() {
  const activeStepCount = steps.length ? document.querySelectorAll(".disc-step.active").length : 0;
  const totalSegments = Math.max(steps.length - 1, 1);
  const completedSegments = Math.max(activeStepCount - 1, 0);
  const percent = (completedSegments / totalSegments) * 70;
  const cappedPercent = Math.min(percent, 78);
  progressLine.style.height = `${cappedPercent}%`;
}

function syncProgressUI() {
  const answeredCount = Object.keys(answers).length;
  const activeStepCount = Math.min(answeredCount + 1, steps.length);

  steps.forEach((step, index) => {
    step.classList.toggle("active", index < activeStepCount);
  });

  updateProgress();
}

const resultData = {
  D: {
    title: "DOMINANCE",
    subtitle: "You’re a natural leader!",
    desc: "You like taking charge, solving problems, and achieving results quickly. You enjoy challenges and are confident in making decisions. With the right guidance, you can grow into a strong leader of the future.",
    footer: "Visit our campus to explore how we shape future leaders"
  },
  I: {
    title: "INFLUENCE",
    subtitle: "You’re a great communicator!",
    desc: "You love interacting with people, sharing ideas, and bringing energy. You are expressive, friendly, and creative. With the right environment, you can shine in communication and leadership roles.",
    footer: "Visit our campus to experience a vibrant learning environment"
  },
  S: {
    title: "STEADINESS",
    subtitle: "You’re calm and supportive!",
    desc: "You enjoy helping others, working in teams, and creating a positive environment. You are patient, kind, and dependable. With the right support, you can build strong relationships and teamwork skills.",
    footer: "Visit our campus to see how we nurture every child’s growth"
  },
  C: {
    title: "CONSCIENTIOUSNESS",
    subtitle: "You’re a thoughtful learner!",
    desc: "You like understanding things deeply, paying attention to details, and doing your best. You are focused, analytical, and disciplined. With the right guidance, you can achieve academic excellence.",
    footer: "Visit our campus to discover structured and focused learning"
  }
};

function showResult() {
  questions.forEach(q => q.style.display = "none");
  const progressBox = document.querySelector(".disc-progress");
  if (progressBox) {
    progressBox.style.display = "none";
  }

  const resultBox = document.getElementById("discResult");
  resultBox.style.display = "block";

  const scores = { D: 0, I: 0, S: 0, C: 0 };
  Object.values(answers).forEach((type) => {
    scores[type] += 1;
  });

  const maxCount = Math.max(...Object.values(scores));
  const winners = Object.keys(scores).filter((key) => scores[key] === maxCount);
  const maxType = winners[0];

  const data = resultData[maxType];
  const answerList = Object.keys(answers)
    .sort((a, b) => Number(a) - Number(b))
    .map((idx) => answers[idx])
    .join(" - ");

  const tieBlock = winners.length > 1
    ? `<p class="disc-result-footer">Tie between: ${winners.join(", ")}</p>`
    : "";

  resultBox.innerHTML = `
    <h1 class="disc-result-title">${data.title}</h1>
    <h3 class="disc-result-subtitle">${data.subtitle}</h3>
    <p class="disc-result-description">${data.desc}</p>

    <button class="disc-result-btn">Book A Campus Visit</button>
  `;
}

// <p class="disc-result-footer"><strong>Your selected answers:</strong> ${answerList}</p>
// <p class="disc-result-footer">D: ${scores.D} | I: ${scores.I} | S: ${scores.S} | C: ${scores.C}</p>
// ${tieBlock}
// <p class="disc-result-footer">${data.footer}</p>
</script>
</body>
</html>