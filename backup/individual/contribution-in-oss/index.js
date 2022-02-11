$('#compareBranchIndividualContributionInOSS').hide();
///     When Page Loaded Compleate Then called this method
$(document).ready(function() {
    // top individual first branch function
    topFirstBranchIndividualContributionInOSS();
    // top individual second branch function
    topSecondBranchIndividualContributionInOSS();
    // top individual second branch function
    topThirdBranchIndividualContributionInOSS();
});
///   Run Top First Individual branch for contribution in oss
function topFirstBranchIndividualContributionInOSS() {
    $('#topFirstBranchIndividualContributionInOSSLoader').show();
    $('#topFirstBranchIndividualContributionInOSSData').hide();
    $('#topFirstBranchIndividualContributionInOSSDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/contribution-in-oss/top-first-branch.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            $('#topFirstBranchIndividualContributionInOSSLoader').hide();
            if (data == 0) {
                $('#topFirstBranchIndividualContributionInOSSData').hide();
                $('#topFirstBranchIndividualContributionInOSSDataNotFound').show();
                $('#topFirstBranchIndividualContributionInOSSDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#topFirstBranchIndividualContributionInOSSDataNotFound').hide();
                $('#topFirstBranchIndividualContributionInOSSData').show();

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
                            '#0989B1',
                            '#4AB5C4',
                            '#029676',
                            '#C0CF3A',
                            '#8AB833',
                            '#549E39',
                        ],
                        data: total_transection
                    }],
                    options: {}
                };

                var graphTarget = document.getElementById('topFirstBranchIndividualContributionInOSSGraph').getContext('2d');

                var barGraph = new Chart(graphTarget, {
                    type: 'pie',
                    data: chartdata
                });




            }
        }
    });
}

///   Run Top Second Individual branch for contribution in oss
function topSecondBranchIndividualContributionInOSS() {
    $('#topSecondBranchIndividualContributionInOSSLoader').show();
    $('#topSecondBranchIndividualContributionInOSSData').hide();
    $('#topSecondBranchIndividualContributionInOSSDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/contribution-in-oss/top-second-branch.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            $('#topSecondBranchIndividualContributionInOSSLoader').hide();
            if (data == 0) {
                $('#topSecondBranchIndividualContributionInOSSData').hide();
                $('#topSecondBranchIndividualContributionInOSSDataNotFound').show();
                $('#topSecondBranchIndividualContributionInOSSDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#topSecondBranchIndividualContributionInOSSDataNotFound').hide();
                $('#topSecondBranchIndividualContributionInOSSData').show();

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
                            '#0989B1',
                            '#4AB5C4',
                            '#029676',
                            '#C0CF3A',
                            '#8AB833',
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

                var graphTarget = document.getElementById('topSecondBranchIndividualContributionInOSSGraph').getContext('2d');

                var barGraph = new Chart(graphTarget, {
                    type: 'pie',
                    data: chartdata
                });

            }
        }
    });
}

