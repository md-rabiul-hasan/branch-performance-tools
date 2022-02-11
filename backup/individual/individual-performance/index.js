$('#compareBranchIndividualPerformance').hide();
///   When Page Loaded Compleate Then called this method
$(document).ready(function() {
    // top individual first branch function
    topBranchCDFTWDREIndividualPerformance();
    topBranchCORDOIndividualPerformance();
    topBranchCCDICRRDCIndividualPerformance();
});
///   Run Cash Deposite Fund Transver  Individual branch for contribution in oss
function topBranchCDFTWDREIndividualPerformance() {
    $('#topBranchCDFTWDREIndividualPerformanceLoader').show();
    $('#topBranchCDFTWDREIndividualPerformanceData').hide();
    $('#topBranchCDFTWDREIndividualPerformanceDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/individual-performance/casa-fund-withdarawal-remitance.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            $('#topBranchCDFTWDREIndividualPerformanceLoader').hide();
            if (data == 0) {
                $('#topBranchCDFTWDREIndividualPerformanceData').hide();
                $('#topBranchCDFTWDREIndividualPerformanceDataNotFound').show();
                $('#topBranchCDFTWDREIndividualPerformanceDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#topBranchCDFTWDREIndividualPerformanceDataNotFound').hide();
                $('#topBranchCDFTWDREIndividualPerformanceData').show();

                var backgroundColor = [];
                var branch_name     = [];
                var cash_deposite   = [];
                var withdrawal      = [];
                var fundtransfer    = [];
                var remitance       = [];

                for (var i in data) {
                    cash_deposite.push(data[i].cash_deposite);
                    withdrawal.push(data[i].withdrawal);
                    fundtransfer.push(data[i].fundtransfer);
                    remitance.push(data[i].remitance);
                    branch_name.push(data[i].branch_name);
                }

                var chart = new Chart(topBranchCDFTWDREIndividualPerformanceGraph, {
                    type: 'horizontalBar',
                    data: {
                        labels  : branch_name,
                        datasets: [{
                                label          : "cash_deposite",
                                data           : cash_deposite,
                                backgroundColor: '#549E39'
                            },
                            {
                                label          : "withdrawal",
                                data           : withdrawal,
                                backgroundColor: '#8AB833'
                            },
                            {
                                label          : "fundtransfer",
                                data           : fundtransfer,
                                backgroundColor: '#C0CF3A'
                            },
                            {
                                label          : "Remitance",
                                data           : remitance,
                                backgroundColor: '#029676'
                            },
                        ]
                    },
                    options: {
                        responsive: false,
                        legend    : {
                            position: 'bottom'  // place legend on the right side of chart
                        },
                        scales: {
                            xAxes: [{
                                stacked: true,   // this should be set to make the bars stacked
                                ticks  : {
                                    fontSize : 13,
                                    fontColor: "#000"
                                }
                            }],
                            yAxes: [{
                                stacked: true,   // this also..
                                ticks  : {
                                    fontSize : 13,
                                    fontColor: "#000"
                                }
                            }]
                        }
                    }
                });
            }
        }
    });
}
///   Run Second Individual branch for contribution in oss
function topBranchCORDOIndividualPerformance() {
    $('#topBranchCORDOIndividualPerformanceLoader').show();
    $('#topBranchCORDOIndividualPerformanceData').hide();
    $('#topBranchCORDOIndividualPerformanceDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/individual-performance/casa-open-retail-deposite-open.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            $('#topBranchCORDOIndividualPerformanceLoader').hide();
            if (data == 0) {
                $('#topBranchCORDOIndividualPerformanceData').hide();
                $('#topBranchCORDOIndividualPerformanceDataNotFound').show();
                $('#topBranchCORDOIndividualPerformanceDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#topBranchCORDOIndividualPerformanceDataNotFound').hide();
                $('#topBranchCORDOIndividualPerformanceData').show();

                var backgroundColor = [];
                var branch_name     = [];
                var casa_open       = [];
                var term_deposite   = [];

                for (var i in data) {
                    casa_open.push(data[i].casa_open);
                    term_deposite.push(data[i].term_deposite);
                    branch_name.push(data[i].branch_name);
                }

                var topBranchCORDOIndividualPerformanceGraph = document.getElementById('topBranchCORDOIndividualPerformanceGraph').getContext('2d');

                var chart = new Chart(topBranchCORDOIndividualPerformanceGraph, {
                    type: 'horizontalBar',
                    data: {
                        labels  : branch_name,
                        datasets: [{
                                label          : "AC Open",
                                data           : casa_open,
                                backgroundColor: '#549E39'
                            },
                            {
                                label          : "TD Open",
                                data           : term_deposite,
                                backgroundColor: '#8AB833'
                            },
                        ]
                    },
                    options: {
                        responsive: false,
                        legend    : {
                            position: 'bottom',   // place legend on the bottom side of chart

                        },
                        scales: {
                            xAxes: [{
                                stacked: true,   // this should be set to make the bars stacked
                                ticks  : {
                                    fontSize : 14,
                                    fontColor: "#000"
                                }
                            }],
                            yAxes: [{
                                stacked: true,   // this also..
                                ticks  : {
                                    fontSize : 14,
                                    fontColor: "#000"
                                }
                            }]
                        }
                    }
                });


            }
        }
    });
}

