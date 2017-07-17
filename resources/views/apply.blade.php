@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">申请成为维修员</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('apply') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">公司</label>

                                <div class="col-md-6">
                                    <select id="company" class="form-control" name="company" required autofocus>
                                        @foreach($companies as $item)
                                            <option value="{{ $item->id }}"
                                                    @if($item->id == old('company')) selected @endif>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                                <label for="department" class="col-md-4 control-label">部门</label>

                                <div class="col-md-6">
                                    <input id="department" type="text" class="form-control" name="department"
                                           value="{{ old('department') }}" required>

                                    @if ($errors->has('department'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                                <label for="level" class="col-md-4 control-label">等级</label>

                                <div class="col-md-6">
                                    <select id="level" class="form-control" name="level">
                                        @foreach($levels as $key => $item)
                                            <option value="{{ $key }}"
                                                    @if($key == old('level')) selected @endif>{{ $item }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('level'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('level') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        申请
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
