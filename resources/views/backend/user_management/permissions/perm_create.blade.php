@extends('backend.layout.main')

@section('content')

    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-content collpase collapse show">
                            <form method="post" action="{{ route('permission.store') }}" class="form form-horizontal">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i>{{$title}}</h4>
                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}  row">
                                        <label class="col-md-3 label-control" for="projectinput1">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="projectinput1" class="form-control" value="{{ Request::old('name' ?: '') }}" placeholder="Name" name="name">
                                            @if ($errors->has('name'))
                                                <span class="help-block">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('display_name') ? ' has-error' : '' }}  row">
                                        <label class="col-md-3 label-control" for="projectinput2">Display Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="projectinput2" class="form-control" value="{{ Request::old('display_name' ?: '') }}" placeholder="Display Name" name="display_name">
                                            @if ($errors->has('display_name'))
                                                <span class="help-block">{{ $errors->first('display_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}  row">
                                        <label class="col-md-3 label-control" for="projectinput3">Description</label>
                                        <div class="col-md-9">
                                            <input type="text" id="projectinput3" class="form-control" placeholder="Description" value="{{ Request::old('description' ?: '') }}" name="description">
                                            @if ($errors->has('description'))
                                                <span class="help-block">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="button" href="{{route('permission.index')}}" class="btn btn-warning mr-1">
                                        <i class="ft-x"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Save
                                    </button>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                </div>
                            </form>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
    </section>

@endsection