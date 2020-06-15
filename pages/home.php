<div class="container calculator">
	<div class="row">
		<div class="col-sm-12">
			<h2 id="ddate" style="color: #f00;"></h2>
		</div>
		<div class="col-sm-12">
			<h1 style="padding-bottom: 50px;color: #AA6E8A;" >Ovulation Calculator</h1>
				<div class="form-group">
			  	First Day of last period: <input type="date" name="fday" id="fday">
				</div>
				<div class="form-group">
			  	Cycle: <select id="cycle">
			  		<option value="">Please Choose Cycle</option>
					  <option value="1">20</option>
					  <option value="2">21</option>
					  <option value="3">22</option>
					  <option value="4">23</option>
					  <option value="5">24</option>
					  <option value="6">25</option>
					  <option value="7">26</option>
					  <option value="8">27</option>
					  <option value="9">28</option>
					  <option value="10">29</option>
					  <option value="11">30</option>
					  <option value="12">31</option>
					  <option value="13">32</option>
					  <option value="14">33</option>
					  <option value="15">34</option>
					  <option value="16">35</option>
					  <option value="17">36</option>
					  <option value="18">37</option>
					  <option value="19">38</option>
					  <option value="20">39</option>
					  <option value="21">40</option>
					</select>
			  </div>
			  <div class="form-group">
			  	<button onclick="myFunction()" type="button">Calculate</button>
			  </div>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-3">
			<div class="card_design">
				<h4>FERTILE WINDOW</h4>
				<p id="window"></p>
				<p class="text-center">To</p>
				<p id="window1"></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card_design">
				<h4>APPROXIMATE OVULATION</h4>
				<p id="ovu"></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card_design">
				<h4>NEXT PERIOD</h4>
				<p id="next"></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card_design">
				<h4>PREGNANCY TEST DAY</h4>
				<p id="test"></p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-7 col-sm-offset-2">
			<div class="card_design">
				<h4>To Come Next Period Day Left</h4>
				<p id="come"></p>
			</div>
		</div>
	</div>

</div>
<script type="text/javascript">
	var month =  ["January", "February", "March","April","May","June","July","August","September","October","November","December"];
	var now = new Date();
	document.getElementById("ddate").innerHTML = now.getDate() + " " + month[now.getMonth()]  + " " +now.getFullYear();

	//////////////////////////////
	Date.prototype.addDays = function(days) {
    var date = new Date(this.valueOf());
    date.setDate(date.getDate() + days);
    return date;
}
Date.prototype.subDays = function(days) {
    var date = new Date(this.valueOf());
    date.setDate(date.getDate() - days);
    return date;
}
	function myFunction() {
		var month =  ["January", "February", "March","April","May","June","July","August","September","October","November","December"];
		//input date
		var date = new Date($('#fday').val());

		//input cycle
	 	var cycleselect = document.getElementById('cycle');
		var cycle = cycleselect.options[cycleselect.selectedIndex].text;

   	//calculate fertile window
		var window_date= date.addDays(parseInt(cycle-18));

		var lastwindow_date= window_date.addDays(4);

		//for ovulation
		var ovulation= lastwindow_date.subDays(1);

   	//for next period
		var nextcycle= date.addDays(parseInt(cycle)-1);

		//for test
		var test= nextcycle.addDays(1);


		//for coming
		var today= new Date();
		var dayDifference;

		if (Date.parse(today) < Date.parse(nextcycle)){
			 var timeDiff = Math.abs(nextcycle.getTime() - today.getTime());
			 
			 dayDifference = "Your Menstruation Period " + Math.ceil(timeDiff / (1000 * 3600 * 24)) + " Days Left";


		}
		else{
				if(today.setHours(0,0,0,0) == nextcycle.setHours(0,0,0,0)) {
		    dayDifference = "Estimated These Day will be Your Menstruation Period";
		    }
		    else{
		    dayDifference = "Your Menstruation Period Is Over.";
		    }
		}

		//output
		document.getElementById("window").innerHTML = month[window_date.getMonth()] + "  " + window_date.getDate();

		document.getElementById("window1").innerHTML = month[lastwindow_date.getMonth()] + "  " + lastwindow_date.getDate();

		document.getElementById("ovu").innerHTML = month[ovulation.getMonth()] + "  " + ovulation.getDate();

	  document.getElementById("next").innerHTML = month[nextcycle.getMonth()] + "  " + nextcycle.getDate();
	   
	  document.getElementById("test").innerHTML = month[test.getMonth()] + "  " + test.getDate();

	 
	  
	  document.getElementById("come").innerHTML = dayDifference;

}
</script>