
// $(document).on('submit', "#affiliate-form", function(e) {
$(document).on('click', "#affiliate_staffviz", function(e) {
    e.preventDefault();
    $(".lds-roller-footer").show(), $("#affiliate_staffviz").attr("disabled", "disabled");
    $.ajax({
        url: $("#affiliate-form").attr("action"),
        type: "POST",
        cache: !1,
        data: $("#affiliate-form").serialize(),
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        datatype: "JSON",
        beforeSend: function () {
            $(".invalid-feedback").remove();
            $(".form-control").removeClass("is-invalid")
            $("label[for=terms_and_conditions]").removeClass("is-invalid")
            $(".lds-roller-footer").hide()
        },
        success: function (result) {
            if(result.errors !== undefined) {
                $(".form-control").addClass("is-invalid")
                for (key in result.errors) {
                    $("label[for=terms_and_conditions]").addClass("is-invalid").after('<div class="invalid-feedback mb-1">' + result.errors[key]['message'] +'</div>')
                }
                $("#affiliate_staffviz").attr("disabled", false);
            } else {
                $("label[for=terms_and_conditions]").after('<div class=" mb-1">You have successfully registered as an affiliate</div>');
                $('#affiliate-form').trigger("reset");
            }
            
        },
        error: function(xhr, ajaxOptions, thrownError) {
            if(xhr.status == 422) {
                $(".form-control").addClass("is-invalid")
                for (key in xhr.responseJSON.errors) {
                    if(key == 'publicId.value') {
                        $("#publicId").after('<div class="invalid-feedback mb-1">The Affiliate ID field is required.</div>')
                    } else if(key == 'terms_and_conditions') {
                        $("label[for=terms_and_conditions]").addClass("is-invalid").after('<div class="invalid-feedback mb-1">' + xhr.responseJSON.errors[key][0] +'</div>')
                    } else {
                        $("#" + key).after('<div class="invalid-feedback mb-1">' + xhr.responseJSON.errors[key][0] +'</div>')
                    }
                }
                $("#affiliate_staffviz").attr("disabled", false);
            }
            
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    })
});