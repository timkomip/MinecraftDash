function MainPage() { }
MainPage.prototype.renderPlayers = function(players) {
    players.forEach(function(player) {
        $('#players tbody').append("<tr><td>" + player  + "</td></tr>");
    });
};
