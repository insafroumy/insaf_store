@extends('layouts.admin')
@section('content')

    <p class="py-3 px-4"><a class="btn btn-secondary " href="{{url('/products/create')}}">اضف منتج جديد</a></p>
    <div class="py-4 px-4">
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم المنتج</th>
                    <th scope="col">الصنف</th>
                    <th scope="col">السعر</th>
                    <th scope="col">الكمية</th>
                    <th scope="col">الأحداث</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $products as $key =>  $product )
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$product -> name}}</td>
                    <td>{{$product -> category->name}}</td>
                    <td>{{$product -> price}}</td>
                    <td>{{$product -> quantity}}</td>
                    <td>
                        <a href="{{url('products/delete/'.$product->id)}}" class="btn btn-danger">حذف</a>
                        <a href="{{url('products/edit/'.$product->id)}}" class="btn btn-info">تعديل</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$products -> links()}}
    </div>
@endsection
