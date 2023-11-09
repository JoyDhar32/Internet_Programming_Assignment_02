<?php if (isset($message)) { ?>
                            <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Added successfully'
            })
        </script>
		<?php }
		?>
        <?php if (isset($booking)) { ?>
            <script>
Swal.fire({
icon: 'success',
title: 'Success',
text: 'Thanks for Booking'
})
</script>
<?php }
?>
<?php if (isset($already)) { ?>
                            <script>
            Swal.fire({
                icon: 'error',
                title: 'Unsuccessful',
                text: 'Product already added'
            })
        </script>
		<?php }
		?>

<?php if (isset($unavailable)) { ?>
                            <script>
            Swal.fire({
                icon: 'error',
                title: 'Unsuccessful',
                text: 'Product is not available. Please try again later!!!'
            })
        </script>
		<?php }
		?>
        
        <?php if (isset($removed)) { ?>
                            <script>
            Swal.fire({
                icon: 'error',
                title: 'Removed',
                text: 'Item has been removed'
            })
        </script>
		<?php }
		?>