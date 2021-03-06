@extends('layouts.admin')

@section('title', 'Pet Enthusiast')

@push('head-css')
<link href="{{ asset("assets/plugins/dataTables/dataTables.bootstrap.css") }}" rel="stylesheet" />
@endpush
@section('content')
<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    <div class="user-section-inner">
                        <img src="{{ asset('img/thumbnail/john.jpg') }}" alt="">
                    </div>
                    <div class="user-info">
                        <div>John</div>
                        <div class="user-text-online">
                            <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                        </div>
                    </div>
                </div>
                <!--end user image section-->
            </li>
            <li class="sidebar-search">
                <!-- search section-->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!--end search section-->
            </li>
            <li>
                <a href="{{ url('admin/manageProfile') }}"><i class="fa fa-dashboard fa-fw"></i> Manage Profile</a>
            </li>
            <li class="active">
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> All Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="selected">
                        <a href="{{ url('admin/enthusiast') }}">Pet Enthusiast</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/petshops') }}">Pet Shops</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/vetclinics') }}">Veterinary Clinics</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>


            <li>
                <a href="#"><i class="fa fa-rss fa-fw"></i> Subscribers<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('admin/petshop-subscription') }}">Pet Shops</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/vetclinic-subscription') }}">Veterinary CLinics</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>
        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>



