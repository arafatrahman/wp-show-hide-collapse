(function() {

    tinymce.create( 'tinymce.plugins.WPSHCButton',{
    
        init : function(ed, url){
            var url = url.replace('/js/tinymce', '');
            ed.addButton( 'wpshc', {
                title : 'Insert WP Show Hide Collapse',
                image : url + '/images/wpshc.svg',
                onclick : function(){
                    if(typeof wpshc_show_insert !== 'undefined') wpshc_show_insert();
                }
            });
        },

        getInfo : function(){
            return {
                longname : 'wpshc',
                author : 'Arafat Rahman',
                authorurl : 'http://kauniaweb.com/',
                infourl : 'http://kauniaweb.com/',
                version : '0.0.1'
            };
        }

    });

    tinymce.PluginManager.add( 'wpshc', tinymce.plugins.WPSHCButton );

})();