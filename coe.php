<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="coe-hero">
  <div class="coe-hero-overlay">
    <h1>🌟 Center of Excellence (COE)</h1>
    <p>Empowering Innovation, Research, and Industry Collaboration at GVIC</p>
  </div>
</section>

<!-- About COE -->
<section class="coe-about">
  <h2>About COE at GVIC</h2>
  <p>
    The Centers of Excellence at Golden Valley Integrated Campus (GVIC) serve as
    hubs for innovation, industry collaboration, and student skill enhancement.
    These specialized centers provide students with hands-on experience in
    emerging technologies, bridging the gap between academics and industry.
  </p>
</section>

<!-- COE Domains -->
<section class="coe-domains">
  <h2>Our Specialized COEs</h2>
  <div class="coe-cards">
    <div class="coe-card">
      <h3>🤖 AI & Machine Learning</h3>
      <p>
        Cutting-edge labs and projects on Artificial Intelligence, Deep Learning,
        and Data Analytics.
      </p>
    </div>
    <div class="coe-card">
      <h3>⚡ Robotics & Automation</h3>
      <p>
        Hands-on training in robotics, automation systems, and industry 4.0
        applications.
      </p>
    </div>
    <div class="coe-card">
      <h3>🔐 Cybersecurity</h3>
      <p>
        Advanced labs for ethical hacking, penetration testing, and cyber
        forensics.
      </p>
    </div>
    <div class="coe-card">
      <h3>🌍 IoT & Embedded Systems</h3>
      <p>
        Real-world IoT applications with ESP32, sensors, and cloud integration.
      </p>
    </div>
  </div>
</section>

<!-- Highlights Section -->
<section class="coe-highlights">
  <h2>Why Choose GVIC COEs?</h2>
  <div class="highlight-grid">
    <div class="highlight">
      <img src="images/industry.png" alt="Industry Collaboration" />
      <h3>Industry Collaboration</h3>
      <p>Partnerships with leading tech companies and startups.</p>
    </div>
    <div class="highlight">
      <img src="images/research.png" alt="Research & Innovation" />
      <h3>Research & Innovation</h3>
      <p>Encouraging students to publish research papers and patents.</p>
    </div>
    <div class="highlight">
      <img src="images/training.png" alt="Skill Development" />
      <h3>Skill Development</h3>
      <p>Regular workshops, hackathons, and certification programs.</p>
    </div>
  </div>
</section>
<style>/* Hero Section */
.coe-hero {
  height: 60vh;
  background: linear-gradient(135deg, #6a11cb, #2575fc);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  color: white;
  text-align: center;
}
.coe-hero-overlay {
  background: rgba(0, 0, 0, 0.4);
  padding: 30px;
  border-radius: 20px;
}

/* About */
.coe-about {
  padding: 60px 15%;
  text-align: center;
}
.coe-about h2 {
  font-size: 2rem;
  background: linear-gradient(to right, #ff512f, #dd2476);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin-bottom: 20px;
}

/* COE Cards */
.coe-domains {
  padding: 60px 10%;
  text-align: center;
}
.coe-cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 25px;
}
.coe-card {
  background: linear-gradient(135deg, #43cea2, #185a9d);
  padding: 30px;
  border-radius: 15px;
  color: white;
  transition: transform 0.3s, box-shadow 0.3s;
}
.coe-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.3);
}

/* Highlights */
.coe-highlights {
  padding: 60px 12%;
  text-align: center;
}
.highlight-grid {
  display: flex;
  gap: 25px;
  flex-wrap: wrap;
  justify-content: center;
}
.highlight {
  flex: 1 1 250px;
  background: linear-gradient(135deg, #ff6a00, #ee0979);
  padding: 25px;
  border-radius: 15px;
  color: white;
  transition: 0.3s;
}
.highlight img {
  width: 80px;
  margin-bottom: 15px;
}
.highlight:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}
</style>
<?php include 'footer.php'; ?>
