com.visualposter.widgets.comingSoon = {
  init: function() {
    $('.coming_soon').live('mouseenter', this.showInfo);
    $('.coming_soon').live('mouseleave', this.hideInfo);
    // TODO: temporary placement for a.target = # to prevent default behavior. Should
    // put this behavior on global javascript file instead of comingsoon.js
    this.preventDefaultBehavior();
  },

  preventDefaultBehavior : function() {
    $('a[href=#]').live('click', function(e) {
       e.preventDefault();
    });
  },

  showInfo: function() {
    $('#coming_soon_info').show();
  },

  hideInfo: function() {
    $('#coming_soon_info').hide();
  }
};
