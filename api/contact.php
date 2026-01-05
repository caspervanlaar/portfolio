<?php include 'header.php'; ?>
<main>
    <section class="contact">
        <h2>Contact Me</h2>

        <div class="project">
            <div class="project-body">
                <form id="contactForm" method="POST">
                    
                    <!-- Your name -->
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <!-- Your email -->
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <!-- Your message -->
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>

                    <!-- Redirect after submit -->
                    <input type="hidden" name="_next" value="https://caspervanlaar.com/api/thankyou">

                    <!-- Enable captcha -->
                    <input type="hidden" name="_captcha" value="true">

                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>

    </section>
</main>

<script>
(function () {
    const user = "casperdvanlaar";
    const domain = "hotmail.com";
    const form = document.getElementById("contactForm");
    form.action = "https://formsubmit.co/" + user + "@" + domain;
})();
</script>

<?php include 'footer.php'; ?>