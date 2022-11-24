<x-layout>
<table class="table table-striped">
<thead>
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Address</td>
        <td>Action</td>
    </tr>
</thead>    
<tbody>
       <tr>
        <td>{{$students['id']}}</td>
        <td>{{$students['name']}}</td>
        <td>{{$students['email']}}</td>
        <td>{{$students['phone']}}</td>
        <td>{{$students['address']}}</td>
        <td>
            <a class="btn btn-primary btn-sm" href="/student/edit/{{$students['id']}}">Edit</a>
        </td>
    </tr> 
    
</tbody>
</table>   
</x-layout>