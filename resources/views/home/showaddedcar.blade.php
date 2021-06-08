<style>
    #status{
        color: #1AA059 !important;
        font-size: 10px;
        font-weight: bold;
    }

</style>
<table class="table table-sm table-dark">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">سازنده</th>
        <th scope="col">مدل</th>
        <th scope="col">ساخت</th>
        <th scope="col">نوع سوخت</th>
        <th scope="col">انتقال</th>
        <th scope="col">سیلندر</th>
        <th scope="col">VIN / شماره شاسی:</th>
        <th scope="col">رنگ</th>
        <th scope="col">قیمت</th>
        <th scope="col">تاریخ اضافه شدن</th>
        <th scope="col">وضعیت</th>
        <th scope="col">حذف</th>
        <th scope="col">کاربر</th>
{{--        <th scope="col">عکس</th>--}}
{{--        <th scope="col">پکیج</th>--}}
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
    <tr>
        <th scope="row">{{$post->id}}  </th>
        <td>{{$post->company}}</td>
        <td>{{$post->model}}</td>
        <td>{{$post->year}}</td>
        <td>{{$post->fuel}}</td>
        <td>{{$post->transfer}}</td>
        <td>{{$post->cilandr}}</td>
        <td>{{$post->VIN}}</td>
        <td>{{$post->color}}</td>
        <td>{{$post->price}}</td>
        <td>{{$post->created_at}}</td>
        <td>
            <button class="btn btn-info">  قابل نمایش
                @if($post->status==1)  <i class="fa fa-check-square-o" style="color: #1AA059;font-size: 10px;font-weight: bold">فعال </i>  @endif
            </button>
            <button class="btn btn-danger">غیر قابل نمایش
                @if($post->status==0)  <i class="fa fa-check-square-o" style="color: #1AA059;font-size: 10px;font-weight: bold">فعال </i>  @endif
            </button>
        </td>
        <td>
            <a href="{{route('post.destroy')}}"><button class="btn btn-warning" type="button" >حذف شود؟ </button></a>
        </td>
{{--        <td>{{$post->user->username}}</td>--}}
{{--        <td>{{$post->packages}}</td>--}}
{{--        <td>{{$post->img}}</td>--}}

    </tr>
    @endforeach
    </tbody>
</table>
