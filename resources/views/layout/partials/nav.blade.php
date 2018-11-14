<div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header visible-xs">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><h2>Meat King</h2></a>
        </div><!-- navbar-header -->
    <div id="navbar" class="navbar-collapse collapse">
        <div class="hidden-xs" id="logo"><a href="#header">
            <img src="{{URL::asset('img/logo.png')}}" alt="" style="width:150px;height:150px;">
        </a></div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#story">About</a></li>
            <li><a href="#reservation">Menu</a></li>    
            <li><a href="#food-menu">Food Menu</a></li>
            <li><a href="#special-offser">Special Offers</a></li>
            <!--fix for scroll spy active menu element-->
            <li style="display:none;"><a href="#header"></a></li>
        </ul>
        
    </div><!--/.navbar-collapse -->
    </div><!-- container -->
</div><!-- menu -->