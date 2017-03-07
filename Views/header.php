<!doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php if(isset($this->PageTitle)){echo $this->PageTitle;}else{echo 'CWGREAT Co.,Ltd.';}?> - บริการรับผลิตชิ้นงาน make to order และงานอุปกร์ในงานอุตสาหกรรมทุกชนิด บริการผลิตชิ้นงานตามแบบทุกชนิด งานเชื่อม งานกลึง CNC ราคาเป็นกันเอง</title>
        <meta name="description" content="บริษัท ซีดับบลิวเกรซ จำกัด. บริการรับผลิตชิ้นงาน make to order และงานอุปกร์ในงานอุตสาหกรรมทุกชนิด บริการผลิตชิ้นงานตามแบบทุกชนิด งานเชื่อม งานกลึง CNC ราคาเป็นกันเอง เลขที่ 29/2 หมู่ 1 ต.นาตาขวัญ อ.เมืองระยอง จ.ระยอง Tel: 038-948-340 Email: sales@cwgreat.co.th" />
        <meta name="google-site-verification" content="F4Lsl2wJrSG8MhSqwc42tVZ5ayCcfUbCdbgDe7orU08" />
        <meta name="keywords" content="บริษัทรับกลึงเหล็ก, โรงกลึง, งานกลึง, งานเชื่อม, อะไหล่เครื่องจักร, กลึงเหล็ก" />
        <meta name="robots" content="index,follow">
        <script type="application/ld+json"> { "@context": "http://schema.org", "@type": "Organization", "url": "http://www.cwgreat.co.th", "contactPoint": [{ "@type": "ContactPoint", "telephone": "+66 81-430-9217", "contactType": "customer service" }] } </script>
        <script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-92819465-1', 'auto'); ga('send', 'pageview'); </script>
        <link rel="canonical" href="<?=URL_Path?>/">
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="<?=URL_Public.'/css/bootstrap-tour.min.css'?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" type="text/css">
        <link rel="stylesheet" href="<?=URL_Public.'/css/custom.css'?>">
        <?php
            if(isset($this->CSSInject)){
                foreach ($this->CSSInject as $CSS) {
                    echo '<link rel="stylesheet" href="';
                    echo $CSS;
                    echo '">';
                }
            }
        ?>
        <link rel="apple-touch-icon" sizes="57x57" href="<?=URL_Public?>/img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?=URL_Public?>/img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?=URL_Public?>/img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?=URL_Public?>/img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?=URL_Public?>/img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?=URL_Public?>/img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?=URL_Public?>/img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?=URL_Public?>/img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?=URL_Public?>/img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?=URL_Public?>/img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?=URL_Public?>/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?=URL_Public?>/img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?=URL_Public?>/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?=URL_Public?>/img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?=URL_Public?>/img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body <?=@$this->BodyAti?>>