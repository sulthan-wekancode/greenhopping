app.controller('alertCtrl', function ($scope) {});
app.controller('signCtrl', function ($scope) {});
app.controller('alertCtrlForget', function ($scope) {});
app.controller('alertCtrlVerify', function ($scope) {});
app.controller('regCtrl', function ($scope) {});
app.controller('resetCtrl', function ($scope) {});
app.controller('contactCtrl', function ($scope) {});
app.controller('verifyCtrl', function ($scope) {});

//bizarrechat_id

app.controller('ShowUserCtrl', function($scope, $routeParams) {
$scope.token = $routeParams.Token;
//assigner();
});



app.controller('authCtrl', function ($route, $scope, $rootScope, $routeParams, $location, $http, Data) {
    $scope.data = {show: false};
    $scope.doRegister = {firstname: '', email: '', password: ''};
     $scope.doRegister = function ()
    {
        username = $scope.signup.username;
        
        email = $scope.signup.email;
        password = $scope.signup.password;
        $scope.data.show = false;
        $scope.data.show = true
          $http.post('registerUser', 
          {
              username : username,
              email : email,
              password : password

              
         }
        ) .then(function (results)
                {
                    if(results.data.success==1)
                    {
                        
                        $location.path('registered');   
                    }
                    else
                    {
                        var err = results.data.error.email;
                        $scope.data.msg = err;
                    }                    

                })
                 .catch(function (response)
                {
                    console.log(response.data.errors.email);
                    var email = response.data.errors.email;
                    console.log('outputing');
                    $scope.data.msg = 'Error : Email ' + email;

                });

    };




$scope.verifyPass = {password: ''};
     $scope.verifyPass = function ()
    {
        console.log("clicked");
        password = $scope.verify.password;
        $scope.data.show = false;
        $scope.data.show = true
          $http.post('verifyPassword', 
          {
              
              password : password,
              
         }
        ) .then(function (results)
                {
                    if(results.data.success==1)
                    {
                        $location.path('resetdone');   
                    }
                    else
                    {
                        $scope.data.msg = 'Email not found';
                    }                    

                })
                 .catch(function (response)
                {
                    console.log(response.data.errors.email);
                    var email = response.data.errors.email;
                    console.log('outputing');
                    $scope.data.msg = 'Error : Email ' + email;

                });

    };
    $scope.doLogin = function ()
    {
        email = $scope.login.email;
        password = $scope.login.password;
        $scope.data.show = false; //making it false
        $http.post('loginUser', {email: email, password: password}).then(function (results)
        {
             $scope.data.show = true;
            if(results.data.success==1)
            {
                localStorage.setItem("ghUserId", results.data.userData.id);
                console.log(results.data.userData.username);
                var name = results.data.userData.username;
                localStorage.setItem("ghUserName", name);

                $location.path('dashboard');   
            }
            else
            {
                $scope.data.msg = 'Invalid Username or Password';
            }
           
            
        });
    };


    $scope.doReset = {email: ''};
     $scope.doReset = function ()
    {

        email = $scope.reset.email;
        $scope.data.show = false;
        $scope.data.show = true
          $http.post('resetPassword', 
          {
              
              email : email,
              
         }
        ) .then(function (results)
                {
                    if(results.data.success==1)
                    {
                        $location.path('resetdone');   
                    }
                    else
                    {
                        $scope.data.msg = 'Email not found';
                    }                    

                })
                 .catch(function (response)
                {
                    console.log(response.data.errors.email);
                    var email = response.data.errors.email;
                    console.log('outputing');
                    $scope.data.msg = 'Error : Email ' + email;

                });

    };

    
    



});