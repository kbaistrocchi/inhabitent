(function($) {
    console.log('kayla')

    // Archive dropdown link
    const $archiveSelect = $('select')
    $archiveSelect.on('change', () => {
        let $url = $archiveSelect.val()
        console.log($url)
        if ($url) {
            window.location = $url
        }
        else {
            return false;
        }
    })
    


})(jQuery);