<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="contact-form-container" id="contact-form-section">
        <h1>kontak kami</h1>
        <form id="contact-form">
            <label for="name">nama:</label>
            <input type="text" id="name" name="name" required>
             
            <label for="email">email:</label>
            <input type="text" id="email" name="email" required>

            <label for="message">pesan:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">kirim</button>
            <p id="form-status"></p>
        </form>
    </div>
</body>
</html>