<footer>
  <div class="footer-area section-bg">
    <div class="container">
      <div class="footer-top footer-padding">
        <div class="row d-flex justify-content-between">
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
            <div class="single-footer-caption mb-50">
              <div class="footer-logo">
                <a href="index.html"><img src="assets/img/logo/logo2_footer.png" class="lingkaran-footer" alt=""></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-5">
            <div class="single-footer-caption mb-50">
              <div class="footer-tittle">
                <h4>About SCDB</h4>
                <div class="footer-pera">
                  <p class="info1">Lorem igpsum doldfor sit amet, adipiscing elit, sed do eiusmod tempor cergelit rgh. </p>
                  <p class="info1">Lorem ipsum dolor sit amet, adipiscing elit.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
            <div class="single-footer-caption mb-50">
              <div class="footer-number mb-50">
                <h4><span>INSTITUT PEMERINTAHAN</span><br>DALAM NEGERI</h4>
                <p>scdb@gmail.com</p>
              </div>
              <!-- Form -->
              <div class="footer-form">
                <div id="mc_embed_signup">
                  <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                    <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                    <div class="form-icon">
                      <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                        Send
                      </button>
                    </div>
                    <div class="mt-10 info"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="row d-flex justify-content-between align-items-center">
          <div class="col-xl-9 col-lg-8">
            <div class="footer-copy-right">
              <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Institut Pemerintahan Dalam Negeri 
                <i class="fa fa-heart" aria-hidden="true"></i> by 
                <a href="https://scdb.ac.id" target="_blank">SCDB FrontEnd</a>
              </p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4">
            <div class="footer-social f-right">
              <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.scdb.ac.id" target="_blank"><i class="fas fa-globe"></i></a>
              <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<div id="back-top" >
  <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
<script type="text/javascript">
  // set up text to print, each item in array is new line
  var aText = new Array(
    "Hello, saat ini kamu sedang berada di",
    "website Smart Campus Database",
    "system. Anda dapat melihat Data",
    "Grafik tentang: OM-SPAN, P.O.K, S.A.S,",
    "Pegawai Dengan Cara klik tombol",
    "dibawah ini untuk melihat halaman ",
    "tersebut. "
    );
var iSpeed = 50; // time delay of print out
var iIndex = 0; // start printing array at this posision
var iArrLength = aText[0].length; // the length of the text array
var iScrollAt = 20; // start scrolling up at this many lines

var iTextPos = 0; // initialise text position
var sContents = ""; // initialise contents variable
var iRow; // initialise current row

function typewriter() {
  sContents = " ";
  iRow = Math.max(0, iIndex - iScrollAt);
  var destination = document.getElementById("typedtext");

  while (iRow < iIndex) {
    sContents += aText[iRow++] + "<br />";
  }
  destination.innerHTML =
  sContents + aText[iIndex].substring(0, iTextPos) + "_";
  if (iTextPos++ == iArrLength) {
    iTextPos = 0;
    iIndex++;
    if (iIndex != aText.length) {
      iArrLength = aText[iIndex].length;
      setTimeout("typewriter()", 500);
    }
  } else {
    setTimeout("typewriter()", iSpeed);
  }
}

typewriter();

</script>
<script>
  var Flipper = (function () {
    var card = $(".card");
    var flipper = card.find(".card__flipper");
    var win = $(window);

    var flip = function () {
      var thisCard = $(this);
      var thisFlipper = thisCard.find(".card__flipper");
      var offset = thisCard.offset();
      var xc = win.width() / 2;
      var yc = win.height() / 2;
      var docScroll = $(document).scrollTop();
      var cardW = thisCard.outerWidth() / 2;
      var cardH = thisCard.height() / 2;

      var transX = xc - offset.left - cardW;
      var transY = docScroll + yc - offset.top - cardH;
    //     if (offset.top > card.height()) transY = docScroll - offset.top + cardH;
    if (win.width() <= 700) transY = 0;

    if (card.hasClass("active")) unflip();

    thisCard.css({ "z-index": "3" }).addClass("active");

    thisFlipper
    .css({
      transform:
      "translate3d(" +
      transX +
      "px," +
      transY +
      "px, 0) rotateY(180deg) scale(1)",
      "-webkit-transform":
      "translate3d(" +
      transX +
      "px," +
      transY +
      "px, 0) rotateY(180deg) scale(1)",
      "-ms-transform":
      "translate3d(" +
      transX +
      "px," +
      transY +
      "px, 0) rotateY(180deg) scale(1)"
    })
    .addClass("active");

    return false;
  };

  var unflip = function (e) {
    card.css({ "z-index": "1" }).removeClass("active");
    flipper
    .css({
      transform: "none",
      "-webkit-transform": "none",
      "-ms-transform": "none"
    })
    .removeClass("active");
  };

  var bindActions = function () {
    card.on("click", flip);
    win.on("click", unflip);
  };

  var init = function () {
    bindActions();
  };

  return {
    init: init
  };
})();

Flipper.init();

</script>
<script>
  var vid = document.getElementById("myVideo");
  function setPlaySpeed() { 
    vid.playbackRate = 0.10;
  } 
</script>
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery.slicknav.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>
<script src="./assets/js/gijgo.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>
</body>
</html>