$(document).ready(()=> {
    $(".dropdown-menu").click(function(){
        let element = $(this).attr('aria-controls');
        //console.log(element);

        $(".dropdown-content").each(function() {
            if($(this).attr('id')==element) {
                $(this).animate({
                    height: 'toggle'
                });
                let visible = $(this).attr("data-visible")
                visible==="true" ? $(this).attr("data-visible",false) : $(this).attr("data-visible",true)
            }
        });
    });
})

const inter = setInterval(Timer,1000);
    function Timer(){
        let xmlhttp= new XMLHttpRequest();
        xmlhttp.open("GET","php/clock.php",false);
        xmlhttp.send(null);
        document.getElementById("result").innerHTML=xmlhttp.responseText;
    }
