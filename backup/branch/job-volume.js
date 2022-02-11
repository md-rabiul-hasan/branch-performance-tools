///  Hide Branch Compare Job Volume Section 
$('#compareBranchJobVolume').hide();

///     When Page Loaded Compleate Then called this method
$(document).ready(function() {
    cashWithdrawFundRemitance();
    casaOpenTermDepositOpen();
    casaDataCBTermDeposite();
});


///   Cash-Deposite/Withdrawal/Fund-Transfer/Remitance
function cashWithdrawFundRemitance(event) {

    $('#cashFundWithdrawRemitanceLoader').show();
    $('#cashFundWithdrawRemitanceData').hide();
    $('#cashFundWithdrawRemitanceDataNotFound').hide();

    $.ajax({
        url    : "ajax/branch/job-volume/casa-fund-withdarawal-remitance.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            // loader hide 
            $('#cashFundWithdrawRemitanceLoader').hide();
            if (data == 0) {
                $('#cashFundWithdrawRemitanceData').hide();
                $('#cashFundWithdrawRemitanceDataNotFound').fadeIn(1000);
                $('#cashFundWithdrawRemitanceDataNotFound').html('<div class="text-center font-weight-bold">Data Not Found :)</div>');
            } else {
                $('#cashFundWithdrawRemitanceDataNotFound').hide();
                $('#cashFundWithdrawRemitanceData').fadeIn(1000);

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

                var chart = new Chart(cashFundWithdrawRemitance, {
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
///   CASA Open/Term Deposit Open
function casaOpenTermDepositOpen(event) {

    $('#casaOpenTermDepositOpenLoader').show();
    $('#casaOpenTermDepositOpenData').hide();
    $('#casaOpenTermDepositOpenDataNotFound').hide();

    $.ajax({
        url    : "ajax/branch/job-volume/acopen-tdopen.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            //loader hide 
            $('#casaOpenTermDepositOpenLoader').hide();

            if (data == 0) {
                $('#casaOpenTermDepositOpenData').hide();
                $('#casaOpenTermDepositOpenDataNotFound').fadeIn(1000);
                $('#casaOpenTermDepositOpenDataNotFound').html('<div class="text-center font-weight-bold">Data Not Found :)</div>');
            } else {
                $('#casaOpenTermDepositOpenDataNotFound').hide();
                $('#casaOpenTermDepositOpenData').fadeIn(1000);

                var backgroundColor = [];
                var branch_name     = [];
                var casa_open       = [];
                var term_deposite   = [];

                for (var i in data) {
                    casa_open.push(data[i].casa_open);
                    term_deposite.push(data[i].term_deposite);
                    branch_name.push(data[i].branch_name);
                }

                var casaOpenTermDepositOpen = document.getElementById('casaOpenTermDepositOpen').getContext('2d');

                var chart = new Chart(casaOpenTermDepositOpen, {
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

///   CASA Close/Data Input/CB Requisition/Term Deposit Close
function casaDataCBTermDeposite(event) {
    $('#casaDataCBTermLoader').show();
    $('#casaDataCBTermData').hide();
    $('#casaDataCBTermDataNotFound').hide();

    $.ajax({
        url    : "ajax/branch/job-volume/casa-data-cb-term.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            $('#casaDataCBTermLoader').hide();
            if (data == 0) {
                $('#casaDataCBTermData').hide();
                $('#casaDataCBTermDataNotFound').fadeIn(1000);
                $('#casaDataCBTermDataNotFound').html('<div class="text-center font-weight-bold">Data Not Found :)</div>');
            } else {
                $('#casaDataCBTermDataNotFound').hide();
                $('#casaDataCBTermData').fadeIn(1000);

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

                var casaDataCBTermDeposite = document.getElementById('casaDataCBTermDeposite').getContext('2d');
                var chart                  = new Chart(casaDataCBTermDeposite, {
                    type: 'horizontalBar',
                    data: {
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

///     From Validation 
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
        return this.optional(element) || value != $(param).val();
    }, "This branch are already selected");

    jQuery.validator.addMethod("notMatchTo", function(value, element, param) {
        return this.optional(element) || value != $(param).val();
    }, "This branch are already selected");


    $("#system-utilization").validate({
        rules: {
            start_date: {
                required: true,
            },
            end_date: {
                required: true,
            },
            first_branch: {
                required  : true,
            },
            second_branch: {
                required  : true,
            },
        },
        messages: {
            start_date: {
                required: 'please select start date',
            },
            end_date: {
                required: 'please select end date',
            },
            first_branch: {
                required: 'please selec a branch',
            },
            second_branch: {
                required: 'please select another branch',
            },
        }
    });
});

///  Compare Branch 
$('#compare').on('click', function(event) {
    // input value
    var start_date    = $('#start_date').val();
    var end_date      = $('#end_date').val();
    var first_branch  = $('#first_branch').val();
    var second_branch = $('#second_branch').val();
    var third_branch  = $('#third_branch').val();
    // check value found or not
    if (start_date != '' && end_date != '' && first_branch != '' && second_branch != '') {
        if (first_branch != second_branch && first_branch != third_branch && second_branch != third_branch) {
            event.preventDefault();
            $('#topThreeBranchJobVolume').hide();
            $('#compareBranchJobVolume').show();
            // call to compare three branch cash deposite / Fund transfer / Withdrawal / Remitance
            compareThreeBranchCashFundWitdrawalRemitance();
            compareCasaOpenTermDepositOpen();
            compareCasaDataCBTermDeposite();
        } else {
            event.preventDefault();
            alert("please select different branch for branch compare");

        }
    }
});

/// compareThreeBranch Cash Fund Witdrawal Remitance Function
function compareThreeBranchCashFundWitdrawalRemitance() {
    // input value
    var start_date    = $('#start_date').val();
    var end_date      = $('#end_date').val();
    var first_branch  = $('#first_branch').val();
    var second_branch = $('#second_branch').val();
    var third_branch  = $('#third_branch').val();

    if (start_date != '' && end_date != '' && first_branch != '' && second_branch != '') {
        $('#compareCashFundWithdrawRemitanceLoader').show();
        $('#compareCashFundWithdrawRemitanceData').hide();
        $('#compareCashFundWithdrawRemitanceDataNotFound').hide();


        // working with ajax
        $.ajax({
            url    : "ajax/branch/job-volume/compare/cash-fund-withdrawal-remitance.php",
            method : "post",
            timeout: 3000000,
            data   : {
                'start_date'   : start_date,
                'end_date'     : end_date,
                'first_branch' : first_branch,
                'second_branch': second_branch,
                'third_branch' : third_branch,
            },
            success: function(data) {
                // loader hide
                $('#compareCashFundWithdrawRemitanceLoader').hide();
                if (data == 0) {
                    $('#compareCashFundWithdrawRemitanceData').hide();
                    $('#compareCashFundWithdrawRemitanceDataNotFound').fadeIn(1000);
                    $('#compareCashFundWithdrawRemitanceDataNotFound').html('<div class="text-center font-weight-bold">Data Not Found :)</div>');
                } else {
                    $('#compareCashFundWithdrawRemitanceDataNotFound').hide();
                    $('#compareCashFundWithdrawRemitanceData').fadeIn(1000);

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

                    var chart = new Chart(compareCashFundWithdrawRemitance, {
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
        })
    }
}

/// compareThreeBranch Casa-Open / Term-DepositOpen Function
function compareCasaOpenTermDepositOpen(event) {
    // input value
    var start_date    = $('#start_date').val();
    var end_date      = $('#end_date').val();
    var first_branch  = $('#first_branch').val();
    var second_branch = $('#second_branch').val();
    var third_branch  = $('#third_branch').val();

    if (start_date != '' && end_date != '' && first_branch != '' && second_branch != '') {
        $('#compareCasaOpenTermDepositOpenLoader').show();
        $('#compareCasaOpenTermDepositOpenData').hide();
        $('#compareCasaOpenTermDepositOpenDataNotFound').hide();



        $.ajax({
            url    : "ajax/branch/job-volume/compare/casa-open-term-deposite.php",
            method : "post",
            timeout: 3000000,
            data   : {
                'start_date'   : start_date,
                'end_date'     : end_date,
                'first_branch' : first_branch,
                'second_branch': second_branch,
                'third_branch' : third_branch,
            },
            success: function(data) {
                $('#compareCasaOpenTermDepositOpenLoader').hide();
                if (data == 0) {
                    $('#compareCasaOpenTermDepositOpenData').hide();
                    $('#compareCasaOpenTermDepositOpenDataNotFound').fadeIn(1000);
                    $('#compareCasaOpenTermDepositOpenDataNotFound').html('<div class="text-center font-weight-bold">Data Not Found :)</div>');
                } else {
                    $('#compareCasaOpenTermDepositOpenDataNotFound').hide();
                    $('#compareCasaOpenTermDepositOpenData').fadeIn(1000);

                    var backgroundColor = [];
                    var branch_name     = [];
                    var casa_open       = [];
                    var term_deposite   = [];

                    for (var i in data) {
                        casa_open.push(data[i].casa_open);
                        term_deposite.push(data[i].term_deposite);
                        branch_name.push(data[i].branch_name);
                    }

                    var compareCasaOpenTermDepositOpen = document.getElementById('compareCasaOpenTermDepositOpen').getContext('2d');
                    var chart                          = new Chart(compareCasaOpenTermDepositOpen, {
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
}

/// compareThreeBranch Casa Data CBTerm Deposite Function
function compareCasaDataCBTermDeposite(event) {
    // input value
    var start_date    = $('#start_date').val();
    var end_date      = $('#end_date').val();
    var first_branch  = $('#first_branch').val();
    var second_branch = $('#second_branch').val();
    var third_branch  = $('#third_branch').val();

    if (start_date != '' && end_date != '' && first_branch != '' && second_branch != '') {
        $('#compareCasaDataCBTermLoader').show();
        $('#compareCasaDataCBTermData').hide();
        $('#compareCasaDataCBTermDataNotFound').hide();


        $.ajax({
            url    : "ajax/branch/job-volume/compare/casa-data-cb-term.php",
            method : "post",
            timeout: 3000000,
            data   : {
                'start_date'   : start_date,
                'end_date'     : end_date,
                'first_branch' : first_branch,
                'second_branch': second_branch,
                'third_branch' : third_branch,
            },
            success: function(data) {
                // loader hide
                $('#compareCasaDataCBTermLoader').hide();
                if (data == 0) {
                    $('#compareCasaDataCBTermData').hide();
                    $('#compareCasaDataCBTermDataNotFound').fadeIn(1000);
                    $('#compareCasaDataCBTermDataNotFound').html('<div class="text-center font-weight-bold">Data Not Found :)</div>');
                } else {
                    $('#compareCasaDataCBTermDataNotFound').hide();
                    $('#compareCasaDataCBTermData').fadeIn(1000);

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

                    var compareCasaDataCBTermDeposite = document.getElementById('compareCasaDataCBTermDeposite').getContext('2d');
                    var chart                         = new Chart(compareCasaDataCBTermDeposite, {
                        type: 'horizontalBar',
                        data: {
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
}