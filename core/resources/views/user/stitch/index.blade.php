@extends('userlayout')

@section('content')

<style>
#msform {
	width: 400px;
	text-align: center;
	position: relative;
    margin:50;
    top: -60px;

}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 80%;
	margin: 0% 15%;
	
	/*stacking fieldsets above each other*/
	position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
input{
    margin-bottom:10px;

}
#msform input, #msform textarea {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #6166e9;
	font-size: 13px;
}
/*buttons*/
#msform .btn {
	font-weight: bold;
	color: white;
    font-family: 'Raleway', sans-serif;


}

/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #6166e9;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: #3d3a3a;
	text-transform: uppercase;
	font-size: 9px;
	width: 33.33%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #3d3a3a;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #4f7fef;
	color: white;
}


</style>
<!-- multistep form -->
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Enter Credentials</li>
    <li>Confirm Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Choose your Bank</h2>
    <h3 class="fs-subtitle">This is step 1, choose your bank
        
    </h3>
    <select class="form-control">
        <option> ABSA BANK
        </option>
        <option> CAPITEC BANK
        </option>
        <option> STANDARD BANK
        </option>
        <option> NEDBANK BANK
        </option>
        <option> TYME BANK
        </option>
        <option> FIRST BANK OF NIGERIA
        </option>
        <option> FNB BANK
        </option>
    </select>
    <input type="button" name="next" class="next btn btn-primary" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Enter Credentials</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="username" placeholder="username" />
    <input type="password" name="password" placeholder="password or pin" />
    <input type="password" name="co" placeholder="Confirm Password" />
    <input type="button" name="previous" class="previous btn btn-primary" value="Previous" />
    <input type="button" name="next" class="next btn btn-primary" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Confirm Details</h2>
    <h3 class="fs-subtitle">Fill in your details first...</h3>

    <input type="button" name="previous" class="previous btn btn-primary" value="Previous" />
    <input type="submit" name="submit" class="submit btn btn-primary" value="Submit" />
  </fieldset>
</form>
</div>
<div class="col-md-4"></div>
</div>
<script>

    </script>
                
@stop