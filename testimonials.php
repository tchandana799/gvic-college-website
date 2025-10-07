<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<style>
/* =========================
   Testimonials Page Styling
========================= */

/* Page Container */
.testimonials-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 20px;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
}

/* Section Title */
.section-title {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a237e;
    margin-bottom: 50px;
    position: relative;
}
.section-title::after {
    content: "";
    width: 90px;
    height: 4px;
    background: linear-gradient(90deg, #2196f3, #673ab7);
    display: block;
    margin: 15px auto 0;
    border-radius: 2px;
}

/* Grid */
.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
}

/* Testimonial Card */
.testimonial-card {
    background: #fff;
    border-radius: 18px;
    padding: 30px 25px;
    box-shadow: 0px 6px 18px rgba(0,0,0,0.08);
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.testimonial-card:hover {
    transform: translateY(-8px);
    box-shadow: 0px 12px 26px rgba(0,0,0,0.15);
}

/* Image */
.testimonial-card img {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    margin-bottom: 15px;
    object-fit: cover;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    border: none; /* Removed borders */
}

/* Name & Role */
.testimonial-card h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: #1a237e;
    margin-bottom: 4px;
}
.testimonial-card p.role {
    font-size: 0.95rem;
    color: #777;
    margin-bottom: 15px;
}

/* Quote */
.testimonial-card p.quote {
    font-size: 1rem;
    line-height: 1.6;
    font-style: italic;
    color: #444;
    padding: 0 15px;
    position: relative;
}
.testimonial-card p.quote::before,
.testimonial-card p.quote::after {
    font-size: 2rem;
    color: #9c27b0;
    position: absolute;
}
.testimonial-card p.quote::before {
    content: "“";
    top: -10px;
    left: 0;
}
.testimonial-card p.quote::after {
    content: "”";
    bottom: -15px;
    right: 0;
}

/* CTA */
.cta-section {
    background: linear-gradient(90deg, #1e3a8a, #2563eb);
    color: white;
    text-align: center;
    padding: 70px 20px;
    margin-top: 60px;
}
.cta-section h2 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 15px;
}
.cta-section p {
    max-width: 600px;
    margin: 0 auto 25px;
    font-size: 1.1rem;
}
.cta-section a {
    background: #fff;
    color: #1e3a8a;
    padding: 12px 30px;
    border-radius: 30px;
    font-weight: 600;
    text-decoration: none;
    box-shadow: 0 4px 14px rgba(0,0,0,0.2);
    transition: background 0.3s ease;
}
.cta-section a:hover {
    background: #f3f4f6;
}

/* Responsive */
@media (max-width: 768px) {
    .section-title {
        font-size: 2rem;
    }
    .testimonial-card {
        padding: 25px 20px;
    }
}
</style>

<body>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-indigo-600 to-blue-500 text-white py-16 text-center shadow-md">
        <h1 class="text-5xl font-bold mb-4">Testimonials</h1>
        <p class="text-lg max-w-2xl mx-auto">
            Hear what our students, parents, and alumni have to say about their journey at Golden Valley Integrated Campus.
        </p>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <h2 class="section-title">What People Say</h2>
        <div class="testimonials-grid">

            <!-- Student Testimonial -->
            <div class="testimonial-card">
               
                <h3>Ananya Sharma</h3>
                <p class="role">B.Tech CSE Student</p>
                <p class="quote">
                    Golden Valley has transformed my learning journey. The faculty support and modern labs have helped me gain both theoretical knowledge and practical skills.
                </p>
            </div>

            <!-- Parent Testimonial -->
            <div class="testimonial-card">
               
                <h3>Rajesh Kumar</h3>
                <p class="role">Parent of Student</p>
                <p class="quote">
                    As a parent, I feel confident knowing my child is studying in such a professional environment. The focus on academics and personality development is commendable.
                </p>
            </div>

            <!-- Alumni Testimonial -->
            <div class="testimonial-card">
                
                <h3>Priya Nair</h3>
                <p class="role">Alumni, 2022 Batch</p>
                <p class="quote">
                    The placement opportunities and exposure at Golden Valley helped me secure my dream job. I’ll always be grateful for the guidance I received here.
                </p>
            </div>

        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <h2>Be Part of Our Success Story</h2>
        <p>Join our vibrant community and experience world-class education at Golden Valley Integrated Campus.</p>
        <a href="admissions.php">Apply Now</a>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>
