<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Industry Connect - GVIC</title>
  <link rel="stylesheet" href="industry-connect.css">
</head>
<body>

  <!-- Header -->
  <header class="header">
    <h1>Golden Valley Integrated Campus</h1>
    <h2>Industry Connect</h2>
  </header>

  <!-- Section -->
  <section class="industry-container">
    
    <!-- Card 1 -->
    <div class="industry-card">
      <h3>Corporate Tie-Ups</h3>
      <p>GVIC has partnered with leading industries to bridge the gap between academics and real-world applications.</p>
      <button class="know-more" onclick="toggleContent('content1')">Know More</button>
      <div id="content1" class="hidden-content">
        <p>We have MoUs with top MNCs, IT firms, and manufacturing units. Students gain access to internships, industry training, and collaborative projects that enhance their employability skills.</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="industry-card">
      <h3>Internship Programs</h3>
      <p>We emphasize hands-on exposure through structured internship programs across domains.</p>
      <button class="know-more" onclick="toggleContent('content2')">Know More</button>
      <div id="content2" class="hidden-content">
        <p>Our students intern with reputed companies like Infosys, Wipro, TCS, and L&T. This provides them with professional skills, teamwork exposure, and confidence to face interviews.</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="industry-card">
      <h3>Workshops & Guest Lectures</h3>
      <p>Industry experts frequently visit GVIC to share insights into the latest technologies.</p>
      <button class="know-more" onclick="toggleContent('content3')">Know More</button>
      <div id="content3" class="hidden-content">
        <p>Regular sessions on AI, Data Science, IoT, Renewable Energy, and Digital Marketing are organized. Students interact directly with CEOs, engineers, and innovators shaping the future.</p>
      </div>
    </div>

  </section>

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2025 Golden Valley Integrated Campus | All Rights Reserved</p>
  </footer>

  <script>
    function toggleContent(id) {
      var content = document.getElementById(id);
      content.style.display = (content.style.display === "block") ? "none" : "block";
    }
  </script>
</body>
<style>
    
    /* Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Segoe UI", sans-serif;
}

/* Header */
.header {
  background: linear-gradient(90deg, #6a11cb, #2575fc);
  color: white;
  text-align: center;
  padding: 30px 20px;
  border-bottom-left-radius: 50px;
  border-bottom-right-radius: 50px;
}
.header h1 {
  font-size: 28px;
  font-weight: bold;
}
.header h2 {
  font-size: 20px;
  margin-top: 8px;
  font-weight: normal;
}

/* Container */
.industry-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding: 50px 20px;
  gap: 25px;
}

/* Card */
.industry-card {
  background: linear-gradient(145deg, #f0f0f0, #ffffff);
  border-radius: 20px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  padding: 25px;
  width: 320px;
  transition: all 0.3s ease-in-out;
}
.industry-card:hover {
  transform: translateY(-8px);
  background: linear-gradient(145deg, #dfe9f3, #ffffff);
}
.industry-card h3 {
  font-size: 22px;
  margin-bottom: 10px;
  color: #6a11cb;
}
.industry-card p {
  font-size: 15px;
  color: #333;
  margin-bottom: 15px;
}

/* Know More Button */
.know-more {
  background: linear-gradient(90deg, #2575fc, #6a11cb);
  color: white;
  border: none;
  padding: 10px 18px;
  border-radius: 30px;
  cursor: pointer;
  font-size: 14px;
  transition: all 0.3s ease-in-out;
}
.know-more:hover {
  background: linear-gradient(90deg, #6a11cb, #2575fc);
  transform: scale(1.05);
}

/* Hidden Content */
.hidden-content {
  display: none;
  margin-top: 15px;
  font-size: 14px;
  color: #444;
  line-height: 1.6;
  animation: fadeIn 0.5s ease-in-out;
}
@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

/* Footer */
.footer {
  background: linear-gradient(90deg, #2575fc, #6a11cb);
  color: white;
  text-align: center;
  padding: 15px;
  margin-top: 40px;
  border-top-left-radius: 50px;
  border-top-right-radius: 50px;
  font-size: 14px;
}

</style>
</html>
