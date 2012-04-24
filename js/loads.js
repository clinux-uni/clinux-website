Modernizr.load([
    {
        load: '//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js',
        complete: function () {
            if (!window.jQuery) {
                Modernizr.load('js/libs/jquery-1.7.2.min.js');
            }
        }
    }, {
        load: ['js/libs/prefixfree.min.js', 'js/libs/selectivizr.min.js', 'js/libs/respond.min.js', 'js/script.js']
    }
]);