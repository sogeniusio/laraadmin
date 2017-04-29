@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/brothers') }}">Brother</a> :
@endsection
@section("contentheader_description", $brother->$view_col)
@section("section", "Brothers")
@section("section_url", url(config('laraadmin.adminRoute') . '/brothers'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Brothers Edit : ".$brother->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($brother, ['route' => [config('laraadmin.adminRoute') . '.brothers.update', $brother->id ], 'method'=>'PUT', 'id' => 'brother-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'chapter_id')
					@la_input($module, 'user_id')
					@la_input($module, 'brother_id')
					@la_input($module, 'avatar')
					@la_input($module, 'name')
					@la_input($module, 'phi_name')
					@la_input($module, 'bio')
					@la_input($module, 'phone')
					@la_input($module, 'personal_email')
					@la_input($module, 'address')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/brothers') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#brother-edit-form").validate({
		
	});
});
</script>
@endpush
