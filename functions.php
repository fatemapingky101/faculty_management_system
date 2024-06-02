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
          <li><a href="index.php">Faculty & Staff</a></li>
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
            <li><a href="vision.php">Previous Deans</a></li>
          </ul>
        </aside>

        <article class="main-content">
          <h3>Functions of The Faculty</h3>
          <div class="dean-message">
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
        <div class="department-list">
          <div class="department-item">
            <img
              src="images/fishing-net-kaptai-lake-rangamati-260nw-2413295575.webp"
              alt="Chemistry Department"
            />
            <h4>Department of Chemistry (Chem)</h4>
          </div>
          <div class="department-item">
            <img src="images/kaptailake.jpg" alt="Mathematics Department" />
            <h4>Department of Mathematics (Math)</h4>
          </div>
          <div class="department-item">
            <img src="images/kaptailake.jpg" alt="Physics Department" />
            <h4>Department of Physics (Phys)</h4>
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