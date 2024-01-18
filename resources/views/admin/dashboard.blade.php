@extends('layouts.login_layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"/>
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script> -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<!-- <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script> -->
    <style>
         <!--toaster-->
   .toggle-box-region {background-color:#fff; border:1px solid #d9d9d9; padding:16px 18px;}
.toggle-box {display:none;}
.toggle-box + label {
	color:#555;
	cursor:pointer;
	display:block;
	font-weight:bold;
	line-height:23px;
	padding:.3em 0 .3em 26px;
	position:relative;
}

.toggle-box + label + div {display:none; margin:0 0 14px;}
.toggle-box:checked + label:nth-child(n) + div {display:block;}

.toggle-box + label:before {
	position:absolute;
	content:"\f0fe";
	font-family:FontAwesome;
	top:.3em;
	left:0px;
	color:#0085a6;
}
.toggle-box:checked + label {color:#0085a6;}
.toggle-box:checked + label:before {content:"\f146";}
.toggle-box-content {border-bottom:4px double #bfbfbf; color:#000; padding:2px 1em .6em 28px;}

/* General */
*, *:before, *:after {
	-webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
			box-sizing: border-box;
}
.box-test {
  padding:3em;
}
</style>
<script>
                 @if(Session::has('archive'))
                    toastr.options =
                    {
                        "closeButton" : true,
                        "progressBar" : true
                    }
                            toastr.info("{{ session('archive') }}");
                    @endif
                    @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('status'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('status') }}");
  @endif
                </script>
<div class="main-content">
          <div class="content-overlay"></div>
          <div class="content-wrapper"><!--Statistics cards Starts-->
          	<h3>Page Info</h3>
<div class="row">

  <div class="col-xl-3 col-lg-6 col-md-6 col-12">
    <div class="card gradient-purple-love">
      <div class="card-content">

        <div class="card-body py-0">
          <div class="media pb-1">
            <div class="media-body white text-left">
            <a style="color: inherit;" href="{{URL('/admin/master-record/category-list')}}">
              <h3 class="font-large-1 white mb-0">{{$service}}</h3>
              <span>Total Service</span>
            </div>
            </a>
            <div class="media-right white text-right">
              <i class="ft-activity font-large-1"></i>
            </div>
          </div>
        </div>
        <div class="card-body py-0">
          <div class="media pb-1">
            <div class="media-body white text-left">
            <a style="color: inherit;" href="{{URL('/admin/all-banner')}}">
              <h3 class="font-large-1 white mb-0">{{$banner}}</h3>
              <span>Total Banner </span>
            </div>
          </a>
            <h3 class="media-right white font-weight-bold text-right">
              ₹
            </h3>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-lg-6 col-md-6 col-12">
    <div class="card gradient-mint">
      <div class="card-content">
        <div class="card-body py-0">
          <div class="media pb-1">
            <div class="media-body white text-left">
              <h3 class="font-large-1 white mb-0">{{$overview}}</h3>
              <span>Total Overview</span>
            </div>
            <div class="media-right white text-right">
              <i class="ft-layers font-large-1"></i>
            </div>
          </div>
        </div>
        <div class="card-body py-0">
          <div class="media pb-1">
            <div class="media-body white text-left">
              <h3 class="font-large-1 white mb-0">{{$treatment}}</h3>
              <span> Treatment Options</span>
            </div>
             <h3 class="media-right white font-weight-bold text-right">
              ₹
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 col-12">
    <div class="card gradient-king-yna">
      <div class="card-content">
        <div class="card-body py-0">
          <div class="media pb-1">
            <div class="media-body white text-left">
              <h3 class="font-large-1 white mb-0">{{$symptoms}}</h3>
              <span>Causes_symptoms</span>
            </div>
            <div class="media-right white text-right">
              <i class="ft-package font-large-1"></i>
            </div>
          </div>
        </div>
        <div class="card-body py-0">
          <div class="media pb-1">
            <div class="media-body white text-left">
            <a style="color: inherit;"  href="{{ URL('/admin/testimonials')}}">
              <h3 class="font-large-1 white mb-0">{{$testimonial}}</h3>
              <span>Total Tesimonials</span>
            </div>
            </a>
             <h3 class="media-right white font-weight-bold text-right">
              ₹
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 col-12">
    <div class="card gradient-mint">
      <div class="card-content">
        <div class="card-body py-0">
          <div class="media pb-1">
            <div class="media-body white text-left">
              <a style="color: inherit;" href="#">
                <h3 class="font-large-1 white mb-0">{{$faq}}</h3>
                <span>Total FAQs</span>
              </a>
            </div>
            <div class="media-right white text-right">
              <i class="ft-users font-large-1"></i>
            </div>
          </div>
        </div>
        <div class="card-body py-0">
          <div class="media pb-1">
            <div class="media-body white text-left">
              <a style="color: inherit;" href="#">
                <h3 class="font-large-1 white mb-0">{{$doctor}}</h3>
                <span>Total Doctor Deactivate</span>
              <a href="#">
            </div>
            <div class="media-right white text-right">
              <i class="ft-users font-large-1"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row match-height">
<div class="col-xl-6 col-lg-12 col-12">
    <div class="card shopping-cart" style="height: 476.875px;">
      <div class="card-header pb-2">
        <h4 class="card-title mb-1">Page Status <span class="ml-5"><a class="text-success" href="{{URL('/admin/all-Pages')}}"></a></span> </h4>
      </div>
      <div class="card-content">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered zero-configuration">
              <thead class="gradient-mint text-light">
                <tr>
                  <th></th>
                  <th>Page Name</th>
                  <th>ID</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody class="text-primary">
              @if(!empty($page))
              @foreach($page as $key => $value)
                <tr>
                <td>{{$value->id ?? ''}}</td>
                <td>{{$value->ser_name ?? ''}}</td>
                <td>{{$value->service_id ?? ''}}</td>
                <td>@if($value->page_status == 0)<span class="text-danger"><i class="ft-x-square"></i> Draft</span> @else <span class="text-success"><i class="ft-check-circle"></i> Publish </span> @endif</td>
                <!-- <td> @if($value->page_status == 0) <button class="btn btn-success text-light" data-toggle="modal" data-target="#activatemodal{{$value->id ?? ''}}"><i class="ft-upload mr-1"></i>Publish</button>@else <span class="btn btn-danger text-light" data-toggle="modal"data-target="#deactivatemodal{{$value->id ?? ''}}"><i class="ft-x-circle mr-1"></i>Draft</span>@endif</td>   -->
                <td>@if($value->page_status == 0)<span class="badge badge-pill bg-light-success cursor-pointer" data-toggle="modal" data-target="#activatemodal{{$value->id ?? ''}}">Publish Page</span>@else<span class="badge badge-pill bg-light-danger cursor-pointer" data-toggle="modal"data-target="#deactivatemodal{{$value->id ?? ''}}">Draft Page</span>@endif</td>
              </tr>
                {{-- Status Activate Modal --}}
                            <div class="modal fade" id="activatemodal{{$value->id ?? ''}}" tabindex="-1"
                                role="dialog" aria-labelledby="#activatemodallabel{{$value->id ?? ''}}"
                                aria-hidden="true">
                                <div class="modal-dialog modal-confirm modal-sm" style="background: #eda645 !important;outline: none; color: #434e65;">
									<div class="modal-content" style="padding: 20px;font-size: 16px;border-radius: 5px;border-bottom: 5px solid #1ec22b;">
									<div class="modal-header justify-content-center" style="background: #1ec22b;border-bottom: none;   position: relative;text-align: center;margin: -20px -20px 0;border-radius: 5px 5px 0 0;">
										<div class="icon-box" style="color: #fff;width: 95px; height: 95px;display: inline-block; border-radius: 50%; z-index: 9; border: 5px solid #fff; padding: 15px; text-align: center;">
										<i class="fa fa-upload" style="font-size: 58px;"></i>
										</div>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position: absolute; top: 15px; right: 15px; color: #fff;">&times;</button>
									</div>
										<div class="modal-body text-center">
											<p id="fail_modal_text_section">
												<div>
													<p class="text-center big text-green">Are You Sure To Publish Page?</p>
												</div>
												<form action="{{ route('/page_publish') }}" method="POST">
                                                    @csrf
                                                    <button type="button" class="btn btn-primary text-light"
                                                        data-dismiss="modal">No</button>
                                                    <input type="text" name="service_id" value="{{$value->id ?? ''}}"
                                                        hidden>
                                                    <input type="text" name="deactivate" value="Activate" hidden>
                                                    <button type="submit" class="btn btn-danger text-light ml-2">Yes</button>
												</form>
										</p>
									</div>
									</div>
								</div>
                            </div>
                            {{-- End of Activate Status modal --}}
                            {{-- Status deactivate Modal --}}
                            <div class="modal fade" id="deactivatemodal{{$value->id ?? ''}}" tabindex="-1"
                                role="dialog" aria-labelledby="#deactivatemodallabel{{$value->id ?? ''}}"
                                aria-hidden="true">
								<div class="modal-dialog modal-confirm modal-sm" style="margin-top: 50px; color:#ffc107;">
								<div class="modal-content" style="padding: 20px;font-size: 16px;border-radius: 5px;border-bottom: 5px solid #dc3545;">
								<div class="modal-header justify-content-center" style="background:#ffc107;border-bottom: none;   position: relative;text-align: center;margin: -20px -20px 0;border-radius: 5px 5px 0 0;">
									<div class="icon-box" style="color: #fff;   width: 90px;height: 90px;display: inline-block;border-radius: 50%;z-index: 9;border: 5px solid #fff;padding: 15px;text-align: center;">
									<i class="fa fa-exclamation-triangle" style="font-size: 50px;"></i>
									</div>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position: absolute; top: 15px; right: 15px; color: #fff;">&times;</button>
								</div>
									<div class="modal-body text-center">
											<div class="alert flex-center">
												<p class="text-center big text-danger">Are You Sure to Deactivate Page ?</p>
												<form action="{{ route('/page_publish') }}" method="POST">
														@csrf
														<button type="button" class="btn btn-primary text-light"
															data-dismiss="modal">No</button>
														<input type="text" name="service_id" value="{{$value->id ?? ''}}"
															hidden>
														<input type="text" name="deactivate" value="Deactivate" hidden>
														<button type="submit" class="btn btn-danger text-light ml-2">Yes</button>
												</form>
											</div>
									</div>
									</div>
								</div>
                            </div>
                            {{-- End of deactivate Status modal --}}
                                                @endforeach
                                                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-lg-12 col-12">
    <div class="card shopping-cart" style="height: 476.875px;">
      <div class="card-header pb-2">
      <h4 class="card-title mb-1 text-primary">Archive Pages</h4>
      </div>
      <div class="card-content">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table id="example1" class="table table-striped table-bordered zero-configuration">
              <thead class="gradient-purple-love text-light">
                <tr>
                  <th></th>
                  <th>Page Name</th>
                  <th>ID</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($archive_page as $value)
                <tr>
                  <td><img class="height-30" src="{{ asset('medfin/green.jpeg') }}" alt="Generic placeholder image"></td>
                  <td>{{$value->ser_name ?? ''}}</td>
                  <td>{{$value->service_id ?? ''}}</td>
                  <td>{{ date('d-m-Y', strtotime($value->created_at ?? '')) }}</td>
                  <td><span class="badge badge-pill bg-light-success cursor-pointer" data-toggle="modal" data-target="#Archivemodal{{$service->id ?? ''}}">Activate</span></td>   
                </tr>
                {{-- Status archive Modal --}}
	                        <div class="modal fade" id="Archivemodal{{$service->id ?? ''}}" tabindex="-1"
                                role="dialog" aria-labelledby="#Archivemodallabel{{$service->id ?? ''}}"
                                aria-hidden="true">
                              
                                <div class="modal-dialog modal-confirm modal-sm" style="background: #eda645 !important;outline: none; color: #434e65;">
                                <div class="modal-content" style="padding: 20px;font-size: 16px;border-radius: 5px;border-bottom: 5px solid #1ec22b;">
                                <div class="modal-header justify-content-center" style="background: #1ec22b;border-bottom: none;   position: relative;text-align: center;margin: -20px -20px 0;border-radius: 5px 5px 0 0;">
                                  <div class="icon-box" style="color: #fff;width: 95px; height: 95px;display: inline-block; border-radius: 50%; z-index: 9; border: 5px solid #fff; padding: 15px; text-align: center;">
                                  <i class="fa fa-check" style="font-size: 58px;"></i>
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position: absolute; top: 15px; right: 15px; color: #fff;">&times;</button>
                                  </div>
                                    <div class="modal-body text-center">
                                        <div class="alert flex-center">
                                          <p class="text-center big text-success">Are You Sure to Activate This Page ?</p>
                                          <form action="{{ route('/page_archive') }}" method="POST">
                                                    @csrf
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">No</button>
                                                        <input type="text" name="service_id" value="{{$value->id ?? ''}}"
                                                          hidden>
                                                    <input type="text" name="deactivate" value="Deactivate" hidden>
                                                    <button type="submit" class="btn btn-primary ml-2">Yes</button>
                                                </form>
                                        </div>
                                    </div>
                                    </div>
                                  </div>
                            </div>
                {{-- End of archive Status modal --}}
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Statistics cards Ends-->
<div class="row match-height mt-5">
  <div class="col-xl-6 col-md-6 col-12">
    <div class="card" style="height: 476.875px;">
      <div class="card-header">
        <h4 class="card-title">Statistics</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <p class="font-medium-2 text-center my-2">Last 2 Month Page Statistics</p>
          <div id="Stack-bar-chart" class="height-300 Stackbarchart mb-2"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><line x1="48.44501041666667" x2="48.44401041666667" y1="240" y2="72" class="ct-bar" ct:value="8" style="stroke-width: 5px"></line><line x1="85.33303125000002" x2="85.33203125000001" y1="240" y2="51" class="ct-bar" ct:value="9" style="stroke-width: 5px"></line><line x1="122.22105208333335" x2="122.22005208333334" y1="240" y2="135" class="ct-bar" ct:value="5" style="stroke-width: 5px"></line><line x1="159.10907291666666" x2="159.10807291666666" y1="240" y2="114" class="ct-bar" ct:value="6" style="stroke-width: 5px"></line><line x1="195.99709375" x2="195.99609375" y1="240" y2="93" class="ct-bar" ct:value="7" style="stroke-width: 5px"></line><line x1="232.88511458333335" x2="232.88411458333334" y1="240" y2="156" class="ct-bar" ct:value="4" style="stroke-width: 5px"></line></g><g class="ct-series ct-series-b"><line x1="48.44501041666667" x2="48.44401041666667" y1="72" y2="30" class="ct-bar" ct:value="2" style="stroke-width: 5px"></line><line x1="85.33303125000002" x2="85.33203125000001" y1="51" y2="30" class="ct-bar" ct:value="1" style="stroke-width: 5px"></line><line x1="122.22105208333335" x2="122.22005208333334" y1="135" y2="30" class="ct-bar" ct:value="5" style="stroke-width: 5px"></line><line x1="159.10907291666666" x2="159.10807291666666" y1="114" y2="30" class="ct-bar" ct:value="4" style="stroke-width: 5px"></line><line x1="195.99709375" x2="195.99609375" y1="93" y2="30" class="ct-bar" ct:value="3" style="stroke-width: 5px"></line><line x1="232.88511458333335" x2="232.88411458333334" y1="156" y2="30" class="ct-bar" ct:value="6" style="stroke-width: 5px"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="30" y="270" width="36.888020833333336" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 37px; height: 20px;">Jan</span></foreignObject><foreignObject style="overflow: visible;" x="66.88802083333334" y="270" width="36.888020833333336" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 37px; height: 20px;">Feb</span></foreignObject><foreignObject style="overflow: visible;" x="103.77604166666667" y="270" width="36.88802083333333" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 37px; height: 20px;">Mar</span></foreignObject><foreignObject style="overflow: visible;" x="140.6640625" y="270" width="36.88802083333334" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 37px; height: 20px;">Apr</span></foreignObject><foreignObject style="overflow: visible;" x="177.55208333333334" y="270" width="36.88802083333334" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 37px; height: 20px;">May</span></foreignObject><foreignObject style="overflow: visible;" x="214.44010416666669" y="270" width="36.888020833333314" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 37px; height: 20px;">Jun</span></foreignObject></g><defs><linearGradient id="linear" x1="0" y1="1" x2="0" y2="0"><stop offset="0" stop-color="#7441DB"></stop><stop offset="1" stop-color="#C89CFF"></stop></linearGradient></defs></svg></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-md-6 col-12 mt-5">
    <div class="card" style="height: 476.875px;">
      <div class="card-header">
      <h4 class="card-title mb-0">New Users<span class="text-success ml-5" >Username</span></h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          @foreach($user_list as $value)
          <div class="media pt-0 pb-2">
            <img class="mr-3 avatar" src="{{asset('app-assets/img/portrait/small/user1.png')}}" alt="Avatar" width="35">
            <div class="media-body">
              <h4 class="font-medium-1 mb-0"><span>{{$value->first_name}}</span>  <span class="text-primary ml-3">{{$value->email}}<span></h4>
            </div>
          </div>
         @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
$(document).ready(function() {
    $('#example1').DataTable();
} );
  </script>
@stop