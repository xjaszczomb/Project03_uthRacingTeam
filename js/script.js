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

$(document).ready(()=> {
    $(".search").click(function(){
        $("#dropSearch").toggleClass("show");
    });
})

$(document).ready(function(){
    // fetch data from table without reload/refresh page
    loadData();
    function loadData(query){
      $.ajax({
        url : "php/livesearch.php",
        type: "POST",
        chache :false,
        data:{query:query},
        success:function(response){
          $("#searchresult").html(response);
        }
      });  
    }

    // live search data from table without reload/refresh page
    $("#search").keyup(function(){
      let search = $(this).val();
      if (search !="") {
        loadData(search);
      }else{
        loadData();
      }
    });
});


const inter = setInterval(Timer,1000);
    function Timer(){
        let xmlhttp= new XMLHttpRequest();
        xmlhttp.open("GET","php/clock.php",false);
        xmlhttp.send(null);
        document.getElementById("result").innerHTML=xmlhttp.responseText;
    }