///   Run Top Third Individual branch for contribution in oss
function topThirdBranchIndividualContributionInOSS() {
    $('#topThirdBranchIndividualContributionInOSSLoader').show();
    $('#topThirdBranchIndividualContributionInOSSData').hide();
    $('#topThirdBranchIndividualContributionInOSSDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/contribution-in-oss/top-third-branch.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            $('#topThirdBranchIndividualContributionInOSSLoader').hide();
            if (data == 0) {
                $('#topThirdBranchIndividualContributionInOSSData').hide();
                $('#topThirdBranchIndividualContributionInOSSDataNotFound').show();
                $('#topThirdBranchIndividualContributionInOSSDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#topThirdBranchIndividualContributionInOSSDataNotFound').hide();
                $('#topThirdBranchIndividualContributionInOSSData').show();

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
                            '#0989B1',
                            '#4AB5C4',
                            '#029676',
                            '#C0CF3A',
                            '#8AB833',
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

                var graphTarget = document.getElementById('topThirdBranchIndividualContributionInOSSGraph').getContext('2d');

                var barGraph = new Chart(graphTarget, {
                    type: 'pie',
                    data: chartdata
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
        return this.optional(element) || value ! = $(param).val();
    }, "This branch are already selected");

    jQuery.validator.addMethod("notMatchTo", function(value, element, param) {
        return this.optional(element) || value ! = $(param).val();
    }, "This branch are already selected");


    $("#individual-contribution-in-oss").validate({
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

///     Compare Branch 

$('#compare').on('click', function(event) {
    // input value
    var start_date    = $('#start_date').val();
    var end_date      = $('#end_date').val();
    var first_branch  = $('#first_branch').val();
    var second_branch = $('#second_branch').val();
    var third_branch  = $('#third_branch').val();

    $('#compareThirdBranchIndividualContributionInOSS').hide();

    // check value found or not
    if (start_date != '' && end_date != '' && first_branch != '' && second_branch != '') {

        if (first_branch != second_branch && first_branch != third_branch && second_branch != third_branch) {
            event.preventDefault();
            $('#topBranchIndividualContributionInOSS').hide();
            $('#compareBranchIndividualContributionInOSS').show();

            // top individual first branch function
            compareFirstBranchIndividualContributionInOSS();
            // top individual second branch function
            compareSecondBranchIndividualContributionInOSS();
            // top individual second branch function
            if (third_branch != '') {
                compareThirdBranchIndividualContributionInOSS();
            }

        } else {
            event.preventDefault();
            alert("please select different branch for branch compare");
        }
    }
});

///   Compare First Individual branch for contribution in oss
function compareFirstBranchIndividualContributionInOSS() {
    $('#compareBranchIndividualContributionInOSS').show();
    $('#compareFirstBranchIndividualContributionInOSS').show();
    $('#compareFirstBranchIndividualContributionInOSSLoader').show();
    $('#compareFirstBranchIndividualContributionInOSSData').hide();
    $('#compareFirstBranchIndividualContributionInOSSDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/contribution-in-oss/compare/compare-first-branch.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            $('#compareFirstBranchIndividualContributionInOSSLoader').hide();
            if (data == 0) {
                $('#compareFirstBranchIndividualContributionInOSSData').hide();
                $('#compareFirstBranchIndividualContributionInOSSDataNotFound').show();
                $('#compareFirstBranchIndividualContributionInOSSDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#compareFirstBranchIndividualContributionInOSSDataNotFound').hide();
                $('#compareFirstBranchIndividualContributionInOSSData').show();

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
                            '#0989B1',
                            '#4AB5C4',
                            '#029676',
                            '#C0CF3A',
                            '#8AB833',
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

                var graphTarget = document.getElementById('compareFirstBranchIndividualContributionInOSSGraph').getContext('2d');

                var barGraph = new Chart(graphTarget, {
                    type: 'pie',
                    data: chartdata
                });




            }
        }
    });
}
///  Compare Second Individual branch for contribution in oss
function compareSecondBranchIndividualContributionInOSS() {
    $('#compareBranchIndividualContributionInOSS').show();
    $('#compareSecondBranchIndividualContributionInOSS').show();
    $('#compareSecondBranchIndividualContributionInOSSLoader').show();
    $('#compareSecondBranchIndividualContributionInOSSData').hide();
    $('#compareSecondBranchIndividualContributionInOSSDataNotFound').hide();
    // data fetch with ajax
    $.ajax({
        url    : "ajax/individual/contribution-in-oss/compare/compare-second-branch.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            $('#compareSecondBranchIndividualContributionInOSSLoader').hide();
            if (data == 0) {
                $('#compareSecondBranchIndividualContributionInOSSData').hide();
                $('#compareSecondBranchIndividualContributionInOSSDataNotFound').show();
                $('#compareSecondBranchIndividualContributionInOSSDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
            } else {
                $('#compareSecondBranchIndividualContributionInOSSDataNotFound').hide();
                $('#compareSecondBranchIndividualContributionInOSSData').show();

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
                            '#0989B1',
                            '#4AB5C4',
                            '#029676',
                            '#C0CF3A',
                            '#8AB833',
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

                var graphTarget = document.getElementById('compareSecondBranchIndividualContributionInOSSGraph').getContext('2d');

                var barGraph = new Chart(graphTarget, {
                    type: 'pie',
                    data: chartdata
                });


            }
        }
    });
}

if (third_branch != '') {
    ///  Compare Third Individual branch for contribution in oss
    function compareThirdBranchIndividualContributionInOSS() {
        $('#compareBranchIndividualContributionInOSS').show();
        $('#compareThirdBranchIndividualContributionInOSS').show();
        $('#compareThirdBranchIndividualContributionInOSSLoader').show();
        $('#compareThirdBranchIndividualContributionInOSSData').hide();
        $('#compareThirdBranchIndividualContributionInOSSDataNotFound').hide();
        // data fetch with ajax
        $.ajax({
            url    : "ajax/individual/contribution-in-oss/compare/compare-third-branch.php",
            method : "post",
            timeout: 3000000,
            success: function(data) {
                $('#compareThirdBranchIndividualContributionInOSSLoader').hide();
                if (data == 0) {
                    $('#compareThirdBranchIndividualContributionInOSSData').hide();
                    $('#compareThirdBranchIndividualContributionInOSSDataNotFound').show();
                    $('#compareThirdBranchIndividualContributionInOSSDataNotFound').html('<div class="text-center text-uppercase font-weight-bold">Data Not found :)</div>');
                } else {
                    $('#compareThirdBranchIndividualContributionInOSSDataNotFound').hide();
                    $('#compareThirdBranchIndividualContributionInOSSData').show();

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

                    var graphTarget = document.getElementById('compareThirdBranchIndividualContributionInOSSGraph').getContext('2d');

                    var barGraph = new Chart(graphTarget, {
                        type: 'pie',
                        data: chartdata
                    });




                }
            }
        });
    }
}


// // Define a plugin to provide data labels
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
                    var dataString = dataset.data[index].toString() + "%";

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