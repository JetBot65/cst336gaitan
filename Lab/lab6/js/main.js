var clientId = "b6c43a5c8db140eb8a76653656c24fae";
var clientSecret = "c2bf4ea901b74a4484c77f91c7dc2295";
var oAuthToken = "BQB67pPni72cy-R9BnIRkvZK7yqLL0W3B-5mvG_-s-wRy8JS82e-Yx1fBTfZOFWyE8V5X64ZNPZpruRTP69_7VYJjJ5zUx_s-dM7Ka__GAqJ14IrtbbWnI4Q_RKixhLbBcyu1pzG504dM4pWyFTfHzKzR4dLpac_dOGU2mqt9dVWlvEEx4NmzK64lgUcmPwgAVygB19h0m9pqC3_0fUy2eRNLPmRYb_Z_0HK-vsjTX_gDiFVK2xyjCMe_61qNvIHOwlladbRe1XTeBzLDBZMCKyJUzw";
var theAudio;

$(function() {
    $('.searchCloseButton').click(function(e){
        e.preventDefault();
        $('.searchModal').hide();
    });
    
    $(document).on('click','.addSong',function(){
       var item = $(this).parents('.result-item');
       var artist = item.data('artist');
       var name = item.data('name');
       var track = item.data('track');
       var album = item.data('album');
       var cover = item.data('cover');
       $(".playList").append(
            $("<div class='track-item'>")
            .text(name +' by '+artist)
            .attr('data-artist',artist)
            .attr('data-name',name)
            .attr('data-track',track)
            .attr('data-album',album)
            .attr('data-cover',cover)
            .append("<button class='moveUp'>Up</button><button class='moveDown'>Down</button><button class='Delete'>Delete</button>")
        );
    });
    
    $(document).on('click','.moveUp',function(){
        var currentItem = $(this).parents('.track-item');
        var clickedIndex = $(currentItem).index();
        currentItem.insertBefore($('.playList .track-item').eq(clickedIndex-1));
    });
    
    
    $(document).on('click','.moveDown',function(){
        var currentItem = $(this).parents('.track-item');
        var clickedIndex = $(currentItem).index();
        console.log(clickedIndex);
        currentItem.insertAfter($('.playList .track-item').eq(clickedIndex+1));
    });
    
      
    $(document).on('click','.Delete',function(){
        $('.itemIndex').val($(this).parents('.track-item').index());
        $('.deleteModal').show();
    });
    $('.removeCancelButton').click(function(){
        $('.deleteModal').hide();
    });
    $('.removeRemoveButton').click(function(e){
        var indexToBeRemoved = $('.itemIndex').val();
        $('.playList .track-item').eq(indexToBeRemoved).remove();
        $('.deleteModal').hide();
    });
    
    $('.play').click(function(){
       if($('.playList .track-item').length){
           var item = $('.playList .track-item:first');
            $('.cover').attr('src',$(item).data('cover'));
            $('.name').text($(item).data('name'));
            $('.artist').text($(item).data('artist'));
            $('.album').text($(item).data('album'));
            if(theAudio!=undefined){
                theAudio.pause();
            }
            $('.playList .track-item:first').addClass('current');
            theAudio = new Audio($(item).data('track'));
            theAudio.play();
       }
    });
    $('.next').click(function(){
        var currentIndex = $('.playList .track-item').index($('.current'));
        var nextItem = $('.playList .track-item').eq(currentIndex+1);
        $('.cover').attr('src',$(nextItem).data('cover'));
        $('.name').text($(nextItem).data('name'));
        $('.artist').text($(nextItem).data('artist'));
        $('.album').text($(nextItem).data('album'));
        if(theAudio!=undefined){
            theAudio.pause();
        }
        theAudio = new Audio($(nextItem).data('track'));
        theAudio.play();
        $('.playList .current').removeClass('current');
        $(nextItem).addClass('current');
    });
    
    $('.prev').click(function(){
        var currentIndex = $('.playList .track-item').index($('.current'));
        var prevItem = $('.playList .track-item').eq(currentIndex-1);
        $('.cover').attr('src',$(prevItem).data('cover'));
        $('.name').text($(prevItem).data('name'));
        $('.artist').text($(prevItem).data('artist'));
        $('.album').text($(prevItem).data('album'));
        if(theAudio!=undefined){
            theAudio.pause();
        }
        theAudio = new Audio($(prevItem).data('track'));
        theAudio.play();
        $('.playList .current').removeClass('current');
        $(prevItem).addClass('current');
    });
    
    $('.openSearch').click(function(){
        $('.searchModal').show(); 
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
                    if(item.preview_url !=null){
                        $(".resultsContainer").append(
                            $("<div class='result-item'>")
                            .text(item.name +' by '+item.artists[0].name)
                            .attr('data-artist',item.artists[0].name)
                            .attr('data-name',item.name)
                            .attr('data-track',item.preview_url)
                            .attr('data-album',item.album.name)
                            .attr('data-cover',item.album.images[0].url)
                            .append("<button class='addSong'>Add</button>")
                        );
                    }
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