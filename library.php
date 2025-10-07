<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<body class="bg-gradient-to-br from-slate-50 to-blue-50 min-h-screen font-sans">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-6">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-blue-600">📚 Golden Valley Library</h1>
                <p class="text-gray-600 mt-2">Golden Valley Integrated Campus</p>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">
                Welcome to Your Campus Library
            </h2>
            <p class="text-lg text-gray-600 mb-8">
                Find books, study spaces, and academic resources to support your learning.
            </p>
            <div class="text-center">
                <p class="text-blue-600 font-medium">Your gateway to knowledge and learning</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4">
            <h3 class="text-3xl font-bold text-center text-gray-800 mb-12">Library Services</h3>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-blue-50 rounded-lg">
                    <div class="text-4xl mb-4">💻</div>
                    <h4 class="text-xl font-semibold mb-3">Digital Resources</h4>
                    <p class="text-gray-600">Access e-books, research databases, and online journals.</p>
                </div>
                
                <div class="text-center p-6 bg-green-50 rounded-lg">
                    <div class="text-4xl mb-4">📖</div>
                    <h4 class="text-xl font-semibold mb-3">Study Spaces</h4>
                    <p class="text-gray-600">Quiet study areas and group discussion rooms.</p>
                </div>
                
                <div class="text-center p-6 bg-purple-50 rounded-lg">
                    <div class="text-4xl mb-4">🎓</div>
                    <h4 class="text-xl font-semibold mb-3">Academic Help</h4>
                    <p class="text-gray-600">Research assistance and citation support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="max-w-4xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl font-bold mb-2">25K+</div>
                    <div>Books</div>
                </div>
                <div>
                    <div class="text-3xl font-bold mb-2">2K+</div>
                    <div>Students</div>
                </div>
                <div>
                    <div class="text-3xl font-bold mb-2">50+</div>
                    <div>Study Rooms</div>
                </div>
                <div>
                    <div class="text-3xl font-bold mb-2">24/7</div>
                    <div>Online Access</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
   


<main class="library-page">
    <section class="hero">
        <div class="hero-content">
            <h1>Central Library</h1>
            <p>A hub of knowledge, research, and innovation at GVIC.</p>
        </div>
    </section>

    <section class="library-overview">
        <h2>About the Library</h2>
        <p>
            The Central Library at Golden Valley Integrated Campus is a modern information hub 
            with extensive collections of books, journals, e-resources, and digital services. 
            It provides a calm and resourceful environment for students, faculty, and researchers.
        </p>
    </section>

    <section class="library-features">
        <h2>Library Facilities</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h3>Digital Library</h3>
                <p>Access thousands of e-books, journals, and research papers anytime, anywhere.</p>
                <button class="know-more" onclick="toggleContent(this)">Know More</button>
                <div class="hidden-content">
                    Our digital library portal provides access to IEEE, Springer, Elsevier, and other 
                    top academic databases. High-speed Wi-Fi ensures uninterrupted research.
                </div>
            </div>

            <div class="feature-card">
                <h3>Reading Halls</h3>
                <p>Spacious and air-conditioned reading halls for focused learning.</p>
                <button class="know-more" onclick="toggleContent(this)">Know More</button>
                <div class="hidden-content">
                    Equipped with comfortable seating and silent zones, the halls create 
                    a student-friendly environment for long study hours.
                </div>
            </div>

            <div class="feature-card">
                <h3>Research Support</h3>
                <p>Dedicated services for research scholars and faculty members.</p>
                <button class="know-more" onclick="toggleContent(this)">Know More</button>
                <div class="hidden-content">
                    From plagiarism checks to reference management, our team supports 
                    scholars in publishing high-quality research work.
                </div>
            </div>

            <div class="feature-card">
                <h3>Book Bank</h3>
                <p>Special book bank facility for students to borrow textbooks for the semester.</p>
                <button class="know-more" onclick="toggleContent(this)">Know More</button>
                <div class="hidden-content">
                    The Book Bank caters to economically disadvantaged students by 
                    providing essential academic materials for free or at subsidized rates.
                </div>
            </div>
        </div>
    </section>
</main>

<script>
function toggleContent(button) {
    const content = button.nextElementSibling;
    content.classList.toggle("active");
    button.textContent = content.classList.contains("active") ? "Show Less" : "Know More";
}
</script>
<style>
    
    
    /* ===== Library Page ===== */
.library-page {
    font-family: 'Segoe UI', sans-serif;
    color: #222;
}

/* Hero Section */
.library-page .hero {
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    color: #fff;
    text-align: center;
    padding: 80px 20px;
}
.library-page .hero h1 {
    font-size: 3rem;
    margin-bottom: 10px;
}
.library-page .hero p {
    font-size: 1.2rem;
    opacity: 0.9;
}

/* Overview */
.library-overview {
    max-width: 1000px;
    margin: 50px auto;
    text-align: center;
    padding: 0 20px;
}
.library-overview h2 {
    font-size: 2rem;
    background: linear-gradient(90deg, #ff7eb3, #ff758c);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 15px;
}

/* Features */
.library-features {
    padding: 50px 20px;
    background: #f9f9ff;
}
.library-features h2 {
    text-align: center;
    margin-bottom: 40px;
    font-size: 2rem;
    background: linear-gradient(90deg, #00c6ff, #0072ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 25px;
    max-width: 1200px;
    margin: 0 auto;
}

.feature-card {
    background: linear-gradient(135deg, #f3f3f3, #ffffff);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
}
.feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0px 8px 20px rgba(0,0,0,0.15);
}
.feature-card h3 {
    margin-bottom: 10px;
    background: linear-gradient(90deg, #ff9966, #ff5e62);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.know-more {
    margin-top: 10px;
    padding: 8px 15px;
    border: none;
    border-radius: 8px;
    background: linear-gradient(90deg, #6a11cb, #2575fc);
    color: #fff;
    cursor: pointer;
    transition: background 0.3s;
}
.know-more:hover {
    background: linear-gradient(90deg, #ff7eb3, #ff758c);
}

.hidden-content {
    display: none;
    margin-top: 10px;
    font-size: 0.9rem;
    color: #444;
    line-height: 1.5;
    background: #f1f1f9;
    padding: 10px;
    border-radius: 10px;
}
.hidden-content.active {
    display: block;
}

</style>
<?php include('footer.php'); ?>

</body>
</html>
