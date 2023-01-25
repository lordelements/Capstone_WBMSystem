  <!-- <?php
    session_start();
    if (isset($_SESSION['email'])) {
      $email = $_SESSION["email"];
      session_write_close();
      echo '<script type="text/javascript">
        alert("You logged in as an administrator");
      window.location = "index.php";
      </script>';
    }
  ?> -->
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
 <!-- notification message -->
 <?php if (isset($_SESSION['success'])) : ?>
        <div class="container-sm p-3 mt-lg-5 clearfix bg-info text-center" >
            <h3>
                <?php 
                    echo $_SESSION['success']; 
                    unset($_SESSION['success']);
                ?>
            </h3>
        </div>
<?php endif ?>


<!-- caurosel -->
<?php include 'includes/carousel.php';?>
<!-- <?php include '../sweetalert_msg.php';?> -->

   

   <!-- Location -->
  <div class="container-sm p-3 mt-lg-5 clearfix">
    <hr class="hr hr-blurry" />
        <h2 class="fw-bold">Location</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7785.523609635863!2d123.86725408138125!3d12.663616784547015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a0d6b0b4bd39a9%3A0xed1dffeaeff45e5f!2sZone%20I%20Pob.%20(Brgy%201-%20South%20Ilawod)%2C%20Bulan%2C%20Sorsogon!5e0!3m2!1sen!2sph!4v1673341517120!5m2!1sen!2sph" 
        class="d-block w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <hr class="hr hr-blurry" />
  <div class="container-sm p-3 mt-lg-5 clearfix">
    <h2 class="fw-bold justify-content-center text-center">Barangay Officials</h2>
    <div class="row gx-lg-5">

      <!-- First column -->
      <div class="col-lg-4 col-md-12 mb-6 mb-lg-0">
    
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://mdbootstrap.com/img/new/textures/small/148.jpg" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">AI engine</h5>
            <p class="text-muted">
              <small>Finished <u>13.09.2021</u> for
                <a href="" class="text-dark">Techify</a></small>
            </p>
            <p class="card-text">
              Ut pretium ultricies dignissim. Sed sit amet mi eget urna
              placerat vulputate. Ut vulputate est non quam dignissim
              elementum. Donec a ullamcorper diam.
            </p>
            <a href="#!" class="btn btn-secondary btn-rounded">Read more</a>
          </div>
        </div>
    
      </div>
      <!-- First column -->
    
      <!-- Second column -->
      <div class="col-lg-4 mb-6 mb-lg-0">
    
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://mdbootstrap.com/img/new/textures/small/38.jpg" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Balanced design</h5>
            <p class="text-muted">
              <small>Finished <u>12.01.2022</u> for
                <a href="" class="text-dark">Rubicon</a></small>
            </p>
            <p class="card-text">
              Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
              diam orci, nec ornare metus semper sed. Integer volutpat
              ornare erat sit amet rutrum. Ut vulputate est non quam.
            </p>
            <a href="#!" class="btn btn-secondary btn-rounded">Read more</a>
          </div>
        </div>
    
      </div>
      <!-- Second column -->
    
      <!-- Third column -->
      <div class="col-lg-4 mb-6 mb-lg-0">
    
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://mdbootstrap.com/img/new/textures/small/55.jpg" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Metaverse 2.0</h5>
            <p class="text-muted">
              <small>Finished <u>10.11.2022</u> for
                <a href="" class="text-dark">Venom Tech</a></small>
            </p>
            <p class="card-text">
              Curabitur tristique, mi a mollis sagittis, metus felis mattis
              arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
              massa volutpat feugiat. Donec.
            </p>
            <a href="#!" class="btn btn-secondary btn-rounded">Read more</a>
          </div>
        </div>
    
      </div>
      <!-- Third column -->
    
    
      <!-- Fourth column -->
      <div class="col-lg-4 mb-6 mb-lg-0 mt-4">
    
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://mdbootstrap.com/img/new/textures/small/55.jpg" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Metaverse 2.0</h5>
            <p class="text-muted">
              <small>Finished <u>10.11.2022</u> for
                <a href="" class="text-dark">Venom Tech</a></small>
            </p>
            <p class="card-text">
              Curabitur tristique, mi a mollis sagittis, metus felis mattis
              arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
              massa volutpat feugiat. Donec.
            </p>
            <a href="#!" class="btn btn-secondary btn-rounded">Read more</a>
          </div>
        </div>
    
      </div>
      <!-- Fourth column -->
    
    
      <!-- Firth column -->
      <div class="col-lg-4 mb-6 mb-lg-0 mt-4">
    
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://mdbootstrap.com/img/new/textures/small/55.jpg" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Metaverse 2.0</h5>
            <p class="text-muted">
              <small>Finished <u>10.11.2022</u> for
                <a href="" class="text-dark">Venom Tech</a></small>
            </p>
            <p class="card-text">
              Curabitur tristique, mi a mollis sagittis, metus felis mattis
              arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
              massa volutpat feugiat. Donec.
            </p>
            <a href="#!" class="btn btn-secondary btn-rounded">Read more</a>
          </div>
        </div>
    
      </div>
      <!-- Firth column -->
    
    
      <!-- Sixth column -->
      <div class="col-lg-4 mb-6 mb-lg-0 mt-4">
    
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://mdbootstrap.com/img/new/textures/small/55.jpg" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Metaverse 2.0</h5>
            <p class="text-muted">
              <small>Finished <u>10.11.2022</u> for
                <a href="" class="text-dark">Venom Tech</a></small>
            </p>
            <p class="card-text">
              Curabitur tristique, mi a mollis sagittis, metus felis mattis
              arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
              massa volutpat feugiat. Donec.
            </p>
            <a href="#!" class="btn btn-secondary btn-rounded">Read more</a>
          </div>
        </div>
    
      </div>
      <!-- Sixth column -->
    
    </div>
    
  <!-- Brgy Officials -->
    
  <div class="container-sm p-3 mt-lg-5 clearfix">
      <!-- Contact form and google map -->
  <!-- First column -->
<div class="col-lg-12 mb-5 mb-lg-0">
 <div style="background: hsla(0, 0%, 100%, 0.55);
  backdrop-filter: blur(30px);
  z-index: 1;" class="card rounded-7 me-lg-n5">
    <div class="card-body p-lg-5 shadow-5">
      <form>
        <!-- Name input -->
        <div class="form-outline mb-4">
          <input type="text" id="form4Example1" class="form-control" />
          <label class="form-label" for="form4Example1">Name</label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="form4Example2" class="form-control" />
          <label class="form-label" for="form4Example2">Email address</label>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="form4Example3" rows="4"></textarea>
          <label class="form-label" for="form4Example3">Message</label>
        </div>

        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
          <label class="form-check-label" for="form4Example4">
            Send me a copy of this message
          </label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
      </form>
    </div>
  </div>

</div>
<!-- First column -->
 
<?php include 'includes/footer.php';?>
 
<?php include 'includes/scripts.php';?>