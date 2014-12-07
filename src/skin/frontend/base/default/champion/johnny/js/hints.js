document.observe("dom:loaded", function() {
    $$('.template-hint-header a').each(function(elem) {
        elem.observe('click', function(evt) {
            // don't actually click
            evt.stop();

            $$('body')[0].insert('<iframe src="' + elem.readAttribute('href') + '" class="hint-iframe"></iframe>');
        });
    });
});
