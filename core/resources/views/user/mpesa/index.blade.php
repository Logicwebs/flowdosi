@extends('userlayout')

@section('content')

<style>
    .phone {
  position: absolute;
  height: 840px;
  width: 415px;
  border-radius: 60px;
  border: 4px solid #d2d2d2;
  top: 50%;
  left: 50%;
  margin-top: -420px;
  margin-left: -207px;
}
.speaker {
  position: absolute;
  height: 8px;
  width: 80px;
  border-radius: 8px;
  border: 2px solid #d2d2d2;
  top: 36px;
  left: 166px;
}
.home {
  position: absolute;
  height: 50px;
  width: 50px;
  border-radius: 100%;
  border: 2px solid #d2d2d2;
  bottom: 16px;
  left: 180px;
}
.screen {
  position: absolute;
  height: 667px;
  width: 375px;
  border: 4px solid #efefef;
  border-radius: 4px;
  top: 80px;
  left: 16px;
}
.screen-top-bar {
  background: white;
  width: 100%;
  height: 20px;
}
.signal {
  float: left;
  margin-left:5px;
  color: #143d5f;
}
.battery {
  float: right;
  margin-right: 5px;
  color: #143d5f;
}
hr.message-inner-separator
{
    clear: both;
    margin-top: 10px;
    margin-bottom: 13px;
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
    background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}


/*
* Credit card
*/

.mycard{
width: 320px;
height: 190px;
  -webkit-perspective: 600px;
  -moz-perspective: 600px;
  perspective:600px;
  margin-left:125px;
  margin-bottom:50px;

  
}

.card__part{
  box-shadow: 1px 1px #aaa3a3;
    top: 0;
  position: absolute;
z-index: 1000;
  left: 0;
  display: inline-block;
    width: 320px;
    height: 190px;
    background-image: url('https://image.ibb.co/bVnMrc/g3095.png'), linear-gradient(to right bottom, #fd696b, #fa616e, #f65871, #f15075, #ec4879); /*linear-gradient(to right bottom, #fd8369, #fc7870, #f96e78, #f56581, #ee5d8a)*/
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    border-radius: 8px;
   
    -webkit-transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    -moz-transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    -ms-transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    -o-transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
}

.card__front{
  padding: 18px;
-webkit-transform: rotateY(0);
-moz-transform: rotateY(0);
}

.card__back {
  padding: 18px 0;
-webkit-transform: rotateY(-180deg);
-moz-transform: rotateY(-180deg);
}

.card__black-line {
    margin-top: 5px;
    height: 38px;
    background-color: #303030;
}

.card__logo {
    height: 36px;
}

.card__front-logo{
      position: absolute;
    top: 18px;
    right: 18px;
}
.card__square {
    border-radius: 5px;
    height: 30px;
}

.card_numer {
    display: block;
    width: 100%;
    word-spacing: 4px;
    font-size: 20px;
    letter-spacing: 2px;
    color: #fff;
    text-align: center;
    margin-bottom: 20px;
    margin-top: 20px;
}

.card__space-75 {
    width: 75%;
    float: left;
}

.card__space-25 {
    width: 25%;
    float: left;
}

.card__label {
    font-size: 10px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.8);
    letter-spacing: 1px;
}

.card__info {
    margin-bottom: 0;
    margin-top: 5px;
    font-size: 16px;
    line-height: 18px;
    color: #fff;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.card__back-content {
    padding: 15px 15px 0;
}
.card__secret--last {
    color: #303030;
    text-align: right;
    margin: 0;
    font-size: 14px;
}

.card__secret {
    padding: 5px 12px;
    background-color: #fff;
    position:relative;
}

.card__secret:before{
  content:'';
  position: absolute;
top: -3px;
left: -3px;
height: calc(100% + 6px);
width: calc(100% - 42px);
border-radius: 4px;
  background: repeating-linear-gradient(45deg, #ededed, #ededed 5px, #f9f9f9 5px, #f9f9f9 10px);
}

.card__back-logo {
    position: absolute;
    bottom: 15px;
    right: 15px;
}

.card__back-square {
    position: absolute;
    bottom: 15px;
    left: 15px;
}

.card:hover .card__front {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);

}

