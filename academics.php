<?php include 'header.php'; ?>
  <!-- Link the CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css?v=1.2">
<script src="script.js?v=1.2"></script>

<!-- Hero Section -->
<section class="hero academics-hero">
  <div class="hero-content">
    <h1>Academics at GVIC</h1>
    <p>Excellence in Education, Innovation, and Research</p>
  </div>
</section>

<!-- Academics Overview -->
<section class="academics-overview container">
  <h2>Academic Excellence at GVIC</h2>
  <p>
    Golden Valley Integrated Campus (GVIC) is committed to providing
    quality education with a balance of theory, practical learning, and
    research. Our programs are designed to meet global standards and
    nurture innovation, leadership, and creativity among students.
  </p>
</section>

<!-- Programs Section -->
<section class="programs container">
  <h2>Programs Offered</h2>
  <div class="program-grid">
    <div class="program-card">
      <h3>Polytechnic</h3>
      <p>Diploma programs in CSE, ECE, EEE, AI & DS, AI & ML.</p>
      <a href="programmes.php" class="btn">View Details</a>
    </div>
    <div class="program-card">
      <h3>Undergraduate (B.Tech)</h3>
      <p>Engineering programs with specialization in modern fields.</p>
      <a href="ug-admissions.php" class="btn">View Details</a>
    </div>
    <div class="program-card">
      <h3>Postgraduate (M.Tech & MBA)</h3>
      <p>Advanced specialization and management studies.</p>
      <a href="pg-admissions.php" class="btn">View Details</a>
    </div>
    <div class="program-card">
      <h3>Doctoral</h3>
      <p>Research programs fostering innovation and knowledge creation.</p>
      <a href="doctoral.php" class="btn">View Details</a>
    </div>
  </div>
</section>

<!-- Departments Section -->
<section class="departments container">
  <h2>Departments</h2>
  <div class="dept-grid">
    <div class="dept-card">Computer Science & Engineering</div>
    <div class="dept-card">Electronics & Communication Engineering</div>
    <div class="dept-card">Electrical & Electronics Engineering</div>
    <div class="dept-card">Civil Engineering</div>
    <div class="dept-card">Mechanical Engineering</div>
    <div class="dept-card">Management Studies</div>
  </div>
</section>

<!-- Scholarships -->
<section class="scholarships container">
  <h2>Scholarships</h2>
  <p>
    GVIC provides various scholarships and financial assistance programs
    to support meritorious and economically disadvantaged students.
    Opportunities are available through government schemes, merit-based
    awards, and institutional support.
  </p>
  <a href="scholarships.php" class="btn email-btn">Know More</a>
</section>

<!-- Centres of Excellence -->
<section class="coe container">
  <h2>Centres of Excellence</h2>
  <div class="coe-grid">
    <div class="coe-card">AI & Data Science</div>
    <div class="coe-card">Robotics & Automation</div>
    <div class="coe-card">Cybersecurity</div>
    <div class="coe-card">Renewable Energy Systems</div>
  </div>
</section>

<!-- Industry Connect -->
<section class="industry-connect container">
  <h2>GVIC Industry Connect</h2>
  <p>
    GVIC collaborates with top industries and organizations to provide
    students with real-world exposure through internships, live projects,
    guest lectures, and industrial visits.
  </p>
  <a href="industry-connect.php" class="btn admission-btn">Explore</a>
</section>

<!-- E-Learning -->
<section class="e-learning container">
  <h2>E-Learning @ GVIC</h2>
  <p>
    GVIC embraces digital learning with access to online resources,
    recorded lectures, virtual labs, and interactive platforms that make
    learning engaging and flexible.
  </p>
  <a href="e-learning.php" class="btn">Learn More</a>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="container">
    <p>&copy; 2025 Golden Valley Integrated Campus | All Rights Reserved</p>
  </div>
</footer>

<style>
    /* Hero for Academics */
