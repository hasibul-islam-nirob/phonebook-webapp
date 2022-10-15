@extends('Layout.app')

@section('title','Contact List')

@section('content')

    <div class="clearfix mb-3 p-2">
        <button id="AddNewBtn" class="btn btn-lg btn-success rounded waves-effect float-left"><i class="fas fa-plus pr-3"></i>  Add New Contact</button>
        <div class="float-right w-50">
            <p class="form-inline d-flex justify-content-center md-form form-sm mt-0">
                <i class="fas fa-search" aria-hidden="true"></i>
                <input id="SearchContactList" onchange="SearchContactList()" class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
            </p>
        </div>
    </div>

    <hr>
    <div class="p-3">
        <table id="dtBasicExample" class="table table-hover" width="100%">
            <thead>
            <tr>
                <th class="th-sm">SL</th>
                <th class="th-sm">Name</th>
                <th class="th-sm">Email</th>
                <th class="th-sm">Number 1</th>
                <th class="th-sm">Number 2</th>
                <th class="th-sm">Action</th>
            </tr>
            </thead>
            <tbody id="contactListTableSearch">

            </tbody>
        </table>
    </div>


    <hr>
    <div class="p-3">
        <table id="dtBasicExample" class="table table-hover" width="100%">
            <thead>
            <tr>
                <th class="th-sm">SL</th>
                <th class="th-sm">Name</th>
                <th class="th-sm">Email</th>
                <th class="th-sm">Number 1</th>
                <th class="th-sm">Number 2</th>
                <th class="th-sm">Action</th>
            </tr>
            </thead>
            <tbody id="contactListTable">

            </tbody>
        </table>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="addMewContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Default form register -->
                    <form class="text-center">
                        <!-- First name -->
                        <input type="text" id="name" class="form-control mb-4" placeholder="Name">
                        <!-- E-mail -->
                        <input type="email" id="email" class="form-control mb-4" placeholder="E-mail">
                        <!-- Phone number 1-->
                        <input type="text" id="phoneOne" class="form-control mb-4" placeholder="Phone number 1">
                        <!-- Phone number 2-->
                        <input type="text" id="phoneTwo" class="form-control mb-4" placeholder="Phone number 2">
                    </form>
                    <!-- Default form register -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="addNewConfirmBtn" type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        getAllUserSiteList();
        SearchContactList()
    </script>
@endsection
