
//expire Date = new Date;
//expireDate.setMonth(expireDate.getMonth()+1);
//
//function setCookie()
//{
//  skin = 
//}
  
function changeSkin(){
  var skin = document.getElementById('changeSkinElm').value;
  
  
  if(skin == "space"){
    document.write.background = "images/space.jpg";
  }
  else if(skin == "earth"){
    document.body.style.backgroundImage = "url('images/earthfromspace.jpg')";
  }
  else{ document.write.background = "images/blackhole.jpg"; }
}