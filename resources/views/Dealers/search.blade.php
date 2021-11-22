@extends('layouts.master')
@section('content')
    <div class="container" style="margin-top: 50px">
        <div class="col-md-12">
            @include('layouts.alert')
        </div>
        <a href="{{route('dealer.add')}}"><button class="btn btn-primary">Thêm Đại Lý</button></a>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Mã Đại Lý</th>
                <th scope="col">Tên Đại Lý</th>
                <th scope="col">Số Điện Thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Người Quản Lý</th>
                <th scope="col">Trạng Thái</th>
                <th scope="col">Xử Lý</th>
            </tr>
            </thead>
            <tbody>
            @foreach($dealer as $dea)
                <tr>
                    <th scope="row">{{$dea->code}}</th>
                    <td>{{$dea->name}}</td>
                    <td>{{$dea->phone}}</td>
                    <td>{{$dea->email}}</td>
                    <td>{{$dea->manager}}</td>
                    <td>@if($dea->status == 0)
                            {{'Đang Hoạt Động'}}
                        @else {{'Không Hoạt Động'}}
                        @endif
                    </td>
                    <td>
                        <a href="{{route('dealer.update',$dea->id)}}"><button class="btn btn-warning">Edit</button></a>
                        <a href="{{route('dealer.delete',$dea->id)}}"><button class="btn btn-danger">Xoá</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection

