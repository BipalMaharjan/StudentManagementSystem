<div class="col">

<div class="card mb-3">
  <img height="400px"  class="card-img-top" src="https://d1whtlypfis84e.cloudfront.net/guides/wp-content/uploads/2019/07/24124320/education.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">List of students</h5>
    <p class="card-text">you can find information about students in the system</p>  

      <table class="table">
  <thead>
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td>{{$student->cne}}</td>
      <td>{{$student->firstname}}</td>
      <td>{{$student->lastname}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->speciality}}</td>
      <td>
        {{-- <a href="" class="btn btn-sm btn-info">Show</a> --}}
        <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
        {{-- <a href="" class="btn btn-sm btn-danger">Delete</a> --}}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
  </div>
</div>

