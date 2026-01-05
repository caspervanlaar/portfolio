<?php
// Make sure this outputs HTML
header("Content-Type: text/html; charset=UTF-8");
?>

<?php include '../header.php'; // adjust path if needed ?>

<main>
    <section class="projects" style="min-height: 60vh;">       
        <div class="project">
            <div class="project-header">    
                <h3>Thank You!</h3>
            </div>
            
            <div class="project-body">
                <p>Your message has been sent successfully. I’ll get back to you as soon as possible.</p>
                <a href="/" class="toggle-button">
                    Back to Home
                </a>
            </div>
        </div>
    </section>
</main>

<?php include '../footer.php'; ?>
