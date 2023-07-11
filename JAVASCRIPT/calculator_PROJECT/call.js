
//document.addEventListener('DOMContentLoaded', function(){ 
   
//let name = prompt('Enter your name');
 if(!localStorage.getItem('i')){
    localStorage.setItem('i', 0)
 }

function hello(){
    //alert("hello, world!");
    let i = localStorage.getItem('i');
    i++;
       
    document.querySelector('h1').innerHTML = i;
    localStorage.setItem('i', i);


};

document.addEventListener('DOMContentLoaded', () => {
       
    document.querySelector('h1').innerHTML = localStorage.getItem('i');
    let count = document.querySelector('#countBtn').onclick = hello;
   // setInterval(count, 1000);

});


// let red = document.querySelector('#red');
// let blue = document.querySelector('#blue');
// let green = document.querySelector('#green');

// //RED
// red.addEventListener('click', function(){

//     document.querySelector('p').style.color = 'red';

// });

// //BLUE
// blue.addEventListener('click', function(){

//     document.querySelector('p').style.color = 'blue';

// });

// //GREEN
// green.addEventListener('click', function(){

//     document.querySelector('p').style.color = 'green';

// });

 document.addEventListener('DOMContentLoaded', () => { 
// document.querySelectorAll('button').forEach(button => {

//     button.onclick = () => {
//         document.querySelector('p').style.color = button.dataset.color;
//     }

// });
// });

 document.querySelector('select').onchange = function() {
     document.querySelector('p').style.color = this.value;
 };

 //to do list

 //submit button disabled by default
    document.querySelector('#taskBtn').disabled = true;

document.querySelector('#task').onkeyup = ()=> {
    if(document.querySelector('#task').value.length > 0){
        
        document.querySelector('#taskBtn').disabled = false;

    }else{
        document.querySelector('#taskBtn').disabled = true;
    }
    
}


document.querySelector('form').onsubmit = () =>{

   
    let task = document.querySelector('#task').value;
        
        let li = document.createElement('li');
        li.innerHTML = task;

        document.querySelector('#tasks').append(li);

        document.querySelector('#task').value = '';

        document.querySelector('#taskBtn').disabled = true;

    //stop form from submitting
    return false;
}


});




//document.write(object.USD.USH);


