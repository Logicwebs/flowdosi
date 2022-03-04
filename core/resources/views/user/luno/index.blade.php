
@extends('userlayout')

@section('content')
<!-- Page content -->
<style>

.modal-body {
    background-color: #fff;
    border-color: #fff
}

.close {
    color: #000;
    cursor: pointer
}

.close:hover {
    color: #000
}

.form-check-input:checked {
    background-color: #2f3f82;
    border-color: #2f3f82
}

.form-check-input:focus {
    border-color: #8bbafe;
    outline: 0;
    box-shadow: none
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    padding: 7px 12px;
    border: 2px solid #2f3f82;
    display: inline-block;
    color: #2f3f82;
    border-radius: 3px;
    text-transform: capitalize
}

label.radio input:checked+span {
    border-color: #2f3f82;
    background-color: #2f3f82;
    color: #fff
}

.fee {
    padding: 8px;
    border: 1px solid #eee;
    border-radius: 4px;
    box-shadow: 0px 0px 7px rgba(0, 0, 0, 0.2);
    margin-right: 8px
}

label.radio1 {
    cursor: pointer;
    width: 100%;
    margin-right: 7px
}

label.radio1 input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio1 span {
    padding: 20px 12px;
    border: 2px solid #2f3f82;
    display: inline-block;
    color: #2f3f82;
    border-radius: 3px;
    text-transform: capitalize;
    width: 100%
}

label.radio1 input:checked+span {
    border-color: #2f3f82;
    background-color: #2f3f82;
    color: #fff
}
.hideform{
    display:block;
}
.form-control {
    border: 2px solid #7889e8;
}

.form-control:focus {
    box-shadow: none;
    border-color: #2f3f82
}

.pay {
    color: #fff;
    background-color: #2f3f82;
    border-color: #2f3f82;
    border-radius: 3px;
    padding: 8px
}

.pay:hover {
    color: #fff;
    background-color: #2f3f82;
    border-color: #2f3f82;
    border-radius: 3px;
    padding: 8px
}

