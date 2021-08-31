<header class="header clearfix">
    <a href="javascript:void(0)" class="menu_btn"><i class="icofont-navigation-menu"></i>Menu</a>
    <nav class="mainMenu">
        <ul class="clearfix">
            <li class="{{ (request()->is('/*')) ? 'active' : '' }}"><a href="{{route('index')}}"><i class="icon icon-House"></i><span>Home</span></a></li>
            <li class="{{ (request()->is('resume*')) ? 'active' : '' }}"><a href="{{route('resume')}}"><i class="icon icon-User"></i><span>Resume</span></a></li>
            <li class="{{ (request()->is('portfolio*')) ? 'active' : '' }}"><a href="{{route('portfolio')}}"><i class="icon icon-Bulb"></i><span>Portfolio</span></a></li>
            <li class="{{ (request()->is('blog*')) ? 'active' : '' }}"><a href="{{route('blog')}}"><i class="icon icon-ClipboardText"></i><span>Blog</span></a></li>
            <li class="{{ (request()->is('contact*')) ? 'active' : '' }}"><a href="{{route('contact')}}"><i class="icon icon-Imbox"></i><span>Contact</span></a></li>
        </ul>
    </nav>
    <a href="#" class="sidebarToggler"><span><span></span><span></span><span></span></span></a>
</header>