///   Run Top First Individual branch for contribution in oss
function topBranchCCDICRRDCIndividualPerformance() {
    $('#topBranchCCDICRRDCIndividualPerformanceLoader').show();
    $('#topBranchCCDICRRDCIndividualPerformanceData').hide();
    $('#topBranchCCDICRRDCIndividualPerformanceDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/individual-performance/casa-close-data-input-cb-requisition-retail-deposite-close.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            $('#topBranchCCDICRRDCIndividualPerformanceLoader').hide();
            if (data == 0) {
                $('#topBranchCCDICRRDCIndividualPerformanceData').hide();
                $('#topBranchCCDICRRDCIndividualPerformanceDataNotFound').show();
                $('#topBranchCCDICRRDCIndividualPerformanceDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#topBranchCCDICRRDCIndividualPerformanceDataNotFound').hide();
                $('#topBranchCCDICRRDCIndividualPerformanceData').show();

                var backgroundColor       = [];
                var branch_name           = [];
                var td_partial_withdrawal = [];
                var td_withdrawal         = [];
                var account_close         = [];
                var customer_data_update  = [];
                var kyc                   = [];
                var tp                    = [];
                var cbr                   = [];

                for (var i in data) {
                    branch_name.push(data[i].branch_name);
                    td_partial_withdrawal.push(data[i].td_partial_withdrawal);
                    td_withdrawal.push(data[i].td_withdrawal);
                    account_close.push(data[i].account_close);
                    customer_data_update.push(data[i].customer_data_update);
                    kyc.push(data[i].kyc);
                    tp.push(data[i].tp);
                    cbr.push(data[i].cbr);

                }

                var topBranchCCDICRRDCIndividualPerformanceGraph = document.getElementById('topBranchCCDICRRDCIndividualPerformanceGraph').getContext('2d');
                var chart                                        = new Chart(topBranchCCDICRRDCIndividualPerformanceGraph, {
                    type       : 'horizontalBar',
                    fillOpacity: .3,
                    data       : {
                        labels  : branch_name,
                        datasets: [{
                                label          : "TD Partial Widraw",
                                data           : td_partial_withdrawal,
                                backgroundColor: '#549E39'
                            },
                            {
                                label          : "TD Withdrawal",
                                data           : td_withdrawal,
                                backgroundColor: '#8AB833'
                            },
                            {
                                label          : "AC Close",
                                data           : account_close,
                                backgroundColor: '#C0CF3A'
                            },
                            {
                                label          : "CAA",
                                data           : customer_data_update,
                                backgroundColor: '#029676'
                            },
                            {
                                label          : "KYC",
                                data           : kyc,
                                backgroundColor: '#4AB5C4'
                            },
                            {
                                label          : "TP",
                                data           : tp,
                                backgroundColor: '#0989B1'
                            },
                            {
                                label          : "CBR",
                                data           : cbr,
                                backgroundColor: '#325F22'
                            },
                        ]
                    },
                    options: {
                        responsive: false,
                        legend    : {
                            position: 'bottom'  // place legend on the right side of chart
                        },
                        scales: {
                            xAxes: [{
                                stacked: true,   // this should be set to make the bars stacked
                                ticks  : {
                                    fontSize : 13,
                                    fontColor: "#000"
                                }
                            }],
                            yAxes: [{
                                stacked: true,   // this also..
                                ticks  : {
                                    fontSize : 13,
                                    fontColor: "#000"
                                }
                            }]
                        }
                    }
                });


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
        highlight : function(element) {
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
        return this.optional(element) || value ! = $(param).val();
    }, "This branch are already selected");

    jQuery.validator.addMethod("notMatchTo", function(value, element, param) {
        return this.optional(element) || value ! = $(param).val();
    }, "This branch are already selected");


    $("#individualBranch").validate({
        rules: {
            start_date: {
                required: true,
            },
            end_date: {
                required: true,
            },
            individual_branch: {
                required: true,
            },
        },
        messages: {
            start_date: {
                required: 'please select start date',
            },
            end_date: {
                required: 'please select end date',
            },
            individual_branch: {
                required: 'please selec individual branch',
            },
        }
    });
});


