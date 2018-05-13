<?php
session_start();
$admin_kadi="admin";
$admin_sifre="admin";
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Admin Paneli</title>
</head>
<body>
<div id="ana" style="display:none;">

  <div id="icorta">    

    <img src="logom.png" style="margin-top:30%; margin-left:-10%;">  

  </div>

</div>

<div>


</div>

<?php 
if(isset($_SESSION['admin'])){ 
?>

<?php 

}else {
	
	 if($_POST){
		 $kadi=strip_tags($_POST['kadi']);
		
	  $ksifre=strip_tags($_POST['ksifre']);
	  
	  if($admin_kadi!=$kadi){ echo '<div class="kadialert">
	  kullanici adi hatali</div>';
	  }
	   elseif($admin_kadi==$kadi and $admin_sifre!=$ksifre){ echo '<div class="sifrealert">sifre hatali</div>'; 
	   
	   }
	 else{ $_SESSION['admin']==$kadi;
	 header("location:index.html");
	 }
	  }
	?>

<style>
.sifrealert { background-color:red; }
.kadialert { background-color:red; }
body { background:url(arkaplan.jpg); background-repeat:no-repeat; width:100%; height:auto; }
</style>

        <div class="container" style="margin-top:10%; margin-left:4%;">
        <form class="form-horizontal" role="form" method="POST" action="">
            <div class="row" >
                <div class="col-md-3"></div>
                <div class="col-md-6">
               
                    <h2 style="margin-left:15%; color:#ffe314;">AR GARAGE ADMİN GİRİŞİ</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">E-Mail Address</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="text" name="kadi" class="form-control" id="email"
                                   placeholder="kullaniciadi" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="ksifre" class="form-control" id="password"
                                   placeholder="sifre" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        <!-- Put password error message here -->    
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6" style="padding-top: .35rem">
                    <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                       
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" style="width:100%; margin-left:5%;" class="btn btn-warning"><i class="fa fa-sign-in"></i> Giriş Yap</button>
                    
                </div>
            </div>
        </form>
    </div>
</form>
<div class="container" style="margin-left:15%; margin-top:3%;">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="progress blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">Yapım</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="progress yellow">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                
                <span class="progress-right">
                
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">Tasarım</div>
            </div>
        </div>
          <div class="col-md-3 col-sm-6">
            <div class="progress green">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                
                <span class="progress-right">
                
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">Satış</div>
            </div>
        </div>
    </div>
</div>
<style>.progress{
    width: 150px;
    height: 150px;
    line-height: 150px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position: relative;
}
.progress:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
}
.progress > span{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.progress .progress-left{
    left: 0;
}
.progress .progress-bar{
    width: 100%;
    height: 100%;
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.progress .progress-left .progress-bar{
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
}
.progress .progress-right{
    right: 0;
}
.progress .progress-right .progress-bar{
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
}
.progress .progress-value{
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #44484b;
    font-size: 24px;
    color: #fff;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 5%;
}
.progress.blue .progress-bar{
    border-color: #049dff;
}
.progress.blue .progress-left .progress-bar{
    animation: loading-2 1.5s linear forwards 1.8s;
}
.progress.yellow .progress-bar{
    border-color: #fdba04;
}
.progress.yellow .progress-left .progress-bar{
    animation: loading-3 1s linear forwards 1.8s;
}
.progress.pink .progress-bar{
    border-color: #ed687c;
}
.progress.pink .progress-left .progress-bar{
    animation: loading-4 0.4s linear forwards 1.8s;
}
.progress.green .progress-bar{
    border-color: #1abc9c;
}
.progress.green .progress-left .progress-bar{
    animation: loading-5 1.2s linear forwards 1.8s;
}
@keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-2{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
    }
}
@keyframes loading-3{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
}
@keyframes loading-4{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(36deg);
        transform: rotate(36deg);
    }
}
@keyframes loading-5{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(126deg);
        transform: rotate(126deg);
    }
}
@media only screen and (max-width: 990px){
    .progress{ margin-bottom: 0px; background-color:red; float:left;}
 .progress.blue { display:none; }
  .progress.yellow { display:none; }
   .progress.green { display:none; }
     .btn btn-warning { width:10%; }
 
}
@media only screen and (max-width: 768){

}
.blockOverlay{
    background-color:#7a6b63; !important;
}
.blockMsg {
    border: 0px !important;
}
#ana {
    width: 100%;    
    margin-top: auto;
    margin-bottom: auto;
    height: 400px;
    margin-right: auto;
    margin-left: auto;
    position: absolute;
    top: 50%;
    /*margin-top: -200px;*/ /* yüksekliğin yarısı */
    text-align: center;
    background-color: #7a6b63;
}

#icorta {
    height: 400px;
    width: 400px;
    margin-top: 0px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
}
</style>
<script src="http://code.jquery.com/jquery-2.0.0.js"></script>
<script src="jquery.blockUI.js"></script>
<script>
$(document).ready(function() { 
        $.blockUI({ 
            message: $('#ana'), 
            css: { 
                top:  ($(window).height() - 400) /2 + 'px', 
                left: ($(window).width() - 400) /2 + 'px', 
                width: '0px',
                opacity: 1
            },
            overlayCSS : {
                opacity: 1
            }
        }); 
setTimeout($.unblockUI, 2000); 
});         
</script>
<?php  } ?>
</body>

</html>