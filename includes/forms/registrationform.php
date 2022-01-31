<form method="POST" action="queries/sqlcode.php">
  <div class="row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">User Name</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="User Name">
    </div>
    <div class="form-group col-md-6 mt-2" >
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email(Optional)</label>
    <input type="text" name="username" class="form-control" id="inputAddress" placeholder="User Email">
  </div>
  <div class="form-group mt-2">
    <label for="inputAddress2">Facebook Profile Link(Optional)</label>
    <input type="text" name="school" class="form-control" id="inputAddress2" placeholder="Your School Name">
  </div>
  <div class="row mt-2">
    <div class="form-group col-md-6">
      <label for="inputCity">Phone Number(Optional)</label>
      <input type="text" name="phone" class="form-control" id="inputCity" placeholder="Phone Number">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Blood Group</label>
      <select id="inputState" class="form-control" name="grade">
      <option>_Select_</option>
      <option>O+</option>
        <option>O-</option>
      </select>
    </div>

  </div>
  <div class="form-group">
    <div class="form-check  mt-2 mb-2">
      <input class="form-check-input" name="privacy" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Agree to <a href="">Privacy Policy.</a>
      </label>
    </div>
  </div>
  <div class="row">
      <div class="form-group">
      <button type="submit" name="register" class="btn btn-danger">Sign Up</button>
  <button type="reset" class="btn btn-warning">Clear</button>
      </div>
  </div>


  <?php 
        if (isset($_SESSION['login_error_msg'])) {
            ?>
         <div class="alert alert-danger" role="alert"><?php echo $_SESSION['privacy']; ?></div>
        
        <?php
          unset($_SESSION['login_error_msg']);
         }

         ?>


</form>