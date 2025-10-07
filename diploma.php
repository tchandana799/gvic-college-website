<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<style>
    /* ================= Global ================= */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}

body {
  font-family: 'Inter', 'Segoe UI', Roboto, sans-serif;
  background: linear-gradient(to bottom right, #f9fafb, #eef2ff);
  color: #1f2937;
  line-height: 1.7;
}

/* ================= Typography ================= */
h1, h2, h3, h4 {
  font-weight: 700;
  color: #111827;
  letter-spacing: -0.5px;
}

h1 {
  font-size: 2.5rem;
}

h2 {
  font-size: 2rem;
  margin-bottom: 0.75rem;
}

h3 {
  font-size: 1.25rem;
  margin-bottom: 0.5rem;
}

/* ================= Sections ================= */
section {
  padding: 4rem 1.5rem;
  transition: all 0.4s ease-in-out;
}

section:nth-child(even) {
  background: #ffffff;
}

section:nth-child(odd) {
  background: #f9fafb;
}

/* ================= Hero Section ================= */
.hero {
  background: linear-gradient(135deg, #2563eb, #4f46e5);
  color: #fff;
  text-align: left;
  padding: 6rem 2rem;
}

.hero h1 {
  font-size: 3rem;
  margin-bottom: 1rem;
}

.hero p {
  font-size: 1.2rem;
  max-width: 650px;
  color: #e0e7ff;
}

/* ================= Buttons ================= */
.btn-primary {
  display: inline-block;
  background: linear-gradient(90deg, #2563eb, #4f46e5);
  color: #fff;
  font-weight: 600;
  padding: 0.85rem 1.8rem;
  border-radius: 14px;
  transition: all 0.3s ease;
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
}

.btn-primary:hover {
  background: linear-gradient(90deg, #1e40af, #4338ca);
  transform: translateY(-3px);
  box-shadow: 0 10px 24px rgba(0, 0, 0, 0.2);
}

/* ================= Cards ================= */
.card {
  background: linear-gradient(to bottom right, #f3f4f6, #e0f2fe);
  border-radius: 16px;
  padding: 2rem;
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
  transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.card:hover {
  transform: translateY(-10px) scale(1.02);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
}

/* ================= Image Styling ================= */
img {
  border-radius: 16px;
  transition: transform 0.4s ease, box-shadow 0.3s ease;
}

img:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 28px rgba(0, 0, 0, 0.18);
}

/* ================= Animations ================= */
.fade-up {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.8s ease, transform 0.8s ease;
}

.fade-up.show {
  opacity: 1;
  transform: translateY(0);
}

.zoom-in {
  opacity: 0;
  transform: scale(0.95);
  transition: opacity 0.8s ease, transform 0.8s ease;
}

.zoom-in.show {
  opacity: 1;
  transform: scale(1);
}

/* ================= Gradient Text ================= */
.gradient-text {
  background: linear-gradient(90deg, #2563eb, #4f46e5);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-weight: 800;
}

/* ================= Footer ================= */
.footer {
  background: linear-gradient(90deg, #111827, #1f2937);
  color: #9ca3af;
  padding: 2rem 1.5rem;
  text-align: center;
}

.footer a {
  color: #60a5fa;
  margin: 0 8px;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer a:hover {
  color: #3b82f6;
  text-decoration: underline;
}

    
</style>
<body class="bg-gradient-to-br from-slate-50 to-blue-50 min-h-screen font-sans">

    <!-- Main Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-20">
        <div class="max-w-6xl mx-auto px-6 lg:px-12">
            <h1 class="text-4xl lg:text-5xl font-bold mb-6">Diploma Programs</h1>
            <p class="text-lg lg:text-xl leading-relaxed max-w-3xl">
                At <span class="font-semibold">Golden Valley Integrated Campus</span>, our Diploma programs 
                are designed to provide students with strong technical skills, practical knowledge, 
                and career-ready competencies in multiple engineering and management disciplines. 
                With hands-on training, industry exposure, and experienced faculty, our diploma courses 
                serve as a gateway to both higher education and professional opportunities.
            </p>
        </div>
    </section>

    <!-- About Diploma Section -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-6 lg:px-12 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">About Our Diploma Programs</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Diploma courses at GVIC are structured with a balance of theory and practical learning. 
                    The curriculum is industry-focused, equipping students with job-ready skills while 
                    maintaining academic depth for those who wish to pursue higher studies. Each program 
                    emphasizes laboratory training, workshops, real-world projects, and internships.
                </p>
                <p class="text-gray-700 leading-relaxed mb-4">
                    We also foster an environment of innovation and creativity where students can engage 
                    in technical clubs, competitions, and exhibitions. Our programs are aligned with 
                    evolving industry standards, ensuring our graduates remain competitive in the workforce.
                </p>
            </div>
            <div>
                <img src="assets/images/diploma-students.jpg" alt="Diploma Students" class="rounded-2xl shadow-lg">
            </div>
        </div>
    </section>

    <!-- Diploma Programs Offered -->
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-6 lg:px-12">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Programs We Offer</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Program Card -->
                <div class="bg-gradient-to-br from-indigo-50 to-blue-100 p-6 rounded-2xl shadow-md hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-700">Diploma in Computer Engineering</h3>
                    <p class="text-gray-700 mb-4">
                        Focuses on programming, networking, web development, and system management. 
                        Students gain skills in software design, databases, and emerging technologies.
                    </p>
                    <ul class="list-disc list-inside text-gray-600 text-sm">
                        <li>Python, C, Java programming</li>
                        <li>Networking & Cybersecurity</li>
                        <li>Full Stack Development</li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-indigo-50 to-blue-100 p-6 rounded-2xl shadow-md hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-700">Diploma in Electronics & Communication</h3>
                    <p class="text-gray-700 mb-4">
                        Emphasizes circuit design, digital electronics, communication systems, and IoT. 
                        Prepares students for roles in embedded systems and telecom industries.
                    </p>
                    <ul class="list-disc list-inside text-gray-600 text-sm">
                        <li>VLSI & Embedded Systems</li>
                        <li>Communication Networks</li>
                        <li>IoT & Robotics Applications</li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-indigo-50 to-blue-100 p-6 rounded-2xl shadow-md hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-700">Diploma in Electrical & Electronics</h3>
                    <p class="text-gray-700 mb-4">
                        Covers power systems, electrical machines, renewable energy, and automation. 
                        Graduates excel in energy, automation, and hardware industries.
                    </p>
                    <ul class="list-disc list-inside text-gray-600 text-sm">
                        <li>Power System Analysis</li>
                        <li>Smart Grids & Renewable Energy</li>
                        <li>Industrial Automation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Career Opportunities -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-12">
            <h2 class="text-3xl font-bold text-center mb-10">Career Opportunities</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white/10 p-6 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-semibold mb-3">Higher Education</h3>
                    <p class="leading-relaxed">
                        Diploma graduates can pursue lateral entry into B.Tech/BE programs in 
                        reputed universities, opening further academic and research opportunities.
                    </p>
                </div>
                <div class="bg-white/10 p-6 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-semibold mb-3">Industry Employment</h3>
                    <p class="leading-relaxed">
                        Direct job opportunities in IT, telecom, power, automation, and core 
                        engineering industries, with roles such as junior engineer, technician, 
                        system analyst, and developer.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose GVIC -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-6 lg:px-12 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Why Choose GVIC for Your Diploma?</h2>
            <p class="text-gray-700 leading-relaxed mb-10">
                Golden Valley Integrated Campus stands apart with its blend of academic excellence 
                and real-world exposure. Our infrastructure includes state-of-the-art labs, 
                innovation centers, digital classrooms, and a supportive ecosystem for 
                holistic student development.
            </p>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-indigo-50 to-blue-100 p-6 rounded-2xl shadow-md">
                    <h3 class="text-lg font-semibold text-indigo-700 mb-2">Industry-Relevant Curriculum</h3>
                    <p class="text-gray-600">Designed with inputs from industry experts to match evolving technologies.</p>
                </div>
                <div class="bg-gradient-to-br from-indigo-50 to-blue-100 p-6 rounded-2xl shadow-md">
                    <h3 class="text-lg font-semibold text-indigo-700 mb-2">Hands-on Learning</h3>
                    <p class="text-gray-600">Practical workshops, internships, and live projects prepare students for real-world challenges.</p>
                </div>
                <div class="bg-gradient-to-br from-indigo-50 to-blue-100 p-6 rounded-2xl shadow-md">
                    <h3 class="text-lg font-semibold text-indigo-700 mb-2">Career Support</h3>
                    <p class="text-gray-600">Dedicated placement cell ensures excellent job and internship opportunities.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>
