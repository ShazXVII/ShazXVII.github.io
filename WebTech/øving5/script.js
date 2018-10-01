/* Part 2 */
console.log('PART 2')
for (var i = 0; i < 20; i++) {
  console.log(i+1); //prints every number 1-20
}

/* Part 3 */
console.log('PART 3');


const numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

for (var i = 0; i < numbers.length; i++) {
  if (numbers[i]%3==0 && numbers[i]%5==0) { //checks if it is divisible by 3 and 5
    console.log("eplekake");
  } else if (numbers[i]%5==0) { //checks if it is divisible by 5
    console.log("kake")
  } else if (numbers[i]%3==0) {  //checks if it is divisible by 3
    console.log("eple");
  } else { //else just print the number
    console.log(numbers[i]);
  }
}
/* Part 4 */

document.querySelector("#title").innerHTML = "Hello, Javascript"; //you can also use innerText, however I am used to using innerHTML, and seeing that it gives the same result I choose to use it instead.
/* Part 5 */

// for this part you can choose if you want to do document.AddEventListener or using onClick="" in the html file, but seeing that onClick is easier and good enough for this project I will choose to use it for now
function changeDisplay() {
  document.querySelector("#magic").style.display = "none"; //sets display to none
}

function changeVisibility() {
  document.querySelector("#magic").style.visibility = "hidden"; // sets visibility to hidden
  document.querySelector("#magic").style.display = "block"; //makes sure that it still takes up space even though it is invisible
}

function reset() {
  document.querySelector("#magic").style.visibility = "visible"; // sets visibility to visible
  document.querySelector("#magic").style.display = "block"; //sets display to block
}

/* Part 6 */
const technologies = [
    'HTML5',
    'CSS3',
    'JavaScript',
    'Python',
    'Java',
    'AJAX',
    'JSON',
    'React',
    'Angular',
    'Bootstrap',
    'Node.js'
];
  for (var i = 0; i < technologies.length; i++) { //goes through the array technologies
    var nyLI = document.createElement("li"); //creates list item element
    nyLI.innerHTML = technologies[i]; //sets the list elements innerHTML aka. text to one item in the array
    document.querySelector("#tech").appendChild(nyLI); //appends the child to the unordered list parent
  }
