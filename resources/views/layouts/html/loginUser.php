<div class="main-container">
<div class="container">
<div class="row">
<div class="col-sm-5 login-box">
<div class="panel panel-default">
<div class="panel-intro text-center">
<h2 class="logo-title">
 
<span class="logo-icon"><img src="public/assets/img/logo.jpg" style="max-height: 53px !important"></span> Green<span>Hopping </span> </h2>
</div>
<div class="panel-body" name="loginForm" role="form">
<form role="form">
<div align="center">
<div ng-controller="regCtrl" >
<div ng-if="data.show" ng-bind="data.msg"></div>
</div>
</div> 
<div class="form-group">
<label for="sender-email" class="control-label">Email : </label>
<div class="input-icon"> <i class="icon-user fa"></i>
<input id="sender-email" type="text" placeholder="Username" class="form-control email" name="email" ng-model="login.email">

</div>
</div>
<div class="form-group">
<label for="user-pass" class="control-label">Password :</label>
<div class="input-icon"> <i class="icon-lock fa"></i>
<input type="password" name="password" placeholder="Password" class="form-control" placeholder="Password" id="user-pass" ng-model="login.password">
</div>
</div>
<div class="form-group">
<button class="btn btn-primary  btn-block" ng-click="doLogin()" data-ng-disabled="loginForm.$invalid" >Submit</button>
</div>
</form>
</div>
<div class="panel-footer">
<div class="checkbox pull-left">
<label> <input type="checkbox" value="1" name="remember" id="remember"> Keep me logged in</label>
</div>
<p class="text-center pull-right"> <a href="#/reset"> Lost your password? </a> </p>
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
