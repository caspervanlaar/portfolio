<?php include 'header.php'; ?>
<main>
    <section class="contact">
        <h2>Contact Me</h2>
        <form action="send_email.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <input type="hidden" name="recipient_email" value="casperdvanlaar@hotmail.com">

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Send Message</button>
        </form>
    </section>
</main>
<?php include 'footer.php'; ?>