.academics-hero {
  background: url('images/academics-banner.jpg') center/cover no-repeat;
  color: #fff;
  text-align: center;
  padding: 100px 20px;
}
.academics-hero h1 {
  font-size: 40px;
  font-weight: 700;
}
.academics-hero p {
  font-size: 18px;
  margin-top: 10px;
}

/* Academics Overview */
.academics-overview {
  padding: 60px 20px;
  text-align: center;
}
.academics-overview p {
  max-width: 800px;
  margin: auto;
  color: #555;
  line-height: 1.6;
}

/* Programs */
.program-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
  gap: 20px;
  margin-top: 30px;
}
.program-card {
  background: #fff;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 3px 8px rgba(0,0,0,0.1);
  transition: 0.3s;
  text-align: center;
}
.program-card:hover {
  transform: translateY(-5px);
}
.program-card h3 {
  color: #6a0dad;
  margin-bottom: 10px;
}

/* Departments */
.dept-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 15px;
  margin-top: 25px;
}
.dept-card {
  background: #f1f1f1;
  padding: 15px;
  border-radius: 8px;
  font-weight: 600;
  text-align: center;
  transition: 0.3s;
}
.dept-card:hover {
  background: #6a0dad;
  color: #fff;
}

/* Scholarships */
.scholarships {
  background: #f9f9f9;
  padding: 60px 20px;
  text-align: center;
}
.scholarships p {
  max-width: 700px;
  margin: auto;
  color: #444;
}

/* COE */
.coe-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 15px;
  margin-top: 25px;
}
.coe-card {
  background: #6a0dad;
  color: #fff;
  padding: 18px;
  border-radius: 8px;
  font-weight: 600;
  text-align: center;
  transition: 0.3s;
}
.coe-card:hover {
  background: #580b9d;
}

/* Industry Connect */
.industry-connect,
.e-learning {
  padding: 60px 20px;
  text-align: center;
}
.industry-connect p,
.e-learning p {
  max-width: 800px;
  margin: auto;
  color: #555;
  line-height: 1.6;
}
/* ================= General Reset ================= */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background: linear-gradient(120deg, #f9f9ff, #f3f0ff);
    color: #333;
    line-height: 1.6;
}

/* ================= Page Wrapper ================= */
.page-wrapper {
    max-width: 1200px;
    margin: 0 auto;
    padding: 30px 20px;
}

/* ================= Heading ================= */
.page-title {
    font-size: 2.2rem;
    text-align: center;
    margin-bottom: 40px;
    font-weight: 700;
    background: linear-gradient(90deg, #6a11cb, #2575fc);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: fadeIn 1s ease-in-out;
}

/* ================= Academic Section ================= */
.academics-section {
    margin-bottom: 50px;
}

.academics-section h2 {
    font-size: 1.8rem;
    margin-bottom: 15px;
    font-weight: 600;
    background: linear-gradient(90deg, #ff6a00, #ee0979);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.academics-section p {
    font-size: 1rem;
    margin-bottom: 20px;
    color: #444;
}

/* ================= Gradient Cards ================= */
.card-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
}

.card {
    background: linear-gradient(135deg, #89f7fe, #66a6ff);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    transition: all 0.3s ease;
    cursor: pointer;
}

.card:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

/* ================= Card Headings ================= */
.card h3 {
    font-size: 1.3rem;
    margin-bottom: 10px;
    font-weight: bold;
    color: #fff;
}

.card p {
    color: #f0f0f0;
    font-size: 0.95rem;
}

/* ================= Gradient Buttons ================= */
.btn {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 30px;
    background: linear-gradient(90deg, #ff512f, #dd2476);
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s ease;
}

.btn:hover {
    background: linear-gradient(90deg, #dd2476, #ff512f);
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

/* ================= Animations ================= */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* ================= Responsive ================= */
@media (max-width: 768px) {
    .page-title {
        font-size: 1.8rem;
    }
    .card h3 {
        font-size: 1.1rem;
    }
}


</style>