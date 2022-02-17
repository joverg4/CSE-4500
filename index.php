<?php
    $json_file = file_get_contents('my_data.json');
    $json_data = json_decode($json_file,true);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;0,800;1,400;1,800&family=Saira+Extra+Condensed:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://youli.academic.csusb.edu/css/style.css" rel="stylesheet" type="text/css" />
  </head>
  <body data-bs-spy="scroll" data-bs-target="#navbar-example3" style="position:relative">
    <div class="left-nav">

      <nav id="navbar-example3" class="navbar flex-column center vertical-center p-3">
          <img src="avatar.png" style="width:160px" ></img>
          <a class="nav-link" href="#about">About</a>
          <a class="nav-link" href="#education">Education</a>
          <a class="nav-link" href="#experience">Experience</a>
          <a class="nav-link" href="#skills">Skills</a>
          <a class="nav-link" href="#interests">Interests</a>
      </nav>

    </div>
    <div data-bs-offset="0" tabindex="0">

      <div id="about" class="content-item">
        <div class="vertical-center">
          <h1>Firstname Lastname</h1>
          <div class="subheading mb-5">
            5500 University Pkwy, San Bernardino, CA 92407  .  (123)456-7890  .  name@email.com
          </div>
          <p>This is an introuduction of yourself.</p>
        </div>
      </div>

      <div id="education" class="content-item">
        <div class="vertical-center">
          <h2 class="mb-5">Education</h2>

          <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
              <h3>CSUSB</h3>
              <div class="subheading">
                Computer Science
              </div>
              <p>Some description about your academic performace.</p>
            </div>
            <div class="flex-shrink-0">
              <span class="text-primary">March 2020 - Present</span>
            </div>
          </div>

        </div>
      </div>

      <div id="experience" class="content-item">
        <div class="vertical-center">
          <h2 class="mb-5">Experience</h2>

          <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
              <h3>Web Developer</h3>
              <div class="subheading">
                CSUSB
              </div>
              <p>Some description about your web developing experience.</p>
            </div>
            <div class="flex-shrink-0">
              <span class="text-primary">March 2021 - Present</span>
            </div>
          </div>

          <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
              <h3>Application Developer</h3>
              <div class="subheading">
                CSUSB
              </div>
              <p>Some description about your application developing experience.</p>
            </div>
            <div class="flex-shrink-0">
              <span class="text-primary">March 2021 - Present</span>
            </div>
          </div>

        </div>
      </div>
      
      <div id="skills" class="content-item">
        <div class="vertical-center">
          <h2 class="mb-5">Skills</h2>

          <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <ul>
              <li>Programming languages: C++, php, python, Java, JavaScipts, HTML, CSS</li>
              <li>System design</li>
              <li>System Administration</li>
            </ul>
          </div>

        </div>
      </div>
      
      <div id="interests" class="content-item">
        <div class="vertical-center">
          <h2 class="mb-5">Interests</h2>

          <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <p>Some descriptsion here ....</p>
          </div>

        </div>
      </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
