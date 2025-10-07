<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Valley Integrated Campus</title>
    <!-- Link the CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css?v=1.2">
<script src="script.js?v=1.2"></script>
<style>/* =========================
   Footer Styling
========================= */
.footer {
    background: linear-gradient(135deg, #0f172a, #1e293b);
    color: #f1f5f9;
    padding: 50px 20px 20px;
    font-family: 'Segoe UI', sans-serif;
}

.footer-container {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
    gap: 30px;
}

.footer h3, 
.footer h4 {
    color: #38bdf8;
    margin-bottom: 15px;
    font-size: 18px;
}

.footer p {
    font-size: 14px;
    line-height: 1.7;
    color: #cbd5e1;
}

.footer ul {
    list-style: none;
    padding: 0;
}

.footer ul li {
    margin: 8px 0;
}

.footer ul li a {
    text-decoration: none;
    color: #e2e8f0;
    font-size: 14px;
    transition: color 0.3s;
}

.footer ul li a:hover {
    color: #38bdf8;
}

.social-links a {
    margin-right: 10px;
    font-size: 18px;
    text-decoration: none;
    color: #cbd5e1;
    transition: color 0.3s;
}

.social-links a:hover {
    color: #38bdf8;
}

.footer-bottom {
    border-top: 1px solid #334155;
    text-align: center;
    padding-top: 15px;
    margin-top: 30px;
    font-size: 14px;
    color: #94a3b8;
}

/* =========================
   About GVIC Section
========================= */
.about-gvic {
    background: linear-gradient(135deg, #f9fafc, #eef3f8);
    padding: 60px 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.about-gvic .container {
    max-width: 1000px;
    margin: 0 auto;
    background: #ffffff;
    padding: 40px;
    border-radius: 16px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.about-gvic .container:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
}

.about-gvic h2 {
    font-size: 2.2rem;
    color: #1e3a8a;
    margin-bottom: 20px;
    text-align: center;
    position: relative;
}

.about-gvic h2::after {
    content: "";
    display: block;
    width: 70px;
    height: 4px;
    background: #2563eb;
    margin: 12px auto 0;
    border-radius: 2px;
}

.about-gvic p {
    font-size: 1.05rem;
    line-height: 1.8;
    color: #374151;
    margin-bottom: 18px;
    text-align: justify;
}

/* =========================
   Vision & Mission Section
========================= */
.vision-mission {
    background: #f9fafc;
    padding: 80px 20px;
}

.vision-mission .container {
    max-width: 1200px;
    margin: auto;
}

.vision-mission .section-title {
    font-size: 32px;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 50px;
    text-align: center;
    position: relative;
    display: inline-block;
}

.vision-mission .section-title::after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #0077b6, #00b4d8);
    margin: 10px auto 0;
    border-radius: 2px;
}

.vm-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.vm-card {
    background: #ffffff;
    padding: 30px;
    border-radius: 16px;
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
    text-align: left;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.vm-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.12);
}

.vm-card h3 {
    font-size: 22px;
    font-weight: 600;
    color: #0077b6;
    margin-bottom: 15px;
}

.vm-card p,
.vm-card ul {
    font-size: 16px;
    line-height: 1.7;
    color: #444;
}

.vm-card ul {
    padding-left: 20px;
}

.vm-card ul li {
    margin-bottom: 10px;
    position: relative;
}

.vm-card ul li::before {
    content: "✔";
    color: #00b894;
    font-weight: bold;
    position: absolute;
    left: -20px;
}

/* =========================
   Placements Section
========================= */
.placements {
    padding: 60px 20px;
    background: #f8fafc;
    text-align: center;
}

.placements .container {
    max-width: 1200px;
    margin: 0 auto;
}

.placements h2 {
    font-size: 2.5rem;
    color: #1e3a8a;
    margin-bottom: 15px;
}

.placements .intro {
    font-size: 1.1rem;
    max-width: 900px;
    margin: 0 auto 40px;
    color: #555;
}

.placement-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 20px;
    margin-bottom: 50px;
}

.placement-cards .card {
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.placement-cards .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.12);
}

.placement-cards h3 {
    font-size: 1.3rem;
    color: #2563eb;
    margin-bottom: 12px;
}

