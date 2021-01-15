
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="<?=base_url('/');?>">
        	<!-- <img src="<?=base_url($brand)?>" width="70" height="60"> -->
        	My Artisant
    	</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ml-auto">
                <li class="menu-item <?=show_current_class('about');?>">
                    <a class="nav-link"href="<?=base_url()?>about">about</a>
                </li>
                <li class="menu-item <?=show_current_class('blog');?>">
                    <a class="nav-link" href="<?=base_url()?>blog">blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

 <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid" style=" background-image: url(<?=base_url($jumbotron)?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1 class="display-4">
                    <?=$banner?>
                </h1>
                <a href="" class="btn btn-primary tombol">Our Work</a>
            </div>
        </div>
    </div>
    </div>