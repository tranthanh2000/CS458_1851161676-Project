$(document).ready(function () {
  // slide#2
  var carouselEl = $('.owl-carousel');
  $("#btn-next").click(function () {
    carouselEl.trigger('next.owl.carousel');
  });
  $("#btn-prev").click(function () {
    carouselEl.trigger('prev.owl.carousel');
  });
  var owl = $('.owl-carousel');
  owl.owlCarousel({
    margin: 10,
    nav: false,
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 3
      }
    }
  })
  // form event
  $('[name="btnRegister"]').click(function () {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if ($('[name="Name"]').val() == "") alert("Vui lòng nhập 'Họ và tên' của bạn!")
    else if ($('[name="Birthday"]').val() == "") alert("Vui lòng nhập 'Ngày sinh' liên lạc!")
    else if ($('[name="Address"]').val() == "") alert("Vui lòng nhập 'Địa chỉ' liên lạc!")
    else if ($('[name="Phone"]').val() == "") alert("Vui lòng nhập 'Số điện thoại' liên lạc!")
    else if (!($.isNumeric($('[name="Phone"]').val()))) alert("vui lòng nhập chính xac số điện thoại")
    else if (!emailReg.test($('[name="Email"]').val())) alert("vui lòng nhập chính xác email")
    else if ($('[name="Licence"]').val() == "") alert("lkjdhash")
    else {
      $("#complete").show()
    }
  })
  // menu responsive
      $(".navbar-toggler").on('click', function(){
        if($(".menu-overlay").css('display')=='none')
        $(".menu-overlay").fadeIn(500)
        else $(".menu-overlay").fadeOut(500);
    })
    $(".menu-overlay").click(function(event) {
        $(".navbar-toggler").trigger("click");
        $(".menu-overlay").fadeOut(500);
    }); 
  // go top
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 500) {
      $("#btn-gotop").show()
    }
    else {
      $("#btn-gotop").hide()
    }
  });
  $('#btn-gotop').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 'slow');
  })

})
// map
function Map1() {
  var loc1 = { lat: 10.760803, lng: 106.661598 };
  var map1 = new google.maps.Map(
    document.getElementById('map1'), { zoom: 16, center: loc1 });
  var marker = new google.maps.Marker({ position: loc1, map: map1 });
}
function Map2() {
  var loc2 = { lat: 10.760803, lng: 106.661598 };
  var map2 = new google.maps.Map(
    document.getElementById('map2'), { zoom: 50, center: loc2 });
  var marker = new google.maps.Marker({ position: loc2, map: map2 });
}

