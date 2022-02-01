var myDataRef = firebase.database().ref('chat');

function escribe(nombre) {

    var name = nombre;
    var text = $('#messageInput').val();
    var fijado = false;
    // myDataRef.push({name: name, text: text});
    if(text !== ''){
        myDataRef.push({
            name: name,
            text: text,
            fijado: fijado
        });
        $('#messageInput').val('');
    }
};

function escribepress(nombre,event) {
    if (event.keyCode === 13) {
        var name = nombre;
        var text = $('#messageInput').val();
        var fijado = false;
        // myDataRef.push({name: name, text: text});
        if(text !== ''){
            myDataRef.push({
                name: name,
                text: text,
                fijado: fijado
            });
            $('#messageInput').val('');
        }
    }
};
myDataRef.on('child_added', function(snapshot) {
    var message = snapshot.val();
    displayChatMessage(message.name, message.text);
});
myDataRef.on('child_removed', function(snapshot) {
    var deletedPost = snapshot.val();
    console.log("Chat was removed", deletedPost);
});
function displayChatMessage(name, text) {
    $('<div class="row" />').html('<div class="col-lg-8 col-md-8 col-12 msjeuser">'+text+'</div>').prepend($('<div class="col-lg-4 col-md-4 col-12 user" />').text(name)).appendTo($('#messagesDiv'));
    $('#messagesDiv')[0].scrollTop = $('#messagesDiv')[0].scrollHeight;
};

