jQuery(function () {
    jQuery('input[name="bt-name"]').change(function () {
        jQuery('input[name="your-name"]').val(jQuery(this).val());
    });
    jQuery('input[name="bt-subname"]').change(function () {
        jQuery('input[name="your-subname"]').val(jQuery(this).val());
    });
    jQuery('input[name="bt-email"]').change(function () {
        jQuery('input[name="your-email"]').val(jQuery(this).val());
    });
    jQuery('input[name="bt-subject"]').change(function () {
        jQuery('input[name="your-subject"]').val(jQuery(this).val());
    });
    jQuery('textarea[name="bt-message"]').change(function () {
        jQuery('textarea[name="your-message"]').val(jQuery(this).val());
    });
    jQuery(".btn-send-form").click(function () {
        jQuery(".wpcf7-submit").click();
    });
});