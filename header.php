<!-- header.html -->
<header>
  <!-- Announcement Bar -->
  <div class="announcement-bar">
    <p>📢 Admissions Open 2025-26 | Apply Now | Latest Campus Updates</p>
  </div>

  <!-- Middle Section -->
  <div class="header-main">
    <div class="header-left">
      <a href="index.php" class="logo">
        <img src="images/logo1.png" alt="GVIC Logo">
      </a>
      <div class="college-info">
        <h1>Golden Valley Integrated Campus (GVIC)</h1>
        <p>A Part of The Bharath Educational Society RegNo: (318/2008)</p>
      </div>
    </div>

    <div class="header-right">
      <a href="careers.php" class="link">Careers</a>
      <a href="student-login.php" class="link">🔒 Student Login</a>
      <a href="https://sg2plzcpnl453271.prod.sin2.secureserver.net:2096/webmaillogout.cgi" class="link">✉ Email</a>
      <a href="admission.html" class="btn primary-btn">Apply Now</a>
      <div class="search-box">
        <input type="text" placeholder="Search courses, info..." id="search-input">
        <button id="search-btn">🔍</button>
      </div>
    </div>

    <!-- Hamburger -->
    <div class="hamburger" id="hamburger">
      <span></span><span></span><span></span>
    </div>
  </div>

  <!-- Navigation -->
  <nav class="main-nav">
    <ul id="nav-links">
      <li class="has-submenu">
        <a href="academics.php">About</a>
        <ul class="submenu">
          <li><a href="course.html">Vision & Mision</a></li>
          <li><a href="departments.php">Administration</a></li>
          <li><a href="scholar.html">Chairman Message</a></li>
          <li><a href="industry-connect.php">Principal Message</a></li>
          <li><a href="coe.php">Directors Message</a></li>
        </ul>
      </li>

      <li class="has-submenu">
        <a href="academics.php">Academics</a>
        <ul class="submenu">
          <li><a href="course.html">Courses</a></li>
          <li><a href="departments.php">Departments</a></li>
          <li><a href="scholar.html">Scholarships</a></li>
          <li><a href="industry-connect.php">Industry Connect</a></li>
          <li><a href="coe.php">Centres of Excellence</a></li>
        </ul>
      </li>

      <li class="has-submenu">
        <a href="admissions.php">Admissions</a>
        <ul class="submenu">
          <li><a href="ug-admissions.php">Undergraduate</a></li>
          <li><a href="pg-admissions.php">Postgraduate</a></li>
          <li><a href="diploma.php">Diploma</a></li>
          <li><a href="faqs.php">FAQs</a></li>
        </ul>
      </li>

      <li class="has-submenu">
        <a href="campus.php">Campus</a>
        <ul class="submenu">
          <li><a href="lib.html">Library</a></li>
          <li><a href="hostel.html">Hostel</a></li>
          <li><a href="sports.html">Sports</a></li>
          <li><a href="life-skills.php">Life Skills</a></li>
          <li><a href="cultural.php">Cultural</a></li>
        </ul>
      </li>

      <li><a href="placements.php">Placements</a></li>
      <li><a href="cells.php">Cells</a></li>
      <li><a href="rnd.php">R&amp;D</a></li>
      <li><a href="testimonials.php">Testimonials</a></li>
      <li><a href="gallery.html">Media</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
</header>

<!-- JS -->
<script>
  // Hamburger menu toggle
  const hamburger = document.getElementById("hamburger");
  const navLinks = document.getElementById("nav-links");

  hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("active");
    hamburger.classList.toggle("open");
  });

  // Search
  document.getElementById("search-btn").addEventListener("click", () => {
    const query = document.getElementById("search-input").value.trim();
    if (query) window.location.href = "search.php?q=" + encodeURIComponent(query);
  });
</script>
<style>
    
   /* Global Reset */
* {margin:0; padding:0; box-sizing:border-box; font-family:"Segoe UI",sans-serif; transition: all 0.3s ease;}

/* Announcement Bar */
.announcement-bar {
  background: #1e88e5;
  color: #fff;
  text-align: center;
  padding: 8px 15px;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 0.5px;
}

