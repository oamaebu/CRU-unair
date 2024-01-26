
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="{{ route("landing") }}">Home</a></li>
          <li><a class="nav-link" href="{{ route("about") }}">About</a></li>
          <li><a class="nav-link " href="{{ route("services") }}">Services & Resources</a></li>
          <li><a class="nav-link  " href="#portfolio">Funding</a></li>
          <li><a class="nav-link " href="{{ route("education") }}">Education & Training</a></li>
          <li><a class="nav-link " href="login">Community Engagement</a></li>
          <li><a class="nav-link " href="#contact">Contact</a></li>
          <li><a class="nav-link " href="login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    
{{-- 
    <script>
      // Wait for the DOM to be ready
      document.addEventListener("DOMContentLoaded", function () {
        // Get the current URL
        var currentUrl = window.location.href;
    
        // Iterate through each link in the navbar
        var navbarLinks = document.querySelectorAll('#navbar a');
        navbarLinks.forEach(function (link) {
          var linkUrl = link.href;
    
          // Skip links with empty href attributes
          if (linkUrl && linkUrl !== '#' && currentUrl.includes(linkUrl)) {
            // Add the 'active' class to the link
            link.classList.add('active');
          }
        });
      });
    </script> --}}
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>