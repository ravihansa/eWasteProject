<!DOCTYPE html>
<html>
<head>
<meta name="viewport">
<title>View Users</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/admin.css" />

        <style>
          table {
            font-size: 16px;
          }
        </style>

</head>


<body>

<nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">E-Waste Management</a>
        </div>
          <ul class="nav navbar-nav">
           <li class="active"><a href="{{route('viewusers')}}">View Users</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
           <li><a href="{{route('adminProfile')}}">Profile</a></li>
           <li><a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form></li>
          </ul>
      </div>
  </nav>  

<div class="sidenav">

  <div id="" style="">
    <img src="img/logo.png" class="logo" style="width: 180px; height: 180px; top: 10px" >
  </div>

  <br>
  <br>
  <a href="{{route('adminpage')}}">Home</a>
    <a href="/maincat/create">Add Main Category</a>
    <a href="/wastes/create">Add Sub Category</a>
  <a href="{{route('addnews')}}">Add News</a>
  <a href="{{route('viewusers')}}">View Users</a>
  <a href="{{route('viewbuyers')}}">View Buyers</a>
    <a href="{{route('viewsellers')}}">View Sellers</a>
</div>


<div class="main">

  <br>
  <br>
  <br>

                    <!-- Inline Search  -->
<form class="form-inline" role="form">
  <div class="form-group">
     <label class="sr-only" for="exampleInputEmail2">UserName</label>
    <input type="text" class="form-control" id="username" placeholder="Type a name">
  </div>
  <button type="submit" class="btn btn-primary submit">Search</button>
  <button type="submit" class="btn btn-info">Refresh</button>
</form>

<hr>

        <div class="row">
            <div class="col-lg-12">
              <div class="table-responsive table-bordered">
                <table class="table">

                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>E-mail</th>
                    <th>User Type</th>
                    <th>Joined On</th>
                    <th>Remove</th>
                    <th>Message</th>
                </tr>

                @if(count($users) > 0)

                  @foreach($users as $user)

                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->_usertype }}</td>
                        <td>{{ date('h: i a', strtotime($user->created_at) )}} on {{ date('F j, Y', strtotime($user->created_at) )}}</td>
                        <td><a href="#">
                        <button type='submit' class='btn btn-danger' onclick="return checkDelete()">Delete</button></a></td>
                        <td><a href="#">
                        <button type='submit' class='btn btn-primary' onclick="">Message</button></a></td>

                   
                  @endforeach
                @endif

            </table>
            </div>
            <br>
         
          </div>
        </div>
      </div>

</div>    





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
<footer class="footer font-small blue pt-4 mt-4">
 <!-- Copyright -->
  <div class="footer-copyright text-right py-3">© 2018 Copyright:
    <a href="#"> E-Waste Management</a>
  </div>
  <!-- Copyright -->
</footer>
</html> 
