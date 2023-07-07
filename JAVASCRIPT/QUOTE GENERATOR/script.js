
const btn = document.getElementById('btn');



//function quoteGenerator() {
    var myArray = [
        "Tough times don't last",
        "Inspire to aspire",
        "Voice of the voiceless",
        "Nothing is permanent",
        "Jesus is King"
    ];


    btn.addEventListener('click', function() {
        var randomIndex = Math.floor(Math.random() * myArray.length);
        var randomQuote = myArray[randomIndex];
        return randomQuote;
    // var quoteElement = document.getElementById('para');
    // quoteElement.textContent = randomQuote;


//var quote = quoteGenerator();
});
document.write(randomQuote);
//btn.addEventListener('click', quoteGenerator);
//quoteGenerator();