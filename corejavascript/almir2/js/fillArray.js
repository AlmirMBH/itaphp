let message = document.querySelector("#message");

let x = [12, 34, 32, 45, 67];
let y = new Array(13, 44, 42, 55, 77);

message.innerHTML = "Number of array elements: " + x.length;
console.log(x.sort().reverse());
console.log(y);

x[x.length] = 99;
x[9] = 22;
console.log(x);

x.push(88);
console.log(x);

function writeArray(){        
    message.innerHTML = "";

    for(i=0; i<x.length; i++){
        message.innerHTML+=i + ": " + x[i] + "<br>";
    }
}

function addElement(){
    newElement = parseInt(document.querySelector("#newElement").value);
    x.push(newElement);
    writeArray();
}

document.write("<br>");
document.write("Concatination of arrays");
document.write("<br>");
var arr1 = [1, 2];
document.write("Array 1: " + arr1 + "<br>");
var arr2 = [3, 4, 5];
document.write("Array 2: " + arr2 + "<br>");
var arr3 = [6];
document.write("Array 3: " + arr3 + "<br>");
var arr_all = arr1.concat(arr2,arr3);
document.write("<br>");
document.write("Concatinated array: " + arr_all);

document.write("<br><br>");
document.write("Index of an array element");
document.write("<br>");
var arr = [5,8,2,4,7];
var num = arr.indexOf(4); //arr.indexOf(4, 2); start from index 2
document.write("Array: " + arr);
document.write("<br>");
document.write("Index of number 4 is " + num);

document.write("<br><br>");
document.write("Search string<br>");
var text = "Greg works in a bank.";
var w = text.indexOf("bank");
document.write("Text: " + text + "<br>");
document.write("Searched word: bank<br>");
document.write("Bank starts on index: " + w);

document.write("<br><br>");
document.write("Pop function<br>");
let array1 = [1,2,3,4];
document.write("Array: " + array1 + "<br>");
let popped = array1.pop();
document.write("Popped element: " + popped + "<br>");
document.write(popped + "<br/>" + array1);

document.write("<br><br>");
document.write("Push function<br>");
let array2 = [1,2,3];
document.write("Array: " + array2 + "<br>");
let array3 = [4,10,20,30,100];
document.write("Pushed elements: " + array3 + "<br>");
array2.push(array3);
document.write("Pushed array: " + array2);

document.write("<br><br>");
document.write("Shift function<br>");
let array4 = [10,20,30,40];
document.write("Array: " + array4 + "<br>");
let shifted = array4.shift();
document.write("Shifted element: " + shifted + "<br>");
document.write("Shifted array (indexes adjusted): " + array4);

document.write("<br><br>");
document.write("Unshift function<br>");
let array5 = [20,30,40];
document.write("Array: " + array5 + "<br>");
let unshifted = array5.unshift(10, 15, 17);
document.write("Unshifted element: 10, 15, 17<br>");
document.write("Unshifted array: " + array5)

document.write("<br><br>");
document.write("Join function (array -> string)<br>");
let fruits = ["Apple","Orange","Lemon"];
document.write("Array: " + fruits + "<br>");
//let str = fruits.join(' - ');
let str = fruits.join(', ');
document.write("Spliterator: ', '<br>");
document.write("String: " + str);

document.write("<br><br>");
document.write("Split function (string -> array)<br>");
var fruits1 = "Lemon Banana Pear, Apple, Orange";
document.write("Array: " + fruits1 + "<br>");
var array6 = fruits1.split(', '); // fruits1.split(', ', 2); only 2 arrays
document.write("Spliterator: ', '<br>");
document.write("Array 1: " + array6[0] + "<br>");
document.write("Array 2: " + array6[1] + "<br>");
document.write("Array 3: " + array6[2] + "<br>");

document.write("<br><br>");
document.write("Sort numbers<br>");
let array7 = [3,5,2,6,1,6,0,4,20];
document.write("Array: " + array7 + "<br>");
array7.sort(function compareNumbers(a, b) {
return a - b;
});
document.write("Sorted array: " + array7);

document.write("<br><br>");
document.write("Cut array<br>");
let array8 = [10,20,30,40,50,60,70,80,90];
document.write("Array: " + array8 + "<br>");
array8.length = 3;
document.write("Trimmed array: " + array8);

document.write("<br><br>");
document.write("Delete member of array<br>");
let array9 = [10,20,30,40];
document.write("Array: " + array9 + "<br>");
//array9.splice(1, 1, 70, 90) // position, number of elements to delete, new elements to add
array9.splice(1, 0, 70, 90) // add new elements without deleting the existing
document.write("Shortened array: " + array9);



