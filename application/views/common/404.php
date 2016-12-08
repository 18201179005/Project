<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>项目未找到 - HOREAX技术支持</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="keywords" content="HOREAX,HOREAX技术支持,HOREAX案例精选,北京昊瑞联创科技有限公司"/>
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


<div class="container">

    <div class="jumbotron" style="margin-top: 100px;">

        <div class="alert alert-danger" role="alert">
            <strong>操作失败！</strong> 未找到此项目
        </div>

        <blockquote class="blockquote-reverse">
            页面将在 <strong class="text-info" id="re_num">3</strong> 秒后自动跳转，如果不想等待请点击
            <?php if (empty($red_url)): ?>
                <a href="javascript:window.history.go(-1);">这里</a>
            <?php else: ?>
                <a href="<?=$red_url?>">这里</a>
            <?php endif; ?>
            跳转
        </blockquote>


    </div>



</div>

<?php $this->load->view('common/footer'); ?>



<script src="<?=$this->config->base_url()?>public/js/jquery.min.js"></script>
<script src="<?=$this->config->base_url()?>public/bootstrap/js/bootstrap.min.js"></script>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
    var t=2;
    setInterval("refer()",1000);
    function refer(){
        if(t==0){
            javascript:window.history.go(-1);
        }
        $('#re_num').text(t);
        t--;
    }
</script>
</body>
</html>
