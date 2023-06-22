@extends('index')
@section('content')
<div class="container">
    <div class="card" style=" background-color:purple;width:500px;">

    <div class="row">
        <div class="col-6 mb-4">
            <form action="{{route('update',$data->id)}}" method="POST">
             <div class="form-outline mb-4" style="padding-left:20px;">
                @csrf
               <input type="text"  name="employee_name" value="{{ $data->employee_name }}" class="form-control form-control-lg mt-3" />
               <input type="text"  name="place" value="{{ $data->place }}" class="form-control form-control-lg mt-3" />
                <input type="text" name="email" value="{{ $data->email }}" class="form-control form-control-lg mt-3" /><br>
             </div>
             <input type="submit" class="btn btn-primary mt-1" value="Update">
            </form>
         </div>
    </div>
</div>
</div>

@endsection