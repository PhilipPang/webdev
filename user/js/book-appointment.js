   
   $(document).ready(function()
   {
      $("#appt-service").validate(
      {
         required: true,
         bootstrap: true,
         type: 'select',
         color_text: '#000000',
         color_hint: '#00FF00',
         color_error: '#FF0000',
         color_border: '#808080',
         nohint: false,
         font_family: 'Arial',
         font_size: '13px',
         position: 'topleft',
         offsetx: 0,
         offsety: 0,
         effect: 'none',
         error_text: 'Please select a services'
      });
      $("#appt-date-time").datetimepicker(
      {
         useCurrent: true,
         defaultDate: new Date(),
         format: 'DD.MM.YYYY HH:mm',
         });
      $("#appt-tittle").validate(
      {
         required: true,
         bootstrap: true,
         type: 'text',
         length_min: '1',
         length_max: '50',
         color_text: '#000000',
         color_hint: '#00FF00',
         color_error: '#FF0000',
         color_border: '#808080',
         nohint: false,
         font_family: 'Arial',
         font_size: '13px',
         position: 'topleft',
         offsetx: 0,
         offsety: 0,
         effect: 'none',
         error_text: 'Please give technician know your problem'
      });
      $("#appt-cmnt").validate(
      {
         required: true,
         bootstrap: true,
         type: 'text',
         length_min: '1',
         color_text: '#000000',
         color_hint: '#00FF00',
         color_error: '#FF0000',
         color_border: '#808080',
         nohint: false,
         font_family: 'Arial',
         font_size: '13px',
         position: 'topleft',
         offsetx: 0,
         offsety: 0,
         effect: 'none',
         error_text: 'Explain more detail about your problem'
      });
      $("#book-appointmet").submit(function(event)
      {
         var isValid = $.validate.form(this);
         return isValid;
      });
   });
