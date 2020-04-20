var app = angular.module('loginApp',['ngRoute']);

//--------------------- Configure Database connection settings and credentials here ------------------//
var db_config = {
  host     : 'localhost',
  user     : 'testuser',
  password : 'test',
  database : 'cps630'
};
var connection;

function handleDisconnect() {
  connection = mysql.createConnection(db_config);             // Recreate the connection, since
                                                              // the old one cannot be reused.
  connection.connect(function(err) {                          // The server is either down
      if(err) {                                               // or restarting (takes a while sometimes).
          console.log('error when connecting to db:', err);
          setTimeout(handleDisconnect, 2000);                 // We introduce a delay before attempting to reconnect,
      }                                                       // to avoid a hot loop, and to allow our node script to
  });                                                         // process asynchronous requests in the meantime.
                                                              // If you're also serving http, display a 503 error.
  connection.on('error', function(err) {
      console.log('db error', err);
      if(err.code === 'PROTOCOL_CONNECTION_LOST') {           // Connection to the MySQL server is usually
          handleDisconnect();                                 // lost due to either server restart, or a
      } else {                                                // connnection idle timeout (the wait_timeout
          throw err;                                          // server variable configures this)
      }
  });
}


app.config(function($routeProvider, $locationProvider) {
  $routeProvider
  .when('/login', {
    templateUrl : 'view/login.html',
    controller : 'LoginController'
})
.when('/register', {
  templateUrl : 'view/register.html',
  controller : 'RegisterController'
})
  .when('/', {
      templateUrl : 'view/home.html',
      controller : 'TravelAppDropdownController'
  })
  .when('/readmore', {
      templateUrl : 'view/readMore.html',
      controller : 'ReadMoreController'
  })
  .when('/aboutus', {
    templateUrl : 'view/aboutus.html',
    controller : 'AboutUsController'
  })
  .when('/contactus', {
    templateUrl : 'view/contactus.html',
    controller : 'ContactUsController'
  })
  .when('/shopping', {
      templateUrl : 'view/shopping.html',
      controller : 'ShoppingController'
  })
  .when('/admin', {
    templateUrl : 'view/admin.html',
    controller : 'AdminController'
  })
  .otherwise({
      redirectTo: '/login'
  });
});

app.run(run);

run.$inject = ['$rootScope', '$location'];
    function run($rootScope, $location) {
      $rootScope.session = window.localStorage.getItem("SessionId");
      $rootScope.userName = window.localStorage.getItem("SessionName");
      $rootScope.isLoggedIn = window.localStorage.getItem("isLoggedIn");
      $rootScope.isAdmin = window.localStorage.getItem("isAdmin");
    
      $rootScope.$on('$locationChangeStart', function (event, next, current) {
          // redirect to login page if not logged in and trying to access a restricted page
          var restrictedPage = $.inArray($location.path(), ['/login', '/register']) === -1;
          var restrictedPage2 = $.inArray($location.path(), ['/admin']) != -1;
          var loggedIn = $rootScope.isLoggedIn;
          var Admin = $rootScope.isAdmin;
          if (restrictedPage && !loggedIn) {
              $location.path('/login');
          }else if (restrictedPage2 && !Admin) {
            $location.path('/');
          }
      });
  }

/* Create factory to Disable Browser Back Button only after Logout */
app.factory("checkAuth", function($location,$rootScope){
  return {
      getuserInfo : function(){
    if($rootScope.isLoggedIn === undefined || $rootScope.isLoggedIn === null){
      $location.path('/');
    }
  }
  };
});

