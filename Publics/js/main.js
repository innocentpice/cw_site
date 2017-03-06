// Product slide
function pdAddCtrl(target, number = 1) {
    var dom, i, ctrl;
    ctrl = target;
    $(ctrl).html('');
    $(ctrl).append('<li data-target="#product" data-slide-to="0" class="active"></li>');
    for (i = 2; i <= number; i++) {
        dom = '<li data-target="#product" data-slide-to="' + (i - 1) + '"></li>';
        $(ctrl).append(dom);
    }
}

function pdAddImg(target, targetCtrl, data, show = 1) {
    var active, dom, i, ctrl, src, img, option,
        number = 0,
        lens = (Object.keys(data).length) - 1;

    ctrl = target;
    $(ctrl).html('');

    for (i = 0; i <= lens;) {
        if (i == 0) {
            active = ' active';
        }
        else {
            active = '';
        }
        dom = '<div class="item' + active + '">';
        for (j = 0; j < show && i <= lens; j++) {
            product = data[i];
            img = product.src;
            if (show == 1) {
                option = '';
            }
            else if (show == 2) {
                option = 'col-xs-6';
            }
            else if (show == 4) {
                option = 'col-xs-3';
            }
            dom += '<div class="' + option + '">';
            dom += '<img class="img-thumbnail" style="width:250px;height:250px;" src="' + img + '">';
            dom += '</div>';
            i++;
        }
        dom += '</div>';
        $(ctrl).append(dom);
        number++;
    }
    pdAddCtrl(targetCtrl, number);
}

function productResize(width) {
    var device = window.deviceSize;
    checksize();
    if (device == window.deviceSize) {
        return false;
    }

    if (width <= 425) {
        pdAddImg('#productList-img', '#productList-ctrl', window.productImg, 1);
    }
    else if (width <= 768) {
        pdAddImg('#productList-img', '#productList-ctrl', window.productImg, 2);
    }
    else if (width <= 2560) {
        pdAddImg('#productList-img', '#productList-ctrl', window.productImg, 4);
    }
}

function checksize() {
    var width = window.outerWidth;
    if (width <= 425) {
        window.deviceSize = 1;
    }
    else if (width <= 768) {
        window.deviceSize = 2;
    }
    else if (width <= 2560) {
        window.deviceSize = 3;
    }
}

$(document).ready(() => {
    productResize(window.outerWidth);
    $(window).on('resize', (e) => {
        productResize(window.outerWidth);
    });
});


$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#home']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
})

// MAP
function myMap() {
    var myCenter = new google.maps.LatLng(12.710309, 101.324773);
    var mapProp = {
        center: myCenter,
        zoom: 13,
        scrollwheel: false,
        draggable: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    var marker = new google.maps.Marker({
        position: myCenter
    });
    marker.setMap(map);

    google.maps.event.addListener(marker, 'click', function() {
        var pos = map.getZoom();
        map.setZoom(15);
        map.setCenter(marker.getPosition());
        window.setTimeout(function() {
            map.setZoom(pos);
        }, 3000);
    });
}
