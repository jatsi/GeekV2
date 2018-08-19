(function($){
  $(function(){

   $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) {
    }
  )
    $('.parallax').parallax();
     $(document).ready(function() {
    Materialize.updateTextFields();
  });
     var app = angular.module('mainModule', []);

app.controller('mainController', function($scope, $http){ //o scope liga o js e o template
  $scope.nome = 'Valor Inicial';
  //$http.get().success();
  $scope.reset = function()
  {
    $scope.nome = '';
  }
});

  }); // end of document ready
})(jQuery); // end of jQuery name space