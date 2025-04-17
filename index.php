<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Café Bliss</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap & Animate.css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <?php include 'components/navbar.php'; ?>
  <?php include 'components/sidebar.php'; ?>

  <div class="main-content" id="main-content">
    <div class="container-fluid py-5 px-4">
      <h2 class="fw-bold">Welcome to Café POS</h2>
      <p>Manage orders, inventory, and more. Start brewing success! ☕</p>
    </div>
  </div>

  <!-- Theme Toggle Button -->
  <button id="themeToggle" class="btn btn-outline-secondary position-fixed bottom-0 end-0 m-4 shadow">
    <i id="themeIcon" class="bi bi-moon-fill"></i>
  </button>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('main-content');
    const navbar = document.getElementById('main-navbar');
    const collapseBtn = document.getElementById('collapseBtn');
    const sidebarOverlay = document.getElementById('sidebar-overlay');

    function isMobile() {
      return window.innerWidth <= 768;
    }

    collapseBtn.addEventListener('click', () => {
      if (isMobile()) {
        sidebar.classList.toggle('show');
        sidebarOverlay.classList.toggle('active');
      } else {
        sidebar.classList.toggle('collapsed');
        mainContent.classList.toggle('collapsed');
        navbar.classList.toggle('collapsed');
      }
    });

    sidebarOverlay.addEventListener('click', () => {
      sidebar.classList.remove('show');
      sidebarOverlay.classList.remove('active');
    });

    // Dark/Light Mode Toggle
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');

    function setTheme(theme) {
      document.body.classList.toggle('light-mode', theme === 'light');
      themeIcon.className = theme === 'light' ? 'bi bi-sun-fill' : 'bi bi-moon-fill';
      localStorage.setItem('theme', theme);
    }

    // Load saved theme
    const savedTheme = localStorage.getItem('theme') || 'dark';
    setTheme(savedTheme);

    // Toggle theme
    themeToggle.addEventListener('click', () => {
      const isLight = document.body.classList.contains('light-mode');
      setTheme(isLight ? 'dark' : 'light');
    });
  </script>

</body>
</html>
