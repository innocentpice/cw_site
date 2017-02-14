<header>
    <div id="googleMap" class="col-xs-12 col-md-6" style="height:400px;"></div>
    <div class="col-xs-12 col-md-6">
        <address>
          <strong>CWGREAT Co.,Ltd</strong><br>
          29/2 หมู่ 1 ต.นาตาขวัญ อ.เมืองระยอง<br>
          จ.ระยอง 21000<br><br>
          29/2 MOO 1 Natakhwan Muangrayong<br>
          Rayong, 21000<br><br>
          <abbr title="Phone">Tel:</abbr> 038948340<br>
          <abbr title="Phone">Fax:</abbr> 038948341<br>
          <abbr title="Phone">Email:</abbr> chaiwat@mmps.co.th , chaiwat1977@gmail.com<br>
        </address>
    </div>
</header>
<script>
    function myMap() {
      var mapCanvas = document.getElementById("googleMap");
      var myCenter = new google.maps.LatLng(12.710309, 101.324773); 
      var mapOptions = {center: myCenter, zoom: 16};
      var map = new google.maps.Map(mapCanvas,mapOptions);
      var marker = new google.maps.Marker({
        position: myCenter,
        animation: google.maps.Animation.BOUNCE
      });
      marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuaTaa7gsBh1imCWAqErUUu_Uce4RhrcY&callback=myMap"></script>