/* Stats Section */
.stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 20px;
    margin-top: 30px;
}

.stat-box {
    background: #1e3a8a;
    color: white;
    padding: 30px 20px;
    border-radius: 10px;
    transition: background 0.3s ease;
}

.stat-box:hover {
    background: #2563eb;
}

.stat-box h4 {
    font-size: 2rem;
    margin-bottom: 5px;
}

/* =========================
   Responsive Styles
========================= */
@media (max-width: 1024px) {
    .placements .intro {
        font-size: 1rem;
    }
}

@media (max-width: 768px) {
    .about-gvic .container,
    .vision-mission .container,
    .placements .container {
        padding: 25px;
    }

    .about-gvic h2 {
        font-size: 1.8rem;
    }

    .vision-mission .section-title {
        font-size: 26px;
        margin-bottom: 30px;
    }

    .vm-card h3 {
        font-size: 20px;
    }

    .placements h2 {
        font-size: 2rem;
    }

    .placement-cards .card {
        padding: 20px;
    }

    .stat-box h4 {
        font-size: 1.5rem;
    }
}

@media (max-width: 480px) {
    .vm-grid {
        grid-template-columns: 1fr;
    }

    .placement-cards {
        grid-template-columns: 1fr;
    }

    .stats {
        grid-template-columns: 1fr;
    }
}

.announcement-section {
  text-align: center;
  padding: 20px;
}

.section-title {
  font-size: 2rem;
  margin-bottom: 20px;
}

.announcement-slider {
  width: 100%;
  max-width: 900px;
  aspect-ratio: 16 / 9;
  overflow: hidden;
  margin: auto;
  border: 2px solid #ddd;
  border-radius: 10px;
  background-color: #000;
}

.slider {
  display: flex;
  transition: transform 0.5s ease-in-out;
  height: 100%;
}

.slide {
  min-width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.slide img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
  display: block;
}

</style>
</head>
<body>

    <?php include('header.php'); ?>
    <!-- Video Section -->
<!-- Video Section -->
<section class="video-section">
    <!-- Video Background -->
    <video class="video-bg" autoplay muted loop playsinline>
        <source src="videos/clg.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Overlay Content -->
    <div class="video-overlay">
        <div class="video-content">
            <h2>Welcome to Golden Valley Integrated Campus</h2>
            <p>Empowering Students with Knowledge, Innovation, and Excellence</p>
            <a href="admissions.php" class="btn admission-btn">Apply Now</a>
           
        </div>
    </div>
</section>
<section class="announcement-section">
  <h2 class="section-title">Announcements and News</h2>

  <div class="announcement-slider">
    <div class="slider">
      <div class="slide">
        <img src="/images/laptop anouncement.jpg" alt="Laptop Announcement">
      </div>
      <div class="slide">
        <img src="/images/anouncement3.jpg" alt="Announcement 3">
      </div>
      <div class="slide">
        <img src="/images/gvic3.jpg" alt="GVIC 3">
      </div>
      <div class="slide">
        <img src="/images/gvic5.jpg" alt="GVIC 5">
      </div>
      <div class="slide">
        <img src="/images/gvicc.jpeg" alt="GVIC C">
      </div>
    
     
      <div class="slide">
        <img src="/images/freelaptop.jpg" alt="Free Laptop">
      </div>
      <div class="slide">
        <img src="/images/gvic2.jpg" alt="GVIC 2">
      </div>
    </div>
  </div>
</section>
<!-- About Our College Section -->
<section class="about-gvic">
        <div class="container">
            <h2>About GVIC</h2>
            <p>
                Golden Valley Integrated Campus (GVIC) is a premier institution committed to providing world-class education in Engineering, Management, and Science. Established with a vision to nurture talent and innovation, GVIC has evolved into one of the most reputed academic hubs in the region. 
            </p>
            <p>
                The campus offers a vibrant environment with cutting-edge infrastructure, experienced faculty, and a focus on holistic student development. From diploma to postgraduate programs, GVIC emphasizes academic excellence, research, and skill development that prepares students for global opportunities.
            </p>
            <p>
                Beyond academics, GVIC encourages cultural, technical, and sports activities, shaping students into well-rounded individuals. Our collaborations with industries and research organizations empower students to be future leaders and innovators.
            </p>
            <p>
                GVIC stands tall as a symbol of quality education, innovation, and commitment to creating a brighter future for society.
            </p>
        </div>
    </section>
    

