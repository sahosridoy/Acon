@extends('admin.admin_layout')

@section('team-drop')
active
@endsection

@section('team')
active
@endsection

@section('content')
<div class="section-header">
    <h1>View Team</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.team_add') }}" class="btn btn-primary">Add New</a>
    </div>
</div>

<div class="section-body">
    <div class="row">
      <div class="col-md-12">

        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th class="w_200">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($teams as $key => $item)
                            <tr>
                                <td class="w_50">{{ $teams->firstItem() + $key }}</td>
                                <td><img class="img_200" src="{{ asset('uploads/team') }}/{{ $item->photo }}" alt="{{ $item->photo }}"></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $designation->find($item->designation_id)->designation_name }}</td>
                                <td>
                                    <a href="{{ url('admin/team/edit') }}/{{ $item->id }}" class="btn btn-primary btn-xs">Edit</a>
                                    <a href="{{ url('admin/team/delete') }}/{{ $item->id }}" class="btn btn-danger btn-xs">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

@endsection
