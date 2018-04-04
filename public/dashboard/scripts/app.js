(function ($) {
	'use strict';

	  window.app = {
      name: 'aside',
      setting: {
        folded: false,
        container: false,
        color: 'primary',
        bg: ''
      }
    };

    var setting = 'pascalStorage-'+app.name+'-Setting',
        storage = $.localStorage,
        color;

    if( storage.isEmpty(setting) ){
        storage.set(setting, app.setting);
    }else{
        app.setting = storage.get(setting);
    }
    var v = window.location.search.substring(1).split('&');
    for (var i = 0; i < v.length; i++)
    {
        var n = v[i].split('=');
        app.setting[n[0]] = (n[1] == "true" || n[1]== "false") ? (n[1] == "true") : n[1];
        storage.set(setting, app.setting);
    }

    setTheme();

    // init
    function setTheme(){

      $('body').removeClass($('body').attr('ui-class')).addClass(app.setting.bg).attr('ui-class', app.setting.bg);
      app.setting.folded ? $('#aside').addClass('folded') : $('#aside').removeClass('folded');
      $('#aside').length == 0 && (app.setting.container ? $('.app-header .navbar, .app-content').addClass('container') : $('.app-header .navbar, .app-content').removeClass('container'));

      $('[data-target="folded"] input').prop('checked', app.setting.folded);
      $('[data-target="container"] input').prop('checked', app.setting.container);

      if(color != app.setting.color){
        uiLoad.remove('css/theme/'+color+'.css');
        uiLoad.load('css/theme/'+app.setting.color+'.css');
        color = app.setting.color;
      }
    }

})(jQuery);