<section class="leadership-section" id="leadership">
  <div class="container">
      
    <h2>Messages from Leadership</h2>
    <div class="cards">
      <!-- Chairman -->
      <div class="card">
        <img src="images/ch.jpg" alt="Chairman N.V. Ramana Reddy">
        <h3>Dr.N.V. RAMANA REDDY</h3>
        <p class="designation"><em>Chairman</em></p>
        <p class="message">
          "Education is not just about knowledge, but also about instilling values, vision, 
          and character. At Golden Valley Integrated Campus, our mission is to nurture young 
          minds to become responsible, innovative, and successful individuals who contribute 
          meaningfully to society. We strive to create an environment that balances academic 
          excellence with ethical and social growth."
        </p>
      </div>

      <!-- Principal -->
      <div class="card">
        <img src="images/pri.jpg" alt="Principal Dr. Manohar H.S">
        <h3>Dr. MANOHAR H.S</h3>
        <p class="designation"><em>Principal</em></p>
        <p class="message">
          "Discipline, dedication, and determination form the foundation of every student's journey. 
          At GVIC, we are committed to providing exceptional learning opportunities, guidance, 
          and mentorship. Our focus is on empowering students to excel academically, develop leadership 
          skills, and become adaptable, lifelong learners ready for global challenges."
        </p>
      </div>

      <!-- Director -->
      <div class="card">
        <img src="images/dr.jpg" alt="Director Y. Nagi Reddy">
        <h3>Y. NAGI REDDY</h3>
        <p class="designation"><em>Director</em></p>
        <p class="message">
          "Our campus thrives as a hub of innovation, research, and knowledge-sharing. 
          We encourage students to dream big, embrace creativity, and pursue excellence in 
          all fields. GVIC is dedicated to fostering talent that leads to professional success 
          and personal fulfillment, shaping the leaders of tomorrow."
        </p>
      </div>
    </div>
  </div>
</section>
<section class="vision-mission">
    <div class="container">
        <h2 class="section-title">Our Vision & Mission</h2>
        <div class="vm-grid">
            <!-- Vision -->
            <div class="vm-card">
                <h3>Our Vision</h3>
                <p>
                    To become a premier institution of higher learning, recognized globally for excellence 
                    in education, research, and innovation, nurturing future leaders with strong values, 
                    technical expertise, and a commitment to society.
                </p>
            </div>

            <!-- Mission -->
            <div class="vm-card">
                <h3>Our Mission</h3>
                <ul>
                    <li>Provide quality education with modern teaching methodologies.</li>
                    <li>Promote innovation, research, and entrepreneurship among students.</li>
                    <li>Develop strong ethical values and social responsibility.</li>
                    <li>Build skilled professionals to meet global industry demands.</li>
                    <li>Encourage holistic development with focus on academics, culture, and sports.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Courses -->
<section class="container" id="courses">
  <h2>Our Courses</h2>
  <div class="cards">

    <div class="card" id="polytechnic">
      <h3>Polytechnic</h3>
      <ul>
        <li>Computer Science and Engineering</li>
        <li>Computer Science & Artificial Intelligence</li>
        <li>Computer Science Artificial Intelligence & Machine Learning</li>
        <li>Computer Science & Data Science</li>
        <li>Electronics and Communication Engineering</li>
        <li>Electrical and Electronics Engineering</li>
      </ul>
    </div>

    <div class="card" id="btech">
      <h3>B.Tech</h3>
      <ul>
        <li>Computer Science and Engineering</li>
        <li>Computer Science & Artificial Intelligence</li>
        <li>Computer Science & Artificial Intelligence & Machine Learning</li>
        <li>Computer Science & Data Science</li>
        <li>Electronics and Communication Engineering</li>
        <li>Electrical and Electronics Engineering</li>
      </ul>
    </div>

    <div class="card" id="mtech">
      <h3>M.Tech</h3>
      <ul>
        <li>Computer Science and Engineering</li>
        <li>Electronics and Communication Engineering</li>
        <li>VLSI System Design & Embedded Systems</li>
        <li>Electrical and Electronics Engineering</li>
        <li>Power Electronics, Civil Engineering</li>
        <li>Structural Engineering & Construction Management</li>
      </ul>
    </div>

    <div class="card" id="mba">
      <h3>MBA</h3>
      <ul>
        <li>Big Data Analytics</li>
        <li>Banking & Financial Services</li>
        <li>Health Care & Hospital Management</li>
        <li>General MBA</li>
      </ul>
    </div>

  </div>
