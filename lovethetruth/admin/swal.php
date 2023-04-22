<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

if (isset($_SESSION['message'])) {
?>
    <script>
        swal({
            title: "<?php echo $_SESSION['title'] ?>",
            text: "<?php echo $_SESSION['message'] ?>",
            icon: "<?php echo $_SESSION['icon'] ?>"
        }).then(function() {
            window.location.href = "<?php echo $_SESSION['location'] ?>";
        });
    </script>

<?php
    unset($_SESSION['title']);
    unset($_SESSION['location']);
    unset($_SESSION['message']);
    unset($_SESSION['icon']);
} ?>


<?php

if (isset($_SESSION['Wmessage'])) {
?>
    <script>
        swal({
            title: "<?php echo $_SESSION['Wtitle'] ?>",
            text: "<?php echo $_SESSION['Wmessage'] ?>",
            icon: "<?php echo $_SESSION['Wicon'] ?>"
        });
    </script>

<?php
    unset($_SESSION['Wtitle']);
    // unset($_SESSION['Wlocation']);
    unset($_SESSION['Wmessage']);
    unset($_SESSION['Wicon']);
} ?>