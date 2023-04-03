var string = "Bienvenue sur notre site.";
var str = string.split("");
var el = document.getElementById('bienvenue');
(function animate() {
str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running); 
var running = setTimeout(animate, 90);
})();