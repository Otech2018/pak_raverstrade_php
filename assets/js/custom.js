$(function() {
    calc();
    $('[name=calc_plan]').on('change', calc);
    // $('#calc_plan').on('change', calc);
    $('#inv_amount_r').on('change', function() {
        $('#inv_amount').val($('#inv_amount_r').val())
        calc()
        $('#inv_amount').change()
    })
    $('#inv_amount').on('input change', function() {
        let inv = parseInt($('#inv_amount').val())
        console.log(inv)
        $('#inv_amount_r').val(inv)
            // 10 Ğ´Ğ¾ 500, Ğ¾Ñ‚ 500 Ğ´Ğ¾ 2000,  Ğ¸ Ğ¾Ñ‚ 2000 Ğ´Ğ¾ 50000
        if (inv >= 10 && inv < 1999.9) $('#calc_plan1').prop('checked', true)
        if (inv >= 2000 && inv < 9999.9) $('#calc_plan2').prop('checked', true)
        if (inv >= 10000 && inv <= 50000) $('#calc_plan3').prop('checked', true)
        $('[name=calc_plan]').change();
    });
    $('#inv_amount').bind('change keyup', calc).on('keypress', isNumberKey);
});

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function calc() {

    // var plan = $('#calc_plan').val();
    var plan = $('[name=calc_plan]:checked').val()
    var amount = $('#inv_amount').val();
    var percent;
    var days

    switch (plan) {
        case '1':
            switch (true) {
                case (amount < 10):
                    days = 20;
                    break;
                case (amount <= 10000):
                    days = 20;
                default:
                    break;
                    days = 20;
            }
            break;
        case '2':
            switch (true) {
                case (amount < 1000):
                    days = 30;
                    break;
                case (amount <= 100000):
                    days = 30;
                default:
                    break;
                    days = 30;
            }
            break;
        case '3':
            switch (true) {
                case (amount < 2000):
                    days = 40;
                    break;
                case (amount <= 150000):
                    days = 40;
                default:
                    break;
                    days = 40;
            }
            break;
    }

    switch (plan) {
        case '1':
            switch (true) {
                case (amount < 10):
                    percent = 1.5;
                    break;
                case (amount <= 1999.9):
                    percent = 1.5;
                default:
                    break;
                    percent = 1.5;
            }
            break;
        case '2':
            switch (true) {
                case (amount < 2000):
                    percent = 2.5;
                    break;
                case (amount <= 9999.9):
                    percent = 2.5;
                default:
                    break;
                    percent = 2.5;
            }
            break;
        case '3':
            switch (true) {
                case (amount < 10000):
                    percent = 3.5;
                    break;
                case (amount <= 50000):
                    percent = 3.5;
                default:
                    break;
                    percent = 3.5;
            }
            break;
    }


    $('#assign_per').val(percent + '%');
    var total = amount * percent / 100;
    var new_amount = $('#inv_amount').val();
    var value1 = total.toFixed(2);
    var value2 = $('#inv_amount').val();
    var value3 = parseFloat(new_amount);
    var profit = $('#net_profit').val();
    value4 = parseFloat(profit);


    $('#total_return').val('$' + (days * total + value3));
    /*$('#total_return').val('$'+day*total+value2);*/

    $('#net_profit').val('$' + total.toFixed(2));
};

$("[href^='#']").click(function() {
    id = $(this).attr("href")
    $('html, body').animate({
        scrollTop: $(id).offset().top
    }, 100);
});