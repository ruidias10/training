// - Class example
/*
class List {
	constructor() {
		this.data = [];
	}

	add(data) {
		this.data.push({
			id: this.id,
			data
		});
		this.updateId();
	}

	show() {
		console.log(this.data);
	}
}

class TodoList extends List {
	constructor() {
		super();
		this.id = 1;
	}

	updateId() {
		this.id++;
	}
}

const MyLista = new TodoList();

document.getElementById('addTodo').onclick = function() {
	MyLista.add(Date.now());
	MyLista.show();
};
*/

/*
// - Array example
const arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
console.log('original:', arr);


const mapArr = arr.map(function(item, index) {
	return item + index; // modify array
});
console.log('map:', mapArr); // [1, 3, 5, 7, 9, 11, 13, 15, 17]


const reduceArr = arr.reduce(function(total, next) {
	return total + next; // sum
});
console.log('reduce:', reduceArr); // 45


const filterArr = arr.filter(function(item) {
	return item % 2 === 0; // true or false
});
console.log('filter:', filterArr); // [2, 4, 6, 8]


const findArr = arr.find(function(item) {
	return item === 4; // find 4
});
console.log('find:', findArr); // 4
*/


// - Arrow functions
/*
const newArr = arr.map(function(item){
  return item * 2;
});

const newArr = arr.map((item) => {
  return item * 2;
});

const newArr = arr.map(item => {
  return item * 2;
});

const newArr = arr.map(item => item * 2);
*/

/*
const test = () => [1, 2, 3, 4, 5, 6, 7, 8, 9];
const test = () => 'test';
const test = () => 1;

const test = () => {
  return { data: Date.now() };
};
const test = () => ({ data: Date.now() });
*/


// - Function parameters
/*
function calc(a = 1, b = 2) {
  return a + b;
}
console.log('calc: ', calc(4));
console.log('calc: ', calc(4, 4));

const calcArrow = (a = 1, b = 2) => a + b;
console.log('calcArrow: ', calcArrow(4));
console.log('calcArrow: ', calcArrow(4, 4));
*/


// - Structuring
/*
const user = {
	name: 'Rui',
	age: 10,
	address: {
		city: 'Porto',
		street: 'Rua do Porto, 123'
	}
};
console.log('Name: ', user.name);
console.log('Age: ', user.age);
console.log('City: ', user.address.city);

const { name, age, address: { city } } = user;
console.log('Name: ', name);
console.log('Age: ', age);
console.log('City: ', city);
*/


// - rest
/*
const user = {
	name: 'rui',
	age: 23,
	job: 'dev'
};

const { name, ...otherProps } = user;
console.log("name: ", name);
console.log("otherProps: ", otherProps);

const arr = [1, 2, 3, 4];
const [a, ...b] =  arr;
console.log(a);
console.log(b);

function soma(...otherProps) {
  return otherProps.reduce((total, next) => total + next);
}
console.log(soma(12, 2, 3, 1, 2, 10))
*/


// - spread
/*
const arr1 = [1, 2, 3];
const arr2 = [4, 5, 6, 3];

const arr3 = [...arr1, ...arr2];
console.log(arr3);

const user = {
	name: 'rui',
	age: 23,
	job: 'dev'
};

const user2 = { ...user, name: 'Rui Dias' };
console.log(user2);
*/


// - Template Literals
/*
const name = 'Rui';
const age = 23;
console.log(`My name ${name}, my age ${age}`);
*/


// - Object Short Syntax
/*
const id = 1;
const name = 'Rui';
const age = 23;

const user = {
	id,
	name,
	age
};
console.log(user);
*/

import { soma } from '../modules/Class';
console.log(soma());
//const list = new List();
//list.data();
