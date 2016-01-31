app.controller("mainCtrl",["$scope","$window","$http","$interval",function($scope,$window,$http,$interval){
	$scope.holaMundo='Hola Mundo';

	// gallery header
	$scope.galleryThumb=[
		{image:"uploads/gallery/album01/thumb/01.jpg",text:"img 01"},
		{image:"uploads/gallery/album01/thumb/02.jpg",text:"img 02"},
		{image:"uploads/gallery/album01/thumb/03.jpg",text:"img 03"},
		{image:"uploads/gallery/album01/thumb/04.jpg",text:"img 04"},
		{image:"uploads/gallery/album01/thumb/05.jpg",text:"img 05"},
		{image:"uploads/gallery/album01/thumb/06.jpg",text:"img 06"},
		{image:"uploads/gallery/album01/thumb/07.jpg",text:"img 07"},
		{image:"uploads/gallery/album01/thumb/08.jpg",text:"img 08"},
		{image:"uploads/gallery/album01/thumb/09.jpg",text:"img 09"}
	];

	// categories grid
	$scope.categoryGrid=[
			{category:1,categoryTitle:"Apps",feature:[
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/technics/1/",title:"Lorem Ipsum 1",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/technics/2/",title:"Loren Ipsum 2",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/technics/3/",title:"Loren Ipsum 3",author:"author"}			
			]},
			{category:2,categoryTitle:"Bienestar",feature:[
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/people/1/",title:"Lorem Ipsum 1",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/people/2/",title:"Loren Ipsum 2",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/people/3/",title:"Loren Ipsum 3",author:"author"}	
			]},
			{category:3,categoryTitle:"Cine",feature:[
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/city/1/",title:"Lorem Ipsum 1",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/city/2/",title:"Loren Ipsum 2",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/city/3/",title:"Loren Ipsum 3",author:"author"}			
			]},
			{category:4,categoryTitle:"Cursos Online",feature:[
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/business/1/",title:"Lorem Ipsum 1",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/business/2/",title:"Loren Ipsum 2",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/business/3/",title:"Loren Ipsum 3",author:"author"}			
			]},
			{category:5,categoryTitle:"Deportes",feature:[
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/sports/4/",title:"Lorem Ipsum 1",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/sports/5/",title:"Loren Ipsum 2",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/sports/6/",title:"Loren Ipsum 3",author:"author"}			
			]},
			{category:6,categoryTitle:"Entre Amigos",feature:[
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/people/4/",title:"Lorem Ipsum 1",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/people/5/",title:"Loren Ipsum 2",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/people/6/",title:"Loren Ipsum 3",author:"author"}			
			]},
			{category:7,categoryTitle:"JP Informa",feature:[
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/transport/1/",title:"Lorem Ipsum 1",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/transport/2/",title:"Loren Ipsum 2",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/transport/3/",title:"Loren Ipsum 3",author:"author"}			
			]},
			{category:8,categoryTitle:"JP Novedades",feature:[
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/technics/4/",title:"Lorem Ipsum 1",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/technics/5/",title:"Loren Ipsum 2",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/technics/6/",title:"Loren Ipsum 3",author:"author"}			
			]},
			{category:9,categoryTitle:"JP Tutoriales",feature:[
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/business/4/",title:"Lorem Ipsum 1",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/business/5/",title:"Loren Ipsum 2",author:"author"},
				{articleUrl:"#", thumb:"http://lorempixel.com/400/300/business/6/",title:"Loren Ipsum 3",author:"author"}			
			]}
		];
	

	//metodo que randomiza el cambio de artículo en cada categoria...
	var firstTimeRCS=true;
	var categoriesIdsArray=[];
	var categoriesIdsArrayMutable=[];

	var randomCategorySlide=function(){
		
		if (firstTimeRCS){
			categoriesIdsArray.length=0;
			for (i=0;i<$scope.categoryGrid.length;i++){/*IMPORTANTE tenes que el array de donde obtenes las categorias antes de poner en produccion y tiene que ser el que provenga del json del api*/
				categoriesIdsArray.push("c"+$scope.categoryGrid[i].category);
				categoriesIdsArrayMutable.push("c"+$scope.categoryGrid[i].category);
			}
			firstTimeRCS=false;
			randomCategorySlide();
		}else{
			if (categoriesIdsArrayMutable.length==1){
				$("#"+categoriesIdsArrayMutable[0]).carousel('next');
				categoriesIdsArrayMutable.length=0;
				for(i=0;i<categoriesIdsArray.length;i++){
					categoriesIdsArrayMutable.push(categoriesIdsArray[i]);
				}
			}else{
				var turno=Math.floor(Math.random() * categoriesIdsArrayMutable.length);
				$("#"+categoriesIdsArrayMutable[turno]).carousel('next');
				categoriesIdsArrayMutable.splice(turno,1);
				console.log(categoriesIdsArrayMutable, categoriesIdsArrayMutable.length);
				console.log(categoriesIdsArray);
			}

		}

	}

	var promise= $interval(randomCategorySlide,1500);
}]);

