<?php include 'header.php'; ?>

<section class="achievements">
  <h2>Achievements & Education</h2>

  <div class="achievements-container">

    <div class="achievements-item">
      <h3>Education</h3>
      <p><strong>University of Wolverhampton, England</strong> — MSc in Artificial Intelligence (current)</p>
      <p><em>Feb 2024 – Present</em></p>
      <p><strong>Current Grade Average (completed modules):</strong> 69.4</p>
      <button onclick="toggleGrades()" class="toggle-button">Show Grades</button>

      <div id="grades-section" style="display: none;">
        <table>
          <thead>
            <tr>
              <th>Course</th>
              <th>Grade</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>Data Science (7CS078)</td><td><em>In Progress</em></td></tr>
            <tr><td>Data Visualisation (7CS079)</td><td><em>In Progress</em></td></tr>
            <tr><td>Deep Machine Learning (7CS082)</td><td>82</td></tr>
            <tr><td>Intelligent Agents (7CS083)</td><td>76.5</td></tr>
            <tr><td>Applying Artificial Intelligence (7CS084)</td><td>75</td></tr>
            <tr><td>Concepts & Technologies of AI (7CS070)</td><td>68</td></tr>
            <tr><td>Virtualisation and Cloud Computing (7CS071)</td><td>P</td></tr>
            <tr><td>Data Mining & Informatics (7CS074)</td><td>67</td></tr>
            <tr><td>Research Methods (7CS075)</td><td><em>In Progress</em></td></tr>
            <tr><td>Project Management (7CS076)</td><td><em>In Progress</em></td></tr>
            <tr><td>Dissertation</td><td><em>In Progress</em></td></tr>
          </tbody>
        </table>
        <p><small><strong>Expected dissertation date:</strong> December 8, 2025<br>
          <strong>Expected graduation:</strong> March 30, 2026</small></p>
      </div>
      <div id="grades-section" style="display: none;">
        <table>
          <thead>
            <tr>
              <th>Course</th>
              <th>Grade</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>Data Science (7CS078)</td><td><em>In Progress</em></td></tr>
            <tr><td>Data Visualisation (7CS079)</td><td><em>In Progress</em></td></tr>
            <tr><td>Deep Machine Learning (7CS082)</td><td>82</td></tr>
            <tr><td>Intelligent Agents (7CS083)</td><td>76.5</td></tr>
            <tr><td>Applying Artificial Intelligence (7CS084)</td><td>75</td></tr>
            <tr><td>Concepts & Technologies of AI (7CS070)</td><td>68</td></tr>
            <tr><td>Virtualisation and Cloud Computing (7CS071)</td><td>P</td></tr>
            <tr><td>Data Mining & Informatics (7CS074)</td><td>67</td></tr>
            <tr><td>Research Methods (7CS075)</td><td><em>67</em></td></tr>
            <tr><td>Project Management (7CS076)</td><td><em>50</em></td></tr>
            <tr><td>Dissertation</td><td><em>In Progress</em></td></tr>
          </tbody>
        </table>
        <p><small><strong>Expected dissertation date:</strong> December 8, 2025<br>
          <strong>Expected graduation:</strong> March 30, 2026</small></p>
      </div>
    </div>


    <div class="achievements-item">
  <p><strong>University of Applied Sciences Arnhem and Nijmegen, The Netherlands</strong> — BA in Sport Science</p>
  <p><em>Sept 2019 – Sept 2023</em></p>
  <p><strong>Weighted Average Mark (WAM):</strong> 7 / 3.3 / H2A</p>
  <ul>
    <li>Total ECTS credits: 240</li>
  </ul>
  <button onclick="toggleThesis()" class="toggle-button">Show Thesis & Minor</button>

  <div id="thesis-section" style="display: none; margin-top: 1em;">
    <ul>
      <li>Third year thesis: <em>The Role of Protein Intake in the Bone Health of Former Professional Cyclists</em> — Grade: 8 / 4.0 / Distinction</li>
      <li>Honour thesis: <em>Does Daylight and Exercise Overclock the Brain?</em> — Grade: 7 / 3.3 / Merit</li>
      <li>Minor: <em>Cognitive Science, Utrecht University, The Netherlands</em> — Grade: 7.4 / 3.5 / Distinction</li>
    </ul>
  </div>
</div>

    <div class="achievements-item">
      <h3>Internship</h3>
      <p><strong>Seneca, intern sport and exercise nutrition research team, the  Netherlands.</strong></p>
      <p><em>Sept 2020 – Feb 2021</em></p>
      <p>Developed e-learning on sports nutrition, personalized cyclist plans, managed child motor testing.</p>
      <p><strong>Erasmus MC, Neuroscience Department, The Netherlands</strong></p>
      <p><em>Sept 2021 – Sept 2023</em></p>
      <p>Two-year internship focused on behavioral neuroscience and EEG data analysis.</p>
    </div>

    <div class="achievements-item">
      <h3>Certifications & Courses</h3>
      <ul>
        <li>Computational Neuroscience — Neuromatch
        <li>Data Science Professional Certificate — IBM (Coursera)</li>
        <li>DNA Decoded — McMaster University (Coursera)</li>
        <li>Medical Neuroscience — Duke University (Coursera)</li>
        <li>Fellowship in Effective Altruism</li>
        <li>Machine Learning — Stanford University (Coursera)</li>
      </ul>
    </div>

    <div class="achievements-item">
      <h3>Languages & Skills</h3>
      <ul>
        <li>Languages: Dutch (native), English (fluent), Spanish (moderate), German (moderate)</li>
        <li>Programming: Python (good), MATLAB (good), Java (moderate), C# (moderate)</li>
      </ul>
    </div>

  </div>
</section>

<script>
  function toggleGrades() {
    const gradesSection = document.getElementById('grades-section');
    const button = event.target;
    if (gradesSection.style.display === 'none') {
      gradesSection.style.display = 'block';
      button.textContent = 'Hide Grades';
    } else {
      gradesSection.style.display = 'none';
      button.textContent = 'Show Grades';
    }
  }
</script>

<script>
  function toggleThesis() {
    const thesisSection = document.getElementById('thesis-section');
    const button = event.target;
    if (thesisSection.style.display === 'none') {
      thesisSection.style.display = 'block';
      button.textContent = 'Hide Thesis & Minor';
    } else {
      thesisSection.style.display = 'none';
      button.textContent = 'Show Thesis & Minor';
    }
  }
</script>


<?php include 'footer.php'; ?>
