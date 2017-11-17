@extends('layouts.admin')


@section('content')

    <div class="columns">
        <div class="column is-4 is-offset-4 has-text-centered">
            <h1 class="is-size-2">Books</h1>
        </div>
    </div>

    <div class="columns">
        <div class="column is-12 is-clearfix">
            <a href="{{ route('addBook') }}" class="button is-primary is-outlined is-pulled-right">Add new book</a>
        </div>
    </div>

    <div class="columns">
        <div class="column is-8 is-offset-2">
            <table class="table is-fullwidth is-bordered">
                <thead>
                <tr>
                    <th>Cover</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>

                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>
                            <div class="img-wrapper">
                                <figure class="image">
                                    <img src="{{ $book->cover }}">
                                </figure>
                            </div>
                        </td>

                        <td>
                            <div class="has-text-centered">
                                <div>
                                    <p class="">{{ $book->name }}</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="button is-success is-outlined is-small" href="{{ route('getBook', [$book->id]) }}">Edit</a>
                        </td>

                        <td>
                            <a class="button is-danger is-outlined is-small" href="{{ route('book.delete', [$book->id]) }}" onclick="event.preventDefault(); confirm('Sure?'); document.getElementById('delete-book-{{ $book->id }}').submit();">Delete</a>
                            <form action="{{ route('book.delete', [$book->id]) }}" method="post" id="delete-book-{{ $book->id }}" style="display: none;">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



@stop

@section('styles')

    <style>
        .img-wrapper .image {
            width: 100px;
            height: 100%;
            margin: 0 auto;
        }


    </style>

@endsection

@section('scripts')

@endsection