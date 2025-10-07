<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GVIC - Cultural Activities</title>
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #f8e7f7, #f0f4ff, #e6f7f8);
      color: #333;
      line-height: 1.6;
    }

    header {
      background: linear-gradient(90deg, #6a0dad, #9c27b0, #ff4081);
      padding: 20px;
      text-align: center;
      color: #fff;
      font-size: 2rem;
      font-weight: bold;
      letter-spacing: 1px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: 40px auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 25px;
    }

    .card {
      background: linear-gradient(135deg, #ffffff, #f8f8ff);
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.2);
    }

    .card h3 {
      color: #6a0dad;
      margin-bottom: 12px;
      font-size: 1.4rem;
    }

    .card p {
      font-size: 0.95rem;
      color: #555;
    }

    .know-more {
      display: inline-block;
      margin-top: 15px;
      padding: 8px 14px;
      background: linear-gradient(90deg, #9c27b0, #ff4081);
      color: #fff;
      border-radius: 8px;
      font-size: 0.9rem;
      cursor: pointer;
      transition: 0.3s;
    }

    .know-more:hover {
      background: linear-gradient(90deg, #ff4081, #9c27b0);
    }

    .hidden-content {
      display: none;
      margin-top: 15px;
      padding: 12px;
      background: #f7f0ff;
      border-left: 4px solid #9c27b0;
      border-radius: 8px;
      animation: fadeIn 0.4s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    footer {
      background: linear-gradient(90deg, #6a0dad, #9c27b0, #ff4081);
      text-align: center;
      color: #fff;
      padding: 18px;
      margin-top: 50px;
      font-size: 0.95rem;
    }
  </style>
  <script>
    function toggleContent(id) {
      const content = document.getElementById(id);
      content.style.display = content.style.display === "block" ? "none" : "block";
    }
  </script>
</head>
<body>

  <header>GVIC Cultural Activities</header>

  <div class="container">
    <div class="card">
      <h3>Annual Fest</h3>
      <p>A grand celebration featuring music, dance, and competitions showcasing the diverse talents of our students.</p>
      <span class="know-more" onclick="toggleContent('fest')">Know More</span>
      <div class="hidden-content" id="fest">
        The Annual Fest is the most awaited cultural event of GVIC, bringing together performances, fashion shows, musical nights, and guest appearances. It encourages creativity, leadership, and collaboration among students.
      </div>
    </div>

    <div class="card">
      <h3>Traditional Day</h3>
      <p>Celebrating India’s rich cultural heritage where students showcase traditions through attire, food, and performances.</p>
      <span class="know-more" onclick="toggleContent('traditional')">Know More</span>
      <div class="hidden-content" id="traditional">
        Traditional Day is observed to honor our diverse culture. Students dress in ethnic attire, perform folk dances, and arrange food stalls representing different states.
      </div>
    </div>

    <div class="card">
      <h3>Literary Club</h3>
      <p>A platform for writers, poets, and speakers to express creativity and engage in debates, quizzes, and storytelling.</p>
      <span class="know-more" onclick="toggleContent('literary')">Know More</span>
      <div class="hidden-content" id="literary">
        The Literary Club promotes intellectual and creative growth through essay writing, elocution, poetry recitations, and intercollegiate debates.
      </div>
    </div>

    <div class="card">
      <h3>Music & Dance Club</h3>
      <p>A vibrant space where students showcase their passion for music, dance, and fine arts.</p>
      <span class="know-more" onclick="toggleContent('musicdance')">Know More</span>
      <div class="hidden-content" id="musicdance">
        From classical to contemporary, the club organizes stage shows, competitions, and workshops, ensuring students stay connected with performing arts.
      </div>
    </div>
  </div>

  <footer>
    © 2025 Golden Valley Integrated Campus (GVIC). All Rights Reserved.
  </footer>

</body>
</html>
