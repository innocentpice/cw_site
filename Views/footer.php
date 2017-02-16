<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>window.URL_Path = "<?=URL_Path?>";</script>
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