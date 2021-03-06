@extends('layouts.master')

@section('content')
    <div class="col-lg-8 col-md-12">
        <div class="card patient_list">
            <div class="header">
                <h2><strong>New</strong> Patient List</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right slideUp">
                            <li><a href="javascript:void(0);">2017 Year</a></li>
                            <li><a href="javascript:void(0);">2016 Year</a></li>
                            <li><a href="javascript:void(0);">2015 Year</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped m-b-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th></th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Diseases</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="http://via.placeholder.com/35x35" alt="Avatar" class="rounded-circle"></td>
                            <td>Virginia</td>
                            <td>123 6th St. Melbourne, FL 32904</td>
                            <td><span class="badge badge-danger">Fever</span> </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="http://via.placeholder.com/35x35" alt="Avatar" class="rounded-circle"></td>
                            <td>Julie </td>
                            <td>71 Pilgrim Avenue Chevy Chase, MD 20815</td>
                            <td><span class="badge badge-info">Cancer</span> </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="http://via.placeholder.com/35x35" alt="Avatar" class="rounded-circle"></td>
                            <td>Woods</td>
                            <td>70 Bowman St. South Windsor, CT 06074</td>
                            <td><span class="badge badge-warning">Lakva</span> </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src="http://via.placeholder.com/35x35" alt="Avatar" class="rounded-circle"></td>
                            <td>Lewis</td>
                            <td>4 Goldfield Rd.Honolulu, HI 96815</td>
                            <td><span class="badge badge-success">Dental</span> </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection