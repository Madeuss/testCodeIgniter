 <!-- jQuery -->
 <script src="<?php echo base_url(); ?>public/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url(); ?>public/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.fittext.js"></script>
<script src="<?php echo base_url(); ?>public/js/wow.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>public/js/creative.js"></script>
<!---->
<script src="https://kit.fontawesome.com/8ce0be3cc7.js" crossorigin="anonymous"></script>

<!--Email Cotact Validation-->
<script src="<?php echo base_url(); ?>public/js/validation.js"></script>

<?php if(isset($scripts)){
        foreach ($scripts as $script_name){
            $src = base_url() . "public/js/" . $script_name; ?>
            <script rel="stylesheet" src="<?=$src?>"></script>
        <?php }
} ?>

</body>

</html>