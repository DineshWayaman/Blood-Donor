<form method="POST" action="config/sqlcode.php">
  <div class="row">
    <div class="form-group col-md-6 mt-2">
      <label for="inputEmail4">User Name</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="User Name" required>
    </div>
    <div class="form-group col-md-6 mt-2" >
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" required>
    </div>
  </div>
  <div class="form-group mt-2">
    <label for="inputAddress">City</label>
    <input type="text" name="town" class="form-control" id="inputAddress" placeholder="User Tows">
    
  </div>
  <div class="form-group mt-2">
    <label for="inputAddress">Birth Day</label>
    <input type="date" max='2000-13-13' name="bday" class="form-control" id="inputAddress" placeholder="User Email">
  </div>
  <div class="form-group mt-2">
    <label for="inputAddress2">Your Address</label>
    <textarea type="text" name="address" class="form-control" id="inputAddress2" placeholder="Your address"></textarea>
  </div>
  <div class="form-group mt-2">
    <label for="inputAddress">Email(Optional)</label>
    <input type="email" name="email" class="form-control" id="inputAddress" placeholder="User Email">
  </div>
  <div class="form-group mt-2">
    <label for="inputAddress2">Facebook Profile Link(Optional)</label>
    <input type="text" name="facebook" class="form-control" id="inputAddress2" placeholder="Facebook Profile">
  </div>
  <div class="row mt-2">
    <div class="form-group col-md-6">
      <label for="inputCity">Phone Number(Optional)</label>
      <input type="text" name="phone" class="form-control" id="inputCity" placeholder="Phone Number">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Blood Group</label>
      <select id="inputState" class="form-control" name="group" required>
      <option value="not">_Select_</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
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
      <button type="submit" name="userregister" class="btn btn-danger">Sign Up</button>
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