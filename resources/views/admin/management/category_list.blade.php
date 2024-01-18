@extends('layouts.login_layout')
@section('content')
<script src="{{asset('js/custom/admin/mst_category.js?var=')}}{{date('YmdHis')}}"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style type="text/css">
img {
    max-width: 180px;
}

input[type=file] {
    padding: 10px;
    background: white;
}

</style>

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
                                    <h4 class="card-title">Services</h4>
                                </div>
                                <div class="col text-right">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#cloneModal">
                                        Clone Page
                                    </button>
                                    <!-- clone Modal -->
                                            <div class="modal fade" id="cloneModal" tabindex="-1" role="dialog" aria-labelledby="cloneModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="cloneModalLabel">Clone Page</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="height: 331px;">
                                                <form action="{{ route('clone.service') }}" method="POST">
                                                 @csrf
                                                <div class="form-group mt-2">
                                                    <label>Select Page*</label>
                                                    <select class="form-control btn-primary text-light" data-live-search="true" id="page_id"  name="page_id" required style="width: 465px;">
                                                     <option>---SELECT SERVICE---</option>
                                                    @foreach($service as $val)
                                                    <option value="{{$val->id}}">{{$val->ser_name}}</option>
                                                      @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label>Page URL*</label>
                                                    <input type="text" id="ser_name" class="form-control" name="ser_name"
                                                        placeholder="Enter page Name" style="background-color: white;" required>
                                                </div>
                                                <div class="text-center my-4">
                                                    <input type="submit" class="btn btn-primary" value="Submit">
                                                </div>
                                                </form>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                             <!-- clone Modal -->
                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Add Services
                                    </button>
                                </div>
                            </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                
                                            </div>
                                            <div class="col-sm-12 col-md-6 text-right">
                                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                    <label>Search:<input type="search"
                                                            class="form-control form-control-sm" id="search_text" placeholder=""
                                                            aria-controls="DataTables_Table_0"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table
                                                    class="table table-striped table-bordered zero-configuration dataTable"
                                                    id="DataTables_Table_0" role="grid"
                                                    aria-describedby="DataTables_Table_0_info" style="width:100%">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>#</th>
                                                            <th>NAME</th>
                                                            <th>IMAGE</th>
                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="category_list"></tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="container">
                                                        <div class="user_pagination d-flex justify-content-center">
                                                            <ul class="nav">
                                                                <li class="nav-item js_pagination_append"
                                                                    style="padding: 10px;"></li>
                                                                <li class="nav-item">
                                                                    <div class="dataTables_length"
                                                                        id="DataTables_Table_0_length" style="margin-top: 10px;">
                                                                        <label> <select id="userPerPage"
                                                                         name="DataTables_Table_0_length"
                                                                          aria-controls="DataTables_Table_0"
                                                                           class="custom-select custom-select-sm form-control form-control-sm" style="display: none;height: 34px;">
                                                                                <option value="20">20</option>
                                                                                <option value="25">25</option>
                                                                                <option value="50">50</option>
                                                                                <option value="100">100</option>
                                                                            </select> </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><br /><br />
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

<!-- Add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog mt-5" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="exampleModalLabel">Add Services</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
            </div>
            <div class="modal-body" >
                <form action="{{ route('master.category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Service*</label>
                        <select class="form-control" id="service"  name="service_id" onchange="change(value)"
                             style="background-color: white;width: 465px;"></select>
                    </div>
                    <div class="form-group">
                        <label>Page URL*</label>
                        <input type="text" id="ser_name" class="form-control" name="ser_name"
                            placeholder="Enter page Name" style="background-color: white;" required>
                    </div>
                    <div class="form-group">
                        <label>Enter Tags*</label>
                        <input type="text" id="tag" class="form-control" name="tag"
                            placeholder="Enter Tags" style="background-color: white;" required>
                    </div>
                    <!-- <div class="form-group text-center">
                        <img class="my-2" id="blah" src="{{ asset('medfin/favicon.png') }}" alt="your image" />
                        <input type='file' name="image" onchange="readURL(this);" class="form-control" />
                    </div> -->
                    <div class="text-center">
                        <input type="submit" class="btn btn-info" value="Submit" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- end add modal  --}}
{{-- Edit Modal --}}
<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog mt-5" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title">Update</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="updateUrl" onsubmit="return checkEditForm(this);">
                    @csrf
                     <div class="form-group">
                        <label>Service name</label>
                        <input type="text" class="form-control" id="edit-title" name="ser_name"
                            style="background-color: white;"required>
                    </div>
                    <div class="form-group">
                        <label>Tags</label>
                        <input type="text" id="edit-tags" class="form-control" name="tags"
                            style="background-color: white;" required>
                    </div>
            <div class="text-center">
                <input type="submit" class="btn btn-info btn-lg" value="Update" name="Update">
            </div>
            </form>

        </div>
    </div>
</div>
</div>
{{--end edit modal--}}

<input type="hidden" id="edit_id">
<!-- END : End Main Content-->
<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
<script type="text/javascript">
    var url = "https://services.medfin.in/catalog/all-services-v2";
    var serviceId, serviceName;
    var xhr;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var res = JSON.parse(xhr.responseText),
                data = res;
            for(var i = 0; i < data.length; i++) {
                var ele = document.createElement("option");
                ele.value = data[i].serviceId;
                ele.innerHTML = data[i].serviceName;
                document.getElementById("service").appendChild(ele);
            }
        }
    }
    xhr.open("GET", url, true);
    xhr.send();
    //search
    $(document).ready(function() {
    $('#service').select2();
});
$(document).ready(function() {
    $('#page_id').select2();
});

</script>
@stop