
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
.receipt {
  background: linear-gradient(135deg, transparent 5.68px, white 5.69px) top left, linear-gradient(45deg, white 2.8px, transparent 2.81px) top left, linear-gradient(135deg, white 2.8px, transparent 2.81px) bottom left, linear-gradient(45deg, transparent 5.68px, white 5.69px) bottom left;
  background-repeat: repeat-x;
  background-size: 8px 4px;
  padding: 4px 0;

}
.receipt-list {
  background-color: white;
}



.receipt {
  filter: drop-shadow(0 2px 1px rgba(0, 0, 0, 0.1));
  max-width: 320px;
  margin: 0 auto;

}
.receipt-list {
  background-color: #fff;
  padding: 30px;
}
.receipt-item {
  border-bottom: 0.5px dashed #ccc;
  line-height: 1;
  overflow: hidden;
  font-family: monospace;
  font-size: 16px;
}
.receipt-item:not(:first-child) {
  margin-top: 1rem;
}
.receipt-label {
  float: left;
}
.receipt-value {
  float: right;
}
</style>
<!-- multistep form -->
<div class="row">
<div class="col-md-2"></div>
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

<div class="col-md-4"><div class="receipt">

  <div class="receipt-list">
    <div class="receipt-item">
    <img src="data:image/png;base64,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" width="250px">
      <div class="receipt-label"> <h3 style="text-align:center">Withdraw your voucher from these Financial Service Providers</h3></div>
    </div>
    <div class="receipt-item">
      <div class="receipt-label" style="text-align:center; color:#999" >Shoprite 
   
USave  Checkers  Spar  Cambridge  Makro  Game  Boxer  Water
   
    </div>
</div>
    <div class="receipt-item" style="text-align:center; color:#999" >
      <div class="receipt-label"  >Voucher Number</div>
      <div class="receipt-label">**** **** **** **** ****</div>
    </div> 
    <div class="receipt-item" style="text-align:center; color:#999" >
   
      <div class="receipt-label">R </div>
    </div> 
  </div>
</div>
<div class="col-md-2"></div>
</div>
</div>
<script>

    </script>
                
@stop