$('.like').on('click',function(event){
    event.preventDefault();
    var isLike=event.target.previousElementSibling ==null;
    $.ajax({

        method:'POST',
        url:urlLike,
        data:{isLike:isLike,postId:30,_token:token}

    })
    .done(function(){
        //change the page
    });

});