<?php
echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faculty of Science - RMSTU</title>
    <link rel="stylesheet" href="css/engineering.css" />
  </head>

  <body>
    <header>
      <div class="header-container">
        <div class="logo-container">
          <img src="images/RMSTU_logo.png" alt="RMSTU- Logo" class="logo" />
        </div>
        <div class="text-container">
          <h1>Rangamati Science And Technology University</h1>
        </div>
      </div>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Administration</a></li>
          <li><a href="index.php">Faculties</a></li>
          <li><a href="#">Students</a></li>
          <li><a href="#">Alumni</a></li>
          <li><a href="#">Notices</a></li>
          <li><a href="#">Search</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section class="faculty-header">
        <h2>Faculty of Science</h2>
      </section>

      <section class="content">
        <aside class="sidebar">
          <ul>
            <li>
              <a href="engineering.php">Message from the Dean</a>
            </li>
            <li>
              <a href="about.php">About the Faculty</a>
            </li>
            <li>
              <a href="vision.php">Vision & Mission</a>
            </li>
            <li>
              <a href="functions.php">Functions Of The Faculty</a>
            </li>
            <li>
              <a href="previousdean.php">Previous Deans</a>
            </li>
          </ul>
        </aside>

        <article class="main-content">
          <h3>Message from the Dean</h3>
          <div class="dean-message">
            <img src="images/images.jpeg" alt="Dean Photo" class="dean-photo" />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem
              consequuntur iure hic! Nam, ad eligendi voluptatem nihil laborum
              odit saepe quia. Distinctio sit optio illo iure corporis nulla
              modi minima.
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius,
              minima accusamus laborum similique consequuntur dolorum aperiam.
              Laudantium sed repellendus corporis porro, accusantium debitis
              necessitatibus iusto molestias cum ad, dolorem veritatis.
            </p>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti
              consequatur quas repellat ratione aliquam accusantium quidem quasi
              aut repudiandae, totam dolor officiis accusamus nemo distinctio
              eos veniam, nisi ex mollitia.
            </p>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Doloremque deserunt magnam amet quasi sunt laboriosam optio quo
              cum porro exercitationem ratione harum eveniet, eos eum accusamus
              in illum fugit eius.
            </p>
          </div>
        </article>
      </section>

      <section class="departments">
        <h3>Departments</h3>
        <!--
        <div class="department-list">
          <div class="department-item">
            <img
              src="images/fishing-net-kaptai-lake-rangamati-260nw-2413295575.webp"
              alt="Chemistry Department"
            />
            <h4>Department of Chemistry (Chem)</h4>
          </div>
          <div class="department-item">
            <img
              src="images/engneering.jpg"
              alt="Mathematics Department"
            />
            <h4>Department of Mathematics (Math)</h4>
          </div>
          <div class="department-item">
            <img
              src="images/engneering.jpg"
              alt="Physics Department"
            />
            <h4>Department of Physics (Phys)</h4>
          </div>
        </div>
      -->
        <div class="container">
          <!--
        <input
          type="text"
          placeholder="Enter Faculty Name"
          class="search-bar"
        />
        -->
          <div class="faculty-grid">
            <div class="faculty-card">
              <img src="images/engneering.jpg" alt="Faculty of Arts" />
              <h2>Faculty of Engineering and Technology</h2>
              <a href="engineering.php" class="view-website">View...</a>
            </div>

            <div class="faculty-card">
              <img src="images/science.jpg" alt="Faculty of Arts" />
              <h2>Faculty of Science</h2>
              <a href="science.php" class="view-website">View...</a>
            </div>

            <div class="faculty-card">
              <img
                src="images/earth and environmental.jpg"
                alt="Faculty of Arts"
              />
              <h2>Faculty of Earth and Environmental Science</h2>
              <a href="environmental.php" class="view-website">View...</a>
            </div>

            <div class="faculty-card">
              <img src="images/law.jpg" alt="Faculty of Arts" />
              <h2>Faculty of Law</h2>
              <a href="law.php" class="view-website">View...</a>
            </div>

            <div class="faculty-card">
              <img src="images/business.JPG" alt="Faculty of Arts" />
              <h2>Faculty of Business Studies</h2>
              <a href="businessstudies.php" class="view-website">View...</a>
            </div>

            <div class="faculty-card">
              <img src="images/biological.jpg" alt="Faculty of Arts" />
              <h2>Faculty of Biological Science</h2>
              <a href="biologicalscience.php" class="view-website">View...</a>
            </div>

            <div class="faculty-card">
              <img src="images/pharmacy.jpg" alt="Faculty of Arts" />
              <h2>Faculty of Pharmacy</h2>
              <a href="pharmacy.php" class="view-website">View...</a>
            </div>
            <div class="faculty-card">
              <img src="images/arts.jpg" alt="Faculty of Arts" />
              <h2>Faculty of Arts</h2>
              <a href="arts.php" class="view-website">View...</a>
            </div>

            <div class="faculty-card">
              <img src="images/social.jpg" alt="Faculty of Arts" />
              <h2>Faculty of Social Science</h2>
              <a href="social.php" class="view-website">View...</a>
            </div>

            <div class="faculty-card">
              <img src="images/medicine.jpeg" alt="Faculty of Arts" />
              <h2>Faculty of Medicine</h2>
              <a href="medicine.php" class="view-website">View...</a>
            </div>

            <div class="faculty-card">
              <img src="images/fine art.jpeg" alt="Faculty of Arts" />
              <h2>Faculty of Fine Art</h2>
              <a href="fineart.php" class="view-website">View...</a>
            </div>

            <div class="faculty-card">
              <img src="images/education.jpeg" alt="Faculty of Arts" />
              <h2>Faculty of Education</h2>
              <a href="education.php" class="view-website">View...</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="footer-content">
        <div class="footer-section">
          <h4>Academics</h4>
          <ul>
            <li><a href="#">Undergraduate Studies</a></li>
            <li><a href="#">Graduate Studies</a></li>
            <li><a href="#">International Students</a></li>
            <li><a href="#">Medium of Instruction</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h4>Departments and Institutes</h4>
          <ul>
            <li><a href="#">Faculties</a></li>
            <li><a href="#">Departments</a></li>
            <li><a href="#">Institutes</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h4>Support Offices</h4>
          <ul>
            <li><a href="#">DSW</a></li>
            <li><a href="#">Office of the Chief Engineer</a></li>
            <li><a href="#">DAERs</a></li>
            <li><a href="#">IICT System and Support</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h4>Web Services</h4>
          <ul>
            <li><a href="#">BIIS</a></li>
            <li><a href="#">Office 365</a></li>
            <li><a href="#">Downloadable Forms</a></li>
            <li><a href="#">Notices</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 All rights reserved, RMSTU</p>
      </div>
    </footer>
  </body>
</html>

';
?>