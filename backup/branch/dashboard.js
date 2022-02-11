/// when page loaded then called 2 function
$(document).ready(function() {
    // current month top three branch
    topThreeBranchActivaty();

    // auto run this function when page loaded 
    showBranchAvarageActivity();
});

/// Find out top three brunch activaty
function topThreeBranchActivaty() {
    // show top three branch loader 
    $('#data-fetch-loader').show();
    // top three branch hide
    $('#top_three_branch').hide();
    $.ajax({
        url    : "ajax/dashboard/topThreeBranchActivaty.php",
        method : "post",
        timeout: 3000000,
        success: function(data) {
            // loader hide 
            $('#data-fetch-loader').hide();
            // if data not found
            if (data == 0) {
                $('#top_three_branch').hide();
                $('#data_not_found').fadeIn(1000);
                $('#data_not_found').html('<div class="text-center font-weight-bold">Data Not Found :)</div>');
            } else {
                $('#data_not_found').hide();
                $('#top_three_branch').fadeIn(1000);
                var branch_name              = [];
                var branch_total_transection = [];


                for (var i in data) {
                    branch_name.push(data[i].branch_full_name);
                    branch_total_transection.push(data[i].total_transection);
                }
                var chartdata = {
                    labels  : branch_name,
                    datasets: [{
                        label          : 'Total Activaty Of Branch',
                        backgroundColor: [
                            '#004d00',
                            '#00b300',
                            '#4dff4d',
                            'rgba(234, 23, 57, 1)',
                        ],
                        data: branch_total_transection
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

                var graphTarget = document.getElementById('topThreeBranch').getContext('2d');

                var barGraph = new Chart(graphTarget, {
                    type: 'horizontalBar',
                    data: chartdata
                });



            }



        }
    });
}

/// Find Top 3 average activaty branch
function showBranchAvarageActivity() {
    // show average top three branch loader show
    $('#average-data-fetch-loader').show();
    // average top three branch hide
    $('#avarage_top_three_branch').hide();
    $.ajax({
        url    : "ajax/dashboard/topThreeBranchAverageActivaty.php",
        method : "post",
        timeout: 3000000,
        success: function(response) {
            //loader hide 
            $('#average-data-fetch-loader').hide();
            if (response == 0) {
                $('#avarage_top_three_branch').hide();
                $('#average-data_not_found').fadeIn(1000);
                $('#average-data_not_found').html('<div class="text-center font-weight-bold">Data Not Found :)</div>');
            } else {
                $('#average-data_not_found').hide();
                $('#avarage_top_three_branch').fadeIn(1000);

                var avarage     = [];
                var branch_name = [];

                for (var i in response) {
                    avarage.push(response[i].avarage);
                    branch_name.push(response[i].branch_name);
                }

                var chartdata = {
                    labels  : branch_name,
                    datasets: [{
                        label          : 'Average Activaty of Branch',
                        backgroundColor: [
                            '#000080',
                            '#0077b3',
                            '#33bbff',
                        ],
                        data: avarage,
                    }],
                    options: {
                        "animation": {
                            "duration": 1,
                        },

                        scales: {
                            xAxes: [{
                                stacked: true,
                            }],
                            yAxes: [{
                                stacked: true
                            }]
                        },
                    }
                };
                var graphTarget = document.getElementById('showAvarageBranchActivaty').getContext('2d');

                var barGraph = new Chart(graphTarget, {
                    type: 'horizontalBar',
                    data: chartdata
                });

            }
        }
    });

};

/// Show value with chart top
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
                    var dataString = dataset.data[index].toString();

                    // Make sure alignment settings are correct
                    ctx.textAlign    = 'middle';
                    ctx.textBaseline = 'middle';

                    var padding  = 5;
                    var position = element.tooltipPosition();
                    ctx.fillText(dataString, position.x, position.y - (fontSize / 2) - padding);
                });
            }
        });
    }
});