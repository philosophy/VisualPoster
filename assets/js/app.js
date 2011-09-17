com = {
  visualposter : {
    util    : {},
    views   : {},
    widgets : {},
    init: function() {
    }
  }
};

// stub for innerShiv for non-IE browsers - http://bit.ly/ishiv
if(window.innerShiv === undefined) {
  window.innerShiv = function(html){
    return html;
  };
}

console.log('got here on apps');