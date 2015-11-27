var app = angular.module('myApp', ['ngRoute', 'ngAnimate', 'toaster']);


app.config(['$routeProvider',
    function ($routeProvider) {
        $routeProvider.
                when('/login', {
                    title: 'Login',
                    templateUrl: 'resources/views/layouts/loginUser.php',
                    controller: 'authCtrl'
                })
                .when('/logout', {
                    title: 'Logout',
                    templateUrl: 'resources/views/layout/login.php',
                    controller: 'logoutCtrl'
                })
                .when('/reset', {
                    title: 'Reset Password',
                    templateUrl: 'resources/views/layouts/forgetPassword.php',
                    controller: 'authCtrl'
                })
                .when('/register', {
                    title: 'Register',
                    templateUrl: 'resources/views/layouts/registerUser.php',
                    controller: 'authCtrl'
                })
                .when('/registered', {
                    title: 'Registration Success',
                    templateUrl: 'resources/views/layouts/registerSuccess.php',
                    controller: 'authCtrl'
                })
                .when('/resetdone', {
                    title: 'Reset Done',
                    templateUrl: 'resources/views/layouts/resetRequested.php',
                    controller: 'authCtrl'
                })
                .when('/verify/:Token', {
                    title: 'VerifyPassword',
                    templateUrl: 'resources/views/layouts/verifyPassword.php',
                    controller: 'ShowUserCtrl'
                  })
                
                .when('/profile', {
                    title: 'User Profile',
                    templateUrl: 'resources/views/layouts/userProfile.php',
                    controller: 'authCtrl'
                })
                .when('/dashboard', {
                    title: 'Dashboards',
                    templateUrl: 'resources/views/layouts/dashBoard.php',
                    controller: 'authCtrl'
                })
                .when('/home', {
                    title: 'Home',
                    templateUrl: 'resources/views/layouts/home.php',
                    controller: 'authCtrl'
                })
                .when('/contact', {
                    title: 'Contact',
                    templateUrl: 'resources/views/layout/contact.php',
                    controller: 'authCtrl'
                })
                .when('/album', {
                    title: 'Contact',
                    templateUrl: 'resources/views/layout/album.php',
                    controller: 'authCtrl'
                })
                .when('/favorite', {
                    title: 'Favorite',
                    templateUrl: 'resources/views/layout/favorite.php',
                    controller: 'authCtrl'
                })

                .when('/travel', {
                    title: 'Travel',
                    templateUrl: 'resources/views/layout/travel.php',
                    controller: 'authCtrl'
                })
                .when('/subscription', {
                    title: 'Subscription',
                    templateUrl: 'resources/views/layout/subscription.php',
                    controller: 'authCtrl'
                })

                .when('/invite_friends', {
                    title: 'InviteFriends',
                    templateUrl: 'resources/views/layout/invite_friends.php',
                    controller: 'authCtrl'
                })

                .when('/liked_you', {
                    title: 'LikedYou',
                    templateUrl: 'resources/views/layout/liked_you.php',
                    controller: 'authCtrl'
                })

                .when('/favourites', {
                    title: 'Favourites',
                    templateUrl: 'resources/views/layout/favourites.php',
                    controller: 'authCtrl'
                })

                .when('/coins', {
                    title: 'Subscription',
                    templateUrl: 'resources/views/layout/coins.php',
                    controller: 'authCtrl'
                })

                
                .when('/verifyfb', {
                    title: 'verfiyfb',
                    templateUrl: 'resources/views/layout/verifyfb.php',
                    controller: 'authCtrl'
                })
                .when('/registration', {
                    title: 'verfiy',
                    templateUrl: 'resources/views/layout/registration.php',
                    controller: 'authCtrl'
                })
                .when('/showprofile/:UserID', {
                    title: 'showprofile',
                    templateUrl: 'resources/views/layout/showprofile.php',
                    controller: 'ShowUserCtrl'
                })
                .when('/', {
                    title: 'Login',
                    templateUrl: 'resources/views/layouts/home.php',
                    controller: 'authCtrl',
                    role: '0'
                })
                .when('/invalidtoken', {
                    title: 'Login',
                    templateUrl: 'resources/views/layout/invalidtoken.php',
                    controller: 'authCtrl',
                    role: '0'
                })

                //$locationProvider.html5Mode(true);
    }])


        .run(function ($rootScope, $location, Data, $http) {
            $rootScope.$on("$routeChangeStart", function (event, next, current) {
                


                    
                    
                     var nextUrl = next.$$route.originalPath;
                    
                    if (nextUrl == '/signin' || nextUrl == '/login' || nextUrl == '/verify' || nextUrl == '/register' || nextUrl == '/registered' || nextUrl == '/reset' || nextUrl == '/resetdone' || nextUrl == '/registersuccess')
                    {
                        
                    }
                    else if ( nextUrl=='/verify/:Token' )
                    {

                    }
                     else
                    {	
                        if (localStorage.getItem("ghUserId") === null) 
                        {
                            $location.path('/');
                        }
                        if(nextUrl=='/logout')
                        {
                            localStorage.removeItem('ghUserId');
                            $location.path('/');
                        }
                     
                    } 

                    
                    

                    
                    
                    
                
            });
        });