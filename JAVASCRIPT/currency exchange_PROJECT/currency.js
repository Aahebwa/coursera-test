

document.addEventListener('DOMContentLoaded', function() {

    let object = {
        USD:{
            'EUR':1.45,
            'JPY':200,
            'USH':4000
        },
    
        EUR:{
            'KSH':2000,
            'USD':0.45,
            'KON':300
        }
    }


    document.querySelector('#currForm').onsubmit = () => {

        let currency = document.querySelector('#currency').value.toUpperCase();
        const rate = object.USD[currency];
    
        if(rate !== undefined){
    
            document.querySelector('h4').innerHTML = `1 USD is equal to ${rate} ${currency}`;
    
        }else{
    
            document.querySelector('h4').innerHTML = 'please enter valid currency';
    
        }

        return false;
    
    }

});