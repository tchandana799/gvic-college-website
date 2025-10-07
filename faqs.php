<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<style>
    
    /* FAQ Section */
.faq-item {
  border-radius: 14px;
  overflow: hidden;
  transition: all 0.3s ease;
}

.faq-item:hover {
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
  transform: translateY(-2px);
}

/* FAQ Question */
.faq-question {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  padding: 1.25rem 1.5rem;
  font-size: 1.1rem;
  font-weight: 600;
  color: #1f2937;
  background: #ffffff;
  cursor: pointer;
  transition: background 0.3s ease;
}

.faq-question:hover {
  background: #f0f7ff;
}

.faq-question .icon {
  font-size: 1.5rem;
  color: #2563eb;
  font-weight: bold;
  transition: transform 0.3s ease;
}

/* FAQ Answer */
.faq-answer {
  background: #f9fafb;
  color: #374151;
  font-size: 1rem;
  line-height: 1.6;
  padding: 0 1.5rem;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.5s ease, padding 0.3s ease;
  border-top: 1px solid #e5e7eb;
}

.faq-answer.open {
  padding: 1.25rem 1.5rem;
}

/* Smooth Animation for Icon */
.faq-item.open .faq-question .icon {
  transform: rotate(180deg);
  color: #1d4ed8;
}

    
</style>
<body class="bg-gradient-to-br from-slate-50 to-blue-50 min-h-screen font-sans">

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-20">
        <div class="max-w-6xl mx-auto px-6 lg:px-12 text-center">
            <h1 class="text-4xl lg:text-5xl font-bold mb-4">Frequently Asked Questions</h1>
            <p class="text-lg lg:text-xl max-w-3xl mx-auto">
                Have questions? We’ve got answers. Here are the most common queries 
                students and parents ask about <span class="font-semibold">Golden Valley Integrated Campus</span>.
            </p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16">
        <div class="max-w-4xl mx-auto px-6 lg:px-12">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">General Questions</h2>

            <!-- FAQ Item -->
            <div class="space-y-6">
                <div class="faq-item border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
                    <button class="faq-question w-full flex justify-between items-center p-5 text-left font-semibold text-lg text-gray-800 bg-white hover:bg-indigo-50 transition">
                        What diploma and degree programs does GVIC offer?
                        <span class="icon">+</span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 bg-gray-50 p-5 text-gray-700">
                        GVIC offers Diploma programs in Computer Engineering, Electronics & Communication, and Electrical & Electronics. 
                        We also offer UG (B.Tech) programs, PG (M.Tech, MBA), and specialized courses in AI, Data Science, and Management.
                    </div>
                </div>

                <div class="faq-item border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
                    <button class="faq-question w-full flex justify-between items-center p-5 text-left font-semibold text-lg text-gray-800 bg-white hover:bg-indigo-50 transition">
                        How can I apply for admission?
                        <span class="icon">+</span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 bg-gray-50 p-5 text-gray-700">
                        Students can apply online through our official admission portal or offline by visiting the admission office on campus. 
                        Required documents include academic transcripts, ID proof, and passport-size photographs.
                    </div>
                </div>

                <div class="faq-item border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
                    <button class="faq-question w-full flex justify-between items-center p-5 text-left font-semibold text-lg text-gray-800 bg-white hover:bg-indigo-50 transition">
                        Does GVIC provide hostel and transport facilities?
                        <span class="icon">+</span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 bg-gray-50 p-5 text-gray-700">
                        Yes. We provide separate, fully furnished hostels for boys and girls with 24/7 security, Wi-Fi, and mess facilities. 
                        Bus transportation is also available to nearby cities and towns for student convenience.
                    </div>
                </div>

                <div class="faq-item border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
                    <button class="faq-question w-full flex justify-between items-center p-5 text-left font-semibold text-lg text-gray-800 bg-white hover:bg-indigo-50 transition">
                        What about placements and career support?
                        <span class="icon">+</span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 bg-gray-50 p-5 text-gray-700">
                        Our dedicated Placement Cell collaborates with top MNCs and core companies. 
                        We provide career counseling, aptitude training, mock interviews, and internships to ensure excellent placement opportunities.
                    </div>
                </div>

                <div class="faq-item border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
                    <button class="faq-question w-full flex justify-between items-center p-5 text-left font-semibold text-lg text-gray-800 bg-white hover:bg-indigo-50 transition">
                        Is financial assistance or scholarship available?
                        <span class="icon">+</span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 bg-gray-50 p-5 text-gray-700">
                        Yes. GVIC offers scholarships based on academic merit, sports excellence, and government schemes. 
                        Eligible students can apply during the admission process.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>

    <!-- FAQ Toggle Script -->
    <script>
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const btn = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');
            const icon = item.querySelector('.icon');

            btn.addEventListener('click', () => {
                const isOpen = answer.style.maxHeight && answer.style.maxHeight !== "0px";

                // Close all other FAQs
                faqItems.forEach(i => {
                    i.querySelector('.faq-answer').style.maxHeight = "0px";
                    i.querySelector('.icon').textContent = "+";
                });

                // Toggle current
                if (!isOpen) {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                    icon.textContent = "-";
                } else {
                    answer.style.maxHeight = "0px";
                    icon.textContent = "+";
                }
            });
        });
    </script>
</body>
</html>
