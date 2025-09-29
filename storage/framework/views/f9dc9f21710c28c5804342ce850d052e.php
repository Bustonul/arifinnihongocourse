<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arifin Nihongo Course</title>
  <!-- Google Fonts for Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0; padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #f5f7fa;
      color: #333;
      line-height: 1.6;
    }

    header {
      background: #2a73cc;
      color: white;
      padding: 15px 20px;
      box-shadow: 0 3px 6px rgba(0,0,0,0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .header-content {
      display: flex;
      flex-direction: column; /* Ubah ke column untuk subtitle */
      align-items: center;
      text-align: center;
    }

    header img {
      height: 50px;
      margin-right: 12px;
      margin-bottom: 5px; /* Spacing untuk logo di atas h1 */
    }

    header h1 {
      font-size: 1.5rem;
      margin-bottom: 5px;
    }

    /* Subtitle Style */
    .subtitle {
      font-size: 0.9rem;
      font-style: italic;
      opacity: 0.9;
      margin: 0;
      font-weight: 300;
    }

    nav a {
      color: white;
      margin: 0 12px;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }

    nav a:hover {
      color: #ffdd57;
    }

    .container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .card {
      background: white;
      border-radius: 12px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      transition: 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 12px rgba(0,0,0,0.12);
    }

    /* Testimonials Section Styles */
    .testimonials-section {
      margin-bottom: 40px;
    }

    .testimonials-section h2 {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 30px;
      color: #2a73cc;
    }

    /* Testimonials Slider - Enhanced */
    .testimonial-slider {
      position: relative; 
      max-width: 700px; 
      margin: auto; 
      overflow: hidden;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .testimonial-list {
      display: flex; 
      transition: transform 0.5s ease-in-out;
    }
    
    .testimonial-item {
      min-width: 100%; 
      background: linear-gradient(135deg, #e3f2fd 0%, #f8f9ff 100%);
      padding: 40px 30px;
      text-align: center;
      position: relative;
      opacity: 0.9;
      transition: opacity 0.5s ease-in-out;
    }
    
    .testimonial-item.active {
      opacity: 1;
    }
    
    /* Quote Icons */
    .testimonial-item::before,
    .testimonial-item::after {
      content: '"';
      position: absolute;
      font-size: 4rem;
      color: #2a73cc;
      opacity: 0.3;
      font-family: serif;
    }
    
    .testimonial-item::before {
      top: 10px;
      left: 20px;
      transform: rotate(180deg);
    }
    
    .testimonial-item::after {
      bottom: -20px;
      right: 20px;
    }
    
    .testimonial-item p { 
      font-style: italic; 
      font-size: 1.1rem;
      margin-bottom: 20px;
      position: relative;
      z-index: 1;
    }
    
    /* Avatar */
    .avatar {
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #2a73cc, #ffdd57);
      border-radius: 50%;
      margin: 0 auto 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      font-size: 1.2rem;
      box-shadow: 0 4px 10px rgba(42, 115, 204, 0.3);
    }
    
    .testimonial-item .author { 
      margin-top: 15px; 
      font-weight: bold; 
      color: #2a73cc;
      font-size: 1rem;
    }
    
    /* Stars Rating */
    .stars {
      color: #ffdd57;
      font-size: 1.2rem;
      margin-bottom: 10px;
    }
    
    .stars span {
      color: #ddd;
    }

    /* Slider buttons - Enhanced */
    .slider-btn {
      position: absolute; 
      top: 50%; 
      transform: translateY(-50%);
      background: rgba(42, 115, 204, 0.8); 
      color: #fff; 
      border: none;
      padding: 12px 16px; 
      cursor: pointer; 
      font-size: 18px;
      border-radius: 50%;
      transition: all 0.3s ease;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }
    
    .slider-btn:hover {
      background: #2a73cc;
      transform: translateY(-50%) scale(1.1);
    }
    
    .prev { 
      left: 15px; 
    }
    
    .next { 
      right: 15px; 
    }

    /* Dots Indicators */
    .dots {
      display: flex;
      justify-content: center;
      margin-top: 20px;
      gap: 10px;
    }
    
    .dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: #ccc;
      cursor: pointer;
      transition: background 0.3s;
    }
    
    .dot.active {
      background: #2a73cc;
      transform: scale(1.2);
    }

    /* Footer */
    footer { 
      background: #2a73cc; 
      color: white; 
      padding: 30px 20px; 
      text-align: center; 
      margin-top: 40px;
    }
    
    footer p { 
      margin: 5px 0; 
    }

    /* Responsive */
    @media (max-width: 600px) {
      header {
        flex-direction: column;
        text-align: center;
        padding: 10px 15px;
      }
      
      .header-content {
        margin-bottom: 10px;
      }
      
      header h1 { 
        font-size: 1.8em; 
      }
      
      .subtitle {
        font-size: 0.8rem;
      }
      
      nav {
        margin-top: 10px;
      }
      
      .container {
        padding: 0 10px;
        margin: 20px auto;
      }
      
      .testimonial-slider {
        max-width: 100%;
        margin: 0 10px;
      }
      
      .testimonial-item {
        padding: 30px 20px;
      }
      
      .avatar {
        width: 50px;
        height: 50px;
        font-size: 1rem;
      }
      
      .slider-btn {
        padding: 10px 12px;
        font-size: 16px;
      }
      
      .testimonial-item::before,
      .testimonial-item::after {
        font-size: 3rem;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="header-content">
      <img src="img/logo.png" alt="Logo Arifin Nihongo Course">
      <h1>Arifin Nihongo Course</h1>
      <p class="subtitle">Dengan bahasa kita bisa mengenal dunia lebih jauh</p>
    </div>
    <nav>
      <a href="#">Home</a>
      <a href="#">Tentang</a>
      <a href="#">Kursus</a>
      <a href="#">Kontak</a>
    </nav>
  </header>

  <div class="container">
    <div class="card">
      <h2>Belajar Bahasa Jepang dengan Mudah</h2>
      <p>Kami menyediakan kursus bahasa Jepang dari dasar hingga mahir. Materi dikemas sederhana, interaktif, dan mudah dipahami.</p>
    </div>

    <div class="card">
      <h2>Kursus Populer</h2>
      <ul>
        <li>Bahasa Jepang Dasar (Minna no Nihongo)</li>
        <li>Kanji Level Pemula</li>
        <li>Kaiwa (Percakapan Sehari-hari)</li>
      </ul>
    </div>

    <div class="card">
      <h2>Kontak</h2>
      <p>Email: <a href="mailto:info@arifinnihongo.com" style="color: #2a73cc;">info@arifinnihongo.com</a></p>
      <p>WhatsApp: <a href="https://wa.me/6281234567890" style="color: #2a73cc;">+62 812-3456-7890</a></p>
    </div>

    <!-- Testimonials Slider Section (Enhanced) -->
    <div class="testimonials-section">
      <h2>Testimoni Siswa</h2>
      <div class="testimonial-slider">
        <div class="testimonial-list" id="testimonial-list">
          <div class="testimonial-item active">
            <div class="avatar">S</div>
            <div class="stars">★★★★☆ <span>★</span></div>
            <p>"Saya merasa sangat terbantu belajar di sini. Gurunya ramah dan materinya jelas."</p>
            <div class="author">— Siti, Medan</div>
          </div>
          <div class="testimonial-item">
            <div class="avatar">A</div>
            <div class="stars">★★★★★</div>
            <p>"Kelas online-nya interaktif, jadi tetap semangat belajar meskipun dari rumah."</p>
            <div class="author">— Andi, Jakarta</div>
          </div>
          <div class="testimonial-item">
            <div class="avatar">R</div>
            <div class="stars">★★★★★</div>
            <p>"Berkat kursus ini saya bisa lulus JLPT N3. Terima kasih!"</p>
            <div class="author">— Rina, Surabaya</div>
          </div>
        </div>
        <button class="slider-btn prev" onclick="prevSlide()">&#10094;</button>
        <button class="slider-btn next" onclick="nextSlide()">&#10095;</button>
      </div>
      <div class="dots" id="dots-container"></div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <p>© 2025 Arifin Nihongo Course</p>
    <p>Diberdayakan oleh Blogger | Template by Arifin</p>
  </footer>

  <script>
    let index = 0;
    const slides = document.querySelectorAll(".testimonial-item");
    const list = document.getElementById("testimonial-list");
    const dotsContainer = document.getElementById("dots-container");

    // Create dots
    function createDots() {
      dotsContainer.innerHTML = '';
      slides.forEach((_, i) => {
        const dot = document.createElement('span');
        dot.classList.add('dot');
        if (i === 0) dot.classList.add('active');
        dot.onclick = () => showSlide(i);
        dotsContainer.appendChild(dot);
      });
    }

    function showSlide(i) {
      if (i < 0) index = slides.length - 1;
      else if (i >= slides.length) index = 0;
      else index = i;
      
      list.style.transform = `translateX(${-index * 100}%)`;
      
      // Update active classes
      slides.forEach(slide => slide.classList.remove('active'));
      slides[index].classList.add('active');
      
      // Update dots
      document.querySelectorAll('.dot').forEach((dot, j) => {
        dot.classList.toggle('active', j === index);
      });
    }

    function prevSlide() { 
      showSlide(index - 1); 
    }
    
    function nextSlide() { 
      showSlide(index + 1); 
    }

    // Auto play
    setInterval(() => { 
      nextSlide(); 
    }, 5000);

    // Initialize
    createDots();
    showSlide(0);
  </script>

</body>
</html>
<?php /**PATH C:\Users\Bustonul Arifin\Herd\laravel11\resources\views/testes.blade.php ENDPATH**/ ?>