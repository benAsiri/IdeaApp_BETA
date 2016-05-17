$('.timeline-panel').find('.timeline-body').find('.myButtons').find('button').on('click',function(event){
    event.preventDefault();
    var parent = event.target.parentNode.parentNode.parentNode;
    var mypostId = parent.dataset['postid'];
    var myObj = event.target.parentNode.childNodes[3].childNodes[1];

    $.ajax({
        method: 'GET',
        url : "like",
        data: { postId : mypostId },
        success: function (data) {
            console.log(data['new_likes']);
            $(myObj).text(data['new_likes']+' likes');
            //   $(parent).text(msg['new_likes']);
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
});

var postId = 0;

$('.img-push').find('#commentButton').on('click',function(event){
    event.preventDefault();
    postId = event.target.parentNode.parentNode.parentNode.parentNode.dataset['postid'];
    $('#comment-modal').modal();
    console.log('hdgfrehtr;');
});

$('#modal-save').on('click',function(){
    $.ajax({
        method: 'GET',
        url : 'addComment',
        data: { body: $('#comment-body').val(), postId : postId},
        error: function (request, error) {
            console.log(arguments);
            alert(" Can't do because: " + error);
        }
    })
        .done(function(msg){
            console.log(msg['message']);
            $('#comment-modal').modal('hide');
            alert(msg['message']);
        });
});




$('.img-push').find('#viewButton').on('click',function(event){
    event.preventDefault();
    postId = event.target.parentNode.parentNode.parentNode.parentNode.dataset['postid'];
    $.ajax({
        method: 'GET',
        url : 'getComments',
        data: { postId : postId},
        error: function (request, error) {
            console.log(arguments);
            alert(" Can't do because: " + error);
        }
    })
        .done(function(msg){
            var comments = msg['comments'];
            if(comments.length>0){
                $('#commentBody').html('');
                $('#commentCount').html("<i>"+comments.length+ " comments</i>");
                comments.forEach(function(comment){
                    $('#commentBody').append('<tr class="success"><td class="success"><h4>'+comment["comment"]+'</h4> <p><i>commented by '+comment["name"]+' on '+comment["date"]+'</i></p></td></tr>');
                });
            }else{
                $('#commentCount').html('');
                $('#commentBody').html('<tr class="success"><td class="success"><h4> No Comments</h4> </td></tr>');
            }
            $('#view-comment-modal').modal();
            console.log(msg['comments']);
        });

});
