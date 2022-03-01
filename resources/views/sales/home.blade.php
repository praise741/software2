<!DOCTYPE html>
<html>
@extends('layouts.app')

<body>

    <div id="wrapper">

@include('layouts.navbar')


        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Widgets</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/dashboard">Home</a>
                        </li>
                        <li class="active">
                            <strong>Home</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-3">

                </div>
            </div>




            <div class="col-lg-3">
                <div class="widget style1 yellow-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-music fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Number of products</span>
                            <h2 class="font-bold">{{ $number }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div>

        </div>
        </div>

    <!-- Mainly scripts -->

@include('layouts.scripts');
</body>

</html>
