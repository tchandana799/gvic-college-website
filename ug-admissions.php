<!-- ug-admissions.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Undergraduate Admissions - GVIC</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    /* Page Background */
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #f8f9fa, #e3f2fd);
      color: #333;
      line-height: 1.6;
    }

    header {
      background: linear-gradient(90deg, #6a11cb, #2575fc);
      color: white;
      padding: 20px 40px;
      text-align: center;
      font-size: 2rem;
      font-weight: bold;
    }

    .container {
      max-width: 1200px;
      margin: 30px auto;
      padding: 20px;
    }

    h2 {
      color: #222;
      margin-bottom: 10px;
      font-size: 1.8rem;
    }

    .section {
      background: white;
      margin-bottom: 25px;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .section:hover {
      transform: translateY(-6px);
    }

    .highlight {
      background: linear-gradient(90deg, #ff758c, #ff7eb3);
      color: white;
      padding: 12px 18px;
      border-radius: 8px;
      display: inline-block;
      font-weight: bold;
      margin-bottom: 15px;
    }

    /* Collapsible Info */
    .collapsible {
      background: linear-gradient(90deg, #36d1dc, #5b86e5);
      color: white;
      cursor: pointer;
      padding: 14px;
      width: 100%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 1.2rem;
      border-radius: 8px;
      margin-top: 10px;
      transition: background 0.3s;
    }
    .collapsible:hover {
      background: linear-gradient(90deg, #5b86e5, #36d1dc);
    }
    .content {
      padding: 0 18px;
      display: none;
      overflow: hidden;
      background: #f1f1f1;
      border-radius: 0 0 8px 8px;
      margin-bottom: 10px;
    }
    .content p {
      padding: 12px;
      margin: 0;
    }

    footer {
      background: linear-gradient(90deg, #2575fc, #6a11cb);
      color: white;
      text-align: center;
      padding: 18px;
      margin-top: 40px;
      border-radius: 8px 8px 0 0;
    }
  </style>
</head>
<body>

  <header>
    Undergraduate Admissions - GVIC
  </header>

  <div class="container">
    <!-- Intro -->
    <div class="section">
      <span class="highlight">Welcome to GVIC Admissions</span>
      <p>Golden Valley Integrated Campus (GVIC) invites aspiring students to explore our dynamic undergraduate programs. Our admissions process is designed to identify talented learners who are motivated to achieve academic excellence and leadership in their chosen fields.</p>
    </div>

    <!-- Eligibility -->
    <div class="section">
      <h2>Eligibility Criteria</h2>
      <button class="collapsible">B.Tech Programs</button>
      <div class="content">
        <p>Applicants must have completed 10+2 with Mathematics, Physics, and Chemistry. Minimum aggregate marks: 50%. Entrance test performance will also be considered.</p>
      </div>

      
    </div>

    <!-- Application Process -->
    <div class="section">
      <h2>Application Process</h2>
      <button class="collapsible">Step 1: Online Registration</button>
      <div class="content">
        <p>Visit the official GVIC website and complete the application form with accurate personal, academic, and contact details.</p>
      </div>

      <button class="collapsible">Step 2: Document Submission</button>
      <div class="content">
        <p>Upload scanned copies of 10th & 12th mark sheets, ID proof, passport-size photographs, and other required documents.</p>
      </div>

      <button class="collapsible">Step 3: Entrance Exam / Merit</button>
      <div class="content">
        <p>Admissions are based on entrance exam scores (where applicable) or direct merit-based selection depending on the program.</p>
      </div>

      <button class="collapsible">Step 4: Counseling & Admission</button>
      <div class="content">
        <p>Shortlisted candidates will be invited for counseling, where program allocation and final admission confirmation will take place.</p>
      </div>
    </div>

    <!-- Important Dates -->
    <div class="section">
      <h2>Important Dates</h2>
      <ul>
        <li>Application Start: <strong>March 1, 2025</strong></li>
        <li>Application Deadline: <strong>June 30, 2025</strong></li>
        <li>Entrance Exam: <strong>July 10, 2025</strong></li>
        <li>Results Announcement: <strong>July 20, 2025</strong></li>
        <li>Counseling: <strong>July 25 – July 30, 2025</strong></li>
      </ul>
    </div>
  </div>

  <footer>
    © 2025 Golden Valley Integrated Campus (GVIC). All Rights Reserved.
  </footer>

  <script>
    // Collapsible logic
    const coll = document.querySelectorAll(".collapsible");
    coll.forEach(button => {
      button.addEventListener("click", function () {
        this.classList.toggle("active");
        const content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    });
  </script>

</body>
</html>
