<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=$this->config->base_url()?>">HOREAX案例精选</a>
        </div>


        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">微信公众号</a></li>

                <?php if (($this->router->class== 'lists' && $this->router->method == 'web_app') || $this->router->class== 'details' && $this->router->method == 'web_app'): ?>
                    <li class="active"><a href="#">WEB应用系统</a></li>
                <?php else: ?>
                    <li><a href="<?=$this->config->base_url()?>lists/web_app">WEB应用系统</a></li>
                <?php endif; ?>
                <li><a href="#">展示型H5</a></li>
                <li><a href="#">交互型H5</a></li>
                <li><a href="#">游戏型H5</a></li>
                <li><a href="#">PC网站</a></li>

            </ul>
        </div>

    </div>
</nav>