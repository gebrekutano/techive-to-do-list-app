@extends('layouts.app')

@section('content')

<div class="card text-bg-theme">

     <div class="card-header d-flex justify-content-between align-items-center p-3">
        <h4 class="m-0">{{ isset($title) ? $title : 'To Do List' }}</h4>
        <div>
            <form method="POST" action="{!! route('to_do_lists.to_do_list.destroy', $toDoList->id) !!}" accept-charset="UTF-8">
                <input name="_method" value="DELETE" type="hidden">
                {{ csrf_field() }}

                <a href="{{ route('to_do_lists.to_do_list.edit', $toDoList->id ) }}" class="btn btn-primary" title="Edit To Do List">
                    <span class="fa-regular fa-pen-to-square" aria-hidden="true"></span>
                </a>

                <button type="submit" class="btn btn-danger" title="Delete To Do List" onclick="return confirm(&quot;Click Ok to delete To Do List.?&quot;)">
                    <span class="fa-regular fa-trash-can" aria-hidden="true"></span>
                </button>

                <a href="{{ route('to_do_lists.to_do_list.index') }}" class="btn btn-primary" title="Show All To Do List">
                    <span class="fa-solid fa-table-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('to_do_lists.to_do_list.create') }}" class="btn btn-secondary" title="Create New To Do List">
                    <span class="fa-solid fa-plus" aria-hidden="true"></span>
                </a>

            </form>
        </div>
    </div>

    <div class="card-body">
        <dl class="row">
            <dt class="text-lg-end col-lg-2 col-xl-3">Titile</dt>
            <dd class="col-lg-10 col-xl-9">{{ $toDoList->titile }}</dd>
            <dt class="text-lg-end col-lg-2 col-xl-3">Content</dt>
            <dd class="col-lg-10 col-xl-9">{{ $toDoList->content }}</dd>
            <dt class="text-lg-end col-lg-2 col-xl-3">Status</dt>
            <dd class="col-lg-10 col-xl-9">{{ $toDoList->status }}</dd>

        </dl>

    </div>
</div>

@endsection