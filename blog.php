<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Blog</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f9fafc;
            color: #333;
            line-height: 1.7;
        }

        /* Header */
        header {
            background: linear-gradient(90deg, #0052cc, #0066ff);
            color: #fff;
            padding: 20px 40px;
            text-align: center;
            font-size: 1.8rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 30px auto;
            display: flex;
            gap: 25px;
            padding: 0 20px;
        }

        /* Blog Section */
        .blog-section {
            flex: 3;
        }

        .blog-post {
            background: #fff;
            padding: 25px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: transform 0.3s;
        }

        .blog-post:hover {
            transform: translateY(-5px);
        }

        .blog-post h2 {
            font-size: 1.5rem;
            margin-bottom: 12px;
            color: #0052cc;
        }

        .blog-meta {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 15px;
        }

        .blog-post p {
            margin-bottom: 15px;
            color: #444;
        }

        .read-more {
            text-decoration: none;
            color: #0052cc;
            font-weight: 600;
            transition: color 0.3s;
        }

        .read-more:hover {
            color: #003d99;
        }

        /* Sidebar */
        .sidebar {
            flex: 1;
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .sidebar h3 {
            margin-bottom: 15px;
            color: #0052cc;
        }

        .sidebar input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s;
        }

        .sidebar ul li a:hover {
            color: #0052cc;
        }

        /* Footer */
        footer {
            background: #f1f3f6;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            font-size: 0.9rem;
            color: #555;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        College Blog & Insights
    </header>

    <!-- Main Content -->
    <div class="container">

        <!-- Blog Posts -->
        <div class="blog-section">
            <div class="blog-post">
                <h2>Campus Life at Golden Valley</h2>
                <div class="blog-meta">Posted on September 1, 2025 | By Admin</div>
                <p>Golden Valley Campus offers a vibrant mix of academics, cultural events, and student-driven initiatives. Learn how our students balance studies with extracurricular activities that shape their personalities.</p>
                <a href="#" class="read-more">Read More →</a>
            </div>

            <div class="blog-post">
                <h2>5 Tips to Succeed in Your Diploma Program</h2>
                <div class="blog-meta">Posted on August 20, 2025 | By Faculty</div>
                <p>Pursuing a diploma? Discover practical tips to excel in your coursework, improve time management, and prepare for industry-level challenges during your academic journey.</p>
                <a href="#" class="read-more">Read More →</a>
            </div>

            <div class="blog-post">
                <h2>Why Choose Big Data Analytics in MBA?</h2>
                <div class="blog-meta">Posted on August 10, 2025 | By Professor</div>
                <p>Big Data Analytics is one of the most sought-after MBA specializations today. Explore its career opportunities, real-world applications, and why it’s a game-changer in management education.</p>
                <a href="#" class="read-more">Read More →</a>
            </div>
        </div>

        <!-- Sidebar -->
        <aside class="sidebar">
            <h3>Search</h3>
            <input type="text" placeholder="Search blog...">

            <h3>Categories</h3>
            <ul>
                <li><a href="#">Campus News</a></li>
                <li><a href="#">Student Tips</a></li>
                <li><a href="#">Research</a></li>
                <li><a href="#">Placements</a></li>
                <li><a href="#">Events</a></li>
            </ul>
        </aside>
    </div>

    <!-- Footer -->
    <footer>
        © 2025 Golden Valley Integrated Campus | All Rights Reserved
    </footer>

</body>
</html>
