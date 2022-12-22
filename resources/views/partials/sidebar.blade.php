
        <aside class="control-sidebar control-sidebar-dark">

            <div class="p-3">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                    <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{asset('images/user4.jpg')}}" alt="User profile picture">
                    </div>
                    {{-- <p class="text-muted  text-center ellipsis">  {{(getRoleName())}}</p>
                    <p class="text-muted text-center ellipsis">{{userFullName()}}</p> --}}

                    <p class="text-muted  text-center ellipsis">  {{Auth::user()->role->name}}</p>
                    <p class="text-muted text-center ellipsis">{{Auth::user()->name}}</p>
                    <ul class="list-group bg-dark mb-3">
                        <li class="list-group-item">
                        <a href="#" class="d-flex align-items-center "><i class="fa fa-lock pr-2"></i><b >Mot de passe</b> </a>
                        </li>
                        <li class="list-group-item">
                        <a href="#" class="d-flex align-items-center"><i class="fa fa-user pr-2"></i><b >Mon profile</b> </a>
                        </li>
                    </ul>
                    <a class="btn btn-primary btn-block" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                         Déconnexion
                        </a>
            
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                    </div>
                    
                    </div>
            </div>
        </aside>