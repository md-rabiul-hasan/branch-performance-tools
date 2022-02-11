$('#individualBranchTSOPerformance').hide();
////////////////////////////////////////////////////
///  when page reload then called top branch tso wise performance
///////////////////////////////////////////////////////
$(document).ready(function() {
    tsoWisePerformanceTopBranch();
});

////////////////////////////////////////////////////
///  TSO wise branch performance function
///////////////////////////////////////////////////////
function tsoWisePerformanceTopBranch(event) {
    $('#topBranchTsoWisePerformanceLoader').show();
    $('#topBranchTsoWisePerformanceDataShow').hide();
    $('#topBranchTsoWisePerformanceDataNotFound').hide();
    // working with ajax
    $.ajax({
        url: "ajax/individual/tso-wise-performance/top-branch.php",
        method: "post",
        timeout: 3000000,
        success: function(data) {
            // hide loader
            $('#topBranchTsoWisePerformanceLoader').hide();
            if (data == 0) {
                $('#topBranchTsoWisePerformanceDataShow').hide();
                $('#topBranchTsoWisePerformanceDataNotFound').show();
                $('#topBranchTsoWisePerformanceDataNotFound').html('<div class="text-center font-weight-bold text-uppercase">Data Not Found :)</div>');
            } else {
                $('#topBranchTsoWisePerformanceDataNotFound').hide();
                $('#topBranchTsoWisePerformanceDataShow').show();
                $('#topBranchTsoWisePerformanceDataShow').html(data);
            }
        }
    });
}




////////////////////////////////////////////////////
///     From Validation 
///////////////////////////////////////////////////////

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



    $("#individualBranch").validate({
        rules: {
            individual_branch: {
                required: true,
            },
            select_month: {
                required: true,
            },
        },
        messages: {
            individual_branch: {
                required: 'please select individual branch',
            },
            select_month: {
                required: 'please select a single month',
            },
        }
    });
});

////////////////////////////////////////////////////
///     Compare Branch 
///////////////////////////////////////////////////////

$('#search').on('click', function(event) {
    // input value
    var select_month = $('#select_month').val();
    var individual_branch = $('#individual_branch').val();

    // check value found or not
    if (select_month != '' && individual_branch != '') {
        // stop page reload
        event.preventDefault();

        $('#topBranchTsoWisePerformance').hide();
        $('#individualBranchTSOPerformance').show();
        $('#individualBranchTSOPerformanceLoader').show();
        $('#individualBranchTSOPerformanceDatShow').hide();
        $('#individualBranchTSOPerformanceDataNotFound').hide();

        $.ajax({
            url: "ajax/individual/tso-wise-performance/individual-branch-tso-performance.php",
            method: "post",
            timeout: 3000000,
            data : {
                'select_month' : select_month,
                'individual_branch' : individual_branch,
            },
            success: function(data) {
                console.log(data);
                // hide loader
                $('#individualBranchTSOPerformanceLoader').hide();
                if (data == 0) {
                    $('#individualBranchTSOPerformanceDatShow').hide();
                    $('#individualBranchTSOPerformanceDataNotFound').show();
                    $('#individualBranchTSOPerformanceDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">No Data Found :)</div>');
                } else {
                    $('#individualBranchTSOPerformanceDataNotFound').hide();
                    $('#individualBranchTSOPerformanceDatShow').show();
                    $('#individualBranchTSOPerformanceDatShow').html(data);
                }
            }
        });

    }

});