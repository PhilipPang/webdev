<script>   
   $(document).ready(function()
   {
      $('#user_nav-info').addClass('visibility-hidden');
      $('#user_Footer-logo').addClass('visibility-hidden');
      $('#user_Footer-social-grid').addClass('visibility-hidden');
      function onScrollnav_info()
      {
         var $obj = $("#user_nav-info");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(true))
         {
            $obj.addClass("in-viewport");
            AnimateCss('user_nav-info', 'slide-down-in', 200, 1250);
         }
         else
         if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
         {
            $obj.removeClass("in-viewport");
            AnimateCss('user_nav-info', 'animate-fade-out', 0, 0);
         }
      }
      if (!$('#user_nav-info').inViewPort(true))
      {
         $('#user_nav-info').addClass("in-viewport");
      }
      onScrollnav_info();
      $(window).scroll(function(event)
      {
         onScrollnav_info();
      });
      function onScrollFooter_logo()
      {
         var $obj = $("#user_Footer-logo");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(true))
         {
            $obj.addClass("in-viewport");
            AnimateCss('user_Footer-logo', 'puff-in', 0, 1250);
         }
         else
         if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
         {
            $obj.removeClass("in-viewport");
            AnimateCss('user_Footer-logo', 'animate-fade-out', 0, 0);
         }
      }
      if (!$('#user_Footer-logo').inViewPort(true))
      {
         $('#user_Footer-logo').addClass("in-viewport");
      }
      onScrollFooter_logo();
      $(window).scroll(function(event)
      {
         onScrollFooter_logo();
      });
      function onScrollFooter_social_grid()
      {
         var $obj = $("#user_Footer-social-grid");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(true))
         {
            $obj.addClass("in-viewport");
            AnimateCss('user_Footer-social-grid', 'slide-up-in', 100, 1250);
         }
         else
         if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
         {
            $obj.removeClass("in-viewport");
            AnimateCss('user_Footer-social-grid', 'animate-fade-out', 0, 0);
         }
      }
      if (!$('#user_Footer-social-grid').inViewPort(true))
      {
         $('#user_Footer-social-grid').addClass("in-viewport");
      }
      onScrollFooter_social_grid();
      $(window).scroll(function(event)
      {
         onScrollFooter_social_grid();
      });
   jQuery.goup({
      alwaysVisible: false, 
      arrowColor: '#FFFFFF', 
      bottomOffset: 10, 
      containerColor: '#6366F1',
      containerRadius: 500,
      entryAnimation: 'fade',
      goupSpeed: 'slow',
      hideUnderWidth: 500,
      location: 'right',            
      locationOffset: 20,
      title: 'Go up',
      titleAsText: true,
      trigger: 500,
      zIndex: 1
   });
   });
</script>