////////////////////////////////////////////////////
///     Compare Branch 
///////////////////////////////////////////////////////

$('#search').on('click', function(event) {
    // input value
    var start_date        = $('#start_date').val();
    var end_date          = $('#end_date').val();
    var individual_branch = $('#individual_branch').val();

    if (start_date != '' && end_date != '' && individual_branch != '') {
        event.preventDefault();
        $('#topBranchIndividualPerformance').hide();
        $('#compareBranchIndividualPerformance').show();
        compareBranchCDFTWDREIndividualPerformance();
        compareBranchCORDOIndividualPerformance();
        compareBranchCCDICRRDCIndividualPerformance();
    } else {
        event.preventDefault();
        alert('please select all required fill');
    }

});



////////////////////////////////////////////////////
///   Run Top First Individual branch for system utilization
///////////////////////////////////////////////////////
function compareBranchCDFTWDREIndividualPerformance() {
    // input value
    var start_date        = $('#start_date').val();
    var end_date          = $('#end_date').val();
    var individual_branch = $('#individual_branch').val();

    $('#compareBranchCDFTWDREIndividualPerformanceLoader').show();
    $('#compareBranchCDFTWDREIndividualPerformanceData').hide();
    $('#compareBranchCDFTWDREIndividualPerformanceDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/individual-performance/compare/casa-fund-withdarawal-remitance.php",
        method : "post",
        timeout: 3000000,
        data   : {
            'start_date'       : start_date,
            'end_date'         : end_date,
            'individual_branch': individual_branch,
        },
        success: function(data) {
            $('#compareBranchCDFTWDREIndividualPerformanceLoader').hide();
            if (data == 0) {
                $('#compareBranchCDFTWDREIndividualPerformanceData').hide();
                $('#compareBranchCDFTWDREIndividualPerformanceDataNotFound').show();
                $('#compareBranchCDFTWDREIndividualPerformanceDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#compareBranchCDFTWDREIndividualPerformanceDataNotFound').hide();
                $('#compareBranchCDFTWDREIndividualPerformanceData').show();

                var backgroundColor = [];
                var branch_name     = [];
                var cash_deposite   = [];
                var withdrawal      = [];
                var fundtransfer    = [];
                var remitance       = [];

                for (var i in data) {
                    cash_deposite.push(data[i].cash_deposite);
                    withdrawal.push(data[i].withdrawal);
                    fundtransfer.push(data[i].fundtransfer);
                    remitance.push(data[i].remitance);
                    branch_name.push(data[i].branch_name);
                }



                var chart = new Chart(compareBranchCDFTWDREIndividualPerformanceGraph, {
                    type: 'horizontalBar',
                    data: {
                        labels  : branch_name,
                        datasets: [{
                                label          : "cash_deposite",
                                data           : cash_deposite,
                                backgroundColor: '#549E39'
                            },
                            {
                                label          : "withdrawal",
                                data           : withdrawal,
                                backgroundColor: '#8AB833'
                            },
                            {
                                label          : "fundtransfer",
                                data           : fundtransfer,
                                backgroundColor: '#C0CF3A'
                            },
                            {
                                label          : "Remitance",
                                data           : remitance,
                                backgroundColor: '#029676'
                            },
                        ]
                    },
                    options: {
                        responsive: false,
                        legend    : {
                            position: 'bottom'  // place legend on the right side of chart
                        },
                        scales: {
                            xAxes: [{
                                stacked: true,   // this should be set to make the bars stacked
                                ticks  : {
                                    fontSize : 13,
                                    fontColor: "#000"
                                }
                            }],
                            yAxes: [{
                                stacked: true,   // this also..
                                ticks  : {
                                    fontSize : 13,
                                    fontColor: "#000"
                                }
                            }]
                        }
                    }
                });
            }
        }
    });
}