<!--  page-wrapper -->
<div id="page-wrapper">

            <br><br><br>
               <div class="row">
                <div class="col-lg-12">
                     <!--Basic Tabs   -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Pet Enthusiast Dashboard
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#registeredUser" data-toggle="tab">Registered User</a>
                                </li>
                                <li><a href="#pets" data-toggle="tab">Pets</a>
                                </li>
                                <li><a href="#post" data-toggle="tab">Posts</a>
                                </li>
                                <li><a href="#adoptions" data-toggle="tab">Adoptions</a>
                                </li>
                                <li><a href="#sell" data-toggle="tab">Sell</a>
                                </li>
                                 <li><a href="#comments" data-toggle="tab">Comments</a>
                                </li>

                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="registeredUser" >
                                    <br><br>
                                     <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-registeredUser">
                                                    <thead>
                                                        <tr>
                                                            <th>Username</th>
                                                            <th>Name</th>
                                                            <th>Address</th>
                                                            <th>Contact Number</th>
                                                            <th>Gender</th>
                                                            <th>Created_at</th>
                                                            <th>Updated_at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>jLkisni</td>
                                                            <td>Internet Explorer 4.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">4</td>
                                                            <td class="center">X</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td>lyndonabarques</td>
                                                            <td>Internet Explorer 5.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5</td>
                                                            <td class="center">C</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>jimmerioles</td>
                                                            <td>Internet Explorer 5.5</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5.5</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>clarapamat</td>
                                                            <td>Internet Explorer 6</td>
                                                            <td>Win 98+</td>
                                                            <td class="center">6</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>jLkisni</td>
                                                            <td>Internet Explorer 4.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">4</td>
                                                            <td class="center">X</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td>lyndonabarques</td>
                                                            <td>Internet Explorer 5.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5</td>
                                                            <td class="center">C</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>jimmerioles</td>
                                                            <td>Internet Explorer 5.5</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5.5</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>clarapamat</td>
                                                            <td>Internet Explorer 6</td>
                                                            <td>Win 98+</td>
                                                            <td class="center">6</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pets">
                                    <br><br>
                                     <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-pets">
                                                    <thead>
                                                        <tr>
                                                            <th>Owner</th>
                                                            <th>Name</th>
                                                            <th>Color</th>
                                                            <th>Gender</th>
                                                            <th>Breed</th>
                                                            <th>Created_at</th>
                                                            <th>Updated_at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>jLkisni</td>
                                                            <td>Internet Explorer 4.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">4</td>
                                                            <td class="center">X</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td>lyndonabarques</td>
                                                            <td>Internet Explorer 5.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5</td>
                                                            <td class="center">C</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>jimmerioles</td>
                                                            <td>Internet Explorer 5.5</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5.5</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>clarapamat</td>
                                                            <td>Internet Explorer 6</td>
                                                            <td>Win 98+</td>
                                                            <td class="center">6</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>jLkisni</td>
                                                            <td>Internet Explorer 4.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">4</td>
                                                            <td class="center">X</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td>lyndonabarques</td>
                                                            <td>Internet Explorer 5.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5</td>
                                                            <td class="center">C</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>jimmerioles</td>
                                                            <td>Internet Explorer 5.5</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5.5</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>clarapamat</td>
                                                            <td>Internet Explorer 6</td>
                                                            <td>Win 98+</td>
                                                            <td class="center">6</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="post">
                                    <br><br>
                                     <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-post">
                                                    <thead>
                                                        <tr>
                                                            <th>Username</th>
                                                            <th>Post</th>
                                                            <th>Description</th>
                                                            <th>Advertise_id</th>
                                                            <th>Created_at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>jLkisni</td>
                                                            <td>Internet Explorer 4.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">4</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td>lyndonabarques</td>
                                                            <td>Internet Explorer 5.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>jimmerioles</td>
                                                            <td>Internet Explorer 5.5</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5.5</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>clarapamat</td>
                                                            <td>Internet Explorer 6</td>
                                                            <td>Win 98+</td>
                                                            <td class="center">6</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>jLkisni</td>
                                                            <td>Internet Explorer 4.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">4</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td>lyndonabarques</td>
                                                            <td>Internet Explorer 5.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>jimmerioles</td>
                                                            <td>Internet Explorer 5.5</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5.5</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>clarapamat</td>
                                                            <td>Internet Explorer 6</td>
                                                            <td>Win 98+</td>
                                                            <td class="center">6</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="adoptions">
                                    <br><br>
                                     <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-adoptions">
                                                    <thead>
                                                        <tr>
                                                            <th>Previous Owner</th>
                                                            <th>New Owner</th>
                                                            <th>Pet Name</th>
                                                            <th>Pet Breed</th>
                                                            <th>Gender</th>
                                                            <th>Created_at</th>
                                                            <th>Updated_at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>jLkisni</td>
                                                            <td>Internet Explorer 4.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">4</td>
                                                            <td class="center">X</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td>lyndonabarques</td>
                                                            <td>Internet Explorer 5.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5</td>
                                                            <td class="center">C</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>jimmerioles</td>
                                                            <td>Internet Explorer 5.5</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5.5</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>clarapamat</td>
                                                            <td>Internet Explorer 6</td>
                                                            <td>Win 98+</td>
                                                            <td class="center">6</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>jLkisni</td>
                                                            <td>Internet Explorer 4.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">4</td>
                                                            <td class="center">X</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td>lyndonabarques</td>
                                                            <td>Internet Explorer 5.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5</td>
                                                            <td class="center">C</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>jimmerioles</td>
                                                            <td>Internet Explorer 5.5</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5.5</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>clarapamat</td>
                                                            <td>Internet Explorer 6</td>
                                                            <td>Win 98+</td>
                                                            <td class="center">6</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sell">
                                    <br><br>
                                     <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-sell">
                                                    <thead>
                                                        <tr>
                                                            <th>Seller</th>
                                                            <th>Products</th>
                                                            <th>Contact no.</th>
                                                            <th>Breed</th>
                                                            <th>Price</th>
                                                            <th>Created_at</th>
                                                            <th>Updated_at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>jLkisni</td>
                                                            <td>Internet Explorer 4.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">4</td>
                                                            <td class="center">X</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td>lyndonabarques</td>
                                                            <td>Internet Explorer 5.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5</td>
                                                            <td class="center">C</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>jimmerioles</td>
                                                            <td>Internet Explorer 5.5</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5.5</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>clarapamat</td>
                                                            <td>Internet Explorer 6</td>
                                                            <td>Win 98+</td>
                                                            <td class="center">6</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>jLkisni</td>
                                                            <td>Internet Explorer 4.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">4</td>
                                                            <td class="center">X</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td>lyndonabarques</td>
                                                            <td>Internet Explorer 5.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5</td>
                                                            <td class="center">C</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>jimmerioles</td>
                                                            <td>Internet Explorer 5.5</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5.5</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>clarapamat</td>
                                                            <td>Internet Explorer 6</td>
                                                            <td>Win 98+</td>
                                                            <td class="center">6</td>
                                                            <td class="center">A</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="comments">
                                    <br><br>
                                     <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-comments">
                                                    <thead>
                                                        <tr>
                                                            <th>Posted By</th>
                                                            <th>Message</th>
                                                            <th>Advertisement id</th>
                                                            <th>Comment By</th>
                                                            <th>Created_at</th>
                                                            <th>Updated_at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>jLkisni</td>
                                                            <td>Internet Explorer 4.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">4</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td>lyndonabarques</td>
                                                            <td>Internet Explorer 5.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>jimmerioles</td>
                                                            <td>Internet Explorer 5.5</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5.5</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>clarapamat</td>
                                                            <td>Internet Explorer 6</td>
                                                            <td>Win 98+</td>
                                                            <td class="center">6</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>jLkisni</td>
                                                            <td>Internet Explorer 4.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">4</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td>lyndonabarques</td>
                                                            <td>Internet Explorer 5.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>jimmerioles</td>
                                                            <td>Internet Explorer 5.5</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5.5</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>clarapamat</td>
                                                            <td>Internet Explorer 6</td>
                                                            <td>Win 98+</td>
                                                            <td class="center">6</td>
                                                            <td class="center">06-15-2016</td>
                                                            <td class="center">07-26-2016</td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Basic Tabs   -->
                </div>

            </div>
        </div>
      <!-- end page-wrapper -->
@endsection
@push('body-bottom-scripts')
<!-- Page-Level Plugin Scripts-->
   <script src="{{ asset("assets/plugins/dataTables/jquery.dataTables.js") }}"></script>
   <script src="{{ asset("assets/plugins/dataTables/dataTables.bootstrap.js") }}"></script>
   <script>
       $(document).ready(function () {
           $('#dataTables-registeredUser').dataTable();
           $('#dataTables-pets').dataTable();
           $('#dataTables-post').dataTable();
           $('#dataTables-adoptions').dataTable();
           $('#dataTables-comments').dataTable();
           $('#dataTables-sell').dataTable();

       });
   </script>
@endpush
