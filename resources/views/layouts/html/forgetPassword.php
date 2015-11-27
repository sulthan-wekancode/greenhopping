<div class="main-container">
<div class="container">
<div class="row">
<div class="col-sm-5 login-box">
<div class="panel panel-default">
<div class="panel-intro text-center">
<h2 class="logo-title">
 
<span class="logo-icon"><img src="public/assets/img/logo.jpg" style="max-height: 53px !important"></span> Green<span>Hopping </span> </h2>
</div>
<div class="panel-body">
<form role="form"  name="resetForm" role="form">
<div align="center">
<div ng-controller="resetCtrl" >
<div ng-if="data.show" ng-bind="data.msg"></div>
</div>
</div> 
<div class="form-group">
<label for="sender-email" class="control-label">Email : </label>
<div class="input-icon"> <i class="icon-user fa"></i>
<input id="sender-email" type="email" placeholder="Email" class="form-control email" name="email" ng-model="reset.email">
<span class="errorMessage" ng-show="resetForm.email.$error.required && !resetForm.email.$pristine" class="help-inline">Email is required.</span>
</div>
</div>
<div class="form-group">
<button class="btn btn-primary  btn-block" ng-click="doReset()" data-ng-disabled="resetForm.$invalid" >Reset</button>
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
