@extends('layouts.app')
@section('content')
    <div class="card card-default">
        <div class="card-header">
            เพิ่มสำนัก/สวนสัตว์
        </div>

        <div class="card-body">
            <form class="" action="{{route('zoos.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">ชื่อ</label>
                <input type="text" class="form-control" name="zoos_name" value="">
            </div>
            <div class="form-group">
                <label for="">ชื่อ</label>
                <input type="text" class="form-control" name="zoos_type" value="">
            </div>
            <div class="form-group">
                <label for="">ลำดับ</label>
                <input type="text" class="form-control" name="zoos_no" value="">
            </div>
            <div class="form-group">
                <label for="">สถานะ</label>
                <input type="text" class="form-control" name="zoos_no" value="">
            </div>
            <div class="form-group">
                <label for="">รูปภาพ</label>
                <input type="text" class="form-control" name="zoos_no" value="">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="เพิ่ม">
            </div>
            </form>
        </div>
    </div>
@endsection
