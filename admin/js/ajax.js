$(document).ready(function () {
    $(".menu-items-form").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "./actions/process-menu-item.php",
            data: $(".menu-items-form").serialize(),
            // dataType : 'json',
            // beforeSend : function() {
            //     toastr.info("Please wait..");
            // },
            success: function (response) {
                //    alert('ok2');
                //     console.log(response);
                // if (response.status) {
                //     toastr.success(response.message);
                $(".menu-items-form")[0].reset();
                //     $("#userformModal").modal('hide');
                get_all_recs();
                // }else{
                //     toastr.error(response.message);
                // }
            }
        });
    });

});
