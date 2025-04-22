@extends('layouts.main')
@push('head')
    <title>Update</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-item-center my-5">
        <div class="h2">Update Task</div>
        <a href="{{ route('d.welcome') }}" class="btn btn-primary rounded-4">Back</a>
    </div>

<div class="card">
    <div class="card-body">
        <form action="{{route('d.updateData')}}" method="POST">
            @csrf
            <label for="name" class="form-label mt-2">Name</label>
            <input type="text" name="name" class="form-control" value="{{$todo->name}}">
            <label for="description" class="form-label mt-2">Description</label>
            <input type="text" name="description" class="form-control" value="{{$todo->description}}">
            <label for="priority" class="form-label mt-2">Priority Level</label>
            <select name="priority" class="form-select" value="{{$todo->priority}}">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
            <label for="deadline" class="form-label mt-2">Deadline</label>
            <input type="date" name="deadline" class="form-control" value="{{$todo->deadline}}">
            <input type="number" name="id" value="{{$todo->id}}" hidden>
            <button class="btn btn-primary btn-lg mt-4">Save</button>
        </form>
    </div>
</div>
</div>
@endsection
