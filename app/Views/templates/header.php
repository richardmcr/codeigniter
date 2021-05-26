<!doctype html>
<html lang="en" class="h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title><?= esc($title) ?></title>
    <style>
      body {
        background-image: linear-gradient(180deg, #eee, #fff 100px, #fff);
        background-repeat: no-repeat;
        background-attachment: fixed;
      }

      body a.btn {
          color: white !important;
      }

      body a.btn:hover {
          color: white !important;
      }

      body a {
          color: #212529 !important;
      }

      body a:hover {
          color: #212529 !important;
      }

      main {
        margin-bottom: 100px;
      }

      .container {
        max-width: 960px;
      }

      footer{
        height: 50px !important;
      }
      
      div.sticky {
        position: -webkit-sticky;
        position: sticky;
        background-image: linear-gradient(180deg, #eee, #fff 100px, #fff);
        background-repeat: no-repeat;
        background-attachment: fixed;
        top: 0;
        padding: 8px 0px;
        z-index: 999;
        text-align: center;
      }
      
    </style>
  </head>
  <body class="d-flex flex-column">

      <header class="flex-shrink-0">
        <div class="container py-3">
          <div class="d-flex flex-column flex-md-row align-items-center pb-3 border-bottom">
            <a href="/contatos" class="d-flex align-items-center text-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
              </svg>
              <span class="fs-4"><?= esc($title) ?></span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
              <a class="py-2 text-dark text-decoration-none" href="https://github.com/richardmcr/codeigniter">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                </svg>
                Git
              </a>
            </nav>
          </div>
        </div>
      </header>
      
      <main class="flex-shrink-0">
      <?php if(session('msg')): ?>
        <div class="container">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo session('msg'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      <?php endif; ?>