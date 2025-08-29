@extends($activeTemplate . 'layouts.user_master')

@section('content')
    <div class="col-xl-10">
        <div class="card style--two">
            <div class="card-header">
                <h3 class="fw-normal float-start">Virtual Card</h3>
                <!--<h3 class="fw-normal float-end">-->
                <!--    <a href="" class="btn btn-outline--primary btn-sm"> <i class="fas fa-plus"></i> @lang('Add Method')</a>-->
                <!--</h3>-->
            </div>
            <div class="card-body px-sm-5 py-sm-4"> 
                <div class="row gy-4">           
                    <div class="bd-callout bd-callout-primary mx-2">
						<i class="fa fas fa-info-circle text-primary"></i> A “virtual card” is stored on your phone and can be used to pay contactless in stores or online, but has its own unique card number, expiry date, and CVC.					</div>
				</div>
				<div class="media align-items-center d-flex justify-content-between alert alert-warn mb-4">
						<div><i
								class="fas fa-exclamation-triangle"></i> Your virtual card request is pending.						</div>
					</div>
					<div class="bottom-area d-flex justify-content-between align-items-end">
											<div>
												<h3 class="mb-0">Please Contact Support System to Unlock Your Virtual Card</h3>
											</div>
										</div>
                </div>
            </div>
            <div class="card bottom-area d-flex justify-content-center align-items-center">
											<div class="card-body">
												<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkbiPKFoRXDPhhkX0YblJr2Udh2joe33hhvJYZrFKYAH2lHVjF584xFKcE&s=10" />
										</div>
        </div>
    </div>
@endsection