/* Middle Section */
.header-main {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 25px;
  background: #fff;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
  position: relative;
  z-index: 100;
}

.header-left {
  display: flex;
  align-items: center;
  gap: 15px;
}

.logo img {
  height: 70px;
  transition: transform 0.3s;
}
.logo img:hover {transform: scale(1.05);}

.college-info h1 {
  font-size: 22px;
  font-weight: 700;
  color: #222;
}
.college-info p {
  font-size: 13px;
  color: #666;
}

/* Right Section */
.header-right {
  display: flex;
  align-items: center;
  gap: 15px;
  flex-wrap: wrap;
}

.header-right .link {
  font-size: 14px;
  color: #333;
  text-decoration: none;
  position: relative;
  padding: 6px 8px;
}
.header-right .link::after {
  content: '';
  height: 2px;
  width: 0;
  background: #fbc02d;
  position: absolute;
  left: 0;
  bottom: 0;
  transition: 0.3s;
}
.header-right .link:hover::after {width: 100%;}

.btn.primary-btn {
  background: #1565c0;
  color: #fff;
  padding: 8px 18px;
  border-radius: 6px;
  text-decoration: none;
  font-weight: 600;
  box-shadow: 0 4px 8px rgba(21, 101, 192, 0.3);
}
.btn.primary-btn:hover {
  background: #0d47a1;
  transform: translateY(-2px);
  box-shadow: 0 6px 12px rgba(21, 101, 192, 0.4);
}

.search-box {
  display: flex;
  border: 1px solid #ddd;
  border-radius: 6px;
  overflow: hidden;
  transition: all 0.3s ease;
}
.search-box:hover {box-shadow: 0 2px 6px rgba(0,0,0,0.2);}
.search-box input {
  border: none;
  padding: 6px 12px;
  outline: none;
  font-size: 14px;
}
.search-box button {
  background: #fbc02d;
  border: none;
  padding: 6px 12px;
  cursor: pointer;
  font-size: 16px;
}
.search-box button:hover {background: #f9a825;}

/* Navigation */
.main-nav {
  background: #fbc02d;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}
.main-nav ul {
  list-style: none;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}
.main-nav li {position: relative;}
.main-nav li a {
  display: block;
  padding: 12px 22px;
  font-weight: 600;
  color: #000;
  text-decoration: none;
  border-radius: 6px;
}
.main-nav li a:hover {
  background: rgba(0,0,0,0.1);
  color: #1565c0;
  transform: translateY(-2px);
}

/* Submenu */
.submenu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background: #fff;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  border-radius: 6px;
  min-width: 220px;
  z-index: 99;
  opacity: 0;
  transform: translateY(10px);
  transition: all 0.3s ease;
}
.submenu li a {
  padding: 10px 15px;
  font-weight: 500;
  color: #333;
}
.has-submenu:hover .submenu {
  display: block;
  opacity: 1;
  transform: translateY(0);
}
.submenu li a:hover {background: #f3f3f3; color: #1565c0;}

/* Hamburger */
.hamburger {
  display: none;
  flex-direction: column;
  cursor: pointer;
  gap: 5px;
}
.hamburger span {
  width: 25px;
  height: 3px;
  background: #333;
  border-radius: 2px;
  transition: 0.3s;
}
.hamburger.open span:nth-child(1){transform:rotate(45deg) translate(5px,5px);}
.hamburger.open span:nth-child(2){opacity:0;}
.hamburger.open span:nth-child(3){transform:rotate(-45deg) translate(5px,-5px);}

/* Responsive */
@media(max-width:992px){
  .header-main {flex-wrap:wrap; padding:12px 15px;}
  .header-right {flex-wrap:wrap; gap:10px;}
  .main-nav ul {
    flex-direction: column;
    display: none;
    width: 100%;
    background: #fbc02d;
  }
  .main-nav ul.active {display: flex;}
  .main-nav li a {padding: 12px 20px;}
  .submenu {position: relative; top:0; box-shadow:none; transform: translateY(0);}
  .hamburger {display:flex;}
}


</style>