////////////////////////////////////////////////////
///   Run Top First Individual branch for system utilization
///////////////////////////////////////////////////////
function compareBranchCORDOIndividualPerformance() {
    // input value
    var start_date        = $('#start_date').val();
    var end_date          = $('#end_date').val();
    var individual_branch = $('#individual_branch').val();

    $('#compareBranchCORDOIndividualPerformanceLoader').show();
    $('#compareBranchCORDOIndividualPerformanceData').hide();
    $('#compareBranchCORDOIndividualPerformanceDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/individual-performance/compare/casa-open-retail-deposite-open.php",
        method : "post",
        timeout: 3000000,
        data   : {
            'start_date'       : start_date,
            'end_date'         : end_date,
            'individual_branch': individual_branch,
        },
        success: function(data) {
            $('#compareBranchCORDOIndividualPerformanceLoader').hide();
            if (data == 0) {
                $('#compareBranchCORDOIndividualPerformanceData').hide();
                $('#compareBranchCORDOIndividualPerformanceDataNotFound').show();
                $('#compareBranchCORDOIndividualPerformanceDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#compareBranchCORDOIndividualPerformanceDataNotFound').hide();
                $('#compareBranchCORDOIndividualPerformanceData').show();

                var backgroundColor = [];
                var branch_name     = [];
                var casa_open       = [];
                var term_deposite   = [];

                for (var i in data) {
                    casa_open.push(data[i].casa_open);
                    term_deposite.push(data[i].term_deposite);
                    branch_name.push(data[i].branch_name);
                }

                var compareBranchCORDOIndividualPerformanceGraph = document.getElementById('compareBranchCORDOIndividualPerformanceGraph').getContext('2d');

                var chart = new Chart(compareBranchCORDOIndividualPerformanceGraph, {
                    type: 'horizontalBar',
                    data: {
                        labels  : branch_name,
                        datasets: [{
                                label          : "AC Open",
                                data           : casa_open,
                                backgroundColor: '#549E39'
                            },
                            {
                                label          : "TD Open",
                                data           : term_deposite,
                                backgroundColor: '#8AB833'
                            },
                        ]
                    },
                    options: {
                        responsive: false,
                        legend    : {
                            position: 'bottom'  // place legend on the right side of chart
                        },
                        scales: {
                            xAxes: [{
                                stacked: true,   // this should be set to make the bars stacked
                                ticks  : {
                                    fontSize : 13,
                                    fontColor: "#000"
                                }
                            }],
                            yAxes: [{
                                stacked: true,   // this also..
                                ticks  : {
                                    fontSize : 13,
                                    fontColor: "#000"
                                }
                            }]
                        }
                    }
                });


            }
        }
    });
}

