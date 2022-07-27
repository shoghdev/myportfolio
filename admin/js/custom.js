// export {edit_onclick, cancel_onclick,save_onclick };
$(document).ready(function () {
    let i = 1;
    let a = 1;

    //menu item click style
    $('ul li a').click(function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            i++;
        } else {
            $('li a.active').removeClass('active');
            $(this).addClass('active');
            i--;
        }
    });

    //show or hide nav item
    $(".nav-item").click(function () {
        $('.right').hide();
        $($(this).attr('href')).show();
        $(this).addClass("active").siblings().removeClass("active");
        // $(".nav-item").removeClass("active");
        $(this.getAttribute('href')).fadeIn(650);
    });

    //dynamic field Skills code here
    $('#add').click(function () {
        i++;
        $('#dynamic_field').append('<div id="row' + i + '" class="field flex ai-c"><div class="w-30">Added Skill ' + i + '</div><div class="half-container"><input type="text" name="skills_item[]" placeholder="Add new skill" class="form-control name_list" /></div><div><button type="button btn_remove btn_remove_tool" name="remove" id="' + i + '" class="button">Remove</button></div></div>');
    });

    $('.btn_remove_icons').on('click', function () {
        let button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
    });

    //dynamic field ICONS code here
    $('#add_tools').click(function () {
        i++;
        $('#dynamic_field_tools').append('<div id="row' + i + '" class="field flex ai-c"><div class="w-30">Added Tool ' + i + '</div><div class="half-container"><input type="text" name="tools[]" placeholder="Add new skill" class="form-control name_list" /></div><div><button type="button btn_remove btn_remove_tool" name="remove" id="' + i + '" class="button">Remove</button></div></div>');
    });

    $('.btn_remove_icons').on('click', function () {
        let button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
    });

    //dynamic field Tools code here
    $('#add_icon').click(function () {
        a++;
        $('#dynamic_field_icons').append('<div id="row' + a + '" class="field flex ai-c"><div class="w-30">Added Icon ' + a + '</div><div class="half-container icon_link"><input type="file" name="icons" placeholder="Add new Icon Class" class="form-control name_list" /><input type="text" name="links" placeholder="Add new link" class="form-control name_list" /></div><div><button type="button btn_remove btn_remove_icons" name="remove" id="' + a + '" class="button">Remove</button></div></div>');
    });

    $('.btn_remove_icons').on('click', function () {
        let button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
    });


    //edit, save cancel functions
    $(".output input").not(".delete-button").prop('disabled', true);
    $(".output textarea").prop('disabled', true);
    $(".delete-button").prop('disabled', false);
    $(".hidden-button").prop('disabled', false);
    $('.save-button').on('click', save_onclick);
    $('.cancel-button').on('click', cancel_onclick);
    $('.edit-button').on('click', edit_onclick);
    $('.save-button, .cancel-button').hide();

    function edit_onclick() {
        setFormMode($(this).closest("form"), 'edit');
    }

    function cancel_onclick() {
        setFormMode($(this).closest("form"), 'view');
        $(this).closest("form").trigger("reset");
    }

    function save_onclick() {
        setFormMode($(this).closest("form"), 'edit');
    }


    function setFormMode($form, mode) {
        switch (mode) {
            case 'view':
                $form.find('.save-button, .cancel-button').hide();
                $form.find('.edit-button').show();
                $form.find('.delete-button').show();
                $form.find("input").prop('disabled', true);
                $form.find("textarea").prop('disabled', true);
                $(".delete-button").prop('disabled', false);
                $form.find("input[type=text]").css("color", "var(--primary)");
                break;
            case 'edit':
                $form.find('.save-button, .cancel-button').show();
                $form.find('.edit-button').hide();
                $form.find('.delete-button').hide();
                $form.find("input").prop("disabled", false);
                $form.find("input[type=text]").focus().css("color", "var(--errors)");
                $form.find("textarea").prop("disabled", false);
                break;
        }
    }

    $('.submit').submit(function (e) {
        e.preventDefault();
        console.log("hi");
    });

});

