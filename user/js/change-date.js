   
   document.addEventListener('DOMContentLoaded', function(event)
   {
      var myappt_menu_dropdownToggle = document.querySelectorAll('#myappt-menu .dropdown-toggle');
      myappt_menu_dropdownToggle.forEach(item => 
      {
         var dropdown = new bootstrap.Dropdown(item, {popperConfig:{placement:item.getAttribute('data-bs-placement')}});
      });
      var myappt_menu_dropdown = document.querySelectorAll('#myappt-menu .dropdown');
      myappt_menu_dropdown.forEach(item => 
      {
         item.addEventListener('shown.bs.dropdown', function(e)
         {
            e.currentTarget.classList.add('show');
         });
         item.addEventListener('hidden.bs.dropdown', function(e)
         {
            e.currentTarget.classList.remove('show');
         });
      });
      $("#user_myappt-menu").affix({offset:{top: $("#user_myappt-menu").offset().top}});
   });
   
   $(document).ready(function()
   {
      $("#user_myappt-menu").affix({offset:{top: $("#user_myappt-menu").offset().top}});
   });
