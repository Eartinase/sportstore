<nav class="navbar navbar-expand-lg navbar-light bg-light " >
  <a class="navbar-brand" href="<?php echo url('/'); ?>">SportS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @if(Session::get('Role')=='admin')
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo url('/'); ?>/create">Create<span class="sr-only">(current)</span></a>
      </li>    
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo url('/'); ?>/list">Product<span class="sr-only">(current)</span></a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo url('/'); ?>/category">Category<span class="sr-only">(current)</span></a>
      </li> 
      @endif    
    </ul>

    @if(!Session::has('Role'))
    <form method="post" class="form-inline my-2 my-lg-0" name="login" action="{{ url('/') }}/login">
       {{ csrf_field() }}
      <input class="form-control mr-sm-2" type="search" placeholder="Username" aria-label="Search" name="usr">
      <input class="form-control mr-sm-2" type="password" placeholder="Password" aria-label="Search" name="psw">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
    </form>
    @else
    <form method="post" class="form-inline my-2 my-lg-0" name="login" action="{{ url('/') }}/logout">
       {{ csrf_field() }}      
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">logout</button>
    </form>
    @endif
  </div>
</nav>