app.controller('LoginController', function($scope,$location,$rootScope,$sce){
  $rootScope.isLoggedIn = false;
  $rootScope.isAdmin =false;
  $scope.login = function(){		
      if ($scope.loginform) {
        var username = $scope.username;
        var password = $scope.password;
        if (username && password) {
              connection.query('SELECT * FROM `users` WHERE `username` = ? ', [username], function(error, results, fields) {
                  if (results.length > 0) {
                      if(password == results[0].password){
                          if(results[0].authorised == '1'){
                            alert('login successful');
                            $rootScope.isAdmin = results[0].admin;
                            $rootScope.isLoggedIn = true;
                            $scope.UserId = $scope.username;
                            $scope.session = $scope.username;
                            $scope.sessionName = 'admin';
                            window.localStorage.setItem("SessionId", $scope.session);
                            window.localStorage.setItem("SessionName", $scope.sessionName);
                            window.localStorage.setItem("isLoggedIn", $scope.isLoggedIn);
                            console.log(window.localStorage);
                            //userDetails.SessionId = $scope.session;
                            $location.path('/');
                          }else{
                            $rootScope.isLoggedIn = false;
                            window.localStorage.setItem("isLoggedIn", $rootScope.isLoggedIn);
                            $scope.warning = $sce.trustAsHtml('<i class="fa fa-exclamation-triangle"></i> account is not authorised');
                            console.log($scope.warning);
                          }
                      } else {
                        $rootScope.isLoggedIn = false;
                        window.localStorage.setItem("isLoggedIn", $rootScope.isLoggedIn);
                        $scope.warning = $sce.trustAsHtml('<i class="fa fa-exclamation-triangle"></i> check your email id and password');
                        console.log($scope.warning);
                      }
                  } else {
                    $rootScope.isLoggedIn = false;
                    window.localStorage.setItem("isLoggedIn", $rootScope.isLoggedIn);
                    $scope.warning = $sce.trustAsHtml('<i class="fa fa-exclamation-triangle"></i> check your email id and password');
                    console.log($scope.warning);
                  }			
              });
        } else {
          $rootScope.isLoggedIn = false;
          window.localStorage.setItem("isLoggedIn", $rootScope.isLoggedIn);
          $scope.warning = $sce.trustAsHtml('<i class="fa fa-exclamation-triangle"></i> please enter a username and password');
          console.log($scope.warning);
        }
      }
      
  }   
});

