@extends('layouts.mainLayout')
@section('body')
<div class="main-container">
<div class="container">
<div class="row">
<div class="col-md-8 page-content">
<div class="inner-box category-content">
<h2 class="title-2"> <i class="icon-user-add"></i> Create your account, Its free </h2>
<div class="row">
<div class="col-sm-12">
{!! Form::open(array('url' => 'foo/bar', 'class' => 'form-horizontal')) !!}
<fieldset>
<div class="form-group required">
<label class="col-md-4 control-label">First Name <sup>*</sup></label>
<div class="col-md-6">
<input name="firstname" placeholder="First Name" class="form-control input-md" required="" type="text">
</div>
</div>
 
<div class="form-group required">
<label class="col-md-4 control-label">Last Name <sup>*</sup></label>
<div class="col-md-6">
<input name="lastname" placeholder="Last Name" class="form-control input-md" type="text">
</div>
</div>
 
<div class="form-group required">
<label class="col-md-4 control-label">Phone Number <sup>*</sup></label>
<div class="col-md-6">
<input name="phone" placeholder="Phone Number" class="form-control input-md" type="text">
<div class="checkbox">
<label>
<input type="checkbox" value="">
<small> Hide the phone number on the published ads.</small> </label>
</div>
</div>
</div>
 
 
<div class="form-group required">
<label for="inputEmail3" class="col-md-4 control-label">Email <sup>*</sup></label>
<div class="col-md-6">
<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
</div>
</div>
<div class="form-group required">
<label for="inputPassword3" class="col-md-4 control-label">Password </label>
<div class="col-md-6">
<input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
<p class="help-block">At least 5 characters  </p>
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-8">
<div class="termbox mb10">
<label class="checkbox-inline" for="checkboxes-1">
<input name="checkboxes" id="agree" value="1" type="checkbox">
I have read and agree to the <a href="terms-conditions.html">Terms & Conditions</a> </label>
</div>
<div style="clear:both"></div>
<button class="btn btn-primary" id="registerUser" disabled="">Register </button> 
</div>
</div>
</fieldset>
{!! Form::close() !!}
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
@stop