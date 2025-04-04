@extends('layouts.admin')
@section('content')
    <p class="py-3 px-4"><a class="btn btn-secondary " href="{{url('/categories/create')}}">اضف صنف جديد</a></p>
    <div class="py-4 px-4">
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم الصنف</th>
                    <th scope="col">الأحداث</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $categories as $key => $category )
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$category->name}}</td>
                    <td>
                        <a href="{{url('categories/delete/'.$category->id)}}" class="btn btn-danger">حذف</a>
                        <a href="{{url('categories/edit/'.$category->id)}}" class="btn btn-info">تعديل</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$categories -> links()}}
    </div>
@endsection
