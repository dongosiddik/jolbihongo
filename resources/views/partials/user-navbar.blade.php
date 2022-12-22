<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">

        <li class="nav-item">
            <a href="#" class="nav-link ">
                {{-- <a href="{{ route('home') }}" class="nav-link {{ setMenuClass('home', 'active') }}"> --}}
                  <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Accueil
              </p>
            </a>
        </li>


        
        @can("user")
           
        <li class="nav-item #">
          <a href="#" class="nav-link ">
            <a href="#" class="nav-link ">
           <i class=" nav-icon fas fa-user-shield"></i>
           <p>
             User espace. User only
             <i class="right fas fa-angle-left"></i>
           </p>
          </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
            <a href="#"
               class="nav-link ">
              
             <i class=" nav-icon fas fa-users-cog"></i>
               <p>c</p>
             </a>
           </li> 
           
         </ul>
     </li>

     
        @endcan
    </ul>
</nav>