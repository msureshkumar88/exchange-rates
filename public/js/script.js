$(document).ready(function () {
    let server = 'http://127.0.0.1:8000/api/';

    $.ajax({
        url: server + 'rates', success: function (result) {
            if (result.status) {
                let template = '';
                result.data.forEach(element => {
                    template += `<tr>
                                    <td>${element.id}</td>
                                    <td>${element.currency_from}</td>
                                    <td>${element.currency_to}</td>
                                    <td>${element.amount_sell}</td>
                                    <td>${element.amount_buy}</td>
                                    <td>${element.rate}</td>
                                    <td>${element.originating_country}</td>
                                    <td>${element.time_placed}</td>
                                </tr>`;
                    // console.log(element);
                });
                $('#exchange-data-list').html(template);
            }
        }
    });
    if ($("#cht-buy-sell").length) {
        $.ajax({
            url: server + 'rates/daily-buy-sell', success: function (result) {
                if (result.status) {
                    let trace1 = {
                        x: result.data.buy.date,
                        y: result.data.buy.data,
                        type: 'scatter',
                        name: 'Buy'
                    };

                    let trace2 = {
                        x: result.data.sell.date,
                        y: result.data.sell.data,
                        type: 'scatter',
                        name: 'Sell'
                    };
                    let data = [trace1, trace2];
                    Plotly.newPlot('cht-buy-sell', data);
                }
            }
        });
    }


});

