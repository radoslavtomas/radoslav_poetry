@extends('layouts.admin')

@section('content')

    <div class="container">
        <section class="section">
            <div class="columns">
                <div class="column has-border form-bg has-text-centered is-6-desktop is-offset-3-desktop is-10-touch is-offset-1-touch">

                    <h1 class="title text-center">Reset password</h1>

                    @if ($errors->any())
                        <div class="notification is-danger">
                            <button class="delete"></button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('password.email') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" name="email" type="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                <span class="icon is-small is-left">
                                <i class="fa fa-envelope"></i>
                            </span>
                            </p>
                        </div>

                        <div class="field m-t-35">
                            <p class="control has-text-centered">
                                <button class="button is-success">
                                    Send Password Reset Link
                                </button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>{{--container ends--}}

@endsection
