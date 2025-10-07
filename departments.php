<!-- departments.php -->
<?php include 'header.php'; ?>

<main class="departments-section">
    <h1 class="page-title">Our Departments</h1>
    <p class="page-subtitle">Explore the diverse academic programs offered at Golden Valley Integrated Campus.</p>

    <div class="departments-grid">
        <!-- Department Card -->
        <div class="department-card">
            <h2>Computer Science & Engineering</h2>
            <p class="short-desc">Empowering students with cutting-edge knowledge in computing and AI.</p>
            <button class="know-more-btn" onclick="toggleContent('cse')">Know More</button>
            <div id="cse" class="hidden-content">
                <p>
                    The CSE department offers UG, PG, and research opportunities with modern labs, AI/ML, Data Science,
                    and IoT specializations. Collaborations with industry leaders and real-world projects prepare 
                    students for top tech careers.
                </p>
            </div>
        </div>

        <div class="department-card">
            <h2>Electronics & Communication Engineering</h2>
            <p class="short-desc">Building expertise in electronics, communication, and VLSI systems.</p>
            <button class="know-more-btn" onclick="toggleContent('ece')">Know More</button>
            <div id="ece" class="hidden-content">
                <p>
                    ECE at GVIC equips students with knowledge in IoT, Embedded Systems, VLSI, and wireless technologies. 
                    Strong lab infrastructure ensures hands-on learning and innovation.
                </p>
            </div>
        </div>

        <div class="department-card">
            <h2>Electrical & Electronics Engineering</h2>
            <p class="short-desc">Powering innovation in renewable energy and smart grid systems.</p>
            <button class="know-more-btn" onclick="toggleContent('eee')">Know More</button>
            <div id="eee" class="hidden-content">
                <p>
                    EEE department focuses on renewable energy, smart grids, power electronics, and industrial automation, 
                    helping students contribute to sustainable technology.
                </p>
            </div>
        </div>

        <div class="department-card">
            <h2>Mechanical Engineering</h2>
            <p class="short-desc">Designing the future with advanced mechanical and manufacturing systems.</p>
            <button class="know-more-btn" onclick="toggleContent('mech')">Know More</button>
            <div id="mech" class="hidden-content">
                <p>
                    Mechanical engineering covers robotics, thermal systems, CAD/CAM, and advanced manufacturing. 
                    GVIC students work on real-world prototypes and industry-level projects.
                </p>
            </div>
        </div>

        <div class="department-card">
            <h2>MBA - Big Data Analytics</h2>
            <p class="short-desc">Bridging business strategy with big data intelligence.</p>
            <button class="know-more-btn" onclick="toggleContent('mba')">Know More</button>
            <div id="mba" class="hidden-content">
                <p>
                    MBA in Big Data Analytics prepares students for data-driven leadership with 
                    analytics, visualization, and business intelligence skills.
                </p>
            </div>
        </div>
    </div>
</main>

<script>
    function toggleContent(id) {
        const content = document.getElementById(id);
        content.style.display = (content.style.display === "block") ? "none" : "block";
    }
</script>
<style>
    .departments-section {
    padding: 50px 10%;
    text-align: center;
    background: linear-gradient(135deg, #f9f9ff, #f0f0ff);
}

.page-title {
    font-size: 2.5rem;
    font-weight: bold;
    background: linear-gradient(90deg, #6a11cb, #2575fc);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.page-subtitle {
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 40px;
}

.departments-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
}

.department-card {
    background: linear-gradient(145deg, #ffffff, #f5f5ff);
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
    text-align: left;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.department-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
}

.department-card h2 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    background: linear-gradient(90deg, #ff6a00, #ee0979);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.short-desc {
    font-size: 1rem;
    color: #444;
    margin-bottom: 15px;
}

.know-more-btn {
    padding: 10px 18px;
    border: none;
    border-radius: 8px;
    background: linear-gradient(90deg, #36d1dc, #5b86e5);
    color: white;
    font-size: 0.95rem;
    cursor: pointer;
    transition: background 0.3s ease;
}

.know-more-btn:hover {
    background: linear-gradient(90deg, #5b86e5, #36d1dc);
}

.hidden-content {
    display: none;
    margin-top: 15px;
    font-size: 0.95rem;
    color: #333;
    background: linear-gradient(135deg, #fdfbfb, #ebedee);
    padding: 15px;
    border-radius: 8px;
}

    
</style>
<?php include 'footer.php'; ?>
