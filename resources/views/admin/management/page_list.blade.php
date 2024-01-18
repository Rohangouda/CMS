@extends('layouts.login_layout')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
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

<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <!-- Zero configuration table -->
        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title">All Page List</h4>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                <table id="list" class="table table-striped table-bordered zero-configuration">
                                                  <thead>
                                                  <tr class="bg-info text-light">
                                                    <th>Id</th>
                                                    <th>Page Name</th>
                                                    <th>Service ID</th>
                                                    <th>Page Status</th>
                                                    <th>Creation Date</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if(!empty($page))
                                                    @foreach($page as $key => $value)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$value->ser_name ?? ''}}</td>
                                                    <td>{{$value->service_id ?? ''}}</td>
                                                    <td>@if($value->page_status == 0)<span class="text-danger"><i class="ft-x-square"></i> Draft Mode</span> @else <span class="text-success"><i class="ft-check-circle"></i> Publish Mode </span> @endif</td>
                                                    <td>{{date('d-m-Y',strtotime($value->created_at))}}</td>
                                                    <td> @if($value->page_status == 0) <button class="btn btn-success text-light" data-toggle="modal" data-target="#activatemodal{{$value->id ?? ''}}"><i class="ft-upload mr-1"></i>Publish Page</button>@else <span class="btn btn-danger text-light" data-toggle="modal"data-target="#deactivatemodal{{$value->id ?? ''}}"><i class="ft-x-circle mr-1"></i>Draft Page </span>@endif</td>
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
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!--/ Zero configuration table -->
    </div>
</div>
<script type="text/javascript">
         $(document).ready( function () {
    $('#list').DataTable();
} );
    </script>
@stop