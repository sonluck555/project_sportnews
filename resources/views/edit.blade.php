@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('ADD News') }}</div>
    
                    <div class="card-body">
                        @if (session('status')==1)
                            <div class="alert alert-success" role="alert">
                                บันทึกสำเร็จ
                            </div>
                        @endif
                        <form method="POST" action="update" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$news->id}}">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('หัวข้อข่าว') }}</label>

                                <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$news->name}}" required autofocus>

                                    <!-- @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif -->
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="detail" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อหาข่าว') }}</label>

                                <div class="col-md-6">
                                    <textarea id="detail" type="text" rows="7" class="form-control{{ $errors->has('detail') ? ' is-invalid' : '' }}" name="detail" required>{{$news->detail}}</textarea>

                                    <!-- @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif -->
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('ปกข่าว') }}</label>

                                <div class="col-md-6">
                                    <!-- <input id="type" type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" required> -->
                                <input type="file" name="img" class="form-control">
                                    <!-- @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif -->
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('บันทึก') }}
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