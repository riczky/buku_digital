	<!-- Footer -->
    <footer class="footer fixed-bottom bg-success text-white">
      <div class="container">
        <div class="row pt-3">
          <div class="col text-center">
            <p>Copyright 2021 Buku Digital _riczky.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- <button type="button" id="btnScroll" class="btn btn-warning" onclick="toUp()"><i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></i>
    </button>
 -->
    <a href="#" type="button" id="btnScroll" class="btn btn-warning"><i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></i>
    </a>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Smooth Scroll -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script>
      var scroll = new SmoothScroll('a[href*="#"]');
    </script>

    <script>
        window.onscroll = function(){
          scrollFunction();
        };
        function scrollFunction(){
          if(document.body.scrollTop > 20 || document.documentElement.scrollTop>20){
            document.getElementById("btnScroll").style.display = "block";

          }else{
            document.getElementById("btnScroll").style.display = "none";
          }
        } 

        function toUp(){
          document.body.scrollTop = 0;
          document.documentElement.scrollTop=0;
        }
    </script>

     <script type="text/javascript">
      $(document).on('click', '.nav-item', function(){
        $(this).addClass('active').siblings().removeClass('active')
      })
    </script>


  </body>
</html>	
