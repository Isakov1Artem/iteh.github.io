
const ajax = new XMLHttpRequest();


function Result_1(){
  let date_start = document.getElementById("date_start").value;
  ajax.open("GET","Result_1.php?date_start=" + date_start);
  ajax.onload = function(){
    if(ajax.status === 200){
      localStorage.setItem("cost", ajax.response);
      let res = JSON.parse(ajax.response);
      let result = "";
      for(let i in res){
        result +="<li>Cost:" + res[i].cost + "</li>";
      }
      document.getElementById("res1").innerHTML= result;
    }

  }
  ajax.send();
}
function Result_2(){
  let Cars = document.getElementById("Cars").value;

  ajax.open("GET","Result_2.php?Cars=" + Cars);

  ajax.onload = function(){

    if(ajax.status === 200){
      localStorage.setItem("car_make", ajax.response);
      let res = JSON.parse(ajax.response);
      let result = "";
      for(let i in res){
        result +="<li>" + res[i].car_make + "</li>";
      }
      document.getElementById("res2").innerHTML= result;
    }

  }
  ajax.send();
}

function Result_3(){

  ajax.open("GET","Result_3.php");

  ajax.onload = function(){

    if(ajax.status === 200){
      localStorage.setItem("car_make_1",ajax.response);
      let res = JSON.parse(ajax.response);
      let result = "";
      for(let i in res){
        result +="<li>" + res[i] + "</li>";
      }
      document.getElementById("res3").innerHTML= result;
    }

  }
  ajax.send();
}
