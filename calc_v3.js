function createаСalculator() {
let number1Div = document.createElement("div");
number1Div.classList.add("number1");
document.body.append(number1Div);

let number1DivText = document.createTextNode("Введите число");
number1Div.append(number1DivText);

let inputNumber1=document.createElement("input");
inputNumber1.name="number1";
inputNumber1.id="number1";
number1Div.append(inputNumber1);


}
