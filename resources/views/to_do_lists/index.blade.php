@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {!! session('success_message') !!}

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card text-bg-theme">

        <div class="card-header d-flex justify-content-between align-items-center p-3">
            <h4 class="m-0">To Do Lists</h4>
            <div>
                <a href="{{ route('to_do_lists.to_do_list.create') }}" class="btn btn-secondary" title="Create New To Do List">
                    <span class="fa-solid fa-plus" aria-hidden="true"></span>
                </a>
            </div>
        </div>
        
        @if(count($toDoLists) == 0)
            <div class="card-body text-center">
                <h4>No To Do Lists Available.</h4>
            </div>
        @else
        <div class="card-body p-0">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Titile</th>
                            <th>Content</th>
                            <th>Status</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($toDoLists as $toDoList)
                        <tr>
                            <td class="align-middle">{{ $toDoList->titile }}</td>
                            <td class="align-middle">{{ $toDoList->content }}</td>
                            <td class="align-middle">{{ $toDoList->status }}</td>

                            <td class="text-end">

                                <form method="POST" action="{!! route('to_do_lists.to_do_list.destroy', $toDoList->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="{{ route('to_do_lists.to_do_list.show', $toDoList->id ) }}" class="btn btn-info" title="Show To Do List">
                                            <span class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('to_do_lists.to_do_list.edit', $toDoList->id ) }}" class="btn btn-primary" title="Edit To Do List">
                                            <span class="fa-regular fa-pen-to-square" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete To Do List" onclick="return confirm(&quot;Click Ok to delete To Do List.&quot;)">
                                            <span class="fa-regular fa-trash-can" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

            {!! $toDoLists->links('pagination') !!}
        </div>
        
        @endif
    
    </div>
@endsection