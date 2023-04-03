<?php
require_once 'layout/head.php';
?>

<body>

<?php
require_once 'layout/navbar.php';
?>
      <section class="container_a_propos">
        <hr class="top-hr">
        <h1>Contact</h1>
        <hr class="bottom-hr">
        <div class="contact">
          <div class="col-lg-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Votre message"></textarea>
              </div>
              <div class="col-6">
                <label for="inputPassword2" class="visually-hidden">Password</label>
                <input type="password" class="form-control mb-3" id="inputPassword2" placeholder="Password">
              </div>
              <div class="col-6">
                <button type="submit" class="btn btn-primary mb-3justify-content-center">Confirmer</button>
              </div>
          </div>
        </div>
        
      </section>
    
</body>

<?php
require_once 'layout/footer.php';
?>