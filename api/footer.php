<footer>
        <p>&copy; <?php echo date("Y"); ?> Casper David van Laar</p>
    </footer>
    <script>
function toggleGrades() {
  const section = document.getElementById("grades-section");
  const button = document.querySelector(".toggle-button");
  if (section.style.display === "none") {
    section.style.display = "block";
    button.textContent = "Hide Grades";
  } else {
    section.style.display = "none";
    button.textContent = "Show Grades";
  }
}
</script>
</body>
</html>
