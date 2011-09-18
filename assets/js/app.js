com = {
  visualposter : {
    util    : {},
    views   : {},
    widgets : {},
    init: function() {
        this.widgets.comingSoon.init();
    }
  }
};

// stub for innerShiv for non-IE browsers - http://bit.ly/ishiv
if(window.innerShiv === undefined) {
  window.innerShiv = function(html){
    return html;
  };
}
