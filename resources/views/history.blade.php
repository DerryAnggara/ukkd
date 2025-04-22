@extends('layouts.main')
@push('head')
<title>Task History</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-item-center my-5">
        <div class="h2">Completed Task History</div>
        <a href="{{ route('d.welcome') }}" class="btn btn-primary rounded-4">Back</a>
    </div>
<div class="table-responsive">
    <table class="table table-striped w-100 text-center align-middle">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Priority</th>
            <th>Deadline</th>
            <th>Action</th>
        </tr>
        @foreach ($todos as $todo)
        <tr>
            <td>{{$todo->name}}</td>
            <td>{{$todo->description}}</td>
            <td>{{$todo->priority}}</td>
            <td>{{$todo->deadline}}</td>
            <td>
                <form action="{{route('d.delete', $todo->id)}}" method="POST" onsubmit="return confirm('Delete Task?')" style="display:inline;">
                    @csrf
                    <button style="border: none; background: none; cursor: pointer;">
                        <i class="bi bi-trash-fill text-danger"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </table>
</div>
</div>
@endsection
