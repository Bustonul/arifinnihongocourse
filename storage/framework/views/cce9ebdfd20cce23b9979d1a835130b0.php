
<!--Contact Us Section-->
<style>
  .contact-section {
    max-width: 700px;
    margin: 40px auto;
    padding: 20px;
    font-family: Arial, sans-serif;
    background-color: #1e3c72; /* warna biru bacground kotak */
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }
  .contact-section h2 {
    text-align: center;
    color: #fff; /* warna putih contact us */
    margin-bottom: 20px;
  }
  .contact-form label {
    display: block;
    margin-bottom: 6px;
    font-weight: bold;
    color: #fff; /* warna putih name, email, phone */
  }
  .contact-form input[type="text"],
  .contact-form input[type="email"],
  .contact-form input[type="tel"],
  .contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
    font-size: 14px;
  }
  .contact-form textarea {
    min-height: 120px;
  }
  .contact-form button {
    background-color: #25D366; /* warna hijau WhatsApp */
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
  }
  .contact-form button:hover {
    background-color: #1ebd5a;
  }
  .contact-info {
    margin-top: 30px;
    text-align: center;
    color: #fff;
  }
  .contact-info p {
    margin: 6px 0;
  }
  @media (max-width: 480px) {
    .contact-section {
      padding: 15px;
      margin: 20px 10px;
    }
  }
</style>

<div class="contact-section">
  <h2>Contact Us</h2>
  <form class="contact-form" onsubmit="return sendToWhatsApp(event)">
    <label>Name *</label>
    <input id="name" name="name" required="" type="text" />

    <label>Email *</label>
    <input id="email" name="email" placeholder="your.email@example.com" required="" type="email" />

    <label>Contact *</label>
    <input id="contact" name="contact" placeholder="+62 812345678" required="" type="tel" />

    <label>Message *</label>
    <textarea id="message" name="message" required=""></textarea>

    <button type="submit">Send via WhatsApp</button>
  </form>

  <div class="contact-info">
    <p><strong>Email:</strong> arifinnihongocourse@gmail.com</p>
    <p><strong>Phone:</strong> +62 881-1410-628</p>
    <p><strong>Address:</strong> Komplek Permata Safira D7, No.15, Taktakan, Serang-Banten</p>
    <p><strong>Jam buka:</strong> Setiap hari pukul 08.00 - 20.00 Wib</p>
  </div>
</div>

<script>
  function sendToWhatsApp(event) {
    event.preventDefault();
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var contact = document.getElementById('contact').value.trim();
    var message = document.getElementById('message').value.trim();

    if (!name || !email || !contact || !message) {
      alert('Please fill in all required fields.');
      return false;
    }

    var waMessage =
      'Halo, saya ' + name +
      '%0AEmail: ' + email +
      '%0AContact: ' + contact +
      '%0A%0A' + message;

    var waLink = 'https://api.whatsapp.com/send?phone=628811410628&text=' + waMessage;

    window.open(waLink, '_blank');
    return false;
  }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <p>halo ges</p>
</body>
</html><?php /**PATH C:\Users\Bustonul Arifin\Herd\laravel11\resources\views/contact.blade.php ENDPATH**/ ?>