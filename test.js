
/*function greet(name,lastName) {
	console.log('Hello'+name+ ' '+lastName);
}

greet(" "+'dimitar','dodovski');
*/

function far(sv) {
	let km=sv*3;
	console.log(km+' KM');
}
far(10)


/*let x = {value:10};
let y = x;

x.value=20;
*/

/*let obj={value:10};
function increase(obj) {
	obj.value++
}

increase(obj);
console.log(obj);
*/


/*//factory function
function createCircle(radius) {
return {

	radius,
	draw: function() {
		console.log('draw')
	}
	};	
}
const circle = createCircle(1);*/

//constructor function
/*function Circle(radius) {
	//console.log('this',this);


	this.radius=radius;

	let defaultLocation={x:0,y:0};
	let computeOptimumLocation=function(factor){

	}
	this.draw=function() {

		computeOptimumLocation(0.1)
		console.log('draw');
	}
}

const circle = new Circle(10);
//circle.computeOptimumLocation(0.1);
circle.draw();*/

/*for (let key in circle) {
	if (typeof circle[key] !== 'function')
	console.log(key, circle[key])
}

const keys = Object.keys(circle);
console.log(keys);

if ('radius' in circle)
	console.log('Ima radius') 
else
	console.log('nema')*/

/*circle.locatio.n = {x:1};

const propertyName = 'location';
circle[propertyName]={x:1};

delete circle.['location'];*/

/*Circle.call({},1);
const another = new Circle(1);*/



/*const Circle1 = new Function('radius',`this.radius=radius;
	this.draw=function() {
		console.log('draw');
	}
	`);


const circle = new Circle1(1);
const another = new  Circle(1);*/






/*const names	= ['kire', 'mende','cane','pepe','moni','toni'];

names.forEach(name=>{
 console.log(name);
})*/

/*const luge =  [ {ime:"Dimitar",prezime:"Dodovski"},
			 {ime:"Petar",prezime:"Dodovski"},
			 {ime:"Aleksandar",prezime:"Dodovski"},
			 {ime:"Violeta",prezime:"Dodovski"},
			 {ime:"Viki",prezime:"Mitrevski"}, 
			 {ime:"Viki",prezime:"Mitrevski"} 

			 ]

luge.forEach(function(coek) { 
	
	console.log(coek.prezime);
})
console.log(luge);
*/



			


/*for (let i=0; i<names.length; i++) {
    
	console.log(names[i]);

}
*/


/*for (name of names) {
	console.log(name);
}
*/
/*
const user={'firstName':'Mitre','lastName':'Dodovski',
			'firstName':'Miki','lastName':'Todorov'}

for (key in user) {
	console.log(user[key]);
}*/


/*let i=0
while (i<10) {
	i++;
	if (i===5) continue;
	console.log(i);
	
}*/

