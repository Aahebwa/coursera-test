//program that calculatws the amplitude of an array of temperatures
temperatures = [10, 30, 10, 4, -4, 0, 4, 30, 'error', 24];

let min = temperatures[0];
let max = temperatures[0];

function getAmplitude(){

    for(i=0; i<temperatures.length; i++){

        if(temperatures[i] > max){
            max = temperatures[i];
        }
        if(temperatures[i] < min){
            min = temperatures[i];
        }
    }

    let amplitude = max-min;
    return amplitude;

}

console.log(getAmplitude());