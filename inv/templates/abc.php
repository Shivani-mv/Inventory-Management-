<style>
*{
	outline:none;
}
body{
	outline:none;
	padding:0;
	margin:0;
}
a{
	outline:none !important;
}
body {
  background-color: #F5F5F5;
  color: #555;
  font-size: 1.1em;
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

.stat {
   margin:150px auto;
   text-align:center;
}
.highlight {
   color:#111;
   padding:20px 0;
   font-weight:bold;
   display:block;
   overflow:hidden;
   margin-bottom:0;
   font-size:48px;
}
.stat i {
	color:#f7c221;
}
.milestone-details {
   font-weight:bold;
   font-size:18px;
   color:#999;
}


/*/ end count stats /*/
</style>


	<div class="container">
		<div class="stat">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <i class="fa fa-user fa-3x"></i>
                    <span class="stat-count highlight">122</span>
                    <div class="milestone-details">Happy Customers</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <i class="fa fa-coffee fa-3x"></i>
                    <span class="stat-count highlight">26</span>
                    <div class="milestone-details">Ordered Coffee's</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <i class="fa fa-trophy fa-3x"></i>
                    <span class="stat-count highlight">1014</span>
                    <div class="milestone-details">Awards Win</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <i class="fa fa-camera fa-3x"></i>
                    <span class="stat-count highlight">22</span>
                    <div class="milestone-details">Photos Taken</div>
                </div>
            </div>
		</div><!-- stat -->
	</div>


<script type="text/javascript">
	// number count for stats, using jQuery animate


	(function($) {
		"use strict";
		function count($this){
		var current = parseInt($this.html(), 10);
		current = current + 1; /* Where 50 is increment */	
		$this.html(++current);
			if(current > $this.data('count')){
				$this.html($this.data('count'));
			} else {    
				setTimeout(function(){count($this)}, 50);
			}
		}        	
		$(".stat-count").each(function() {
		  $(this).data('count', parseInt($(this).html(), 10));
		  $(this).html('0');
		  count($(this));
		});
   })(jQuery);
</script>

