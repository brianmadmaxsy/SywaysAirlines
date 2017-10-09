$(document).ready(function(){
        var date_input=$('input[name="departure"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        var options={
          format: 'mm/dd/yyyy',
          container: container,
          todayHighlight: true,
          autoclose: true,
        };
        date_input.datepicker(options);
      })

      $(document).ready(function(){
          var date_input=$('input[name="departure"]'); //our date input has the name "date"
          var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
          date_input.datepicker({
              format: 'mm/dd/yyyy',
              container: container,
              todayHighlight: true,
              autoclose: true,
          })
      })

$(document).ready(function(){
        var date_input=$('input[name="return"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        var options={
          format: 'mm/dd/yyyy',
          container: container,
          todayHighlight: true,
          autoclose: true,
        };
        date_input.datepicker(options);
      })

      $(document).ready(function(){
          var date_input=$('input[name="return"]'); //our date input has the name "date"
          var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
          date_input.datepicker({
              format: 'mm/dd/yyyy',
              container: container,
              todayHighlight: true,
              autoclose: true,
          })
      })
