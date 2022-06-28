/// <reference path="angular.min.js"/>

var myApp = angular
				.module("myModule", [])
				.controller("myController", function ($scope)
				{
					var pic = {
					 photo: "images/ads/free-surgery-cost-estimation-quote-hospitals4.png",
					 url: "https://www.myhospitalnow.com/get-started",
					 photo1: "images/ads/free-surgery-cost-estimation-quote-hospitals4.png",
					 url1: "https://www.myhospitalnow.com/get-started",
					 photo2: "images/ads/free-surgery-cost-estimation-quote-hospitals2.png",
					 url2: "https://www.myhospitalnow.com/get-started",
					 photo3: "images/ads/docker-training.png",
					 url3: "https://www.myhospitalnow.com/get-started",
					 photo4: "images/ads/free-surgery-cost-estimation-quote-hospitals3.png",
					 url4: "https://www.myhospitalnow.com/get-started",
					  photo5: "images/ads/free-surgery-cost-estimation-quote-hospitals5.png",
					 url5: "https://www.myhospitalnow.com/get-started",
					};
					$scope.pic= pic;
				});
				