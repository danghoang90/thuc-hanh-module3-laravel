@extends('layouts.master')
@section('content')

    <div class="container" style="margin-top: 20px">
        <div class="col-md-12">
            @include('layouts.alert')
        </div>
        <form method="post" action="{{route('dealer.edit', $dealer->id)}}">
            @csrf
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Mã Đại Lý</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('code') is-invalid  @enderror"  value="{{$dealer->code}}"  placeholder="Mã đại lý" name="code">
                </div>
            </div><div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tên Đại Lý</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid  @enderror" value="{{$dealer->name}}" placeholder="Name" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('phone') is-invalid  @enderror" value="{{$dealer->phone}}"  placeholder="phone number" name="phone">
                </div>
            </div><div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control @error('email') is-invalid  @enderror" value="{{$dealer->email}}" placeholder="Email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Tên Người quản Lý</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('manager') is-invalid  @enderror" value="{{$dealer->manager}}"  placeholder="tên người quản lý" name="manager">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <label class="col-form-label col-sm-2 pt-0 @error('status') is-invalid  @enderror" >Status</label>
                    <div class="col-sm-10">
                        <select name="status" id="">
                            <option  value="0">Đang Hoạt Động</option>
                            <option  value="1">Ngừng Hoạt Động</option>
                        </select>

                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

@endsection