</section>


    <!-- Placements Section -->
    <section class="placements">
        <div class="container">
            <h2>Placements at GVIC</h2>
            <p class="intro">Golden Valley Integrated Campus (GVIC) has a dedicated Training and Placement Cell committed to building strong industry connections and ensuring excellent career opportunities for students. With continuous skill development programs, career guidance, and recruiter tie-ups, we empower our students to achieve their career goals.</p>

            <div class="placement-cards">
                <div class="card">
                    <h3>100+ Recruiters</h3>
                    <p>GVIC collaborates with leading companies from IT, Core Engineering, Management, and Emerging Technologies, ensuring diverse career options.</p>
                </div>
                <div class="card">
                    <h3>Skill Development</h3>
                    <p>Regular workshops, aptitude training, mock interviews, and coding sessions prepare students for industry demands.</p>
                </div>
                <div class="card">
                    <h3>Internship Support</h3>
                    <p>Strong industry partnerships provide students with internship opportunities to gain real-world experience before placements.</p>
                </div>
                <div class="card">
                    <h3>Career Guidance</h3>
                    <p>Personalized mentoring and career counseling sessions help students choose the right career path.</p>
                </div>
            </div>

            <div class="stats">
                <div class="stat-box">
                    <h4>90%+</h4>
                    <p>Placement Rate</p>
                </div>
                <div class="stat-box">
                    <h4>200+</h4>
                    <p>Companies Visited</p>
                </div>
                <div class="stat-box">
                    <h4>10 LPA</h4>
                    <p>Highest Package</p>
                </div>
                <div class="stat-box">
                    <h4>500+</h4>
                    <p>Offers Every Year</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main>
        <!-- Add your page content here -->
    </main>
<!-- footer.php -->
<footer class="footer">
  <div class="footer-container">
    <!-- About Section -->
    <div class="footer-col">
      <h3>Golden Valley Integrated Campus</h3>
      <p>
        A premier institution dedicated to academic excellence, innovation,
        and holistic student development. Offering Diploma, UG, PG, and MBA
        programs across engineering, management, and applied sciences.
      </p>
    </div>

    <!-- Quick Links -->
    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="ug-admissions.php">UG Admissions</a></li>
        <li><a href="pg-admissions.php">PG Admissions</a></li>
        <li><a href="library.php">Library</a></li>
        <li><a href="alumni.php">Alumni</a></li>
      </ul>
    </div>

    <!-- Resources -->
    <div class="footer-col">
      <h4>Resources</h4>
      <ul>
        <li><a href="diploma.php">Diploma Programs</a></li>
        <li><a href="life-skills.php">Life Skills</a></li>
        <li><a href="cultural.php">Cultural Activities</a></li>
        <li><a href="faqs.php">FAQs</a></li>
        <li><a href="blog.php">Blog</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div class="footer-col">
      <h4>Contact Us</h4>
      <p>Golden Valley Integrated Campus<br>
         Madanapalle, Andhra Pradesh, India</p>
      <p>📞 +91-8328695588</p>
      <p>✉️ info@gvic.ac.in</p>
      <div class="social-links">
        <a href="#">🌐</a>
        <a href="#">📘</a>
        <a href="#">🐦</a>
        <a href="#">▶️</a>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 Golden Valley Integrated Campus. All Rights Reserved.</p>
  </div>
</footer>

<script>
  const slider = document.querySelector('.slider');
  const slides = document.querySelectorAll('.slide');
  let index = 0;

  function showNextSlide() {
    index++;
    if (index >= slides.length) {
      index = 0;  // Smoothly jump back to first slide
    }
    slider.style.transform = `translateX(-${index * 100}%)`;
  }

  setInterval(showNextSlide, 3000);
</script>



</body>

</html>
