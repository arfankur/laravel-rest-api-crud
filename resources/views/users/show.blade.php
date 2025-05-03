@extends('dashboard.app')
@section('title', 'User Detail')
@section('button-caption', 'Back')
@section('button-link', route('users.index'))
@section('button-color', 'btn-secondary')
@section('button-icon', 'fas fa-chevron-left')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User Detail</h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
