@extends('backend.layout.main')

@section('content')

    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-content collpase collapse show" style="">
                        <div class="card-body">

                            <form method="post" action="{{ route('roles.update', ['id' => $role->id]) }}"  class="form form-horizontal">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i>{{$title}}</h4>
                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} row">
                                        <label class="col-md-3 label-control" for="projectinput1">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="projectinput1" value="{{ $role->name }}" class="form-control" placeholder="Name" name="name">
                                            @if ($errors->has('name'))
                                                <span class="help-block">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('display_name') ? ' has-error' : '' }} row">
                                        <label class="col-md-3 label-control" for="projectinput1">Display Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="projectinput1" value="{{ $role->display_name }}" class="form-control" placeholder="Display Name" name="display_name">
                                            @if ($errors->has('display_name'))
                                                <span class="help-block">{{ $errors->first('display_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }} row">
                                        <label class="col-md-3 label-control" for="projectinput1">Description</label>
                                        <div class="col-md-9">
                                            <input type="text" id="projectinput1" value="{{ $role->description }}" class="form-control" placeholder="Description" name="description">
                                            @if ($errors->has('description'))
                                                <span class="help-block">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('permission_id') ? ' has-error' : '' }} row">
                                            <label for="permission_id" class="col-sm-2 col-form-label">Permission</label>
                                            <div class="col-md-10">
                                                @if(count($permissions))
                                                    @foreach($permissions as $row)
                                                    <div class="d-inline-block">
                                                    <input type="checkbox" value="{{ $row->id }}" name="permission_id[]" {{ (in_array($row->id, $role_permissions)) ? 'checked="checked" ' : '' }}>
                                                            <label class="custom-control-label" for="checkbox1">{{ $row->display_name }}</label>
                                                          </div>
                                                            <label>
                                                                {{-- {{ Form::checkbox('permission_id[]', $row->id, in_array($row->id, $role_permissions) ? true : false, array('class' => 'name')) }} --}}
                                                            
                                                        </label>
                                                    @endforeach
                                                @endif
                                                @if ($errors->has('permission_id'))
                                                <span class="help-block">{{ $errors->first('permission_id') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                </div>
                                <div class="form-actions">
                                    <button type="button" href="{{route('roles.index')}}" class="btn btn-warning mr-1">
                                        <i class="ft-x"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Save
                                    </button>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                    <input type="hidden" name="_method" value="PUT">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection