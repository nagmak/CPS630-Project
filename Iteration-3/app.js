var app = angular.module('travelApp', ['ngRoute']);

app.config(function($routeProvider) {
  $routeProvider
  .when('/', {
      templateUrl : 'home.html',
      controller : 'TravelAppDropdownController'
  })
  .when('/readmore', {
      templateUrl : 'readMore.html',
      controller : 'ReadMoreController'
  })
  .when('/aboutus', {
    templateUrl : 'aboutus.html',
    controller : 'AboutUsController'
  })
  .when('/contactus', {
    templateUrl : 'contactus.html',
    controller : 'ContactUsController'
  })
  .when('/shopping', {
      templateUrl : 'shopping.html',
      controller : 'ShoppingController'
  })
  .otherwise({
      redirectTo: '/'
  });
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

app.controller('TravelAppDropdownController', function($scope, readMoreService) {
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

app.controller('ShoppingController', function($scope) {
});
app.controller('AboutUsController', function($scope) {
});
app.controller('ContactUsController', function($scope) {
});
app.controller('ReadMoreController', function($scope, readMoreService) {
  console.log("Hello");
  $scope.readMoreItem;
  $scope.readMoreItem = readMoreService.getReadMore();
  console.log($scope.readMoreItem);
});
