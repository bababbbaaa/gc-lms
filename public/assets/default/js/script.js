function showNewContent(x){
  console.log(x.includes("E-Tutorial"));
  var tabEl1 = document.getElementById("e-tutorial");
  var tabEl2 = document.getElementById("e-content");
  var tabEl3 = document.getElementById("forum");
  var tabEl4 = document.getElementById("assessment");

  if(x.includes("E-Tutorial")){

    tabEl1.style.display = "block";
    tabEl2.style.display = "none";
    tabEl3.style.display = "none";
    tabEl4.style.display = "none";

  }
  else if(x.includes("E-Content")) {

    tabEl1.style.display = "none";
    tabEl2.style.display = "block";
    tabEl3.style.display = "none";
    tabEl4.style.display = "none";

  }
  else if(x.includes("Forum")){

      tabEl1.style.display = "none";
      tabEl2.style.display = "none";
      tabEl3.style.display = "block";
      tabEl4.style.display = "none";

    }
    else if(x.includes("Assessment")){

      tabEl1.style.display = "none";
      tabEl2.style.display = "none";
      tabEl3.style.display = "none";
      tabEl4.style.display = "block";

    }

}
