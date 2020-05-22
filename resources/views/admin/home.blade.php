@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in as Admin!
                    @auth('admin')
                        You are logged in through admin guard
                    @endauth
                    {{-- {{ Auth::user() }} --}}
                </div>
            </div>
            <div id="example"></div>
            {{\Session::get('adminEmail')}}
        </div>
    </div>
</div>
@endsection
