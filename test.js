function reverseFunction(num) {
	let digits = Array.from(String(num), Number);
	let reversedArray = digits.reduce((acc, digit) =>
		[digit, ...acc], []);
	return parseInt(reversedArray.join(''));
}

let num = 0987654321;
let reversedNum = reverseFunction(num);

console.log(reversedNum);
