function MainCtrl(store, page) {
    this.store = store;
    this.page = page;
}

MainCtrl.prototype.index = function() {
    var self = this;
    self.store.fetch(function (result) {
        self.page.renderPlayers(result.players);
    });
};

function MainPage() { }
MainPage.prototype.renderPlayers = function(players) {
    players.forEach(function(player) {
        $('#players tbody').append("<tr><td>" + player  + "</td></tr>");
    });
};

function PlayerStore() { }
PlayerStore.prototype.fetch = function(success) {
    $.getJSON('players', success);
}

var ctrl = new MainCtrl(new PlayerStore(), new MainPage());
$(function () {
    ctrl.index();
});

//# sourceMappingURL=all.js.map
