$('#compareBranchIndividualSystemUtilization').hide();
////////////////////////////////////////////////////
///     When Page Loaded Compleate Then called this method
///////////////////////////////////////////////////////
$(document).ready(function() {
    // top individual first branch function
    topFirstBranchIndividualSystemUtilization();
    // top individual second branch function
    topSecondBranchIndividualSystemUtilization();
    // top individual second branch function
    topThirdBranchIndividualSystemUtilization();
});
////////////////////////////////////////////////////
///   Run Top First Individual branch for system utilization
///////////////////////////////////////////////////////
function topFirstBranchIndividualSystemUtilization() {
    $('#topFirstBranchIndividualSystemUtilizationLoader').show();
    $('#topFirstBranchIndividualSystemUtilizationData').hide();
    $('#topFirstBranchIndividualSystemUtilizationDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/system-utilization/top-first-branch.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            $('#topFirstBranchIndividualSystemUtilizationLoader').hide();
            if (data == 0) {
                $('#topFirstBranchIndividualSystemUtilizationData').hide();
                $('#topFirstBranchIndividualSystemUtilizationDataNotFound').show();
                $('#topFirstBranchIndividualSystemUtilizationDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#topFirstBranchIndividualSystemUtilizationDataNotFound').hide();
                $('#topFirstBranchIndividualSystemUtilizationData').show();

                var branch_full_name  = [];
                var total_transection = [];


                for (var i in data) {
                    branch_full_name.push(data[i].branch_full_name);
                    total_transection.push(data[i].total_transection);
                }

                var chartdata = {
                    labels  : branch_full_name,
                    datasets: [{
                        label          : 'Total Activaty Of Branch',
                        backgroundColor: [
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                        ],
                        data: total_transection
                    }],
                    options: {
                        scales: {
                            xAxes: [{
                                stacked      : true,
                                barPercentage: 0.4
                            }],
                            yAxes: [{
                                stacked      : true,
                                barPercentage: 0.4
                            }]
                        },
                    }
                };

                var graphTarget = document.getElementById('topFirstBranchIndividualSystemUtilizationGraph').getContext('2d');

                var barGraph = new Chart(graphTarget, {
                    type: 'bar',
                    data: chartdata
                });


            }
        }
    });
}

////////////////////////////////////////////////////
///   Run Top Second Individual branch for system utilization
///////////////////////////////////////////////////////
function topSecondBranchIndividualSystemUtilization() {
    $('#topSecondBranchIndividualSystemUtilizationLoader').show();
    $('#topSecondBranchIndividualSystemUtilizationData').hide();
    $('#topSecondBranchIndividualSystemUtilizationDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/system-utilization/top-second-branch.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            $('#topSecondBranchIndividualSystemUtilizationLoader').hide();
            if (data == 0) {
                $('#topSecondBranchIndividualSystemUtilizationData').hide();
                $('#topSecondBranchIndividualSystemUtilizationDataNotFound').show();
                $('#topSecondBranchIndividualSystemUtilizationDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#topSecondBranchIndividualSystemUtilizationDataNotFound').hide();
                $('#topSecondBranchIndividualSystemUtilizationData').show();

                var branch_full_name  = [];
                var total_transection = [];


                for (var i in data) {
                    branch_full_name.push(data[i].branch_full_name);
                    total_transection.push(data[i].total_transection);
                }

                var chartdata = {
                    labels  : branch_full_name,
                    datasets: [{
                        label          : 'Total Activaty Of Branch',
                        backgroundColor: [
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                        ],
                        data: total_transection
                    }],
                    options: {
                        scales: {
                            xAxes: [{
                                stacked      : true,
                                barPercentage: 0.4
                            }],
                            yAxes: [{
                                stacked      : true,
                                barPercentage: 0.4
                            }]
                        },
                    }
                };

                var graphTarget = document.getElementById('topSecondBranchIndividualSystemUtilizationGraph').getContext('2d');

                var barGraph = new Chart(graphTarget, {
                    type: 'bar',
                    data: chartdata
                });


            }
        }
    });
}

