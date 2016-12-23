<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Laravel</title>
      <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{url('css/styles.css')}}" rel="stylesheet">
      <link href="{{ url('css/select2.min.css')}}" rel="stylesheet">      
   </head>
   <body>
      <nav class="navbar navbar-default navbar-static-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href=".">Laravel question answer forum</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                  <li class="{{ Request::is('questions') ? 'active' : ''}}"><a href="{{url('questions')}}">Questions</a></li>
                  <li class="{{ Request::is('questions/create') ? 'active' : ''}}"><a href="{{url('questions/create')}}">Ask Question</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="">Login</a></li>
                  <li><a href="">Register</a></li>
               </ul>
               </div><!--/.nav-collapse -->
            </div>
         </nav>
         @yield('contents')
      <footer style="height: 100px;"><hr></footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="{{ url('/') }}/js/bootstrap.min.js"></script>
      <script src="{{ url('/') }}/js/select2.min.js"></script>
      <script src="{{ url('/') }}/js/scripts.js"></script>
      <script type="text/javascript">
         $(".js-example-basic-multiple").select2({
            placeholder: "Select one more tags"
         });
      </script>         
   </body>
</html>