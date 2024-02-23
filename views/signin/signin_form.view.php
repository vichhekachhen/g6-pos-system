<!-- 

<div class="card">
  <div class="card-body">
    <form action="controllers/signin/check_signin.controller.php" method="post">
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
      </div>
    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>
    <a href="/signup">Create Account</a>
  </div>
</div> -->
<div class="main">
  <form action="controllers/signin/sigin_process.controller.php" method="post">
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-3 pb-5">
                  <h2 class="fw-bold mb-5 text-uppercase">Login</h2>
                  <div class="form-outline form-white mb-5">
                    <input type="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Email" name="email" />
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="password" name="password" />
                  </div>

                  <button class="btn btn-outline-light btn-lg px-5 mt-3" type="submit">Login</button>

                </div>

                <div>
                  <!-- <p class="mb-5">Don't have an account? <a href="" class="text-white-50 fw-bold">Sign Up</a> -->
                  </p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>
</div>