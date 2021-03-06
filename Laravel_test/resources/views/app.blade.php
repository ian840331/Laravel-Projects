<!DOCTYPE html> <html lang="en"> <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"> <title>Laravel</title>
<link href="/css/bootstrap.min.css" rel="stylesheet"> </head>
<body>
<nav class="navbar navbar-default">
<div class="container-fluid"> <div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data- toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span> </button>
<a class="navbar-brand" href="/">Ian's Laravel Project</a> </div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> <ul class="nav navbar-nav">
<li><a href="/admin">Dashboard</a></li>
<li><a href="/admin/pages">Manage Pages</a></li> <li><a href="/admin/articles">Manage Articles</a></li> <li><a href="/admin/comments">Manage Comments</a></li>
</ul>
<ul class="nav navbar-nav navbar-right"> @if (Auth::guest())
<li><a href="/auth/login">Login</a></li>
<li><a href="/auth/register">Register</a></li> @else
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"
role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="/auth/logout">Logout</a></li>
</ul> </li>
@endif </ul>
         </div>
      </div>
</nav> @yield('content')
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinymce.init({ selector:'#richHtml',
	plugins: [
    "advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen jbimages"
    //"insertdatetime media table contextmenu paste jbimages"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link jbimages",
    relative_urls: false
    });
</script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></scrip t>
</body>
</html>