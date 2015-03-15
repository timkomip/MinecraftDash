@extends('app')

@section('content')

<div class="container" ng-app="minecraftApp" ng-controller="MainCtrl">
    <div class="col-md-6">
        <h2>Players</h2>
        <table id="players" class="table">
            <tbody>
            </tbody>
        </table>
    </div>
</div>

@stop
