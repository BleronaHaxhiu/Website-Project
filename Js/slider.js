var vargu = [
    "images/png.png",
    "images/png_backgroung.png",
];

var index = 0;
var koha = 2000;

function krijoSlider(){
    document.getElementById('imazhi').src = vargu[index];
    index++;

    if(index == vargu.length){
        index = 0;
    }

    setTimeout('krijoSlider()', koha);
}

krijoSlider();