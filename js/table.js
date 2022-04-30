
const tableFirstItems = setInterval(tableFirstGetItems,1000);
    function tableFirstGetItems(){
        let xmlhttp= new XMLHttpRequest();
        xmlhttp.open("GET","php/tables/tableitemfirst.php",false);
        xmlhttp.send(null);
        document.getElementById("table-1").innerHTML=xmlhttp.responseText;
    }

const tableFirstInfo = setInterval(tableFirstGetInfo,1000);
    function tableFirstGetInfo(){
        let xmlhttp= new XMLHttpRequest();
        xmlhttp.open("GET","php/tables/tableinfofirst.php",false);
        xmlhttp.send(null);
        document.getElementById("table-1-info").innerHTML=xmlhttp.responseText;
    }

const tableSecondItems = setInterval(tableSecondGetItems,1000);
    function tableSecondGetItems(){
        let xmlhttp= new XMLHttpRequest();
        xmlhttp.open("GET","php/tables/tableitemsecond.php",false);
        xmlhttp.send(null);
        document.getElementById("table-2").innerHTML=xmlhttp.responseText;
    }

const tableSecondInfo = setInterval(tableSecondGetInfo,1000);
    function tableSecondGetInfo(){
        let xmlhttp= new XMLHttpRequest();
        xmlhttp.open("GET","php/tables/tableinfosecond.php",false);
        xmlhttp.send(null);
        document.getElementById("table-2-info").innerHTML=xmlhttp.responseText;
    }