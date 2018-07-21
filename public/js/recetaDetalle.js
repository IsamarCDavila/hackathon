
  $(document).ready(function(){
    sizeTheVideo();
    $(window).resize(function(){
      sizeTheVideo();
    });
  });
  function sizeTheVideo(){
    var aspectRatio = 1.78;
    var video = $('iframe');
    var videoHeight = video.outerHeight();
    var newWidth = videoHeight*aspectRatio;
    var halfNewWidth = newWidth/2;
  video.css({"width":newWidth+"px","left":"50%","margin-left":"-"+halfNewWidth+"px"});
  }