.card:hover .card__back {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
}
</style>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-7">
        <!-- Basic layout-->
        <div class="card">
          <div class="card-header">
            <h3 class="mb-0 font-weight-bolder">{{__('Create Mpesa Voucher')}}</h3>
            <span class="form-text text-xs">{{ Auth::user()->first_name }}, Create a Voucher below and enter card details to send <br>mobile money trasaction </span>
          </div>
          <h4 class="alert alert-secondary"> {{ Auth::user()->first_name }}, You Have:<b class="badge badge-success"style="letter-spacing:3px;"> R{{ Auth::user()->balance}}</b> in your card</h4>
          
          <div class="card-body">
              <div class="mycard">
   
                <div class="card__front card__part">
                  <img class="card__front-square card__square" src="data:image/svg+xml;charset=utf8,%3Csvg width='75' height='75' viewBox='0 0 200 155' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:cc='http://creativecommons.org/ns%23' xmlns:dc='http://purl.org/dc/elements/1.1/' xmlns:rdf='http://www.w3.org/1999/02/22-rdf-syntax-ns%23'%3E%3Cmetadata%3E%3Crdf:RDF%3E%3Ccc:Work rdf:about=''%3E%3Cdc:format%3Eimage/svg+xml%3C/dc:format%3E%3Cdc:type rdf:resource='http://purl.org/dc/dcmitype/StillImage'/%3E%3Cdc:title/%3E%3C/cc:Work%3E%3C/rdf:RDF%3E%3C/metadata%3E%3Cg transform='translate(1565.7 -1106.8)'%3E%3Cg transform='matrix(3.1437 0 0 3.1437 -4835.7 -1027.6)'%3E%3Cg transform='matrix(1.25 0 0 -1.25 1102.5 727.74)'%3E%3Cpath d='m0 0v-0.103h0.095c0.021 0 0.039 5e-3 0.052 0.013 0.012 8e-3 0.019 0.022 0.019 0.039s-7e-3 0.03-0.019 0.038c-0.013 9e-3 -0.031 0.013-0.052 0.013zm0.096 0.072c0.049 0 0.087-0.011 0.114-0.033s0.04-0.052 0.04-0.09c0-0.032-0.01-0.058-0.032-0.079-0.021-0.02-0.051-0.033-0.091-0.038l0.126-0.145h-0.098l-0.117 0.144h-0.038v-0.144h-0.082v0.385zm-0.025-0.518c0.045 0 0.087 9e-3 0.125 0.026 0.039 0.017 0.073 0.04 0.102 0.069s0.052 0.063 0.069 0.103c0.016 0.039 0.025 0.081 0.025 0.126s-9e-3 0.087-0.025 0.126c-0.017 0.039-0.04 0.074-0.069 0.103s-0.063 0.052-0.102 0.069c-0.038 0.016-0.08 0.024-0.125 0.024s-0.088-8e-3 -0.127-0.024c-0.04-0.017-0.075-0.04-0.104-0.069s-0.052-0.064-0.068-0.103c-0.017-0.039-0.025-0.081-0.025-0.126s8e-3 -0.087 0.025-0.126c0.016-0.04 0.039-0.074 0.068-0.103s0.064-0.052 0.104-0.069c0.039-0.017 0.082-0.026 0.127-0.026m0 0.739c0.059 0 0.113-0.011 0.165-0.033 0.051-0.021 0.095-0.051 0.134-0.089 0.038-0.037 0.068-0.081 0.09-0.132 0.022-0.05 0.033-0.104 0.033-0.161s-0.011-0.111-0.033-0.161-0.052-0.094-0.09-0.132c-0.039-0.037-0.083-0.067-0.134-0.089-0.052-0.022-0.106-0.033-0.165-0.033-0.06 0-0.115 0.011-0.167 0.033s-0.097 0.052-0.135 0.089c-0.038 0.038-0.068 0.082-0.09 0.132s-0.033 0.104-0.033 0.161 0.011 0.111 0.033 0.161c0.022 0.051 0.052 0.095 0.09 0.132 0.038 0.038 0.083 0.068 0.135 0.089 0.052 0.022 0.107 0.033 0.167 0.033m-38.961 1.483c0 0.734 0.481 1.337 1.267 1.337 0.751 0 1.258-0.577 1.258-1.337s-0.507-1.337-1.258-1.337c-0.786 0-1.267 0.603-1.267 1.337m3.381 0v2.088h-0.908v-0.507c-0.288 0.376-0.725 0.612-1.319 0.612-1.171 0-2.089-0.918-2.089-2.193 0-1.276 0.918-2.193 2.089-2.193 0.594 0 1.031 0.236 1.319 0.612v-0.507h0.908zm30.684 0c0 0.734 0.481 1.337 1.267 1.337 0.752 0 1.258-0.577 1.258-1.337s-0.506-1.337-1.258-1.337c-0.786 0-1.267 0.603-1.267 1.337m3.382 0v3.765h-0.909v-2.184c-0.288 0.376-0.725 0.612-1.319 0.612-1.171 0-2.089-0.918-2.089-2.193 0-1.276 0.918-2.193 2.089-2.193 0.594 0 1.031 0.236 1.319 0.612v-0.507h0.909zm-22.795 1.38c0.585 0 0.961-0.367 1.057-1.013h-2.167c0.097 0.603 0.463 1.013 1.11 1.013m0.018 0.813c-1.224 0-2.08-0.891-2.08-2.193 0-1.328 0.891-2.193 2.141-2.193 0.629 0 1.205 0.157 1.712 0.585l-0.445 0.673c-0.35-0.279-0.796-0.437-1.215-0.437-0.585 0-1.118 0.271-1.249 1.023h3.101c9e-3 0.113 0.018 0.227 0.018 0.349-9e-3 1.302-0.813 2.193-1.983 2.193m10.964-2.193c0 0.734 0.481 1.337 1.267 1.337 0.751 0 1.258-0.577 1.258-1.337s-0.507-1.337-1.258-1.337c-0.786 0-1.267 0.603-1.267 1.337m3.381 0v2.088h-0.908v-0.507c-0.289 0.376-0.725 0.612-1.319 0.612-1.171 0-2.089-0.918-2.089-2.193 0-1.276 0.918-2.193 2.089-2.193 0.594 0 1.03 0.236 1.319 0.612v-0.507h0.908zm-8.509 0c0-1.267 0.882-2.193 2.228-2.193 0.629 0 1.048 0.14 1.502 0.498l-0.436 0.734c-0.341-0.245-0.699-0.376-1.093-0.376-0.725 9e-3 -1.258 0.533-1.258 1.337s0.533 1.328 1.258 1.337c0.394 0 0.752-0.131 1.093-0.376l0.436 0.734c-0.454 0.358-0.873 0.498-1.502 0.498-1.346 0-2.228-0.926-2.228-2.193m11.707 2.193c-0.524 0-0.865-0.245-1.101-0.612v0.507h-0.9v-4.176h0.909v2.341c0 0.691 0.297 1.075 0.891 1.075 0.184 0 0.376-0.026 0.568-0.105l0.28 0.856c-0.201 0.079-0.463 0.114-0.647 0.114m-24.341-0.437c-0.437 0.288-1.039 0.437-1.703 0.437-1.058 0-1.739-0.507-1.739-1.337 0-0.681 0.507-1.101 1.441-1.232l0.429-0.061c0.498-0.07 0.733-0.201 0.733-0.437 0-0.323-0.332-0.507-0.952-0.507-0.629 0-1.083 0.201-1.389 0.437l-0.428-0.707c0.498-0.367 1.127-0.542 1.808-0.542 1.206 0 1.905 0.568 1.905 1.363 0 0.734-0.55 1.118-1.459 1.249l-0.428 0.062c-0.393 0.052-0.708 0.13-0.708 0.41 0 0.306 0.297 0.489 0.795 0.489 0.533 0 1.049-0.201 1.302-0.358zm11.716 0.437c-0.524 0-0.865-0.245-1.1-0.612v0.507h-0.9v-4.176h0.908v2.341c0 0.691 0.297 1.075 0.891 1.075 0.184 0 0.376-0.026 0.568-0.105l0.28 0.856c-0.201 0.079-0.463 0.114-0.647 0.114m-7.749-0.105h-1.485v1.267h-0.918v-1.267h-0.847v-0.83h0.847v-1.905c0-0.969 0.376-1.546 1.45-1.546 0.394 0 0.848 0.122 1.136 0.323l-0.262 0.778c-0.271-0.157-0.568-0.236-0.804-0.236-0.454 0-0.602 0.28-0.602 0.699v1.887h1.485zm-13.577-4.176v2.621c0 0.987-0.629 1.651-1.643 1.66-0.533 9e-3 -1.083-0.157-1.468-0.743-0.288 0.463-0.742 0.743-1.38 0.743-0.446 0-0.882-0.131-1.223-0.62v0.515h-0.909v-4.176h0.917v2.315c0 0.725 0.402 1.11 1.023 1.11 0.603 0 0.908-0.393 0.908-1.101v-2.324h0.918v2.315c0 0.725 0.419 1.11 1.022 1.11 0.62 0 0.917-0.393 0.917-1.101v-2.324z' fill='%23FFFFFF'/%3E%3C/g%3E%3Cg transform='matrix(1.25 0 0 -1.25 1103.2 710.77)'%3E%3Cpath d='m0 0v0.61h-0.159l-0.184-0.419-0.183 0.419h-0.16v-0.61h0.113v0.46l0.172-0.397h0.117l0.172 0.398v-0.461zm-1.009 0v0.506h0.204v0.103h-0.52v-0.103h0.204v-0.506z' fill='%23f79410'/%3E%3C/g%3E%3Cpath d='m1080.6 714.05h-17.202v-30.915h17.202z' fill='%23ff5f00'/%3E%3Cg transform='matrix(1.25 0 0 -1.25 1064.5 698.59)'%3E%3Cpath d='m0 0c0 5.017 2.349 9.486 6.007 12.366-2.675 2.106-6.051 3.363-9.72 3.363-8.686 0-15.727-7.042-15.727-15.729s7.041-15.729 15.727-15.729c3.669 0 7.045 1.257 9.72 3.363-3.658 2.88-6.007 7.349-6.007 12.366' fill='%23eb001b'/%3E%3C/g%3E%3Cg transform='matrix(1.25 0 0 -1.25 1103.8 698.59)'%3E%3Cpath d='m0 0c0-8.687-7.041-15.729-15.727-15.729-3.669 0-7.045 1.257-9.721 3.363 3.659 2.88 6.008 7.349 6.008 12.366s-2.349 9.486-6.008 12.366c2.676 2.106 6.052 3.363 9.721 3.363 8.686 0 15.727-7.042 15.727-15.729' fill='%23f79e1b'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E">
                  <img class="card__front-logo card__logo img img-thumbnail" src="{{url('/')}}/asset/{{$logo->image_link}}" >
                  <p class="card_numer">**** **** **** 6258</p>
                  <div class="card__space-75">
                    <span class="card__label">Card holder</span>
                    <p class="card__info text" style="font-size: 10px;">{{ Auth::user()->first_name ? Auth::user()->first_name . ' ' . Auth::user()->last_name : 'McHacker GotCaught'}}</p>
                  </div>
                  <div class="card__space-25">
                    <span class="card__label">Expires</span>
                          <p class="card__info">10/25</p>
                  </div>
                </div>
                
                <div class="card__back card__part">
                  <div class="card__black-line"></div>
                  <div class="card__back-content">
                    <div class="card__secret">
                      <p class="card__secret--last">619</p>
                    </div>
                  
                  </div>
                </div>
                
              </div>
              <div class="messages"></div>
            <!--             
            <div class="row">

                <div class="col-md-4">     <a class="btn btn-primary" style="color:#eee;" id="getAccessToken">Get Access</a>
            </div>
            <div class="col-md-4"></div>
                <div class="col-md-4">    <a class="btn btn-primary" style="color:#eee;" id="registerURLS">Register URLS</a></div>
            </div> -->
            <hr>
              <div class="form-group row">
              
            
                <label class="col-form-label col-lg-2">{{__('Remark')}}</label>
                <div class="col-lg-10">
                  <div class="input-group">
                 
                    <input type="text" name="remark" id="remark" class="form-control" placeholder="Your Remark" required>
                  </div>
                </div>
                
              </div>               
              <div class="form-group row">
                <label class="col-form-label col-lg-2">{{__('Phone To')}}</label>
                <div class="col-lg-4">
          
                  <input type="number" name="phone" id="phone" placeholder="+27734960..." class="form-control" required>
                </div>
               
                <label class="col-form-label col-lg-2">{{__('Amount')}}</label>
                <div class="col-lg-4">
                  <div class="input-group">
                    <span class="input-group-prepend">
                      <span class="input-group-text" style="color:#e46382">R</span>
                    </span>
                    <input type="number" step="any" id="amount"class="form-control" placeholder="100.00" name="amount" required>
                  </div>
                </div>
              </div>                             
              <div class="form-group row">
                <label class="col-form-label col-lg-2">{{__('Name (optional) ')}}</label>
                <div class="col-lg-4">
                  <input type="text" name="name" id="name" class="form-control" placeholder="" required>
                </div>
                <!--
                <label class="col-form-label col-lg-2" for="exampleDatepicker">{{__('Due Date')}}</label>
                <div class="col-lg-4">
                  <div class="input-group">
                    <span class="input-group-prepend">
                      <span class="input-group-text"><i class="fad fa-calendar"></i></span>
                    </span>
                    <input type="text" class="form-control datepicker" name="due_date" value="{{Carbon\Carbon::now()}}" required>
                  </div>
                </div>
                  -->
              </div>                              
              <div class="form-group row">
              
                <div class="col-lg-4">
            
           
                </div>
               
                <div class="col-lg-4">
                
                </div>
              </div>                              
                         
              <div class="text-left">
                <button type="submit" id="send_voucher" class="btn btn-neutral btn-sm">{{__('Create Voucher')}}</a>
              </div>         
      
          </div>
        </div>
        <!-- /basic layout -->
      </div>
      
      <div class="col-md-5">

