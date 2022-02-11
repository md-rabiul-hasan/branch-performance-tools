// Compare Table Data Hide
$('#compare-engagin-tso-oss-data').hide();

/// when page loaded then called  function
$(document).ready(function() {
    // current month top three branch
    topThreeBranchEngagingTsoOss();
});

/// working with top three branch engagin tso oss
function topThreeBranchEngagingTsoOss(event) {
    $('#date-fecht-before-loader').show();
    $('#engagin-tso-oss-data-show').hide();
    $('#engagin-tso-oss-data-not-found').hide();
    $.ajax({
        url: "ajax/branch/engagin-tso-oss/engagin-tso-oss.php",
        method: "post",
        timeout: 3000000,
        success: function(data) {
            $('#date-fecht-before-loader').hide();
            if (data == 0) {
                $('#engagin-tso-oss-data-show').hide();
                $('#engagin-tso-oss-data-not-found').show();
                $('#engagin-tso-oss-data-not-found').html('<div class="text-center font-weight-bold">Data Not Found :)</div>');
            } else {
                $('#engagin-tso-oss-data-not-found').hide();
                $('#engagin-tso-oss-data-show').fadeIn(1000);
                $('#engagin-tso-oss-data-show').html(data);
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




    $("#branch-compare-engagin-tso-oss").validate({
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

/// Compare Result Show Section in Engagin tso oss
$('#compare').on('click', function() {

    // input value
    var select_month = $('#select_month').val();
    var first_branch = $('#first_branch').val();
    var second_branch = $('#second_branch').val();
    var third_branch = $('#third_branch').val();

    if (select_month != '' && first_branch != '' && second_branch != '') {
        if (first_branch != second_branch && first_branch != third_branch && second_branch != third_branch) {
            event.preventDefault();

            $('#engagin-tso-oss-data').hide();
            $('#compare-engagin-tso-oss-data').show();
            $('#compare-date-fecht-before-loader').show();
            $('#compare-engagin-tso-oss-result-show').hide();
            $('#compare-engagin-tso-oss-result-not-found').hide();

            $.ajax({
                url: "ajax/branch/engagin-tso-oss/compare/engagin-tso-oss.php",
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
                        $('#compare-engagin-tso-oss-result-show').hide();
                        $('#compare-engagin-tso-oss-result-not-found').show();
                        $('#compare-engagin-tso-oss-result-not-found').html('<div class="text-center font-weight-bold">Data Not Found :)</div>');
                    } else {
                        $('#compare-engagin-tso-oss-result-not-found').hide()
                        $('#compare-engagin-tso-oss-result-show').show();
                        $('#compare-engagin-tso-oss-result-show').html(data);
                    }
                }
            });
        }

    }

});