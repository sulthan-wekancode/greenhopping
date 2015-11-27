<div class="main-container">
<div class="container">
<div class="row">
<div class="col-sm-5 login-box">
<div class="panel panel-default">
<div class="panel-intro text-center">
<h2 class="logo-title">
 
<span class="logo-icon"><img src="public/assets/img/logo.jpg" style="max-height: 53px !important"></span> Green<span>Hopping </span> </h2>
</div>
<div class="panel-body"  role="form">
<form role="form" name="verifyForm">
<div align="center">
<div ng-controller="verifyCtrl" >
<div ng-if="data.show" ng-bind="data.msg"></div>
</div>
</div> 
<div class="form-group">

<div class="input-icon"> <i class="icon-user fa"></i>
<input id="password" type="password" placeholder="Enter New Password" class="form-control email" ng-minlength="5" ng-model="verify.password"  name="password">
<small class="errorMessage" data-ng-show="verifyForm.password.$dirty && verifyForm.password.$error.minlength"> Minimum 5 characters.</small>
<small class="errorMessage" data-ng-show="verifyForm.password.$dirty && verifyForm.password.$error.required"> Enter password again.</small>
<small class="errorMessage" data-ng-show="verifyForm.password.$dirty && verifyForm.password.$error.passwordNoMatch && !verifyForm.password.$error.required"> Password do not match.</small>

</div>
</div>
<div class="form-group">
<div class="input-icon"> <i class="icon-user fa"></i>
<input id="sender-email" type="password" placeholder="Retype New Password" class="form-control email" name="password2" ng-minlength="5" ng-model="verify.password2" password-match="verify.password" >
<small class="errorMessage" data-ng-show="verifyForm.password2.$dirty && verifyForm.password2.$error.minlength"> Minimum 5 characters.</small>
<small class="errorMessage" data-ng-show="verifyForm.password2.$dirty && verifyForm.password2.$error.required"> Enter password again.</small>
<small class="errorMessage" data-ng-show="verifyForm.password2.$dirty && verifyForm.password2.$error.passwordNoMatch && !verifyForm.password2.$error.required"> Password do not match.</small>

</div>
</div>
<div class="form-group">
<button class="btn btn-primary  btn-block" data-ng-disabled="verifyForm.$invalid" id='changePassword' >Change Password</button>

</div>
</form>
</div>
<div class="panel-footer">
<p class="text-center pull-right"> <a href="#/login"> Back to Login ? </a> </p>
<div style=" clear:both"></div>
</div>
</div>
<div class="login-box-btm text-center">
<p> Don't have an account? <br>

<a href="#/register"><strong>Sign Up !</strong> </a> </p>
</div>
</div>
</div>
</div>
</div>

