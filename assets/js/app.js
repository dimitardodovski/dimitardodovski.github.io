var app = angular.module('myApp', ["ngRoute"]);
app.controller('myCtrl', function($scope,$http) {

//controller
/*******************************/
/*			Object			   */
/*******************************/

$scope.firstName="Dimitar Dodovski";
$scope.error=false; /*ova da se objasni*/

/*******************************/
/*			JSON			   */
/*******************************/

$scope.artist=[];
$http.get("model/select.php?table_name=artist")
.then(function(response) {
	$scope.artist=response.data;
});

$scope.ms_customer=[];
$http.get("model/select.php?table_name=ms_customer")
.then(function(response) {
	$scope.ms_customer=response.data;
});


$scope.ms_employees=[];
$http.get("model/select.php?table_name=ms_employees")
.then(function(response) {
	$scope.ms_employees=response.data;
});

$scope.ms_sale=[];
$http.get("model/select.php?table_name=ms_sale")
.then(function(response) {
	$scope.ms_sale=response.data;
});


$scope.musical_item=[];
$http.get("model/select.php?table_name=musical_item")
.then(function(response) {
	$scope.musical_item=response.data;
});


$scope.contract=[];
$http.get("model/select.php?table_name=contract")
.then(function(response) {
	$scope.contract=response.data;
});


$scope.record_label=[];
$http.get("model/select.php?table_name=record_label")
.then(function(response) {
	$scope.record_label=response.data;
});

$scope.music_shop=[];
$http.get("model/select.php?table_name=music_shop")
.then(function(response) {
	$scope.music_shop=response.data;
});

/*addArtist(artist_name)*/

/*******************************/
/*			Functions		   */
/*******************************/

function postData(fileName,objData){

	$http({
    method : "POST",
      url : "model/" + fileName,
      data: objData,
      "action":"insert"
  }).then(function mySuccess(response) {
    //$scope.myWelcome = response.data;
  }, function myError(response) {
    //$scope.myWelcome = response.statusText;
  });

}

$scope.addArtist=function(artist_name) {
	/*console.log(artist_name);*/
	var objArtist=[];
	objArtist.push({
		"artist_name":artist_name,
		"action":"insert"
	});

	console.log(objArtist);

	postData("model.artist.php",objArtist)

}

$scope.addCustomer=function(customer_name,customer_address,music_shop_id) {
	/*console.log(artist_name);*/
	var objCustomer=[];
	objCustomer.push({
		"customer_name":customer_name,
		"customer_address":customer_address,
		"music_shop_id":music_shop_id,
		"action":"insert"
	});

	console.log(objCustomer);

	postData("model.ms_customer.php",objCustomer)

}

$scope.addEmployee=function(employee_name,employee_plata,music_shop_id) {
	/*console.log(artist_name); */
	var objEmployee=[];
	objEmployee.push({
		"employee_name":employee_name,
		"employee_plata":employee_plata,
		"music_shop_id":music_shop_id,
		"action":"insert"
	});

	console.log(objEmployee);

	postData("model.ms_employees.php",objEmployee)

}

$scope.addSale=function(customer_id,item_id,sale_date,sale_price) {
	/*console.log(artist_name); */
	var objSale=[];
	objSale.push({
		"customer_id":customer_id,
		"item_id":item_id,
		"sale_date":sale_date,
		"sale_price":sale_price,
		"action":"insert"
	});

	console.log(objSale);

	postData("model.ms_sale.php",objSale)

}

$scope.addItem=function(item_name,item_genre,item_style,item_format,item_release_date) {
	/*console.log(artist_name); */
	var objItem=[];
	objItem.push({
		"item_name":item_name,
		"item_genre":item_genre,
		"item_style":item_style,
		"item_format":item_format,
		"item_release_date":item_release_date,
		"action":"insert"
	});

	console.log(objItem);

	postData("model.musical_item.php",objItem)

}

$scope.addContract=function(label_id,item_id,artist_id) {
	/*console.log(artist_name); */
	var objContract=[];
	objContract.push({
		"label_id":label_id,
		"item_id":item_id,
		"artist_id":artist_id,
		"action":"insert"
	});

	console.log(objContract);

	postData("model.contract.php",objContract)

}

$scope.addLabel=function(label_name,label_country) {
	/* console.log(artist_name); */
	var objLabel=[];
	objLabel.push({
		"label_name":label_name,
		"label_country":label_country,		
		"action":"insert"
	});

	console.log(objLabel);

	postData("model.record_label.php",objLabel)

}

$scope.addShop=function(music_shop_name,music_shop_address,music_shop_email) {
	/* console.log(artist_name); */
	var objShop=[];
	objShop.push({
		"music_shop_name":music_shop_name,
		"music_shop_address":music_shop_address,
		"music_shop_email":music_shop_email,		
		"action":"insert"
	});

	console.log(objShop);

	postData("model.music_shop.php",objShop)

}


$scope.deleteRow=function(table_name,pk_value){
        var objDelete=[];
        objDelete.push({
            "table_name":table_name,
            "pk_value":pk_value,
            "action":"delete"
        });
        console.log(objDelete);
        postData("model."+table_name+".php",objDelete);
        window.location.reload();

// funkcija za auto refresh windows.reload();
    }










});
