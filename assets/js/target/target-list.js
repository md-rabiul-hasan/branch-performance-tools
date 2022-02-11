 // Compare Table Data Hide
 $('#compare-data').hide();
 /// when page loaded then called  function
 $(document).ready(function() {
     // current month top three branch
     topThreeBranchCommandExecution();
 });
 /// working with top three branch command execution
 function topThreeBranchCommandExecution(event) {
     $('#date-fecht-before-loader').show();
     $('#command-execution-data-show').hide();
     $('#command-execution-data-not-found').hide();
     $.ajax({
         url: "ajax/target/target-list.php",
         method: "post",
         timeout: 3000000,
         success: function(data) {
             $('#date-fecht-before-loader').hide();
             if (data == 0) {
                 $('#command-execution-data-show').hide();
                 $('#command-execution-data-not-found').show();
                 $('#command-execution-data-not-found').html('<div class="text-center font-weight-bold">Data Not Found :)</div>');
             } else {
                 $('#command-execution-data-not-found').hide();
                 $('#command-execution-data-show').fadeIn(1000);
                 $('#command-execution-data-show').html(data);
             }
         }
     });
 }

 /// From Validation
 $(function() {

     $.validator.setDefaults({
         errorClass: 'help-block',
         highlight: function(element) {
             $(element)
                 .closest('.form-group')
                 .addClass('has-error');
         },
         unhighlight: function(element) {
             $(element)
                 .closest('.form-group')
                 .removeClass('has-error');
         }
     });

     jQuery.validator.addMethod("notEqualTo", function(value, element, param) {
         return this.optional(element) || value != $(param).val();
     }, "This branch are already selected");

     jQuery.validator.addMethod("notMatchTo", function(value, element, param) {
         return this.optional(element) || value != $(param).val();
     }, "This branch are already selected");



     $("#branch-compare").validate({
         rules: {
            seach_option: {
                 required: true,
             }            
         },
     });

 });

 /// Compare Result Show Section
 $('#compare').on('click', function() {

     // input value
     var seach_option = $('#seach_option').val();

     if (seach_option != '' ) {
             event.preventDefault();
             $('#command-execution-data').hide();
             $('#compare-data').show();
             $('#compare-result-show').hide();
             $('#compare-command-execution-data-not-found').hide();
             $.ajax({
                 url: "ajax/target/search-target-list.php",
                 method: "POST",
                 data: {
                     'seach_option': seach_option
                 },
                 success: function(data) {
                     $('#compare-date-fecht-before-loader').hide();
                     if (data == 0) {
                         $('#compare-command-execution-data-not-found').show();
                         $('#compare-command-execution-data-not-found').html('<div class="text-center font-weight-bold">Data Not Found :)</div>');
                     } else {
                         $('#compare-command-execution-data-not-found').hide();
                         $('#compare-result-show').show();
                         $('#compare-result-show').html(data);
                     }

                 }
             });

     }

 });