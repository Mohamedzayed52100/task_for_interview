var myinput = document.getElementById('height'),

    mytextarea = document.getElementById('textarea'),
    myp = document.getElementById('tax'),
    myh = document.getElementById('h');


console.log(myinput);
myinput.value = 1010;



myinput.oninput = function() {
    myp.value = this.value;

}
mytextarea.oninput = function() {
    myh.value = this.value * .10;
}