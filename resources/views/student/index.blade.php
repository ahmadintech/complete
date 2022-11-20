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
    @foreach ($students as $item)
       <tr>
        <td>{{$item['id']}}</td>
        <td><img src="{{asset('images/no-image.png')}}" class="img img-fluid w-25 d-md-block d-none" alt="" srcset=""></td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['phone']}}</td>
        <td>{{$item['address']}}</td>
        <td>
            <button class="btn btn-primary btn-sm">
                Edit
            </button>
            <button class="btn btn-danger btn-sm">
                Delete
            </button>
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