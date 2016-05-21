function tabs(selecter) {
    var allTabs = $(selecter).find('li');
    var contents = $(selecter).next().find('.content');
    allTabs.click(function() {
        var self = $(this);
        contents.hide();
        $(contents[self.index()]).show();
    });
}