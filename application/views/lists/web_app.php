<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>WEB应用系统 - 案例精选 - HOREAX技术支持</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content="HOREAX,HOREAX技术支持,HOREAX案例精选,北京昊瑞联创科技有限公司"/>
    <meta name="description" content="HOREAX技术支持是北京昊瑞联创科技有限公司旗下品牌，专注于为客户提供专业、高效、易用的互联网应用技术解决方案" />
    <meta name="author" content="HOREAX技术支持">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <!-- Bootstrap -->
    <link href="<?=$this->config->base_url()?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?=$this->config->base_url()?>public/js/html5shiv.min.js"></script>
    <script src="<?=$this->config->base_url()?>public/js/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }

        .footer {
            border-top: 1px solid #e5e5e5;
            color: #777;
            margin-top: 70px;
            padding: 30px 0;
        }

        .footer a {
            color: #777;
            text-decoration : none;
        }

        .label-done {
            background-color: #000000;
        }
    </style>
</head>
<body>

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
                <li class="active"><a href="<?=$this->config->base_url()?>">WEB应用系统</a></li>
            </ul>
        </div>

    </div>
</nav>


<div class="container" style="margin-top: 20px;">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?=$this->config->base_url()?>public/images/1.jpg" alt="...">
            </div>
            <div class="item">
                <img src="<?=$this->config->base_url()?>public/images/2.jpg" alt="...">
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <hr/>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
            <ol class="breadcrumb" style="padding:0;margin-bottom:0;">
                <li><a href="<?=$this->config->base_url()?>"><span class="glyphicon glyphicon-home"></span> HOREAX案例精选</a></li>
                <li class="active">WEB应用系统</li>
            </ol>

        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>案例名称</th>
                    <th>系统类型</th>
                    <th>服务品牌</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1-1</td>
                    <td>2017红衫资本联合真格基金携成员企业校园招聘</td>
                    <td>线下宣讲会预约系统</td>
                    <td><img src="<?=$this->config->base_url()?>public/images/11.png"></td>
                    <td><span class="label label-done">已下线</span></td>
                    <td>
                        <a role="button" class="btn btn-default btn-xs">详情</a>
                        <a role="button" class="btn btn-info btn-xs">在线演示</a>
                    </td>

                </tr>
                <tr>
                    <td>1-2</td>
                    <td>第六届华为财务精英挑战赛</td>
                    <td>现场投票管理系统</td>
                    <td><img src="<?=$this->config->base_url()?>public/images/12.png"></td>
                    <td><span class="label label-done">- 已下线 -</span></td>
                    <td>
                        <a role="button" class="btn btn-default btn-xs">详情</a>
                        <a role="button" class="btn btn-info btn-xs">在线演示</a>
                    </td>

                </tr>

                </tbody>
            </table>

        </div>

    </div>

</div>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p class="pull-left"><img alt="HOREAX技术支持" src="<?=$this->config->base_url()?>public/images/logo-horeax.png" /></p>
            </div>
            <!--
            <div class="col-sm-6">
                <p class="pull-right"><img alt="HOREAX技术支持" src="<?=$this->config->base_url()?>public/images/logo-horeax.png" /></p>
            </div>
            -->
        </div>
        <hr>
        <div class="row footer-bottom">
            <ul class="list-inline text-center">
                <li><a href="http://www.horeax.com/" title="北京昊瑞联创科技有限公司" target="_blank"><span class="glyphicon glyphicon-link"></span> 北京昊瑞联创科技有限公司</a></li>
                <li><a href="http://www.miibeian.gov.cn/" target="_blank"><span class="glyphicon glyphicon-link"></span> 京ICP备16040463号</a></li>
                <!--                <li>京公网安备11010802014853</li>-->
            </ul>
        </div>

    </div>


</footer>


<script src="<?=$this->config->base_url()?>public/js/jquery.min.js"></script>
<script src="<?=$this->config->base_url()?>public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
