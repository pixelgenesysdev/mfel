
// data types of variables in js
 
    // String
    let userName = "John Doe";
    // Number
    let userAge = 25;
    // Array
    let userHobbies = ["reading", "gaming", "coding"];
    // Boolean 
    let isStudent = true;
    // Object
    let userProfile = {
        name: "Zawwar",
        age: 2,
        hobbies: "cricket",
        isStudent: false,
    };
    // Null
    let userAddress = null;
    // Undefined
    let userEmail= undefined;


    // opertators of variables in js

    let a= 10;
    let b= 100;

    console.log(a + b); // Addition
    console.log(a - b); // Subtraction
    console.log(a * b); // Multiplication    
    console.log(a / b); // Division
    console.log(a % b); // Modulus


    // conditional statements in js

    if (b >= 60) {
        console.log(userProfile.name + " " + "bro you are more aged");
    }
     else if (b >= 20) {
        console.log(userProfile.name + " " + "you are  young");
    }
      
    else {
        console.log(userProfile.name + " " + "you are not young ");
    }

    // switch case in js


    switch (userProfile.age){
        case 1:console.log(userProfile.name + " " + "your age is" + " " + userProfile.age);break
        case 2:console.log(userProfile.name + " " + "your age is" + " " + userProfile.age);break
        case 3:console.log(userProfile.name + " " + "your age is" + " " + userProfile.age);break
        case 4:console.log(userProfile.name + " " + "your age is" + " " + userProfile.age);break
        case 5:console.log(userProfile.name + " " + "your age is" + " " + userProfile.age);break
        default:console.log(userProfile.name + " " + "your age is more thene 5");
    }


    // logical operators in js



    let x = 10;
    let y = 20;

    console.log(x > y); // false
    console.log(x < y); // true
    console.log(x >= y); // false
    console.log(x <= y); // true
    console.log(x == y); // false
    console.log(x != y); // true



    // AND , OR , NOT operators in js


    // AND operator = all the conditions must be true
    // OR operator = at least one condition should be true
    // NOT operator = 

    if (userProfile.name == "Zawwar" && userProfile.age == 2) {
        console.log(userProfile.name + " " + "you are pefect we have 2 requirements and you have both");
    }
    else if (userProfile.name == "Zawwar" || userProfile.age == 2) {
        console.log(userProfile.name + " " + "you are normal we have 2 requirements but you have only one");
    }

    // NOT operator

    const numer2 = 11;

    if (numer2 % 2 != 0) {
        console.log(numer2 + " " + "is not even");
    }
    else {
        console.log(numer2 + " " + "is even");
    }


    // Loops in js

    // For loop

    // for (i= 0;i<=12 ; i++){
    //     console.log("Zawwar" + i);
    // }


    // While loop


    // ip= 0;
    // home = 100;

    // while (ip!= home) {

    //     ip = ip + 1; 
    //     console.log("step" + ip);
        
    // }

    // Do while loop

    // ip2= 0;
    // home2 = 100;

    // do {
    //     ip2 = ip2 + 1; 
    //     console.log("step" + ip2);
    // }while (ip2 <= home2)



    // let number2 = 10;
    // let guess = 0;

    // do {
    //     guess = parseInt(prompt("Guess a number between 1 and 10:"));
    //     if(guess == number2) {
    //        alert("Congratulations! You guessed the right number: " + number2);
    //     } 
    // }while (guess != number2);


    // function in js


    function sayhello(){      // This function prints a greeting message to the console
        console.log("Hello, welcome to the JavaScript world!");
    }

    sayhello()  // Calling of function 


    //perameters
                      //arguments (a, b) 
    function nummberplus(a,b){
        console.log(a+b);
    }
    function nummbermult(a,b){
        return a*b;
    }


    let result1 = nummbermult(30,50) //perameters (30, 50)
    console.log( "the result is ",result1); // Output: 1500

    nummberplus(13,45) //perameters (13, 45)





    function addnumber(){
        let ans=0;

        for(i=0; i<arguments.length; i++){
            ans= ans + arguments[i]; // Adding each argument to ans
        }

        
        return ans;
    }


    let sum = addnumber(10, 20, 30, 40, 5000); // Calling the function with multiple arguments
    console.log("The sum of the numbers is: " + sum); // Output: The






// arrow function in js


