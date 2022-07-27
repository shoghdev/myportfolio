$(document).ready(function () {
    let btn = $('.btn');
    let header = $(".site-header");
    let i = 0;
    let modal = $('#popUp'),
        span = $(".close"),
        form = $(".submited_form");

    $(window).scroll(function (e) {

        let height = $(window).scrollTop();

        if (height !== 0) {
            header.css({
                "background-color": "var(--bg-transparent)",
                "position": "fixed",
                "top": 0,
                "width": "100%",
                "z-index": 2,
            });
        } else {
            header.css({
                "background-color": "var(--bg-color)",
                "position": "relative",
            });
        }

    });

    btn.on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $(this).toggleClass('not-active');

        if ($(this).hasClass("not-active")) {
            $(".header-bottom").css({
                "display": 'flex',
                "possition": "absolute",
            });
        } else {
            $(".header-bottom").css({
                "display": 'none',
            });
        }
    });


    form.submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: "post",
            url: "./admin/config/mail.php",
            // dataType: "json",
            data: $(".submited_form").serialize(),
            cache: false,
            success: function (res) {
                let responseData = $.parseJSON(res);
                if (responseData.hasOwnProperty("error")) {
                    if (i == 0) {
                        $(".has-err").append("<span class='error_message'>* Field is required</span>");
                        $(".err-msg").addClass("form-invalid");
                        i = 1;
                    }
                } else if (responseData.hasOwnProperty("filled")) {
                    $(".error_message").remove();
                    $(".err-msg").removeClass("form-invalid");
                    $('#popUp').removeClass("popup_hide");
                }
            }
        });
    });

    span.on({
        click: function () {
            modal.css({
                "display": "none"
            });
        }
    });
});