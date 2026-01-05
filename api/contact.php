<?php include 'header.php'; ?>
<main>
    <section class="contact">
    <h2>Contact Me</h2>
    <form action="https://formsubmit.co/casperdvanlaar@hotmail.com" method="POST">
        <!-- Your name -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <!-- Your email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <!-- Your message -->
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <!-- Optional: redirect after submit -->
        <input type="hidden" name="_next" value="/thank-you.php">

        <!-- Optional: prevent spam -->
        <input type="hidden" name="_captcha" value="true">

        <button type="submit">Send Message</button>
    </form>
</section>

</main>
<?php include 'footer.php'; ?>
