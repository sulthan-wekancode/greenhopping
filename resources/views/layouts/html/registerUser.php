<div class="main-container">
<div class="container">
<div class="row">
<div class="col-md-8 page-content">
<div class="inner-box category-content">
<h2 class="title-2"> <i class="icon-user-add"></i> Create your account, Its free </h2>
<div class="row">
<div class="col-sm-12">
<form name="signupForm" class="form-horizontal" role="form">
<fieldset>
<div align="center">
<div ng-controller="regCtrl" >
<div ng-if="data.show" ng-bind="data.msg"></div>
</div>
</div> 
<div class="form-group required">
<label class="col-md-4 control-label">User Name <sup>*</sup></label>
<div class="col-md-6">
<input name="username" placeholder="User Name" class="form-control input-md" required="" type="text" ng-model="signup.username">
<span class="errorMessage" ng-show="signupForm.username.$error.required && !signupForm.username.$pristine" class="help-inline">First Name is required.</span>
</div>
</div>
 
 

<div class="form-group required">
<label for="inputEmail3" class="col-md-4 control-label">Email <sup>*</sup></label>
<div class="col-md-6">
<input  name="email" type="email" class="form-control"  placeholder="Email" required="required"  ng-model="signup.email">
<span class="errorMessage" ng-show="signupForm.email.$error.email && !signupForm.email.$pristine" class="help-inline">Email is not valid</span> 
<span class="errorMessage" ng-show="signupForm.email.$error.required && !signupForm.email.$pristine" class="help-inline">Email is required.</span>
</div>
</div>
<div class="form-group required">
<label for="inputPassword3" class="col-md-4 control-label">Password </label>
<div class="col-md-6">
<input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" ng-minlength="5" ng-model="signup.password">
<small class="errorMessage" data-ng-show="signupForm.password.$dirty && signupForm.password.$error.minlength"> Minimum 5 characters.</small>

</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-8">
<div class="termbox mb10">
<label class="checkbox-inline" for="checkboxes-1">
<input name="checkboxes" id="checkboxes-1" value="1" type="checkbox">
I have read and agree to the <a href="terms-conditions.html">Terms & Conditions</a> </label>
</div>
<div style="clear:both"></div>
<button class="btn btn-primary" ng-click="doRegister()" data-ng-disabled="signupForm.$invalid">Sign up</button>
 </div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
 
<div class="col-md-4 reg-sidebar">
<div class="reg-sidebar-inner text-center">
<div class="promo-text-box"> <i class=" icon-picture fa fa-4x icon-color-1"></i>
<h3><strong>Post a Free Classified</strong></h3>
<p> Post your free online classified ads with us. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
</div>
<div class="promo-text-box"> <i class=" icon-pencil-circled fa fa-4x icon-color-2"></i>
<h3><strong>Create and Manage Items</strong></h3>
<p> Nam sit amet dui vel orci venenatis ullamcorper eget in lacus.
Praesent tristique elit pharetra magna efficitur laoreet.</p>
</div>
<div class="promo-text-box"> <i class="  icon-heart-2 fa fa-4x icon-color-3"></i>
<h3><strong>Create your Favorite ads list.</strong></h3>
<p> PostNullam quis orci ut ipsum mollis malesuada varius eget metus.
Nulla aliquet dui sed quam iaculis, ut finibus massa tincidunt.</p>
</div>
</div>
</div>
</div>
 
</div>
 
</div>


<script>
 $( document ).ready(function() {
$("#agree").click(function() {
    var checked_status = this.checked;
    if (checked_status == true) {
       $("#registerUser").removeAttr("disabled");
    } else {
       $("#registerUser").attr("disabled", "disabled");
    }
});
});
</script>