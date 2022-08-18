 <!-- Left Panel -->
 <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{route('dashboard')}}"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="{{route('dashboard')}}"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="">
                        <a href="{{route('submit-report')}}"> <i class="menu-icon fa fa-file-word-o"></i>Submit Your Report</a>
                    </li>
                    <li class="">
                        <a href="{{route('review-performance')}}"> <i class="menu-icon fa fa-spinner"></i>Review Performance</a>
                    </li>
                    <li class="">
                        <a href="{{route('refer-task')}}"> <i class="menu-icon fa fa-puzzle-piece"></i>Refer Your Tasks</a>
                    </li>
                    <li class="">
                        <a href="{{route('suggest-changes')}}"> <i class="menu-icon fa fa-id-badge"></i>Suggest Changes</a>
                    </li>
                    <li class="">
                        <a href="{{route('view-notification')}}"> <i class="menu-icon fa fa-bars"></i>View Notifications</a>
                    </li>
                    <li class="">
                        <a href="{{route('edit-profile')}}"> <i class="menu-icon fa fa-share-square-o"></i>Edit Your Profile</a>
                    </li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="">
                            <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();"> <i class="menu-icon fa fa-power-off"></i>Exit</a>
                        </li>    
                    </form>                        
                  
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->