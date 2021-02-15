function myFunction() {
  var x = document.getElementById("searchit").value;
  x=x.toLowerCase();
  if(x == "skyfall" | x == "best shoes"){
	  document.getElementById("result").innerHTML = document.getElementById("skyfall").innerHTML
  }
  else if(x == "turn up" | x == "new shoes"){
	document.getElementById("result").innerHTML = document.getElementById("turn up").innerHTML  
  }
  else if(x == "booster" | x == "trending shoes"){
	document.getElementById("result").innerHTML = document.getElementById("booster").innerHTML  
  }
  else if(x == "cloud" | x =="latest shoes"){
	document.getElementById("result").innerHTML = document.getElementById("cloud").innerHTML  
  }
  else if(x == "fly" | x == "fashionable shoes"){
	document.getElementById("result").innerHTML = document.getElementById("fly").innerHTML  
  }
   else if(x == "rock it" | x == "woodland"){
	document.getElementById("result").innerHTML = document.getElementById("rock it").innerHTML  
  }
  else if(x == "titan" | x == "formal shoes"){
	document.getElementById("result").innerHTML = document.getElementById("titan").innerHTML  
  }
  else if(x == "explosive"){
	document.getElementById("result").innerHTML = document.getElementById("explosive").innerHTML  
  }
  else if(x == "mixers" | x == "shoes"|x == "shoe"){
	document.getElementById("result").innerHTML = document.getElementById("mixers").innerHTML  
  }
  else if(x == "alexa"){
	  document.getElementById("result").innerHTML = document.getElementById("alexa").innerHTML
  }
  else if(x == "bloom"){
	document.getElementById("result").innerHTML = document.getElementById("bloom").innerHTML  
  }
  else if(x == "stars"){
	document.getElementById("result").innerHTML = document.getElementById("stars").innerHTML  
  }
  else if(x == "wings"){
	document.getElementById("result").innerHTML = document.getElementById("wings").innerHTML  
  }
  else if(x == "blend"){
	document.getElementById("result").innerHTML = document.getElementById("blend").innerHTML  
  }
   else if(x == "airlight"){
	document.getElementById("result").innerHTML = document.getElementById("airlight").innerHTML  
  }
  else if(x == "night"){
	document.getElementById("result").innerHTML = document.getElementById("night").innerHTML  
  }
  else if(x == "cream"){
	document.getElementById("result").innerHTML = document.getElementById("cream").innerHTML  
  }
  else if(x == "butterfly"){
	document.getElementById("result").innerHTML = document.getElementById("butterfly").innerHTML  
  }
  else{
	  alert("Please input proper search instructions as follows:\nskyfall, Turn Up, Rock it, Fly, Mixers, Booster, Cloud, Explosive, Titan,  airlight, night, cream, butterfly, stars, blend, wings");
	document.getElementById("result").innerHTML="";  
  }
}