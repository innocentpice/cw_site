<footer class="ui fluid container grid" style="margin-top:3rem;padding-bottom:2rem;">
    <div class="ui center aligned column text-center">
        Copyright © 2016 - 2017 CWGREAT Co.,Ltd All rights reserved.
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>

<?php 
    if(isset($this->clearBOOSTRAP)){
?>
    <script src="<?=URL_Public.'/js/semantic.min.js'?>"></script>
<?php }else{?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php }?>

<script src="<?=URL_Public?>/js/custom.js"></script>

<?php
    if(isset($this->JSInject)){
            foreach ($this->JSInject as $JS) {
                echo '<script src="';
                echo $JS;
                echo '"></script>';
            }
        }
?>

</body>
</html>