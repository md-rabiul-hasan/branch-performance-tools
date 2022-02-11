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
         url: "ajax/branch/command-execution/branch-command-execution.php",
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
             select_month: {
                 required: true,
             },
             first_branch: {
                 required: true,
                 notEqualTo: '#second_branch',
                 notMatchTo: '#third_branch',
             },
             second_branch: {
                 required: true,
                 notEqualTo: '#first_branch',
                 notMatchTo: '#third_branch',
             },
             third_branch: {
                 notEqualTo: '#first_branch',
                 notMatchTo: '#second_branch',
             },
         },
         messages: {
             select_month: {
                 required: 'please select a single month',
             },
             first_branch: {
                 required: 'please select first brach',
             },
             second_branch: {
                 required: 'please select second branch',
             },
         }
     });

 });

 /// Compare Result Show Section
 $('#compare').on('click', function() {

     // input value
     var select_month = $('#select_month').val();
     var first_branch = $('#first_branch').val();
     var second_branch = $('#second_branch').val();
     var third_branch = $('#third_branch').val();

     if (select_month != '' && first_branch != '' && second_branch != '') {
         if (first_branch != second_branch && first_branch != third_branch && second_branch != third_branch) {
             event.preventDefault();
             $('#command-execution-data').hide();
             $('#compare-data').show();
             $('#compare-result-show').hide();
             $('#compare-command-execution-data-not-found').hide();
             $.ajax({
                 url: "ajax/branch/command-execution/compare/branch-compare-command-execution.php",
                 method: "POST",
                 data: {
                     'select_month': select_month,
                     'first_branch': first_branch,
                     'second_branch': second_branch,
                     'third_branch': third_branch,
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



     }

 });