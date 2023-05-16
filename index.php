<?php include "inc/header.php"; ?>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-3">
            <form action="" method="POST" class="needs-validation" novalidate>
              <div class="mb-3">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
                <div class="invalid-feedback">
                  Please write a name.
                </div>
              </div>
              <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" required>
                <div class="invalid-feedback">
                  Please give an email.
                </div>
              </div>
              <div class="mb-3">
                <label for="phone">Phone</label>
                <input type="number" id="phone" name="phone" class="form-control" required>
                <div class="invalid-feedback">
                  Please write phone number.
                </div>
              </div>
              <div class="mb-3">
                <input type="submit" name="dataSubmit" class="btn btn-primary" value="Submit">

              </div>

              <?php 

              if(isset($_POST['dataSubmit'])){

                $name  = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];


              }

               ?>

            </form>
          </div>
        </div>
      </div>
    </section>
<?php include "inc/footer.php"; ?>