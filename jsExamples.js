//var me = ["Jamie", 31, "Grand Ave"];
//var friends = [["Patricio", 10, "123"] ["Or", 7, "25"]];

var me = ["Jamie", 31, "Grand Ave"];
var friends = [
				{ first_name:"Patricio", last_name:"GV"},
				{ first_name:"Or", last_name:"Leviteh"}  ];

var object = { first_name:"Patricio", last_name:"GV"};			// an object

friends[0]	// [Patricio, 10, 123]
friends[0][0]	// Patricio

for (var i = 0; i < friends.length; i++){
	var div = document.createElement("div");
	div.innerHTML = "<p>My friend's name is :: " + friends[i]["first_name"] + "</p>";
	document.querySelector("body").item(0).appendChild(div);
}

console.log("Yay");