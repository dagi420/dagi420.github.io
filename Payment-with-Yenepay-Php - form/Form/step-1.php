<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="step-1.css">
  <title>form</title>
</head>
<body>
    
    <div class="container">
      <h1>CONTACT FORM</h1>
      <!-- modify this form HTML and place wherever you want your form -->
      <form
        action="https://formspree.io/f/xpzeanjd"
        method="POST"
      >
        <label>
          Your email:
          <input type="email" name="email">
        </label>
        <label>
          Your message:
          <textarea name="message"></textarea>
        </label>
        <!-- your other form fields go here -->
        <button type="submit">Send</button>
      </form>
    </div>
</body>
</html>