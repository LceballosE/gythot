    var fast = 200;
    $("li").hover(function(e) {
        var liPos = $(this).offset();
        var bord = comingMouse(e.pageX - liPos.left, e.pageY - liPos.top, $(this).width(), $(this).height());
        var overlay =  $(this).find($(".overlay"));
        switch (bord) {
            case "left":
              overlay.css({"top":0,"left":"-100%"});
              overlay.stop().animate({"left":0},fast,"linear");
              break;
            case "right":
              overlay.css({"top":0,"left":"100%"});
              overlay.stop().animate({"left":0},fast,"linear");          
              break;
            case "top":
              overlay.css({"top":"-100%","left":0});
              overlay.stop().animate({"top":0},fast,"linear");
              break;
            case "bottom":
              overlay.css({"top":"100%","left":0});
              overlay.stop().animate({"top":0},fast,"linear");
              break;
        }
    }, function(e) {
        var liPos = $(this).offset();
        var bord = comingMouse(e.pageX - liPos.left, e.pageY - liPos.top, $(this).width(), $(this).height());
        var overlay =  $(this).find($(".overlay"));
      switch (bord) {
            case "left":
              overlay.stop().animate({"left":"-100%"},fast);
              break;
            case "right":
              overlay.stop().animate({"left":"100%"},fast);         
              break;
            case "top":
              overlay.stop().animate({"top":"-100%"},fast);
              break;
            case "bottom":
              overlay.stop().animate({"top":"100%"},fast);
              break;
        }
    });

function comingMouse(hor,vert,larg,haut) {
        var top = Math.abs(vert),
            bottom = Math.abs(vert-haut),
            left = Math.abs(hor),
            right = Math.abs(hor-larg);

        var min = Math.min(top,bottom,left,right);
        switch (min) {
            case left:
                return "left";
            case right:
                return "right";
            case top:
                return "top";
            case bottom:
                return "bottom";
        }
}