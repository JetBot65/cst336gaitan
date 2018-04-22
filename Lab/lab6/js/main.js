var clientId = "b6c43a5c8db140eb8a76653656c24fae";
var clientSecret = "c2bf4ea901b74a4484c77f91c7dc2295";
var oAuthToken = "BQDdVGOYlYQ2lpFcwIhpnwlahMBM9zPrN7NNTpr15i8MOWWf1-RFKRIudxKcLW5fUFeiF2n2j-HaoJIt_aTPYrXNfqoErtBWGhr5RC32r5SieeUQ0LYVFjBn-jJa7P78Vvt9t5Hc4bsL6WKrK2tw_bC3atTHP_Jusg9u_DS9fID89N1X3PJ006ICsp-6n6bSM_Cxm389dWcWztxmGy_yNZa2qsYf6YBoMjPHR2Ew07muG5CfNnizYWSGwSd-67hlevbQaZ2qkllvpXhRc1I6PuVlIpk";


$(function() {
    $('.searchCloseButton').click(function(e){
        e.preventDefault();
        $('.searchModal').hide();
    });
    
    $(document).on('click','.addSong',function(){
        console.log('here');
       var item = $(this).parents('.result-item');
       console.log(item.data('track'));
    });
    
    $('.searchSearchButton').click(function(e){
        e.preventDefault();
        var keyword = $('.keyword').val();
        $.ajax({
          type: "GET",
          url: "https://api.spotify.com/v1/search",
          data: {
            'q': keyword,
            'type': 'track'
          },
          dataType: "json",
          headers: {
            'Authorization': 'Bearer ' + oAuthToken
          },
          success: function(data, status) {
            console.log(data);
            //Add tracks
            if(data.tracks != undefined){
                for (var i = 0; i < data.tracks.items.length; i++) {
                    var item = data.tracks.items[i];
                    $(".resultsContainer").append(
                        $("<div class='result-item'>").text(item.name +' by '+item.artists[0].name).attr('data-artist',item.artists[0].name).attr('data-name',item.name).attr('data-track',item.external_urls.spotify).append("<button class='addSong'>Add</button>")
                    );
                }
            }
        },
          error: function(xhr) {
            var response = JSON.parse(xhr.responseText);
            console.log(response.error.message);
          },
          complete: function(data,status) {
          },
       });
    });
    
    
});