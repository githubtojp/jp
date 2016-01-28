var app=angular.module("jpApp",['ngSanitize','ngAnimate','ngTouch','ui.bootstrap']).config(function($interpolateProvider){
    	$interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});

