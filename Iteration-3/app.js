var app = angular.module('loginApp',['ngRoute']);

app.config(function($routeProvider, $locationProvider) {
  $routeProvider
  .when('/login', {
    templateUrl : 'view/login.html',
    controller : 'LoginController'
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
    
      $rootScope.$on('$locationChangeStart', function (event, next, current) {
          // redirect to login page if not logged in and trying to access a restricted page
          var restrictedPage = $.inArray($location.path(), ['/login']) === -1;
          var loggedIn = $rootScope.isLoggedIn;
          if (restrictedPage && !loggedIn) {
              $location.path('/login');
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
