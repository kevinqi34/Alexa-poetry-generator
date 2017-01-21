
function get_poem(keyword) {

    // Post URL
    var url = "http://poetrydb.org/title/" + keyword;


    $.ajax({
    url: url,
    type: 'GET',
    success: function (results) {
      console.log(results);



    },
    error: function(e) {
        alert('Error: '+ e);
    }
    });




}
