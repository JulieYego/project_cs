<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.css') }}">
    <link href="/css/form.css" rel="stylesheet" />
    <link href="/css/styles.css" rel="stylesheet" />
    <title>View Suspects</title>
</head>

<style>
    h4{
        color:white;
    }

    img {
    height: 80px;
}
</style>
<body>

    <header class="header-area overlay">
        <nav class="navbar navbar-expand-md navbar-dark">
		    <div class="container">
                <img src="/images/logo.png" class="navbar-brand" alt="Kenyan Logo">	
                <a class="navbar-brand" href="#">Welcome Officer {{ Auth::user()->o_number }}</a>
			        <div id="main-nav" class="collapse navbar-collapse">
				        <ul class="navbar-nav ml-auto">
					        <li>
                                <a href="{{ route('officer_landing_page') }}" class="nav-item nav-link active">Home</a>
                            </li>
					        <li>
                                <a href="{{ route('view_suspect') }}" class="nav-item nav-link">View suspects</a>
                            </li>
					        <li>
						        <a href="{{ route('book_suspect') }}" class="nav-item nav-link">Book suspects</a>
					        </li>
					        <li>
                                <a href="{{ route('officer_landing_page') }}" class="nav-item nav-link ">View profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
				        </ul>
			        </div>
		    </div>
	    </nav>
    </header>

    <!--<form action="" method="GET">
        <input name="search" id="search" type="text" placeholder="Search">
        <div class="inner-form">
            <div class="input-field">
              <input class="form-control" id="search" type="text" placeholder="Search" />
              <button class="btn-search" type="button"></button>
            </div>
        </div>
    </form>-->
    
    <div class="container">
         <div class="row">
            <div class="col-md-offset-3">
                   <h4>View Officers</h4><hr>
                   <table class="table table-dark table-striped table-hover">
                       <thead>
                           <tr>
                               <th>Officer Number</th>
                               <th>First Name</th>
                               <th>Last Name</th>
                               <th>Email Address</th>
                               <th>Gender</th>
                               <th>Update</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($officers as $officer)
                           <tr>
                               <td>{{ $officer->o_number}}</td>
                               <td>{{ $officer->first_name}}</td>
                               <td>{{ $officer->last_name}}</td>
                               <td>{{ $officer->IDnumber}}</td>
                               <td>{{ $officer->gender}}</td>
                               
                               <td>
                                   <a href="" class="btn btn-outline-warning">Update</a>
                               </td>
                           </tr>
                           @endforeach
                       </tbody>
                   </table>     
            </div>
         </div>
    </div>
</body>
    
</html>