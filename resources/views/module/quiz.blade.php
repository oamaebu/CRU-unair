<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/../assetsDashboard/img/favicon.png" rel="icon">
  <link href="/../assetsDashboard/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/../assetsDashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/../assetsDashboard/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/../assetsDashboard/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/../assetsDashboard/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/../assetsDashboard/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/../assetsDashboard/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/../assetsDashboard/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/../assetsDashboard/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    #container {
        width: 60%;
        margin: auto;
    }

    .question {
        margin-bottom: 20px;
        margin-top: 40px;
    }

    .options {
        margin-left: 20px;
    }

    #submitBtn {
        margin-top: 20px;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    #score {
        margin-top: 20px;
        font-weight: bold;
    }
</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Staff Education</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="/../assetsDashboard/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut/...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="/../assetsDashboard/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut/...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="/../assetsDashboard/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut/...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="/../assetsDashboard/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Wira Kusuma</h6>
              <span>Trainee</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->


  <main id="" class="" style=" background-color: white;" >

    <div id="container" style="background-color: white; margin-top:5em; padding-top:3%; padding-bottom:3% ;align-content: center">
        <div>
            <h2>Evaluation 1</h2>
            <br>
            <h5>Case 1: A patient arrives at a hospital emergency department seeking immediate medical attention. The patient holds a BPJS card and 
              states that they were referred by a primary care clinic. The hospital staff assesses the patient and determines that immediate treatment is necessary. </h5>

            <div class="question">
                <p>1. What steps should the hospital follow to admit the patient under BPJS?</p>
                <div class="options">
                    <label><input type="radio" name="q1" value="correct"> Verify the referral from the primary care clinic and admit the patient.</label>
                    <label><input type="radio" name="q1" value="wrong"> Contact BPJS for approval before admitting the patient.</label>
                    <label><input type="radio" name="q1" value="wrong"> Inform the patient that emergency cases are not covered by BPJS.</label>
                    <label><input type="radio" name="q1" value="wrong"> Request the patient to provide additional documentation before admitting them.</label>
                </div>
            </div>

            <div class="question">
                <p>2. How should the hospital handle the billing and reimbursement process for this emergency case?</p>
                <div class="options">
                  <label><input type="radio" name="q2" value="wrong">Bill the patient directly for the full amount and provide reimbursement later.</label>
                  <label><input type="radio" name="q2" value="correct"> Submit the necessary documents to BPJS for reimbursement.</label>
                  <label><input type="radio" name="q2" value="wrong"> Inform the patient that emergency cases are not eligible for reimbursement..</label>
                  <label><input type="radio" name="q2" value="wrong"> Delay the billing process until BPJS provides prior authorization.</label>
              </div>
            </div>

            <div class="question">
              <p>3. What actions can the hospital take to ensure compliance with BPJS guidelines during the patient's treatment and stay?</p>
              <div class="options">
                <label><input type="radio" name="q3" value="wrong">Provide unnecessary medical procedures to maximize reimbursement.</label>
                <label><input type="radio" name="q3" value="correct"> Ensure accurate and thorough documentation of the patient's treatment.</label>
                <br>
                <label><input type="radio" name="q3" value="wrong"> Deny necessary treatments to reduce costs.</label>
                <br>
                <label><input type="radio" name="q3" value="wrong"> Discharge the patient before the recommended duration of stay.</label>
            </div>
          </div>
          
          

            <button id="submitBtn" onclick="calculateScore()">Submit</button>

            <div id="score"></div>
        </div>

    </div>
  


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/../assetsDashboard/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/../assetsDashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/../assetsDashboard/vendor/chart.js/chart.umd.js"></script>
  <script src="/../assetsDashboard/vendor/echarts/echarts.min.js"></script>
  <script src="/../assetsDashboard/vendor/quill/quill.min.js"></script>
  <script src="/../assetsDashboard/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/../assetsDashboard/vendor/tinymce/tinymce.min.js"></script>
  <script src="/../assetsDashboard/vendor/php-email-form/validate.js"></script>

  <script>
function calculateScore() {
    // Dummy scoring logic (replace with your own logic)
    var score = 0;
    var answers = {
        q1: "correct",
        q2: "correct",
        q3: "correct"
    };

    for (var i = 1; i <= 3; i++) {
        var selectedOption = document.querySelector('input[name="q' + i + '"]:checked');
        if (selectedOption && selectedOption.value === answers['q' + i]) {
            score++;
        }
    }

    var totalQuestions = Object.keys(answers).length;
    var percentage = (score / totalQuestions) * 100;

    var resultMessage = 'Your score: ' + score + ' out of ' + totalQuestions + ' (' + percentage.toFixed(2) + '%)';

    if (percentage >= 75) {
        resultMessage += '<br>Congratulations! You passed.';
        // Add a "Next" button logic here
        // Example: document.getElementById('nextButton').style.display = 'block';
    } else {
        resultMessage += '<br>Sorry, you did not pass. Please retry.';
        // Add a "Retry" button logic here
        // Example: document.getElementById('retryButton').style.display = 'block';
    }

    document.getElementById('score').innerHTML = resultMessage;
}


</script>

  <!-- Template Main JS File -->
  <script src="/../assetsDashboard/js/main.js"></script>

</body>

</html>