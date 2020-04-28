
/***********************************
 *
 * Javascript for travel site
 *
 **********************************/
  function changePictures() {
    if(document.getElementById("travelSelect") != null)
    {
      console.log(document.getElementById("travelSelect").value);
      var vacaySpot = document.getElementById("travelSelect").value;
    }
    else
    {
      var vacaySpot = "keylargo";  // set default
    }
    
    var image = '';
    for(i=1; i<=6; i++) {
      var image = 'img' + i;
      document.getElementById(image).src = 'images/' + vacaySpot + i + '.jpg';
    }
    // set big pic also
    document.getElementById('imgMain').src = 'images/' + vacaySpot + '1.jpg';
  }


  
  function showBigPic(obj) {
    console.log("obj: " + obj);
    var thumb = obj.src;
    var vacaySpot = /images\/([a-z]+\d)\.jpg/.exec(thumb);
    
    console.log("thumb: " + thumb);
    console.log("vacaySpot: " + vacaySpot[1]);
    document.getElementById("imgMain").src = 'images/' + vacaySpot[1] + '.jpg';
  }
