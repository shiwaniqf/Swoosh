  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    jQuery(function($) {
      var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
        $(".navbar > ul > li > a").each(function(){
        if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
        $(this).addClass("active");
        // $(this).parent("li").addClass("active");
      })
    });

  // $(document).ready(function(){
  //       var pageURL = $(location).attr("href");
  //       var last_part = pageURL.substr(pageURL.lastIndexOf('/') + 1)
  //       $('.navbar ul li a').removeClass("active");
  //       $(this).addClass("active");
  //       // alert(last_part);
  // });
  
    $(document).ready(function(){
      $(".quickviewbutton").click(function(){
        var target_id = $(this).attr("data-bs-target");
        $(target_id).on("shown.bs.modal", function (e) {

          var sliderIdSwiper = "#Slider"+target_id.substring(1, target_id.length);

          quickViewSlider = new Swiper(sliderIdSwiper, {
              mode: "horizontal",
              loop: true,
              on: {
                  slideChangeTransitionStart: highlightThumb,
              },
          });
        });
      
        $(target_id).on("hidden.bs.modal", function (e) {
          if (quickViewSlider) {
              quickViewSlider.destroy();
          }                                                                        
        });
      
      function highlightThumb() {
        var sliderId = this.$el.attr("id");
        var thumbs = $('.swiper-thumbs[data-swiper="#' + sliderId + '"]');
        // if thumbs for this slider exist
        if (thumbs.length > 0) {
            thumbs.find(".swiper-thumb-item.active").removeClass("active");
            thumbs
                .find(".swiper-thumb-item")
                .eq(this.realIndex)
                .addClass("active");
        }
      }
      
      $(".swiper-thumb-item").on("click", function (e) {
        e.preventDefault();
        var swiperId = $(this).parents(".swiper-thumbs").data("swiper");
        $(swiperId)[0].swiper.slideToLoop($(this).index());
      });

    });
    });

    var error_name = false;
    var error_emailid = false;
    var error_phone = false;
    var error_subject = false;
    var error_captcha = false;

    $("#name").focusout(function () {
        check_name();
    });
    $("#email").focusout(function () {
        check_emailid();
    });
    $("#phone").focusout(function () {
        check_phone();
    });
    $("#subject").focusout(function () {
        check_subject();
    });
    
    function check_name() {
        var pattern = /^[A-Za-z\s]+$/;
        var name = $("#name").val().trim();
        if (pattern.test(name) && name !== '') {
            $("#nameError").hide();
        } else {
            $("#nameError").html("Should contain only Characters");
            $("#nameError").show();
            error_name = true;
        }
    }
    function check_emailid() {
      var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
      var emailid = $("#email").val();
      if (pattern.test(emailid) && emailid !== '') {
          $("#emailidError").hide();
      } else {
          $("#emailidError").html("Invalid Email examp@exa.com");
          $("#emailidError").show();
          error_emailid = true;
      }
    }
    function check_phone() {
        var pattern = /^([0-9]{10})*$/;
        var phone = $("#phone").val().trim();
        if (pattern.test(phone) && phone !== '') {
           $("#phoneError").hide();

        } else {
           $("#phoneError").html("Should contain 10 Digit phone No");
           $("#phoneError").show();
           error_phone = true;
        }
    }

    function check_subject() {
        var subject = $("#subject").val().trim();
        if (subject !== '') {
            $("#subjectError").hide();
        } else {
            $("#subjectError").html("Please Enter Your subject Here..");
            $("#subjectError").show();
            error_subject = true;
        }
      }

      function check_captcha() {
        var response = grecaptcha.getResponse();
        if(response.length == 0) {
            $("#g-recaptcha-error").html("You can't leave Captcha Code empty");
            error_captcha = true;
        }
    }

      function contactForm_validate(){ 
        // e.preventDefault();
        error_name = false;
        error_emailid = false; 
        error_phone = false;
        error_subject = false; 
        error_captcha = false;

        check_name();
        check_phone();
        check_emailid();
        check_subject();
        check_captcha();

        if (error_name === false && error_phone === false && error_emailid === false && error_subject === false && error_captcha === false)  {
            return true;
        } else {
            return false;
        }
    }
  </script>
