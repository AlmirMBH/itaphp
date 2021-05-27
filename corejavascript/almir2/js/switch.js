let a = document.querySelector("#month");
let answer = document.querySelector("#message");

function numberOfDays(){    

    switch(parseInt(a.value)){
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            answer.innerHTML = "The month has 31 days";
        break;
        case 2:
            answer.innerHTML = "The month has 28 days";
        break;
        case 4: case 6: case 9: case 11:
            answer.innerHTML = "The month has 30 days";
        break;
        default:
            answer.innerHTML = "This is not an ordinal number of a month!";
            month.focus();
    }
}