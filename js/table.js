const inter2 = setInterval(Timer2,1000);
    function Timer2(){
        let xmlhttp= new XMLHttpRequest();
        xmlhttp.open("GET","php/tableitemfirst.php",false);
        xmlhttp.send(null);
        document.getElementById("table-1").innerHTML=xmlhttp.responseText;
    }
const inter3 = setInterval(Timer3,1000);
    function Timer3(){
        let xmlhttp= new XMLHttpRequest();
        xmlhttp.open("GET","php/tableitemsecond.php",false);
        xmlhttp.send(null);
        document.getElementById("table-2").innerHTML=xmlhttp.responseText;
    }