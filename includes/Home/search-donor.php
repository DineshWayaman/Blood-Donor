<?php 
        if (isset($_SESSION['bloodme_error_msg'])) {
            ?>
         <div class="alert alert-danger" role="alert"><?php echo $_SESSION['bloodme_error_msg']; ?></div>
        
        <?php
          unset($_SESSION['bloodme_error_msg']);
         }

         ?>


<div class="container shadow mt-4">
        <div class="search-form  mb-4">
            <form action="finddonor.php" method="POST" class="m-3">
            <div class="row">

            <div class="col-md-4 search-m">
            <input type="text" name="city" class="form-control" id="inputCity" placeholder="Enter City" required>
            </div>

            <div class="form-group col-md-4 search-m">
            <select class="form-select" name="bgroup" aria-label="Default select example" required>
            <option value="no-blood">Select Blood Group</option>
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

             <div class="form-group col-md-4 search-m">
                <button type="text" name="searchDonor" class="form-control btn btn-danger" id="inputCity" >Search Donor</button>
             </div>
        </div>
            </form>
        </div>

    </div>
