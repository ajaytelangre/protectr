<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Protectr</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
     <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body style="background-image:url('img/back1.png'); background-repeat: no-repeat; background-size:cover;" >

<!-- Main Content -->

<div class="container mt-3">
    <form action="{{url('/payment_initiate_request')}}" method="post">
        <input type="hidden" name="qty" value="{{$qty}}">
        @csrf
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card border_color card_border">
					<div class="card-header bg-info card_header">
						<h5 class="card-title text-center text-white">Make Payment</h5>
					</div>
                    <div class="card-body ">
                       
                        @if(session('message'))
                        <div class="alert alert-success text-center">
                                {{ session('message') }}
                        </div>
                        @endif

                        @if($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="text-danger"><p>{{ $error }}</P></div>
                            @endforeach
                        @endif
                            <!-- form section -->
                           
                            <div class="form-group">
                                 <div class="row">
                                        <label class="ml-1"> Name:</label>
                                 </div>
                                 <div class="row">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Username" aria-label="name" value="" >
                                 </div>
                                 <div class="row">
                                        <label class="ml-1"> Email</label>
                                 </div>
                                 <div class="row">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" aria-label="email" value="" >
                                 </div>
                                 <div class="row">
                                        <label class="ml-1"> Contact Number:</label>
                                 </div>
                                 <div class="row">
                                        <input type="mobile" id="mobile" name="mobile" class="form-control" placeholder="Mobile Number" aria-label="mobile" value="" >
                                 </div>

                                 <div class="row">
                                        <label class="ml-1"> Address:</label>
                                 </div>
                                 <div class="row">
                                        <input type="text" id="address" name="address" class="form-control" placeholder="order delivery address" aria-label="address" value="" >
                                 </div>

                                 <div class="row">
                                        <label class="ml-1"> City:</label>
                                 </div>
                                 <div class="row">
                                        <input type="text" id="city" name="city" class="form-control" placeholder="city" aria-label="address" value="" >
                                 </div>

                                 <div class="row">
                                        <label class="ml-1"> State:</label>
                                 </div>
                                 <div class="row">
                                        <input type="text" id="state" name="state" class="form-control" placeholder="state" aria-label="address" value="" >
                                 </div>

                                 <div class="row">
                                        <label class="ml-1"> Pincode:</label>
                                 </div>
                                 <div class="row">
                                        <input type="text" id="pincode" name="pincode" class="form-control" placeholder="pincode" aria-label="address" value="" >
                                 </div>
                             
                             
                                 <div class="row pt-4 justify-content-center">
									<div class="col-md-4 col-lg-4">
                                        <button type="submit" id="submit" class=" btn btn-success btn-block ">Submit</button>
									</div>
                                 </div>
                            </div> 

                            <!-- form section end -->
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Close Main Content -->
 

<!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>