$(document).ready(function(){

    fetch_events();

    function fetch_events(){
        $.ajax({
            url: "fetch_events.php",
            success: function (data){
                $('#events').html(data);
            }
        });
    }

   
    
});


// function viewEventDesc(id) {
//     //GET EVENT DESCRIPTION CONTAINER
//     var eventDescCont = document.getElementById("eventDescCont");
//     //CLEAR CLASSNAME
//     eventDescCont.className = "";
//     //CLEAR HTML
//     eventDescCont.innerHTML = "";
//     //QUERY  
// }