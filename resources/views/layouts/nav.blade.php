<nav id="nav" class="navbar navbar-expand-md ">
            <a class="navbar-brand" href="/"><img src="images/Logo-01.png" ></a>
            <button class="navbar-toggler " data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div id="navbar" class="navbar-collapse collapse text-center" >
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item"><a class="nav-link"  href="/books">Home</a></li>
                    <li class="nav-item"><a class="nav-link"  href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link"  href="/goodbookslist">My Good Books List</a></li>

                    <li class="nav-item">
                        <div class="dropdown">
                        <button class="btn btn-danger" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user pt-1 pb-1"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            
                          <p class="dropdown-item">Signed in as:<br> <span id="username">{{session('username')}}</span> </p>
                          <hr>
                          <a class="dropdown-item" href="/profile">Profile</a>
                          <a class="dropdown-item" href="/profile#changepass">Change Password</a>
                          <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                      </div></li>
                    
                    
                </ul>
            </div>
        </nav>
        @yield('navcontent')