.cancel {
    text-decoration: none;
    color: #2f3f82
}
.register{
    background: -webkit-linear-gradient(left, #3931af, #2f3f82);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
    </style>
    <div class="row">
        <div class="col-md-12">
            
        </div>
        <div class="col-md-2"></div>
    <div class="col-md-4">
        <img class="img img-thumbnail animate__animated animate__wobble" src="https://discover.luno.com/wp-content/uploads/Luno/open-graph-1.png" width="150px">
        <br>
        <button type="button" class="btn btn-primary" style="margin-top:10px;" data-toggle="modal" data-target="#exampleModalLong">
        Transact
        </button>
<br>
        <button type="button" class="btn btn-primary" style="margin-top:10px;" data-toggle="modal" data-target="#exampleModalLong">
        Create Wallet
        </button>
        <button type="button" class="btn btn-primary" style="margin-top:10px;" data-toggle="modal" data-target="#exampleModalLong2">
        Buy | Sell Crypto
        </button>
        <button type="button" class="btn btn-default" style="margin-top:10px;" data-toggle="modal" data-target="#analysis">
        Analysis
        </button>



    </div>
    <div class="col-md-6">

<!-- TradingView Widget END -->
        <div class="col-md-8"><h2 class="alert alert-primary" style="text-align:center;">Your Recent Luno Transactions</h2>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="analysis" tabindex="-1" role="dialog" aria-labelledby="analysis" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  badge badge-primary" id="exampleModalLongTitle">Technical Analysis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>

  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "interval": "1m",
  "width": 455,
  "isTransparent": false,
  "height": 450,
  "symbol": "CAPITALCOM:BTCZAR",
  "showIntervalTabs": false,
  "locale": "en",
  "colorTheme": "dark"
}
  </script>
</div>
      </div>
   
    </div>
  </div>
</div></div>
        
        <hr>
        
<!-- Modal -->
<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title badge badge-primary" id="exampleModalLongTitle">Luno</h5>
        <button type="button" class="close1" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
                <div class="d-flex justify-content-between align-items-center"> <span class="text-uppercase alert alert-primary align-items-center">Choose your crypto...</span> <i class="fa fa-close close1" data-dismiss="modal"></i>      <img class="img img-thumbnail animate__animated animate__wobble" src="https://discover.luno.com/wp-content/uploads/Luno/open-graph-1.png" width="80px"></div>
               
           
                <div class="mt-3"> <label class="radio"> <input type="radio" name="week" value="1" checked> <span>ETH</span> </label> <label class="radio"> <input type="radio" name="week" value="4"> <span>BTC</span> </label> </div>
                <div class="mt-3 text-center fee align-items-center">
                    <input type="text" class="form-control" name= "crypto_amount" placeholder="ZAR Amount">
                </div>
                <div class="mt-3"> <small>Payment Method</small>
                    <div class="d-flex flex-row"> <label class="radio1"> <input type="radio" id="bank-trasfer" name="payment" value="bank"> <span ><i class="fa fa-bank"></i> BANK TRANSFER</span> </label> <label class="radio1"> <input type="radio" id="credit" name="payment" value="card"> <span><i class="fa fa-credit-card-alt"></i> CREDIT CARD</span> </label> </div>
                </div>
                <span class="mycard" style="display:block">
                <div class="mt-3 mr-2">
                    <div class="row g-2">     
        
                        <div class="col-md-6">
                            <div class="inputbox"> <small>Card Number</small> <input type="text" class="form-control" name=""> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox"> <small>Card Name</small> <input type="text" class="form-control" name=""> </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 mr-2 ">
                    <div class="row g-2 ">
                        <div class="col-md-6">
                            <div class="row g-2 ">
                                <div class="col-md-6">
                                    <div class="inputbox"> <small>Date</small> <input type="text" class="form-control" name=""> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputbox"> <small>Month</small> <input type="text" class="form-control" name=""> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox"> <small>CVV</small> <input type="text" class="form-control" name=""> </div>
                        </div>
                    </div>
                </div>
</span>
                <hr >
                <div class="mt-3 mr-2 d-flex justify-content-end align-items-center"> <a href="#" data-dismiss="modal" class="cancel">Cancel</a> <button class=" ml-2 btn btn-primary pay" id="pay">PAY NOW</button> </div>
            </div>
   
    </div>
  </div>
</div>
        <ul>
            
            <li class="badge badge-primary">Pair : {{$data->pair}}</li>
            <li class="badge badge-primary">Bid: {{$data->bid}}</li>
            <li class="badge badge-primary">Ask: {{$data->ask}}</li>
            <li class="badge badge-primary">Last Trade: {{$data->last_trade}}</li>
            <br>
            <li class="badge badge-primary">Rolling 24 Hour Volume: {{$data->rolling_24_hour_volume}}</li>
            <li class="badge badge-primary">Status: {{$data->status}}</li>
        </ul>
    </div>
    </div>
   

    <div class="row" >
  
    </div>
    <script>
   
   const bankBtn = document.getElementById('bank-trasfer');
  const creditBtn = document.getElementById('credit');
   const x = document.querySelector('.mycard');
   bankBtn.onclick = () => {
       
           if (x.style.display === "block") {
           x.style.display = "none";
           x.class.add("animate__animated animate__wobble")
           ;
       } 

   }
   creditBtn.onclick = () => {

           x.style.display = "block";

   }
   document.getElementById('pay').addEventListener('click', (event) => {
            event.preventDefault()

            axios.post('/script/user/cryptobuy',{})
                .then((response) => {
                    if(response.data.errorMessage){
                        $('.myerr').show();

                        document.getElementById('response').innerHTML = response.data.errorMessage;
                        
                    } else {
                        $('.myerr').show();
                        document.getElementById('response').innerHTML = response.data;
                    }
                    console.log(response);
                })
                .catch((error) => {
                    console.log(error);
                })
            });

        


</script>




@stop