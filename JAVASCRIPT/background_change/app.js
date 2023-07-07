// var i;
//     for(i=1; i<=10; i++) {
//         document.write("Hello World!");
//     }


var backgroundChange = document.getElementById('btn');

var isBlack = true;

backgroundChange.addEventListener('click', function() {

    if(isBlack) {
        document.body.style.background = "white";
        document.body.style.color = "purple";
    }else{
        document.body.style.background = "black";
        document.body.style.color = "white";
    }

    isBlack = !isBlack;
        //var randomColor = '#' + Math.floor(Math.random() * 16777215).toString(16);
        //document.body.style.background = randomColor;
    });


