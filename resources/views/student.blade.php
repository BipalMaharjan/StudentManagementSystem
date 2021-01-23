<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <title>Student Management System</title>
  </head>
  <body>
     @include("navbar")

    @if($layout == 'index')
     <div class="container-fluid mt-4">
      <div class="container-fluid mt-4">
        <div class="row justify-content-center">
       <section class="col-md-7">
         @include("studentslist") 
       </section>
       </div>
     </div>
     </div>

@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the informations of the new student</h5>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input name="cne" type="text" class="form-control"  placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstname" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>

                            
                            <div class="form-group">
                                <label>Last Name</label>
                                <input name="lastname" type="text" class="form-control"  placeholder="Enter last name">
                            </div>
                            
                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control"  placeholder="Enter Sepeciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>


    @elseif($layout == 'show')
     <div class="container-fluid mt-4">
      <div class="row">
       <section class="col">
         @include("studentslist")
       </section>
       <section class="col">
         
       </section>
       </div>
     </div>


    @elseif($layout == 'edit')
     <div class="container-fluid mt-4">
      <div class="row">
       <section class="col-md-6">
         @include("studentslist")
       </section>
       <section class="col-md-5">

        <div class="card mb-3">
  <img class="card-img-top" src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Update inforamation of students</h5>
     <form action="{{ url('/update/'.$student->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input value="{{$student->cne}}" name="cne" type="text" class="form-control"  placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input value="{{$student->firstname}}" name="firstname" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>

                            
                            <div class="form-group">
                                <label>Last Name</label>
                                <input value="{{$student->lastname}}" name="lastname" type="text" class="form-control"  placeholder="Enter last name">
                            </div>
                            
                            <div class="form-group">
                                <label>Age</label>
                                <input value="{{$student->age}}" name="age" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input value="{{$student->speciality}}" name="speciality" type="text" class="form-control"  placeholder="Enter Sepeciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="update">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
  </div>
</div>
        
       </section>
       </div>
     </div>

@endif

<footer></footer>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->



  </body>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Dancing+Script&display=swap');
.header {
    border-bottom: 2px solid #00c9b7;
    margin-top: 20px !important;
    margin-bottom: 20px !important;
    font-family: 'Dancing Script', cursive;
    font-size: 20px !important;
}
.header-container {
    margin-right: 0px !important;
    margin-left: 0px !important;
}
.header-container > h2 {

}
.bg-light {

    background: #00c9b7 !important;
    -webkit-box-shadow: 5px 9px 43px 1px rgba(0,0,0,0.18); 
  box-shadow: 5px 9px 43px 1px rgba(0,0,0,0.18);
    position: sticky;
    top: 0px;
    z-index: 10;
}
.bg-light > a {
    color: #fff !important;
}
.navbar-nav > a {
    color: #fff !important;
}
.navbar-nav > a:hover {
    text-decoration: underline;
}
img {
    height: 400px;
    vertical-align: middle;
    border-style: none;
}
body {
    background : #eee ;
}
.card {
    border : none !important;
    border-bottom: 3px solid #00c9b7 !important;
}
input[type=text] {

    background : #eee ;
    border: none !important;
    box-shadow: 0px 1px 1px #ddd !important;
    autocomplete: off;
}
input[type=text]:focus{
    background : #eee ;
    border: none !important;
    box-shadow: 0px 4px 5px #ccc !important;
}
.thead-light {

}
.table .thead-light th {
    color : #fff !important;
    background: #00c9b7 !important;
    border: none !important;
}
footer {
    height: 10px;
    width: 100%;
    margin-top: 60px;
    background:#00c9b7 ;
}
  </style>
</html>