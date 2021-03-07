<?php

/* @var $this yii\web\View */

$this->title = 'FORM';
?>
    <div class="jumbotron">
        
        <div class="container">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-sm-8 col-8 border rounded main-section">
        <h3 class="text-center text-inverse">Form Validation</h3>
        <hr>
        <form class="container" id="needs-validation" novalidate>
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom01">First Name</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="First Name" required>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom02">Last Name</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Last Name" required>
              </div>  
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label class="text-inverse" for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                <div class="invalid-feedback">
                  Please provide a valid Email.
                </div>
              </div>  
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="inputpassword">Password</label>
                <input type="password" class="form-control" id="inputpassword" placeholder="password" required>
                <div class="invalid-feedback">
                  Please provide a valid password.
                </div>
              </div>  
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom03">City</label>
                <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>  
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="select-menu">Select any value</label>
                <select class="custom-select d-block form-control" id="image" required>
                  <option value="">Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <div class="invalid-feedback">
                  Please selected any option.
                </div>
              </div>  
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-12 text-center">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
          </div>  
        </form>
      </div>
    </div>  
</div>
</div>
