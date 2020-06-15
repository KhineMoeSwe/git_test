<div class="container calculator">
	<div class="row">
		<div class="col-sm-12">
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
					  <option value="16">34</option>
					  <option value="17">35</option>
					  <option value="18">36</option>
					  <option value="19">37</option>
					  <option value="20">38</option>
					  <option value="21">39</option>
					  <option value="22">40</option>
					</select>
			  </div>
			  <div class="form-group">
			  	<button onclick="myFunction()" type="button">Calculate</button>
			  </div>
			
				<!-- <p id="window" style="color: green;"></p>
				<p id="window1" style="color: blue;"></p>
				<p id="ovu" style="color: #00f;"></p>
				<p id="next" style="color: #f00;"></p>
				<p id="test" style="color: #0ff;"></p> -->
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

</div>
<script type="text/javascript">
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
		var win_month = month[window_date.getMonth()];	 

		var lastwindow_date= window_date.addDays(4);
		var winlast_month = month[lastwindow_date.getMonth()];

		//for ovulation
		var ovulation= lastwindow_date.subDays(1);
		var ovulation_month = month[ovulation.getMonth()];

   	//for next period
		var nextcycle= date.addDays(parseInt(cycle)-1);
		var show_month = month[nextcycle.getMonth()];



//for test
var test= nextcycle.subDays(1);
var test_month = month[test.getMonth()];



document.getElementById("window").innerHTML = win_month + "  " + window_date.getDate();

document.getElementById("window1").innerHTML = winlast_month + "  " + lastwindow_date.getDate();

document.getElementById("ovu").innerHTML = ovulation_month + "  " + ovulation.getDate();

	    document.getElementById("next").innerHTML = show_month + "  " + nextcycle.getDate();
	   
	    document.getElementById("test").innerHTML = test_month + "  " + test.getDate();
}
</script>