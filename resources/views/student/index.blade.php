<x-layout>
<table class="table table-stripped">
<thead>
    <tr>
        <td>#</td>
        <td>Image</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Address</td>
        <td>Action</td>
    </tr>
</thead>    
<tbody>
    @unless (count($students) == 0)  
    @php
     $sn = 1;   
    @endphp
    @foreach ($students as $item) 
        <td>{{$sn++}}</td>
        <td><img src="{{$item['image'] ? asset('storage/'.$item['image']) : asset('images/no-image.png')}}" class="img img-fluid w-25 d-md-block d-none" alt="" srcset=""></td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['phone']}}</td>
        <td>{{$item['address']}}</td>
        <td>
            <a class="btn btn-primary btn-sm" href="/student/edit/{{$item['id']}}">Edit</a>
            <form action="/student/{{$item['id']}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                    Delete
                </button>
            </form>
        </td>
    </tr> 
    @endforeach 
    @else
    <tr>
        <td>No Student Found!</td>
    </tr>
    @endunless
    
</tbody>
</table>   
</x-layout>