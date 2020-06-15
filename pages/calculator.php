<div class="container calculator">
	<div class="row">
		<div class="col-sm-12">
			<h1 style="padding-bottom: 50px;color: #56C4C0;" >Due Date Calculator</h1>
			<div class="form-group">
			  	First Day of last period: <input type="date" name="fday" id="lastperiod">
				</div>
			<div class="form-group">
			  	Cycle Length: <select id="mescycle">
			  		<option value="">Please Choose Cycle</option>
					  <option value="1">21</option>
					  <option value="2">22</option>
					  <option value="3">23</option>
					  <option value="4">24</option>
					  <option value="5">25</option>
					  <option value="6">26</option>
					  <option value="7">27</option>
					  <option value="8">28</option>
					  <option value="9">29</option>
					  <option value="10">30</option>
					  <option value="11">31</option>
					  <option value="12">32</option>
					  <option value="13">33</option>
					  <option value="14">34</option>
					  <option value="15">35</option>
					</select>
			  </div>
			  <div class="form-group">
			  	<button onclick="duedateFunction()" type="button">Calculate</button>
			  </div>
			  
			  <div class="row">
					<div class="col-sm-7 col-sm-offset-2">
						<div class="duedate_design">
							<h4>Due Date Calculator</h4>
							<div class="row">
								<div class="col-sm-4">
									<p>Day</p>
									<p id="day"></p>
								</div>
								<div class="col-sm-4">
									<p>Month</p>
									<p id="month"></p>
								</div>
								<div class="col-sm-4">
									<p>Year</p>
									<p id="year"></p>
								</div>
							</div>
						</div>
					</div>
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
function duedateFunction() {
	var month =  ["January", "February", "March","April","May","June","July","August","September","October","November","December"];

	var date = new Date($('#lastperiod').val());

	//input cycle
	var cycleselect = document.getElementById('mescycle');
	var cycle = cycleselect.options[cycleselect.selectedIndex].text;

	//calculate due date
	var due_date= date.addDays(parseInt(cycle)+252);
		
document.getElementById("day").innerHTML = " "+ due_date.getDate();
document.getElementById("month").innerHTML = " "+ month[due_date.getMonth()];
document.getElementById("year").innerHTML = " "+ (due_date.getFullYear());
}
</script>