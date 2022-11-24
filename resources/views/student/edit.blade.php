<x-layout>
    <div class="row h-100 d-flex align-items-center justify-content-center">
        <div class="col-8 border m-4">
            <form method="POST" action="/student/{{$student->id}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="" class="form-control" value="{{$student->name}}">
                @error('name')
                <p class="text-danger text-sm mt-1">{{$message}}</p>
                @enderror
                </div>

                <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control" value="{{$student->email}}" readonly="readonly">
                @error('email')
                <p class="text-danger text-sm mt-1">{{$message}}</p>
                @enderror
                </div>

                <div class="form-group">
                <label for="">Phone Number</label>
                <input type="tel" name="phone" id="" class="form-control" value="{{$student->phone}}">
                @error('phone')
                <p class="text-danger text-sm mt-1">{{$message}}</p>
                @enderror
                </div>

                <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="" cols="10" rows="4" class="form-control">{{$student->address}}</textarea>
                @error('address')
                <p class="text-danger text-sm mt-1">{{$message}}</p>
                @enderror
                </div>

                <button type="submit" class="btn btn-primary px-3 py-2 mt-3 mb-3">
                    Update
                </button>
            </form>
        </div>
      </div>
</x-layout>