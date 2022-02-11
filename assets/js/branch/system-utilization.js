// hide compare branch data 
$('#compare_three_branch_system_utilization').hide();

/// Top 3 Branch System utilization Section


$(document).ready(function() {
    topThreeBranchSystemUtilization();
});

///    Find Out Top Three Branch System Utilization
function topThreeBranchSystemUtilization(event) {
    $('#top_three_branch_system_utilization_loader').show();
    $('#top_three_branch_system_utilization_data').hide();
    $('#topThreeBranchSystemUtilizationDataNotFound').hide();
    $.ajax({
        url: "ajax/branch/system-utilization/top-three-branch-system-utilization.php",
        method: "post",
        timeout: 3000000,
        success: function(data) {
            // loader hide
            $('#top_three_branch_system_utilization_loader').hide();

            // if data not found but request success
            if (data == 0) {
                $('#topThreeBranchSystemUtilizationDataNotFound').fadeIn();
                $('#topThreeBranchSystemUtilizationDataNotFound').html('<div class="text-center font-weight-bold">Data Not Found :)</div>');
            } else {
                // loader hide
                $('#top_three_branch_system_utilization_loader').hide();

                // data show section hide 
                $('#top_three_branch_system_utilization_data').fadeIn(1000);

                var branch_full_name = [];
                var total_transection = [];


                for (var i in data) {
                    branch_full_name.push(data[i].branch_full_name);
                    total_transection.push(data[i].total_transection);
                }


                var chartdata = {
                    labels: branch_full_name,
                    datasets: [{
                        label: 'Total Activaty Of Branch',
                        backgroundColor: [
                            '#004d00',
                            '#00b300',
                            '#4dff4d',
                            'rgba(234, 23, 57, 1)',
                        ],
                        data: total_transection
                    }],
                    options: {
                        scales: {
                            xAxes: [{
                                stacked: true,
                                barPercentage: 0.4
                            }],
                            yAxes: [{
                                stacked: true,
                                barPercentage: 0.4
                            }]
                        },
                    }
                };

                var graphTarget = document.getElementById('topThreeBranchSystemUtilization').getContext('2d');

                var barGraph = new Chart(graphTarget, {
                    type: 'bar',
                    data: chartdata
                });


                // Define a plugin to provide data labels
                Chart.plugins.register({
                    afterDatasetsDraw: function(chart, easing) {
                        // To only draw at the end of animation, check for easing === 1

                        var ctx = chart.chart.ctx; // DIFFERS FROM ORIG VERSION

                        chart.data.datasets.forEach(function(dataset, i) {
                            var meta = chart.getDatasetMeta(i);
                            if (!meta.hidden) {
                                meta.data.forEach(function(element, index) {
                                    // Draw the text in black, with the specified font
                                    ctx.fillStyle = 'rgb(0, 0, 0)';

                                    var fontSize = 16;
                                    var fontStyle = 'normal';
                                    var fontFamily = 'Helvetica Neue';
                                    ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);

                                    // Just naively convert to string for now
                                    var dataString = dataset.data[index].toString() + " %";

                                    // Make sure alignment settings are correct
                                    ctx.textAlign = 'center';
                                    ctx.textBaseline = 'center';

                                    var padding = 5;
                                    var position = element.tooltipPosition();
                                    ctx.fillText(dataString, position.x, position.y - (fontSize / 2) - padding);
                                });
                            }
                        });
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


    $("#system-utilization").validate({
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

/// Compare 3 Branch System Utilization
$('#compare').on('click', function(event) {
    // input value
    var select_month = $('#select_month').val();
    var first_branch = $('#first_branch').val();
    var second_branch = $('#second_branch').val();
    var third_branch = $('#third_branch').val();

    // check value found or not
    if (select_month != '' && first_branch != '' && second_branch != '') {
        if (first_branch != second_branch && first_branch != third_branch && second_branch != third_branch) {
            event.preventDefault();
            //hide top 3 system utilization 
            $('#top_three_branch_system_utilization').hide();

            // hide compare branch data 
            $('#compare_three_branch_system_utilization').show();

            // compare loader show
            $('#compare_three_branch_system_utilization_loader').show();

            // compare data show section hide 
            $('#compare_three_branch_system_utilization_data').hide();

            // Compare Data Not Found Section Hide
            $('#compareThreeBranchSystemUtilizationDataNotFound').hide();

            $.ajax({
                url: "ajax/branch/system-utilization/compare-three-branch-system-utilization.php",
                method: "post",
                timeout: 3000000,
                data: {
                    'select_month': select_month,
                    'first_branch': first_branch,
                    'second_branch': second_branch,
                    'third_branch': third_branch,
                },
                success: function(data) {
                    // compare loader hide
                    $('#compare_three_branch_system_utilization_loader').hide();

                    // check out 
                    if (data == 0) {
                        // Compare Data Not Found Section Hide
                        $('#compareThreeBranchSystemUtilizationDataNotFound').fadeIn(1000);
                        $('#compareThreeBranchSystemUtilizationDataNotFound').html('<div class="text-center font-weight-bold">Data NOt Found  :)</div>');
                    } else {
                        // compare data show section show 
                        $('#compare_three_branch_system_utilization_data').fadeIn(1000);

                        var branch_full_name = [];
                        var total_transection = [];


                        for (var i in data) {
                            branch_full_name.push(data[i].branch_full_name);
                            total_transection.push(data[i].total_transection);
                        }

                        var chartdata = {
                            labels: branch_full_name,
                            datasets: [{
                                label: 'Total Activaty Of Branch',
                                backgroundColor: [
                                    '#002080',
                                    '#0039e6',
                                    '#3366ff',
                                ],
                                data: total_transection
                            }],
                            options: {
                                scales: {
                                    xAxes: [{
                                        stacked: true,
                                        barPercentage: 0.4
                                    }],
                                    yAxes: [{
                                        stacked: true,
                                        barPercentage: 0.4
                                    }]
                                },
                            }
                        };

                        var graphTarget = document.getElementById('compareThreeBranchSystemUtilization').getContext('2d');

                        var barGraph = new Chart(graphTarget, {
                            type: 'bar',
                            data: chartdata
                        });


                        // Define a plugin to provide data labels
                        Chart.plugins.register({
                            afterDatasetsDraw: function(chart, easing) {
                                // To only draw at the end of animation, check for easing === 1

                                var ctx = chart.chart.ctx; // DIFFERS FROM ORIG VERSION

                                chart.data.datasets.forEach(function(dataset, i) {
                                    var meta = chart.getDatasetMeta(i);
                                    if (!meta.hidden) {
                                        meta.data.forEach(function(element, index) {
                                            // Draw the text in black, with the specified font
                                            ctx.fillStyle = 'rgb(0, 0, 0)';

                                            var fontSize = 16;
                                            var fontStyle = 'normal';
                                            var fontFamily = 'Helvetica Neue';
                                            ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);

                                            // Just naively convert to string for now
                                            var dataString = dataset.data[index].toString() + " %";

                                            // Make sure alignment settings are correct
                                            ctx.textAlign = 'center';
                                            ctx.textBaseline = 'center';

                                            var padding = 5;
                                            var position = element.tooltipPosition();
                                            ctx.fillText(dataString, position.x, position.y - (fontSize / 2) - padding);
                                        });
                                    }
                                });
                            }
                        });
                    }

                }
            });
        }


    }
});