@extends('layouts.main')
@push('head')
    <title>Todo List</title>
@endpush
@section('main-section')
    <div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">All Task</div>
        <div>
            <a href="{{route('d.history')}}" class="btn btn-primary rounded-4 me-2">History</a>
            <a href="{{route('d.create') }}" class="btn btn-primary rounded-4">New Task</a>
        </div>
    </div>
    <div class="table-responsive">
    <table class="table table-striped w-100 text-center align-middle">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Piority Level</th>
        <th>Deadline</th>
        <th>Action</th>
    </tr>
    @foreach ($todo as $todo)
    <tr>
        <td>{{$todo->name}}</td>
        <td>{{$todo->description}}</td>
        <td>{{$todo->priority}}</td>
        <td>{{$todo->deadline}}</td>
        <td>
            <i class="bi bi-check-circle-fill text-black" onclick="window.location.href='{{route('complete',$todo->id)}}'" style="cursor: pointer;"></i>
            <a href="{{route('d.update', $todo->id)}}" class="text-black"><i class="bi bi-pencil-fill"></i></a>
            <form action="{{ route('d.delete', $todo->id) }} "method="POST" onsubmit="return confirm('Delete Task?')" style="display:inline;">
                @csrf
                <button style="border: none; background: none; cursor: pointer;">
                    <i class="bi bi-trash-fill text-danger"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
</div>
</div>
@endsection
