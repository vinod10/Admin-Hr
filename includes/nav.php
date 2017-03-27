<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <?php if(logged_in()):?>
                <a class="navbar-brand" href="admin/index.php">Admin</a><!-----if logged------->
            <?php endif; ?>

            <?php if(!logged_in()):?>
                <a class="navbar-brand" href="index.php">Admin Login</a><!-----if not logged------->
            <?php endif; ?>

        </div><!-----end navbar header------->
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav pull-right">

<!--                --><?php //if(logged_in()):?>
<!--                --><?php //endif; ?>

                <?php if(!logged_in()):?>
                    <li><a href="index.php">Login</a></li>
                <?php endif; ?>

            </ul><!-----nav------->
        </div><!-----navbar------->
    </div><!-----end container------->
</nav><!-----navbar closed------->
