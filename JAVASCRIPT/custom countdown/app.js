

let user = Number(prompt('Enter start value:', 0));

document.querySelector('p').innerHTML = user;
i = user;
function count() {

    if(i <= 0){
        //console.log('please enter a value greater than 0!');
        document.querySelector('p').innerHTML = 0;
    }else{
        i--;
    }

    document.querySelector('p').innerHTML = i;
}

document.querySelector('button').onclick = () => {
    setInterval(count, 1000);
}


var time = parseInt(100.76);
console.log(time);