<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | Jenah</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #000;
      color: #fff;
      font-family: Arial, sans-serif;
    }

    h2 {
      text-align: center;
      color: #ff69b4;
      margin-bottom: 20px;
    }

    p {
      text-align: center;
      color: #ccc;
      margin-bottom: 40px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    input, textarea {
      padding: 12px;
      border: none;
      border-radius: 5px;
    }

    button {
      background-color: #ff69b4;
      color: #fff;
      border: none;
      padding: 12px;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }

    #contact {
      padding: 60px 20px;
      min-height: 100vh;
      display: flex;
      align-items: center;
    }

    .container {
      max-width: 800px;
      margin: auto;
      width: 100%;
    }
  </style>
</head>
<body>

  <section id="contact">
    <div class="container">
      <h2>Get in Touch</h2>
      <p>Feel free to reach out for collaborations, projects, or just to say hi 👋</p>
      <form action="mailto:youremail@example.com" method="POST" enctype="text/plain">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </section>

</body>
</html>
