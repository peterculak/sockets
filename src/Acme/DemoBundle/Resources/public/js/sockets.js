var myClank = Clank.connect(_CLANK_URI);

myClank.on("socket/connect", function(session){
    //session is an Autobahn JS WAMP session.

//            console.log("Successfully Connected!");

    //the callback function in "subscribe" is called everytime an event is published in that channel.
    session.subscribe("acme/channel/id/" + sessionId, function(uri, payload){
        document.getElementById("console").innerHTML += "<br />" + payload;
    });

//    session.publish("acme/channel/id/" + sessionId, {msg: new Date().getTime()});

//            session.unsubscribe("acme/channel");

//            session.publish("acme/channel", {msg: "I won't see this"});
});

myClank.on("socket/disconnect", function(error){
    //error provides us with some insight into the disconnection: error.reason and error.code

    console.log("Disconnected for " + error.reason + " with code " + error.code);
    });
