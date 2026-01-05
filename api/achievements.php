<?php include 'header.php'; ?>

<section class="achievements">
  <h2>Achievements & Education</h2>

  <div class="achievements-container">

    <!-- EDUCATION -->
    <div class="achievements-item">
      <h3>Education</h3>

      <p><strong>University of Wolverhampton, England</strong> — MSc in Artificial Intelligence (current)</p>
      <p><em>Feb 2024 – Present</em></p>
      <p><strong>Current Grade Average (completed modules):</strong> 69.3</p>

      <button class="toggle-button" onclick="toggleSection('grades-section', this)">
        Show Grades
      </button>

      <div id="grades-section" style="display: none;">
        <table>
          <thead>
            <tr>
              <th>Course</th>
              <th>Grade</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>Data Science (7CS078)</td><td>69</td></tr>
            <tr><td>Data Visualisation (7CS079)</td><td><em>In Progress</em></td></tr>
            <tr><td>Deep Machine Learning (7CS082)</td><td>82</td></tr>
            <tr><td>Intelligent Agents (7CS083)</td><td>76.5</td></tr>
            <tr><td>Applying Artificial Intelligence (7CS084)</td><td>75</td></tr>
            <tr><td>Concepts & Technologies of AI (7CS070)</td><td>68</td></tr>
            <tr><td>Virtualisation and Cloud Computing (7CS071)</td><td>P</td></tr>
            <tr><td>Data Mining & Informatics (7CS074)</td><td>67</td></tr>
            <tr><td>Research Methods (7CS075)</td><td>67</td></tr>
            <tr><td>Project Management (7CS076)</td><td>50</td></tr>
            <tr><td>Dissertation</td><td><em>In Progress</em></td></tr>
          </tbody>
        </table>

        <p>
          <small>
            <strong>Expected dissertation date:</strong> January 13, 2026<br>
            <strong>Expected graduation:</strong> April 13, 2026
          </small>
        </p>
      </div>
    </div>

    <!-- BACHELOR -->
    <div class="achievements-item">
      <p><strong>University of Applied Sciences Arnhem and Nijmegen, The Netherlands</strong> — BA in Sport Science</p>
      <p><em>Sept 2019 – Sept 2023</em></p>
      <p><strong>Weighted Average Mark (WAM):</strong> 7 / 3.3 / H2A</p>
      <ul>
        <li>Total ECTS credits: 240</li>
      </ul>

      <button class="toggle-button" onclick="toggleSection('thesis-section', this)">
        Show Thesis & Minor
      </button>

      <div id="thesis-section" style="display: none; margin-top: 1em;">
        <ul>
          <li>
            Third year thesis:
            <em>The Role of Protein Intake in the Bone Health of Former Professional Cyclists</em>
            — Grade: 8 / 4.0 / Distinction
          </li>
          <li>
            Honour thesis:
            <em>Does Daylight and Exercise Overclock the Brain?</em>
            — Grade: 7 / 3.3 / Merit
          </li>
          <li>
            Minor:
            <em>Cognitive Science, Utrecht University</em>
            — Grade: 7.4 / 3.5 / Distinction
          </li>
        </ul>
      </div>
    </div>

    <!-- INTERNSHIPS -->
    <div class="achievements-item">
      <h3>Internships</h3>

      <p><strong>Seneca</strong> — Sport & Exercise Nutrition Research Intern</p>
      <p><em>Sept 2020 – Feb 2021 | Netherlands</em></p>
      <p>Developed e-learning, personalized cyclist nutrition plans, managed child motor testing.</p>

      <p><strong>Erasmus MC</strong> — Neuroscience Department</p>
      <p><em>Sept 2021 – Sept 2023 | Netherlands</em></p>
      <p>Two-year internship focused on behavioral neuroscience and EEG data analysis.</p>
    </div>

    <!-- CERTIFICATIONS -->
    <div class="achievements-item">
      <h3>Certifications & Courses</h3>
      <ul>
        <li>Computational Neuroscience — Neuromatch</li>
        <li>Data Science Professional Certificate — IBM</li>
        <li>DNA Decoded — McMaster University</li>
        <li>Medical Neuroscience — Duke University</li>
        <li>Fellowship in Effective Altruism</li>
        <li>Machine Learning — Stanford University</li>
      </ul>
    </div>

    <!-- SKILLS -->
    <div class="achievements-item">
      <h3>Languages & Skills</h3>
      <ul>
        <li>Languages: Dutch (native), English (fluent), Spanish (moderate), German (moderate), Italian (basic)</li>
        <li>Programming: Python, MATLAB, C#, php</li>
      </ul>
    </div>

    <!-- WORK EXPERIENCE (NOW PROPERLY BOXED) -->
    <div class="achievements-item">
      <h3>Work Experience</h3>

      <p><strong>Novotel</strong> — Houseman / Laundry / Room Attendant</p>
      <p><em>2025 – Present</em></p>
<p><strong>Absolute MMA</strong> — Children’s Grappling Coach</p>
      <p><em>Oct 2024 – Present | Melbourne</em></p>

      <p><strong>Various Employers</strong> — Manual Labor Roles</p>
      <p><em>Aug 2023 – 2025 | Shepparton/Melbourne</em></p>
      <ul>
        <li>Construction and farming roles</li>
       
      </ul>

      

      <p><strong>Dutch Brazilian Jiu Jitsu League</strong> — Founder</p>
      <p><em>2022 – 2024 | Netherlands</em></p>

      <p><strong>Forward Fight Academy</strong> — Grappling Coach</p>
      <p><em>2019 – 2023 | Netherlands</em></p>

      <p><strong>Amara.org</strong> — Subtitler</p>
      <p><em>2016 – 2017 | Remote</em></p>
    </div>
<p> <strong> Solyco </strong> — Tomato pick packer</p>
 <p><em>2014 – 2014 | Netherlands</em></p>

  </div>
</section>

<script>
  function toggleSection(id, button) {
    const section = document.getElementById(id);
    const isHidden = section.style.display === 'none';

    section.style.display = isHidden ? 'block' : 'none';
    button.textContent = isHidden ? 'Hide' : 'Show';
  }
</script>

<?php include 'footer.php'; ?>