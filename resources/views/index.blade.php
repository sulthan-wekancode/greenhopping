<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Green Hopping</title>
        <link rel="shotcut icon" type="favicon.ico" href="public/images/favicon.ico" />
        <link rel="icon" type="favicon.ico" href="public/images/favicon.ico" />
        <script src="{{ asset('/').('public/assets/js/jquery-1.9.1.min.js')}}"></script>
    </head><span id="changePassword"></span>
    <body ng-cloak="">
        <div data-ng-view="" id="ng-view" class="slide-animation"></div>
    </body>

<script type="text/javascript">
    


    $( document ).ready(function() 
{
$( "#changePassword" ).click(function() 
{
alert('aa');
var password = $("#password").val();

    

var value = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
console.log(value);

$.ajax({
  method: "POST",
  url: "changePassword",
  data: { }
})
  .done(function( msg ) {
    alert('a');
  });


  });

});


</script>
    <script src="{{ asset('/').('public/app/app/custom.js')}}"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <script src="{{ asset('/').('public/app/js/angular.min.js')}}"></script>
    <script src="{{ asset('/').('public/app/js/angular-cookies.min.js')}}"></script>
    <script src="{{ asset('/').('public/app/js/angular-route.min.js')}}"></script>
    <script src="{{ asset('/').('public/app/js/angular-animate.min.js')}}"></script>
    <script src="{{ asset('/').('public/app/js/toaster.js')}}"></script>
    <script src="{{ asset('/').('public/app/app/app.js')}}"></script>
    <script src="{{ asset('/').('public/app/app/data.js')}}"></script>
    <script src="{{ asset('/').('public/app/app/directives.js')}}"></script>
    <script src="{{ asset('/').('public/app/app/authCtrl.js')}}"></script>
    <script src="{{ asset('/').('public/app/js/toaster.js')}}"></script>


</html>