app.controller('RegisterController', function($scope,$location,$rootScope,$sce){
  $rootScope.isRegistered = false;
  $scope.register = function() {
    console.log('hello register');
    if ($scope.registerform.$valid){
      console.log('hello register valid');
      console.log($scope);
      if($scope.username !== null && $scope.fullname !== null && $scope.address !== null && $scope.telnumber !== null && $scope.isadmin !== null && $scope.email !== null && $scope.pass !== null) {
        console.log('coooool');
        alert('registration was successful!');
        $rootScope.isRegistered = true;
        $location.path('/login');
      }
    }
  }
  app.controller('AdminController', function($scope,$location,$rootScope,$sce){
    $scope.query = function() {
      var sql = $scope.query;
      console.log(sql);
      connection.query(sql, function(error, results, fields) {
          if(error) {
            $scope.warning = $sce.trustAsHtml('<i class="fa fa-exclamation-triangle"></i> incorrect query.');
            console.log($scope.warning);
              // res.redirect('/register.html');
          } else {
              // console.log(Buffer.from(metadata, 'base64').toString('ascii'));
              // console.log(Buffer.from(template, 'base64').toString('ascii'));
              //alert('User Successfully Registered, please login.');
              $scope.warning = $sce.trustAsHtml('<i class="fa fa-exclamation-triangle"></i> query submitted.');
              console.log($scope.warning);
          }			
          // res.end();
      });
  }

  $rootScope.isLoggedIn = false;
  $scope.login = function(){		
      if ($scope.loginform.$valid) {
        if($scope.email == 'admin@gmail.com' && $scope.pass == 'admin123')
        {
          alert('login successful');
          $rootScope.isLoggedIn = true;
          $scope.UserId = $scope.email;
          $scope.session = $scope.email;
          $scope.sessionName = 'admin';
          window.localStorage.setItem("SessionId", $scope.session);
          window.localStorage.setItem("SessionName", $scope.sessionName);
          window.localStorage.setItem("isLoggedIn", $scope.isLoggedIn);
          console.log(window.localStorage);
          //userDetails.SessionId = $scope.session;
          $location.path('/');

        }
        else{
          $rootScope.isLoggedIn = false;
          window.localStorage.setItem("isLoggedIn", $rootScope.isLoggedIn);
          $scope.loginMessage = $sce.trustAsHtml('<i class="fa fa-exclamation-triangle"></i> check your email id and password');
          console.log($scope.loginMessage);
        }
      }
      
  }   
});

app.factory('readMoreService', function() {
  var readMoreItem = null;

  var addReadMore = function(newItem) {
      readMoreItem = newItem
  };

  var getReadMore = function(){
    console.log(readMoreItem);
      return readMoreItem;
  };

  return {
    addReadMore: addReadMore,
    getReadMore: getReadMore
  };

});

app.controller('TravelAppDropdownController', function($scope, readMoreService, $rootScope, checkAuth, $location) {
  $rootScope.session = window.localStorage.getItem("SessionId");
  $rootScope.userName = window.localStorage.getItem("SessionName");
  $rootScope.isLoggedIn = window.localStorage.getItem("isLoggedIn");
  
  // Call checkAuth factory for cheking login details
  $scope.check = checkAuth.getuserInfo();
  
  console.log($scope.check);
  $scope.logout = function () {
    console.log('Logout!');
    window.localStorage.clear();
    $rootScope.isLoggedIn = false;
    $location.path("/login");
    console.log('Logout!');
  };

    $scope.popPlaces = ['Toronto', 'New York', 'Madrid', 'Mumbai', 'Singapore'];

    $scope.continents = {
      'Asia': {
        'Singapore': ['Singapore'],
        'India': ['Taj Mahal'],
      },
      'Africa': {
        'South Africa': ['South Africa'],
        'Egypt': ['Nile River']
      },
      'North America': {
        'Canada': ['Canada'],
        'USA': ['New York City']
      },
      'South America': {
        'Brazil': ['Brazil'],
        'Peru': ['Macchu Picchu']
      },
      'Oceania': {
        'Australia': ['Sydney Opera House']
      },
      'Europe': {
        'United Kingdom': ['United Kingdom'],
        'Spain': ['La Sagrada Familia']
      },
      'Antarctica': {
        'Antarctica': ['Paradise Bay']
      },

    }

    $scope.selectedItem;
    $scope.selectedLoc = function (item) {
        $scope.selectedItem = item;
        console.log($scope.selectedItem);
        if ($scope.selectedItem !== null) {
          readMoreService.addReadMore($scope.selectedItem);
        }
    }
  
  });

app.controller('ShoppingController', function($scope, $rootScope, checkAuth) {
  // $rootScope.session = window.localStorage.getItem("SessionId");
  // $rootScope.userName = window.localStorage.getItem("SessionName");
  // $rootScope.isLoggedIn = window.localStorage.getItem("isLoggedIn");
  
  // // Call checkAuth factory for cheking login details
  // $scope.check = checkAuth.getuserInfo();
  
  // console.log($scope.check);

  $scope.package = {
    'Toronto': {
      'start': '11/27/2020',
      'duration': '1 week',
      'airfare': 200,
      'tourid': 416647509,
      'total': 1000,
      'location': 'toronto'
    },
    'New York': {
      'start': '06/20/2020',
      'duration': '2 Weeks',
      'airfare': 350,
      'tourid': 893205234,
      'total': 1500,
      'location': 'newyork'
    }
  }

  $scope.selectedItem;
  $scope.selectedPkg = function (item) {
      $scope.selectedItem = item;
      console.log($scope.selectedItem);
  }
  
  $scope.update = function() {
    console.log($scope.shoppingform.travelers.$viewValue);
    $scope.totalPrice = 0;
    if ($scope.shoppingform.travelers !== undefined && $scope.selectedItem.location === 'newyork') {
        $scope.totalPrice = $scope.shoppingform.travelers.$viewValue * $scope.package['New York'].total;
    } else if ($scope.shoppingform.travelers !== undefined && $scope.selectedItem.location === 'toronto') {
      $scope.totalPrice = $scope.shoppingform.travelers.$viewValue * $scope.package['Toronto'].total;
    }
  }
});
app.controller('AboutUsController', function($scope, $rootScope, checkAuth) {
  // $rootScope.session = window.localStorage.getItem("SessionId");
  // $rootScope.userName = window.localStorage.getItem("SessionName");
  // $rootScope.isLoggedIn = window.localStorage.getItem("isLoggedIn");
  
  // // Call checkAuth factory for cheking login details
  // $scope.check = checkAuth.getuserInfo();
  
  // console.log($scope.check);

});
app.controller('ContactUsController', function($scope, $rootScope, checkAuth) {
  // $rootScope.session = window.localStorage.getItem("SessionId");
  // $rootScope.userName = window.localStorage.getItem("SessionName");
  // $rootScope.isLoggedIn = window.localStorage.getItem("isLoggedIn");
  
  // // Call checkAuth factory for cheking login details
  // $scope.check = checkAuth.getuserInfo();
  
  // console.log($scope.check);

});
app.controller('ReadMoreController', function($scope, readMoreService, $rootScope, checkAuth) {
  // $rootScope.session = window.localStorage.getItem("SessionId");
  // $rootScope.userName = window.localStorage.getItem("SessionName");
  // $rootScope.isLoggedIn = window.localStorage.getItem("isLoggedIn");
  
  // // Call checkAuth factory for cheking login details
  // $scope.check = checkAuth.getuserInfo();
  
  // console.log($scope.check);

  console.log("Hello");
  $scope.readMoreItem;
  $scope.readMoreItem = readMoreService.getReadMore();
  console.log($scope.readMoreItem);
});
