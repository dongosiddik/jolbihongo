<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">

        <li class="nav-item">
            <a href="#" class="nav-link ">
                {{-- <a href="{{ route('home') }}" class="nav-link {{ setMenuClass('home', 'active') }}"> --}}
                  <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
        </li>
        
        @can("admin")
            <li class="nav-item #">
             <a href="#" class="nav-link ">
              <i class=" nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
               <a href="{{route("users.index")}}"
                  class="nav-link ">
                 
                <i class=" nav-icon fas fa-users-cog"></i>
                  <p>Users lists</p>
                </a>
              </li> 
              
            </ul>
        </li>

        <li class="nav-item #">
          <a href="#" class="nav-link ">
            <a href="#" class="nav-link ">
           <i class=" nav-icon fas fa-user-shield"></i>
           <p>
             Roles
             <i class="right fas fa-angle-left"></i>
           </p>
          </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
            <a href="{{route("roles.index")}}"
               class="nav-link ">
              
             <i class=" nav-icon fas fa-users-cog"></i>
               <p>Roles lists</p>
             </a>
           </li> 
           
         </ul>
     </li>

        {{-- <li class="nav-item ">
            <li class="nav-item ">
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Gestion articles
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
               <a href="#"
                  class="nav-link"> 
                    <i class="nav-icon far fa-circle"></i>
                    <p>Type d'articles</p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.gestarticles.articles') }}"
                  class="nav-link {{ setMenuActive('admin.gestarticles.articles', 'active') }}"> 
                    <i class="nav-icon far fa-circle"></i>
                    <p>Articles</p>
                    </a>
                </li>
                
            </ul>
        </li> --}}
        @endcan

       
    </ul>
</nav>