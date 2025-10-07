<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni - Golden Valley Integrated Campus</title>
    <?php include('header.php'); ?>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #f9f9f9, #eef3f7);
            margin: 0;
            padding: 0;
        }

        .hero {
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(135deg, #1a73e8, #4285f4);
            color: #fff;
        }

        .hero h1 {
            font-size: 2.8rem;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
        }

        .alumni-section {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }

        .alumni-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .alumni-card {
            background: #fff;
            padding: 25px;
            border-radius: 14px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .alumni-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }

        .alumni-card h3 {
            font-size: 1.4rem;
            color: #1a73e8;
            margin-bottom: 10px;
        }

        .alumni-card p {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #444;
        }

        .events {
            background: #f0f4ff;
            padding: 50px 20px;
            text-align: center;
        }

        .events h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #1a73e8;
        }

        .event-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .event-item {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            width: 300px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }

        .event-item:hover {
            transform: translateY(-6px);
        }

        .event-item h4 {
            margin-bottom: 8px;
            font-size: 1.2rem;
            color: #333;
        }

        .event-item p {
            font-size: 0.9rem;
            color: #555;
        }

        .join-alumni {
            text-align: center;
            padding: 60px 20px;
        }

        .join-alumni h2 {
            font-size: 2rem;
            color: #222;
            margin-bottom: 20px;
        }

        .join-alumni p {
            max-width: 650px;
            margin: 0 auto 25px;
            font-size: 1rem;
            color: #555;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 8px;
            background: #1a73e8;
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #155ab6;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero">
        <h1>Our Proud Alumni</h1>
        <p>Celebrating the achievements of our graduates who are shaping the future across industries and the globe.</p>
    </div>

    <!-- Alumni Stories -->
    <section class="alumni-section">
        <h2 style="text-align:center; color:#222; margin-bottom:30px;">Alumni Success Stories</h2>
        <div class="alumni-grid">
            <div class="alumni-card">
                <h3>Ravi Kumar</h3>
                <p>Currently working as a Senior Data Scientist at Google. Ravi credits Golden Valley for building his strong technical foundation and leadership qualities.</p>
            </div>
            <div class="alumni-card">
                <h3>Ananya Sharma</h3>
                <p>Founder of TechNova Startups. Ananya's entrepreneurial journey began during her diploma days, where she participated in multiple hackathons.</p>
            </div>
            <div class="alumni-card">
                <h3>Vikram Singh</h3>
                <p>Project Manager at Infosys. Vikram is managing global projects and mentoring young professionals while being an active alumni mentor for students.</p>
            </div>
            <div class="alumni-card">
                <h3>Meera Reddy</h3>
                <p>AI Researcher at Microsoft. Meera’s published research papers have been recognized globally, and she regularly engages with our innovation hub.</p>
            </div>
        </div>
    </section>

    <!-- Alumni Events -->
    <section class="events">
        <h2>Alumni Events & Networking</h2>
        <div class="event-list">
            <div class="event-item">
                <h4>Annual Alumni Meet 2025</h4>
                <p>Reconnect with batchmates and network with professionals across industries. Venue: GVIC Auditorium | Date: December 20, 2025</p>
            </div>
            <div class="event-item">
                <h4>Webinar on AI & Future Tech</h4>
                <p>Join our alumni experts sharing insights on Artificial Intelligence, Big Data, and future career opportunities. Online | November 10, 2025</p>
            </div>
            <div class="event-item">
                <h4>Alumni Mentorship Program</h4>
                <p>Guidance from senior alumni for students aspiring to build strong careers. Registrations open year-round.</p>
            </div>
        </div>
    </section>

    <!-- Join Alumni -->
    <section class="join-alumni">
        <h2>Join Our Alumni Network</h2>
        <p>Stay connected, share your journey, and inspire the next generation of Golden Valley students. Register as part of our growing alumni community.</p>
        <a href="contact.php" class="btn">Register Now</a>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>
