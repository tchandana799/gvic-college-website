<!-- life-skills.php -->
<?php include('header.php'); ?>

<link rel="stylesheet" href="style.css">

<section class="life-skills-hero">
  <div class="hero-overlay">
    <h1>Life Skills @ GVIC</h1>
    <p>Empowering students with essential skills for personal and professional success</p>
  </div>
</section>

<section class="life-skills-intro">
  <h2>Why Life Skills Matter?</h2>
  <p>
    At Golden Valley Integrated Campus (GVIC), we believe education goes beyond academics. 
    Life skills are the foundation for resilience, confidence, and adaptability in real-world scenarios.
  </p>
</section>

<section class="life-skills-cards">
  <div class="skill-card">
    <h3>🌐 Communication Skills</h3>
    <p>Effective speaking, writing, and listening for professional and personal success.</p>
    <button class="know-more">Know More</button>
    <div class="hidden-content">
      <p>
        Students participate in debates, group discussions, and mock interviews. 
        Our workshops strengthen presentation and interpersonal skills.
      </p>
    </div>
  </div>

  <div class="skill-card">
    <h3>💡 Critical Thinking</h3>
    <p>Problem-solving and decision-making in challenging environments.</p>
    <button class="know-more">Know More</button>
    <div class="hidden-content">
      <p>
        Through case studies, projects, and hackathons, students learn analytical 
        approaches to tackle complex challenges confidently.
      </p>
    </div>
  </div>

  <div class="skill-card">
    <h3>🤝 Leadership & Teamwork</h3>
    <p>Building confidence to lead and collaborate effectively.</p>
    <button class="know-more">Know More</button>
    <div class="hidden-content">
      <p>
        Leadership bootcamps and group tasks allow students to gain experience 
        in teamwork, delegation, and leadership in real scenarios.
      </p>
    </div>
  </div>

  <div class="skill-card">
    <h3>🧘 Stress & Time Management</h3>
    <p>Balancing academics, career, and personal life effectively.</p>
    <button class="know-more">Know More</button>
    <div class="hidden-content">
      <p>
        GVIC organizes wellness sessions, yoga, and productivity workshops to 
        help students prioritize tasks and manage stress efficiently.
      </p>
    </div>
  </div>
</section>

<script>
  // Toggle hidden content
  document.querySelectorAll('.know-more').forEach(btn => {
    btn.addEventListener('click', () => {
      const content = btn.nextElementSibling;
      content.classList.toggle('active');
      btn.textContent = content.classList.contains('active') ? "Show Less" : "Know More";
    });
  });
</script>

<?php include('footer.php'); ?>
<style>/* ===== Life Skills Page ===== */
.life-skills-hero {
  height: 300px;
  background: linear-gradient(135deg, #6a11cb, #2575fc);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  color: white;
  text-align: center;
}

.hero-overlay h1 {
  font-size: 3rem;
  margin-bottom: 10px;
}

.hero-overlay p {
  font-size: 1.2rem;
  opacity: 0.9;
}

.life-skills-intro {
  max-width: 900px;
  margin: 40px auto;
  text-align: center;
}

.life-skills-intro h2 {
  font-size: 2rem;
  background: linear-gradient(90deg, #ff6a00, #ee0979);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.life-skills-cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 25px;
  padding: 40px;
}

.skill-card {
  background: linear-gradient(135deg, #ffecd2, #fcb69f);
  padding: 20px;
  border-radius: 15px;
  text-align: center;
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
  transition: transform 0.3s ease;
  position: relative;
  overflow: hidden;
}

.skill-card:hover {
  transform: translateY(-8px);
}

.skill-card h3 {
  margin-bottom: 10px;
  font-size: 1.4rem;
  color: #333;
}

.skill-card p {
  font-size: 1rem;
  color: #555;
}

.know-more {
  margin-top: 15px;
  padding: 8px 18px;
  border: none;
  background: linear-gradient(90deg, #6a11cb, #2575fc);
  color: white;
  border-radius: 20px;
  cursor: pointer;
  transition: background 0.3s;
}

.know-more:hover {
  background: linear-gradient(90deg, #2575fc, #6a11cb);
}

.hidden-content {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.6s ease, opacity 0.6s ease;
  opacity: 0;
  margin-top: 10px;
  text-align: left;
  font-size: 0.95rem;
  color: #333;
}

.hidden-content.active {
  max-height: 200px;
  opacity: 1;
}
</style>