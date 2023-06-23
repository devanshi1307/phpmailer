<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

.gradient-custom-3 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
  <!-- <div style="display:grid;justify-self:center;height:100vh">
    <form action="send_mail.php" method="post">
    <h2 class="text-uppercase text-center mb-5">Contact us</h2>
        <input placeholder="your name" name="name" type="text" tabindex='1' autofocus ><br>
        <input placeholder="your email" name="email" type="email" tabindex='2'  ><br>
        <input placeholder="your number" name="tel" type="text" tabindex='3' ><br>
        <button type="submit" name="submit">Submit </Button>
      </form>
       
  </div>   -->


  <!-- <div class="mask d-flex align-items-center h-100 gradient-custom-3"> -->
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Contact us</h2>

              <form action="send_mail.php" method="post">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" name="name" class="form-control form-control-lg" placeholder="your name"/>
                  <!-- <label class="form-label" for="form3Example1cg">Your Name</label> -->
                </div>

                <div class="form-outline mb-4">
                  <input placeholder="your email" name="email" type="email" id="form3Example3cg" class="form-control form-control-lg" />
                  <!-- <label class="form-label" for="form3Example3cg">Your Email</label> -->
                </div>

                <div class="form-outline mb-4">
                  <input placeholder="mobile number" name="tel" type="number" id="form3Example4cg" class="form-control form-control-lg" />
                  <!-- <label class="form-label" for="form3Example4cg">mobile</label> -->
                </div>

                <!-- <div class="form-outline mb-4">
                  <input  id="form3Example4cdg"  form-control-lg" />
                  <input type="file" class="form-control" id="file" name="file"  />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

                 -->

                <div class="d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-success  btn-block btn-lg  gradient-custom-4 text-body ">Submit </Button>
                  <!-- <button type="button"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button> -->
                </div>

                <!-- <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p> -->

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
