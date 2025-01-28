<?php require 'partials/head.php'; ?>
<body>
<section class="min-vh-100" style="background-color:rgb(199, 134, 148);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row">
            <div class="col-md-12 col-lg-12 d-flex align-items-center">
              <div class="p-4 p-lg-5 text-black d-flex justify-content-center container-fluid" style="width: 100%; ">

                <form class="w-75">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-folder fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">File Browser</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register an Account</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">First Name</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Last Name</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Already Registered? <a href="/"
                      style="color: #393f81;">Login Here</a></p>
                </form>

              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require 'partials/footer.php'; ?>