<div class="phone">
  <div class="speaker"></div>
  <div class="screen">
    <div class="screen-top-bar">
      <div class="signal">
        <i class="fa fa-signal" aria-hidden="true"></i>
      </div>
      <div class="battery">
        <i class="fa fa-battery-three-quarters" aria-hidden="true"></i>
      </div>        
    </div>
    <div class="screen-content">
    <div class="row" style="padding:10px;">
    <div class="col-sm-12 col-md-12 myerr" style="display:none;">
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
               <span class="glyphicon glyphicon-ok"></span> <strong> Access Token Error </strong>
                <hr class="message-inner-separator">
                
                <p id="response"></p>
            </div>
            <div class="row" ></div>
        </div><div class="col-md-2 " > <img class="img img-responsive" width="40px"alt="Image placeholder" src="{{url('/')}}/asset/profile/{{$cast}}"></div>
        <div class="col-sm-10 col-md-10 " >
            <div class="alert alert-success success_pay" style="display:none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
               <span class="glyphicon glyphicon-ok"></span> <strong> Message</strong>
                <hr class="message-inner-separator">
                <p>
                25470837876 has sent you, <b style="color:#fff;"> R 10.00</b> in your mpesa wallet</p>
            </div>
        </div>
      
   
       
    </div>

</div>
  </div>
  <div class="home"></div>
