<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin_home')}}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('backend/img/logo/logo2.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item @yield('dashboard')">
        <a class="nav-link" href="{{route('admin_home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        CV
    </div>
    <li class="nav-item @yield('resume_active')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseResume"
           aria-expanded="true" aria-controls="collapseResume">
            <i class="far fa-fw fa-window-maximize"></i>
            <span> Resume </span>
        </a>
        <div id="collapseResume" class="collapse @yield('show')" aria-labelledby="headingResume" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @yield('personal_active')" href="{{route('personal-details.index')}}">Personal Details</a>
                <a class="collapse-item  @yield('academic_active')" href="{{route('academic-details.index')}}">Academic Details</a>
                <a class="collapse-item  @yield('job_active')" href="{{route('job-experience.index')}}">Job Experience</a>
                <a class="collapse-item  @yield('what_i_do_active')" href="{{route('What-I-do.index')}}">What I Do?</a>
                <a class="collapse-item  @yield('what_they_say_active')" href="{{route('testimonials.index')}}">What They Say?</a>
                <a class="collapse-item  @yield('facts_active')" href="{{route('facts')}}">Interesting Facts</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProject" aria-expanded="true"
           aria-controls="collapseProject">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Projects</span>
        </a>
        <div id="collapseProject" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Forms</h6>
                <a class="collapse-item" href="#">Add Category</a>
                <a class="collapse-item" href="#">Add Portfolio</a>
                <a class="collapse-item" href="#">View Portfolio</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Blog
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
           aria-expanded="true" aria-controls="collapseBlog">
            <i class="far fa-fw fa-window-maximize"></i>
            <span> Blog </span>
        </a>
        <div id="collapseBlog" class="collapse" aria-labelledby="headingResume" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Add Blog</a>
                <a class="collapse-item" href="#">View Blog</a>
            </div>
        </div>
    </li>

</ul>
