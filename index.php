<?php
echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rangamati Science and Technology Universitys</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class="container">
        <img src="images/RMSTU_logo.png" alt="University Logo" class="logo" />
        <h1>Rangamti Science And Technology University</h1>
      </div>
    </header>

    <nav>
      <div class="container">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Academics</a></li>
          <li><a href="#">Administration</a></li>
          <li><a href="#">Students</a></li>
          <li><a href="#">Research</a></li>
          <li><a href="#">Links</a></li>
        </ul>
      </div>
    </nav>

    <main>
      <div class="container">
        <input
          type="text"
          placeholder="Enter Faculty Name"
          class="search-bar"
        />
        <div class="faculty-grid">
          <div class="faculty-card">
            <img src="images/engneering.jpg" alt="Faculty of Engineering" />
            <h2>Faculty of Engineering and Technology</h2>
            <a href="engineering.php" class="view-website">View...</a>
          </div>

          <div class="faculty-card">
            <img src="images/science.jpg" alt="Faculty of Science" />
            <h2>Faculty of Science</h2>
            <a href="science.php" class="view-website">View...</a>
          </div>

          <div class="faculty-card">
            <img
              src="images/earth and environmental.jpg"
              alt="Faculty of Environmental"
            />
            <h2>Faculty of Earth and Environmental Science</h2>
            <a href="environmental.php" class="view-website">View...</a>
          </div>

          <div class="faculty-card">
            <img src="images/law.jpg" alt="Faculty of Law" />
            <h2>Faculty of Law</h2>
            <a href="law.php" class="view-website">View...</a>
          </div>

          <div class="faculty-card">
            <img src="images/business.JPG" alt="Faculty of Business Studies" />
            <h2>Faculty of Business Studies</h2>
            <a href="businessstudies.php" class="view-website">View...</a>
          </div>

          <div class="faculty-card">
            <img
              src="images/biological.jpg"
              alt="Faculty of Biological Science"
            />
            <h2>Faculty of Biological Science</h2>
            <a href="biologicalscience.php" class="view-website">View...</a>
          </div>

          <div class="faculty-card">
            <img src="images/pharmacy.jpg" alt="Faculty of Pharmacy" />
            <h2>Faculty of Pharmacy</h2>
            <a href="pharmacy.php" class="view-website">View...</a>
          </div>
          <div class="faculty-card">
            <img src="images/arts.jpg" alt="Faculty of Arts" />
            <h2>Faculty of Arts</h2>
            <a href="arts.php" class="view-website">View...</a>
          </div>

          <div class="faculty-card">
            <img src="images/social.jpg" alt="Faculty of Social Science" />
            <h2>Faculty of Social Science</h2>
            <a href="social.php" class="view-website">View...</a>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <div class="container">
        <div class="footer-links">
          <a href="#">Approved NOCs</a>
          <a href="#">Jobs</a>
          <a href="#">E-Tender</a>
          <a href="#">RMSTU Tender</a>
          <a href="#">Annual Report</a>
          <a href="#">Distinguished Visitors</a>
          <a href="#">RMSTU Forms</a>
          <a href="#">RMSTU Institutional Repository</a>
          <a href="#">RMSTU Barta</a>
          <a href="#">RMSTU Library</a>
          <a href="#">Contacts For Services</a>
          <a href="#">Registered Graduate</a>
          <a href="#">Result Archive</a>
          <a href="#">RMSTU Alumni</a>
          <a href="#">RMSTU University Teachers Housing</a>
          <a href="#">Annual Performance Agreement (APA)</a>
        </div>
        <div class="footer-contact">
          <p>
            &copy; 2024 Rangamati Science and Technology University. All Rights
            Reserved.
          </p>
          <p>Administrative Building, Jhagrabil, Rangamati-4500, Bangladesh</p>
          <p>Phone: +88-09666911463</p>
          <p>Fax: 880-2-9667222</p>
          <p>
            Email:
            <a href="mailto:vc.office@rmstu.ac.bd">vc.office@rmstu.ac.bd</a>,
            <a href="mailto:registrar@rmstu.ac.bd">registrar@rmstu.ac.bd</a>
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>

';
?>