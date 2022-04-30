const dropdownContent= document.querySelector(".dropdown-content");

$(document).ready(()=> {
    $(".dropdown").click(function(){
        $(".dropdown-content").animate({
            height: 'toggle'
        });

       // $(".dropdown").find("svg").css("transform", "rotate(180deg)")
    
        let visible = dropdownContent.getAttribute("data-visible")
        visible==="true" ? dropdownContent.setAttribute("data-visible",false) : dropdownContent.setAttribute("data-visible",true)
    });
})


const inter = setInterval(Timer,1000);
    function Timer(){
        let xmlhttp= new XMLHttpRequest();
        xmlhttp.open("GET","php/clock.php",false);
        xmlhttp.send(null);
        document.getElementById("result").innerHTML=xmlhttp.responseText;
    }
