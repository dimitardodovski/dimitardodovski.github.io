app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl : "view/main.html",
	controller:"myCtrl"
  })
  .when("/about", {
    templateUrl : "view/about.html",
	controller:"myCtrl"
  })
  .when("/contact", {
    templateUrl : "view/contact.html",
	controller:"myCtrl"
  })
  .when("/artist", {
    templateUrl : "view/artist.html",
	controller:"myCtrl"
  })
  .when("/ms_customer", {
    templateUrl : "view/ms_customer.html",
  controller:"myCtrl"
  })
  .when("/ms_employees", {
    templateUrl : "view/ms_employees.html",
  controller:"myCtrl"
  })
   .when("/ms_sale", {
    templateUrl : "view/ms_sale.html",
  controller:"myCtrl"
  })

  .when("/musical_item", {
    templateUrl : "view/musical_item.html",
  controller:"myCtrl"
  })

  .when("/contract", {
    templateUrl : "view/contract.html",
  controller:"myCtrl"
  })

   .when("/record_label", {
    templateUrl : "view/record_label.html",
  controller:"myCtrl"
  })

   .when("/music_shop", {
    templateUrl : "view/music_shop.html",
  controller:"myCtrl"
  })
    
  .when("/details_artist", {
    templateUrl : "view/details_artist.html",
  controller:"myCtrl"
  })

  .when("/details_ms_customer", {
    templateUrl : "view/details_ms_customer.html",
  controller:"myCtrl"
  })

  .when("/details_ms_employees", {
    templateUrl : "view/details_ms_employees.html",
  controller:"myCtrl"
  })

    .when("/details_ms_sale", {
    templateUrl : "view/details_ms_sale.html",
  controller:"myCtrl"
  })

    .when("/details_musical_item", {
    templateUrl : "view/details_musical_item.html",
  controller:"myCtrl"
  })

    .when("/details_contract", {
    templateUrl : "view/details_contract.html",
  controller:"myCtrl"
  })

  .when("/details_record_label", {
    templateUrl : "view/details_record_label.html",
  controller:"myCtrl"
  })

  .when("/details_music_shop", {
    templateUrl : "view/details_music_shop.html",
  controller:"myCtrl"
  });



});