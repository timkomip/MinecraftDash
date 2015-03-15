function PlayerStore() { }
PlayerStore.prototype.fetch = function(success) {
    $.getJSON('players', success);
}
