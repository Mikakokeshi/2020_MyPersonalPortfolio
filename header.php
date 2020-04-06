
           <div class="header">


           <div class="logo"> An aspiring<br>programmer</div>

           <div class="menu-btn">
             <i class="fa fa-bars" aria-hidden="true"></i>
           </div>

           <div class="nav navbar-nav">
             <div class="menu"><a href="#about" class="menu">About me</a></div>
             <div class="menu"><a href="#skills" class="menu">Skills</a></div>
             <div class="menu"><a href="#portfolio" class="menu">Portfolio</a></div>
             <div class="menu"><a href="#history" class="menu">History</a></div>
             <div class="menu"><a href="#contact" class="menu">Contact</a></div>
           </div>
            </div>

            <script type="text/javascript">
            $(function(){
              $('.menu-btn').on('click', function(){
                $('.navbar-nav').toggleClass('is-active');
              });
            }());
            $(function(){
              $('a.menu').on('click', function(){
                $('.navbar-nav').removeClass('is-active');
              });
            }());
            </script>
