function mostrar(str) {

  if (str == "") {


    document.getElementById("ajax").innerHTML = "";

     return;

  }else {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {


      if (this.readyState == 4 && this.status == 200) {

        document.getElementById("ajax").innerHTML = this.responseText;

      }


    };

    xhr.open("GET", "database/connection.php?nome="+str, true);
    xhr.send();

  }

};