////////////////////////////////////////////////////
///   Run Top Third Individual branch for system utilization
///////////////////////////////////////////////////////
function topThirdBranchIndividualSystemUtilization() {
    $('#topThirdBranchIndividualSystemUtilizationLoader').show();
    $('#topThirdBranchIndividualSystemUtilizationData').hide();
    $('#topThirdBranchIndividualSystemUtilizationDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/system-utilization/top-third-branch.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            $('#topThirdBranchIndividualSystemUtilizationLoader').hide();
            if (data == 0) {
                $('#topThirdBranchIndividualSystemUtilizationData').hide();
                $('#topThirdBranchIndividualSystemUtilizationDataNotFound').show();
                $('#topThirdBranchIndividualSystemUtilizationDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#topThirdBranchIndividualSystemUtilizationDataNotFound').hide();
                $('#topThirdBranchIndividualSystemUtilizationData').show();

                var branch_full_name  = [];
                var total_transection = [];


                for (var i in data) {
                    branch_full_name.push(data[i].branch_full_name);
                    total_transection.push(data[i].total_transection);
                }

                var chartdata = {
                    labels  : branch_full_name,
                    datasets: [{
                        label          : 'Total Activaty Of Branch',
                        backgroundColor: [
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                        ],
                        data: total_transection
                    }],
                    options: {
                        scales: {
                            xAxes: [{
                                stacked      : true,
                                barPercentage: 0.4
                            }],
                            yAxes: [{
                                stacked      : true,
                                barPercentage: 0.4
                            }]
                        },
                    }
                };

                var graphTarget = document.getElementById('topThirdBranchIndividualSystemUtilizationGraph').getContext('2d');

                var barGraph = new Chart(graphTarget, {
                    type: 'bar',
                    data: chartdata
                });;

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


    $("#individual-system-utilization").validate({
        rules: {
            start_date: {
                required: true,
            },
            end_date: {
                required: true,
            },
            first_branch: {
                required  : true,
                notEqualTo: '#second_branch',
                notMatchTo: '#third_branch',
            },
            second_branch: {
                required  : true,
                notEqualTo: '#first_branch',
                notMatchTo: '#third_branch',
            },
            third_branch: {
                notEqualTo: '#first_branch',
                notMatchTo: '#second_branch',
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


////////////////////////////////////////////////////
///     Compare Branch 
///////////////////////////////////////////////////////

$('#compare').on('click', function(event) {
    // input value
    var start_date    = $('#start_date').val();
    var end_date      = $('#end_date').val();
    var first_branch  = $('#first_branch').val();
    var second_branch = $('#second_branch').val();
    var third_branch  = $('#third_branch').val();

    $('#compareThirdBranchIndividualSystemUtilization').hide();

    // check value found or not
    if (start_date != '' && end_date != '' && first_branch != '' && second_branch != '') {

        if (first_branch != second_branch && first_branch != third_branch && second_branch != third_branch) {
            event.preventDefault();
            $('#topBranchIndividualSystemUtilization').hide();
            $('#compareBranchIndividualSystemUtilization').show();

            // top individual first branch function
            compareFirstBranchIndividualSystemUtilization();
            // top individual second branch function
            compareSecondBranchIndividualSystemUtilization();
            // top individual second branch function
            if (third_branch != '') {
                compareThirdBranchIndividualSystemUtilization();
            }

        } else {
            event.preventDefault();
            alert("please select different branch for branch compare");
        }
    }
});

////////////////////////////////////////////////////
///   Run Top First Individual branch for system utilization
///////////////////////////////////////////////////////
function compareFirstBranchIndividualSystemUtilization() {
    $('#compareBranchIndividualSystemUtilization').show();
    $('#compareFirstBranchIndividualSystemUtilization').show();
    $('#compareFirstBranchIndividualSystemUtilizationLoader').show();
    $('#compareFirstBranchIndividualSystemUtilizationData').hide();
    $('#compareFirstBranchIndividualSystemUtilizationDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/system-utilization/compare/compare-first-branch.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            $('#compareFirstBranchIndividualSystemUtilizationLoader').hide();
            if (data == 0) {
                $('#compareFirstBranchIndividualSystemUtilizationData').hide();
                $('#compareFirstBranchIndividualSystemUtilizationDataNotFound').show();
                $('#compareFirstBranchIndividualSystemUtilizationDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#compareFirstBranchIndividualSystemUtilizationDataNotFound').hide();
                $('#compareFirstBranchIndividualSystemUtilizationData').show();

                var branch_full_name  = [];
                var total_transection = [];


                for (var i in data) {
                    branch_full_name.push(data[i].branch_full_name);
                    total_transection.push(data[i].total_transection);
                }

                var chartdata = {
                    labels  : branch_full_name,
                    datasets: [{
                        label          : 'Total Activaty Of Branch',
                        backgroundColor: [
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                        ],
                        data: total_transection
                    }],
                    options: {
                        scales: {
                            xAxes: [{
                                stacked      : true,
                                barPercentage: 0.4
                            }],
                            yAxes: [{
                                stacked      : true,
                                barPercentage: 0.4
                            }]
                        },
                    }
                };

                var graphTarget = document.getElementById('compareFirstBranchIndividualSystemUtilizationGraph').getContext('2d');

                var barGraph = new Chart(graphTarget, {
                    type: 'bar',
                    data: chartdata
                });




            }
        }
    });
}

////////////////////////////////////////////////////
///   Run Top First Individual branch for system utilization
///////////////////////////////////////////////////////
function compareSecondBranchIndividualSystemUtilization() {
    $('#compareBranchIndividualSystemUtilization').show();
    $('#compareSecondBranchIndividualSystemUtilization').show();
    $('#compareSecondBranchIndividualSystemUtilizationLoader').show();
    $('#compareSecondBranchIndividualSystemUtilizationData').hide();
    $('#compareSecondBranchIndividualSystemUtilizationDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/system-utilization/compare/compare-second-branch.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            $('#compareSecondBranchIndividualSystemUtilizationLoader').hide();
            if (data == 0) {
                $('#compareSecondBranchIndividualSystemUtilizationData').hide();
                $('#compareSecondBranchIndividualSystemUtilizationDataNotFound').show();
                $('#compareSecondBranchIndividualSystemUtilizationDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#compareSecondBranchIndividualSystemUtilizationDataNotFound').hide();
                $('#compareSecondBranchIndividualSystemUtilizationData').show();

                var branch_full_name  = [];
                var total_transection = [];


                for (var i in data) {
                    branch_full_name.push(data[i].branch_full_name);
                    total_transection.push(data[i].total_transection);
                }

                var chartdata = {
                    labels  : branch_full_name,
                    datasets: [{
                        label          : 'Total Activaty Of Branch',
                        backgroundColor: [
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                            '#549E39',
                        ],
                        data: total_transection
                    }],
                    options: {
                        scales: {
                            xAxes: [{
                                stacked      : true,
                                barPercentage: 0.4
                            }],
                            yAxes: [{
                                stacked      : true,
                                barPercentage: 0.4
                            }]
                        },
                    }
                };

                var graphTarget = document.getElementById('compareSecondBranchIndividualSystemUtilizationGraph').getContext('2d');

                var barGraph = new Chart(graphTarget, {
                    type: 'bar',
                    data: chartdata
                });


            }
        }
    });
}

if (third_branch != '') {
    ////////////////////////////////////////////////////
    ///   Run Compare Third Individual branch for system utilization
    ///////////////////////////////////////////////////////
    function compareThirdBranchIndividualSystemUtilization() {
        $('#compareBranchIndividualSystemUtilization').show();
        $('#compareThirdBranchIndividualSystemUtilization').show();
        $('#compareThirdBranchIndividualSystemUtilizationLoader').show();
        $('#compareThirdBranchIndividualSystemUtilizationData').hide();
        $('#compareThirdBranchIndividualSystemUtilizationDataNotFound').hide();
        // data fetch with ajax
        $.ajax({
            url    : "ajax/individual/system-utilization/compare/compare-third-branch.php",
            method : "post",
            timeout: 3000000,
            success: function(data) {
                $('#compareThirdBranchIndividualSystemUtilizationLoader').hide();
                if (data == 0) {
                    $('#compareThirdBranchIndividualSystemUtilizationData').hide();
                    $('#compareThirdBranchIndividualSystemUtilizationDataNotFound').show();
                    $('#compareThirdBranchIndividualSystemUtilizationDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
                } else {
                    $('#compareThirdBranchIndividualSystemUtilizationDataNotFound').hide();
                    $('#compareThirdBranchIndividualSystemUtilizationData').show();

                    var branch_full_name  = [];
                    var total_transection = [];


                    for (var i in data) {
                        branch_full_name.push(data[i].branch_full_name);
                        total_transection.push(data[i].total_transection);
                    }

                    var chartdata = {
                        labels  : branch_full_name,
                        datasets: [{
                            label          : 'Total Activaty Of Branch',
                            backgroundColor: [
                                '#549E39',
                                '#549E39',
                                '#549E39',
                                '#549E39',
                                '#549E39',
                                '#549E39',
                                '#549E39',
                                '#549E39',
                                '#549E39',
                                '#549E39',
                                '#549E39',
                                '#549E39',
                            ],
                            data: total_transection
                        }],
                        options: {
                            scales: {
                                xAxes: [{
                                    stacked      : true,
                                    barPercentage: 0.4
                                }],
                                yAxes: [{
                                    stacked      : true,
                                    barPercentage: 0.4
                                }]
                            },
                        }
                    };

                    var graphTarget = document.getElementById('compareThirdBranchIndividualSystemUtilizationGraph').getContext('2d');

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });




                }
            }
        });
    }
}


// Define a plugin to provide data labels
Chart.plugins.register({
    afterDatasetsDraw: function(chart, easing) {
        // To only draw at the end of animation, check for easing === 1

        var ctx = chart.chart.ctx;  // DIFFERS FROM ORIG VERSION

        chart.data.datasets.forEach(function(dataset, i) {
            var meta = chart.getDatasetMeta(i);
            if (!meta.hidden) {
                meta.data.forEach(function(element, index) {
                    // Draw the text in black, with the specified font
                    ctx.fillStyle = 'rgb(0, 0, 0)';

                    var fontSize   = 16;
                    var fontStyle  = 'normal';
                    var fontFamily = 'Helvetica Neue';
                        ctx.font   = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);

                    // Just naively convert to string for now
                    var dataString = dataset.data[index].toString() + " %";

                    // Make sure alignment settings are correct
                    ctx.textAlign    = 'center';
                    ctx.textBaseline = 'center';

                    var padding  = 5;
                    var position = element.tooltipPosition();
                    ctx.fillText(dataString, position.x, position.y - (fontSize / 2) - padding);
                });
            }
        });
    }
});