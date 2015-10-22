@extends('orchestra/foundation::layouts.page')

@section('navbar')
    @include('blupl/management::widgets.header')
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th></th>
            <th>Number of Entries</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Admin &amp; HR</td>
            <td></td>
        </tr>
        <tr>
            <td>Age-Groupe Tournament</td>
            <td></td>
        </tr>
        <tr>
            <td>Anti-Corruption</td>
            <td></td>
        </tr>
        <tr>
            <td>Board Affairs</td>
            <td></td>
        </tr>
        <tr>
            <td>BPL Governing Council</td>
            <td></td>
        </tr>
        <tr>
        </tbody>
    </table>
@stop