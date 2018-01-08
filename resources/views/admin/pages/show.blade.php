@extends('layouts.dashboard')

@section('content')

    <h1>Page</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Page Title</th><th>Page Slug</th><th>Page Content</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $page->id }}</td> <td> {{ $page->page_title }} </td><td> {{ $page->page_slug }} </td><td> {{ $page->page_content }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection