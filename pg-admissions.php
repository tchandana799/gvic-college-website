<?php include('header.php'); ?>

<!-- PG Admissions Page -->
<section class="pg-admissions">
  <div class="pg-banner">
    <h1>Postgraduate Admissions</h1>
    <p>Shape your career with advanced learning at GVIC</p>
  </div>

  <div class="pg-content">
    <h2>Why Choose GVIC for Postgraduate Studies?</h2>
    <p>
      Golden Valley Integrated Campus offers advanced PG programs in Engineering, Management, and Emerging Technologies.
      Our programs combine research, innovation, and industry exposure to prepare students for leadership roles in their fields.
    </p>

    <!-- Accordion for Programs -->
    <div class="accordion">
      <div class="accordion-item">
        <button class="accordion-header">M.Tech Programs</button>
        <div class="accordion-body">
          <ul>
            <li>M.Tech in Computer Science & Engineering</li>
            <li>M.Tech in VLSI Design</li>
            <li>M.Tech in Power Systems</li>
            <li>M.Tech in Structural Engineering</li>
          </ul>
        </div>
      </div>

      <div class="accordion-item">
        <button class="accordion-header">MBA Programs</button>
        <div class="accordion-body">
          <ul>
            <li>MBA in Big Data Analytics</li>
            <li>MBA in Finance</li>
            <li>MBA in Marketing</li>
            <li>MBA in Human Resource Management</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Eligibility -->
    <div class="info-box">
      <h3>Eligibility Criteria</h3>
      <p>
        For M.Tech: Candidates must have a valid B.Tech degree with a qualifying score in GATE/PGECET.<br>
        For MBA: Candidates must have a Bachelor’s degree in any discipline with a valid score in ICET or equivalent.
      </p>
    </div>

    <!-- Admission Process -->
    <div class="info-box">
      <h3>Admission Process</h3>
      <ol>
        <li>Submit the online application form.</li>
        <li>Appear for the respective entrance exam (GATE, PGECET, ICET).</li>
        <li>Participate in the counseling process.</li>
        <li>Complete the document verification and fee payment.</li>
      </ol>
    </div>

    <!-- Highlights -->
    <div class="pg-highlights">
      <h2>Program Highlights</h2>
      <div class="highlight-grid">
        <div class="highlight-card">📘 Research-Oriented Learning</div>
        <div class="highlight-card">🌐 Industry Collaboration</div>
        <div class="highlight-card">💼 Internship & Placement Support</div>
        <div class="highlight-card">🏫 Modern Labs & Resources</div>
      </div>
    </div>

    <!-- Call to Action -->
    <div class="cta-section">
      <h2>Start Your Postgraduate Journey at GVIC</h2>
      <p>Applications for 2025-26 are now open. Don’t miss the chance to be part of a future-ready campus.</p>
      <a href="apply.php" class="apply-btn">Apply Now</a>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>

<!-- CSS -->
<style>
.pg-banner {
  text-align: center;
  padding: 70px 20px;
  background: linear-gradient(135deg, #6a11cb, #2575fc);
  color: white;
  border-radius: 0 0 50px 50px;
}
.pg-banner h1 {
  font-size: 2.8rem;
  margin-bottom: 10px;
}
.pg-banner p {
  font-size: 1.2rem;
  opacity: 0.9;
}
.pg-content {
  max-width: 1200px;
  margin: 50px auto;
  padding: 20px;
}
.pg-content h2 {
  font-size: 2rem;
  color: #6a11cb;
  margin-bottom: 15px;
}
.accordion {
  margin: 20px 0;
}
.accordion-header {
  background: linear-gradient(90deg, #2575fc, #6a11cb);
  color: white;
  padding: 12px 20px;
  cursor: pointer;
  border: none;
  width: 100%;
  text-align: left;
  font-size: 1.1rem;
  border-radius: 8px;
  margin-bottom: 10px;
  transition: 0.3s;
}
.accordion-header:hover {
  opacity: 0.85;
}
.accordion-body {
  display: none;
  padding: 15px;
  background: #f4f4f4;
  border-radius: 8px;
  margin-bottom: 10px;
}
.info-box {
  background: linear-gradient(135deg, #f093fb, #f5576c);
  color: white;
  padding: 20px;
  border-radius: 12px;
  margin: 30px 0;
}
.pg-highlights {
  margin-top: 50px;
  text-align: center;
}
.highlight-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 20px;
  margin-top: 20px;
}
.highlight-card {
  background: linear-gradient(135deg, #43e97b, #38f9d7);
  padding: 20px;
  border-radius: 12px;
  font-weight: bold;
  color: #333;
  transition: transform 0.3s ease;
}
.highlight-card:hover {
  transform: translateY(-5px);
}
.cta-section {
  text-align: center;
  padding: 50px 20px;
  background: linear-gradient(135deg, #ff9966, #ff5e62);
  color: white;
  border-radius: 20px;
  margin-top: 50px;
}
.apply-btn {
  display: inline-block;
  background: white;
  color: #ff5e62;
  padding: 12px 25px;
  font-weight: bold;
  border-radius: 8px;
  text-decoration: none;
  transition: 0.3s;
}
.apply-btn:hover {
  background: #ffe6e6;
}
</style>

<!-- Accordion JS -->
<script>
  document.querySelectorAll(".accordion-header").forEach(button => {
    button.addEventListener("click", () => {
      const body = button.nextElementSibling;
      body.style.display = body.style.display === "block" ? "none" : "block";
    });
  });
</script>
