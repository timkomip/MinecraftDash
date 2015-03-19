describe('MainCtrl', function () {
    var main, store, page;
    beforeEach(function () {
        store = new PlayerStore;
        page = new MainPage();
        main = new MainCtrl(store, page);
    });
    afterEach(function () {
    });
});
