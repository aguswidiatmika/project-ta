<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
  <meta name="author" content="AdminKit">
  <meta name="keywords"
    content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

  <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

  <title>Login - {{ env('APP_NAME') }}</title>

  <link href="/css/app.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    .toggle-password {
      display: block;
      top: 50%;
      transform: translateY(-50%);
      right: 15px;
    }

    #toggle-show {
      display: none;
    }
  </style>
</head>

<body>
  <main class="d-flex w-100 bg-primary">
    <div class="container d-flex flex-column">
      <div class="row vh-100">
        <div class="col-sm-10 col-md-8 col-lg-5 mx-auto d-table h-100">
          <div class="d-table-cell align-middle">

            <div class="card">
              <div class="card-body">
                <div class="m-sm-4">
                  <div class="text-center mb-3">
                    <img src="/img/photos/stikom-sm.png" alt="STIKOM Bali" class="img-fluid" />
                  </div>
                  <form action="{{ route('login') }}" method="POST">
                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input class="form-control form-control-lg" type="email" name="email" id="email"
                        placeholder="Enter your email" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <div class="mb-3 position-relative">
                        <input class="form-control form-control-lg pe-5" type="password" name="password" id="password"
                          placeholder="Enter your password" />
                        <span class="position-absolute cursor-pointer toggle-password" id="toggle-hide">
                          <i class="align-middle" data-feather="eye-off"></i></span>
                        <span class="position-absolute cursor-pointer toggle-password" id="toggle-show">
                          <i class="align-middle" data-feather="eye"></i></span>
                      </div>
                    </div>
                    <div class="text-center mt-4">
                      <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-lg btn-primary">Login</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    </div>
  </main>

  <script src="/js/app.js"></script>
  <script>
    const togglePassword = document.querySelectorAll('.toggle-password');
    const toggleShow = document.querySelector('#toggle-show');
    const toggleHide = document.querySelector('#toggle-hide');
    const password = document.querySelector("#password");

    const showHidePassword = (toggle) => {
      toggle.addEventListener('click', () => {
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        toggleHide.classList.toggle("d-none");
        toggleShow.classList.toggle("d-block");
      });
    }

    togglePassword.forEach(toggle => {
      showHidePassword(toggle);
    });
  </script>
</body>

</html>