////////////////////////////////////////////////////
///   Run Top First Individual branch for system utilization
///////////////////////////////////////////////////////
function compareBranchCCDICRRDCIndividualPerformance() {
    // input value
    var start_date        = $('#start_date').val();
    var end_date          = $('#end_date').val();
    var individual_branch = $('#individual_branch').val();

    $('#compareBranchCCDICRRDCIndividualPerformanceLoader').show();
    $('#compareBranchCCDICRRDCIndividualPerformanceData').hide();
    $('#compareBranchCCDICRRDCIndividualPerformanceDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/individual-performance/compare/casa-close-data-input-cb-requisition-retail-deposite-close.php",
        method : "post",
        timeout: 3000000,
        data   : {
            'start_date'       : start_date,
            'end_date'         : end_date,
            'individual_branch': individual_branch,
        },
        success: function(data) {
            $('#compareBranchCCDICRRDCIndividualPerformanceLoader').hide();
            if (data == 0) {
                $('#compareBranchCCDICRRDCIndividualPerformanceData').hide();
                $('#compareBranchCCDICRRDCIndividualPerformanceDataNotFound').show();
                $('#compareBranchCCDICRRDCIndividualPerformanceDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#compareBranchCCDICRRDCIndividualPerformanceDataNotFound').hide();
                $('#compareBranchCCDICRRDCIndividualPerformanceData').show();

                var backgroundColor       = [];
                var branch_name           = [];
                var td_partial_withdrawal = [];
                var td_withdrawal         = [];
                var account_close         = [];
                var customer_data_update  = [];
                var kyc                   = [];
                var tp                    = [];
                var cbr                   = [];

                for (var i in data) {
                    branch_name.push(data[i].branch_name);
                    td_partial_withdrawal.push(data[i].td_partial_withdrawal);
                    td_withdrawal.push(data[i].td_withdrawal);
                    account_close.push(data[i].account_close);
                    customer_data_update.push(data[i].customer_data_update);
                    kyc.push(data[i].kyc);
                    tp.push(data[i].tp);
                    cbr.push(data[i].cbr);

                }

                var compareBranchCCDICRRDCIndividualPerformanceGraph = document.getElementById('compareBranchCCDICRRDCIndividualPerformanceGraph').getContext('2d');
                var chart                                            = new Chart(compareBranchCCDICRRDCIndividualPerformanceGraph, {
                    type       : 'horizontalBar',
                    fillOpacity: .3,
                    data       : {
                        labels  : branch_name,
                        datasets: [{
                                label          : "TD Partial Widraw",
                                data           : td_partial_withdrawal,
                                backgroundColor: '#549E39'
                            },
                            {
                                label          : "TD Withdrawal",
                                data           : td_withdrawal,
                                backgroundColor: '#8AB833'
                            },
                            {
                                label          : "AC Close",
                                data           : account_close,
                                backgroundColor: '#C0CF3A'
                            },
                            {
                                label          : "CAA",
                                data           : customer_data_update,
                                backgroundColor: '#029676'
                            },
                            {
                                label          : "KYC",
                                data           : kyc,
                                backgroundColor: '#4AB5C4'
                            },
                            {
                                label          : "TP",
                                data           : tp,
                                backgroundColor: '#0989B1'
                            },
                            {
                                label          : "CBR",
                                data           : cbr,
                                backgroundColor: '#325F22'
                            },
                        ]
                    },
                    options: {
                        responsive: false,
                        legend    : {
                            position: 'bottom'  // place legend on the right side of chart
                        },
                        scales: {
                            xAxes: [{
                                stacked: true,   // this should be set to make the bars stacked
                                ticks  : {
                                    fontSize : 13,
                                    fontColor: "#000"
                                }
                            }],
                            yAxes: [{
                                stacked: true,   // this also..
                                ticks  : {
                                    fontSize : 13,
                                    fontColor: "#000"
                                }
                            }]
                        }
                    }
                });


            }
        }
    });
}