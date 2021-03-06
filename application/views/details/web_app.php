<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>WEB应用系统 - 案例精选 - HOREAX技术支持</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content="HOREAX,HOREAX技术支持,HOREAX案例精选,WEB应用系统,北京昊瑞联创科技有限公司"/>
    <meta name="description" content="HOREAX技术支持是北京昊瑞联创科技有限公司旗下品牌，专注于为客户提供专业、高效、易用的互联网应用技术解决方案" />
    <meta name="author" content="HOREAX技术支持">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <!-- Bootstrap -->
    <link href="<?=$this->config->base_url()?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$this->config->base_url()?>public/css/public.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?=$this->config->base_url()?>public/js/html5shiv.min.js"></script>
    <script src="<?=$this->config->base_url()?>public/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php $this->load->view('common/header'); ?>


<div class="container" style="margin-top: 20px;">


    <ol class="breadcrumb">

        <li><a href="<?=$this->config->base_url()?>"><span class="glyphicon glyphicon-home"></span> HOREAX案例精选</a></li>
        <li><a href="<?=$this->config->base_url()?>lists/web_app">WEB应用系统</a></li>
        <li class="active"><?=$info_result['name']?></li>
    </ol>




    <div class="row">
        <div class="col-md-9 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">项目简介</div>
                <div class="panel-body">
                    <img src="<?=$this->config->base_url()?>project/<?=$info_result['cid']?>/<?=$info_result['id']?>/banner.jpg" width="100%" />
                    <hr/>
                    <div>
                        <?=$info_result['presentation']?>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-3 col-sm-4">


            <div class="panel panel-primary">
                <div class="panel-heading">项目演示地址:</div>
                <div class="list-group">
                    <?php foreach($link_result as $key => $value): ?>
                        <a href="<?=$this->config->base_url()?>repositories/<?=$info_result['cid']?>/<?=$info_result['id']?>/<?=$value['link']?>/" target="_blank" class="list-group-item">
                            <h5 class="list-group-item-heading"><?=$key+1?> - <?=$value['name']?></h5>
                            <p class="list-group-item-text text-muted">支持终端：<?=$value['terminal']?></p>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>









</div>


<?php $this->load->view('common/footer'); ?>



<script src="<?=$this->config->base_url()?>public/js/jquery.min.js"></script>
<script src="<?=$this->config->base_url()?>public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