</div>  

    </div>
    </div>
    <script src="{{asset('js/app.js') }}"></script>
    <script>
    
       
          document.getElementById('send_voucher').addEventListener('click', (event) => {
            event.preventDefault();

            const phone = document.getElementById('phone').value;
            const name = document.getElementById('name').value;
            const remark = document.getElementById('remark').value;
            const amount = document.getElementById('amount').value;
            const loading = false;
            const success = false;
         
          //stuff
          axios.post('/script/user/sendmobile',{phone, name, remark, amount})
                .then((response) => {
                    if(!response.data.errorMessage){
                      swal({
                        title: "Good job!",
                        text: "Sucessfully sent mpesa voucher "+response.data.ResponseDescription,
                        icon: "success",
                      });
                      $('.success_pay').show();
                      console.log(response);

                    } else {
                      swal({
                        content: {
                          element: "input",
                          attributes: {
                            placeholder: "Tell us what went wrong...",
                            type: "text",
                            
                          },
                        },
                        title: "Error",
                        text: 'Check your phone number, is it in 27... format? :( ' + response.data.errorMessage,
                        icon: "warning",
                        
                      }); ;
                    }
                    console.log(response);
                })
                .catch((error) => {
                    console.log(error);
                }).finally(() => {
                        this.loading =  false
                });
     
          //endstuff
         
       document.getElementById('getAccessToken').addEventListener('click', (event) => {
            event.preventDefault()

            axios.post('/script/user/get-token',{})
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

            document.getElementById('registerURLS').addEventListener('click', (event) => {
            event.preventDefault()

            axios.post('/script/user/register-url',{})
                .then((response) => {
                    if(response.data.ResponseDescription){
                        document.getElementById('response').innerHTML = response.data.ResponseDescription;

                    } else {
                        document.getElementById('response').innerHTML = response.data.errorMessage;
                    }
                    console.log(response);
                })
                .catch((error) => {
                    console.log(error);
                })
            })
    

       
    
       



    </script>
  

                
@stop