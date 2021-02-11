    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.plyr.io/3.6.4/plyr.polyfilled.js"></script>
    <script>
        const player = new Plyr("#player");
    </script>
    <script src="{{ url('frontend/libraries/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('frontend/libraries/xzoom/dist/xzoom.min.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
          zoomWidth: 500,
          title: false,
          tint: '#333',
          Xoffset: 15
        });

        $('.datepicker').datepicker({
          uiLibrary: 'bootstrap4',
          icons: {
            rightIcon: '<img src="frontend/images/ic_doe.png" alt="" />'
          }
        });
      });
    </script>
        <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>