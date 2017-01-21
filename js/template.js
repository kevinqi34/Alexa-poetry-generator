
function typing() {
  $(function(){
          $("#topic").typed({
          strings: ["Love", "Death","Sorrow","War","Shakespeare"],
          typeSpeed: 10,
          loop: true,
          });
  });
}


function get_input() {
  $('#enter').click(function() {
    // Get Data
    var topic = $("#topic").val();
    console.log(topic);

  });


}
