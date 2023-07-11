

let innerText = '';
document.querySelector('#calcInput').value = 0;
    
    function appendValue(value){
        innerText += value;
        document.querySelector('#calcInput').value = innerText;
    }

    function appendSign(value){
        innerText += value;
        document.querySelector('#calcInput').value = innerText;

        }

        function calculate(){

            try{ 
 
             const result = eval(innerText);
             document.querySelector('#calcInput').value = result;
             innerText = '';
 
            }
            catch(error){
 
             'error';
 
            }
         }

         function clear(){

            innerText = '';
            document.querySelector('#calcInput').value = '';

         }


    