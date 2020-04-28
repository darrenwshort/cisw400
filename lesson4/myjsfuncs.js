// use strict;

function colorGen() {
    var i, num, clr = '#';
    var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'A', 'B', 'C', 'D', 'E', 'F'];
    for(i=0; i<6; i++) {
        num = Math.floor(Math.random() * 16); // generate rand # between 0-15
        clr += arr[num].toString();
    }
    return clr;
}