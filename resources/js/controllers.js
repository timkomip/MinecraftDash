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
