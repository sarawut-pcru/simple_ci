<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"> </script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $(document).on('click', '.submit', function(e) {
            e.preventDefault();
            if ($('#fname').val() == null) {
                console.log($('#fname').val())
                $('#fname').addClass('form-control is-invalid');
            }
        })

    })
</script>