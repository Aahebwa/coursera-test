
// let inputValue = document.querySelector('#input').value;

// document.querySelector('form').onsubmit = () => {

//     document.querySelector('p').innerHTML = inputValue;

//     return false;

// }


//i=0;
//j=0;
//k=0;

if(!localStorage.getItem('k')){
    localStorage.setItem('k', 0);
    if(!localStorage.getItem('j')){
        localStorage.setItem('j', 0);
        
    if(!localStorage.getItem('i')){
        localStorage.setItem('i', 0);
    }
    }
}
function count() {
    i = localStorage.getItem('i');
    j = localStorage.getItem('j');
    k = localStorage.getItem('k');
    i++;
    //j++;

    
    if(i >= 60){
        i = 0;
        j++;
        if(j == 60){
            j = 0;
            k++;
        }
    }

    document.querySelector('p').innerHTML = i;
    document.querySelector('h2').innerHTML = j;
    document.querySelector('#hr').innerHTML = k;


    localStorage.setItem('i', i);
    localStorage.setItem('j', j);
    localStorage.setItem('k', k);
}


document.querySelector('button').onclick = () => {
    setInterval(count, 1000);
};