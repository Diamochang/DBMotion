<?php
/**
* DBMotion 1.1.0
* DBMotion basic code framework https://download.csdn.net/download/modern358/11064349, thanks.
* DBMotion basic code framework created by PhpStorm. 
* DBMotion MDUI import & consummate by Diamochang (Mike Wang, https://gitee.com/Diamochang and https://github.com/Diamochang)
* DBMotion-based organization ICP system ©Favocas 2022.
*/
        require_once ('conn.php');
?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"/>
    <meta name="renderer" content="webkit"/>
    <meta name="force-rendering" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="stylesheet" href="mdui/css/mdui.min.css"/>
    <link rel="stylesheet" href="mdui/fonts/remixicon/remixicon.css"/>
    <title>Favocas 组织认可备案平台</title>
</head>
<body class="mdui-appbar-with-toolbar mdui-drawer-body-left mdui-theme-primary-purple mdui-theme-accent-amber">
<div class="mdui-appbar mdui-appbar-fixed">
<div class="mdui-toolbar mdui-color-theme">
  <a href="javascript:;" class="mdui-btn mdui-btn-icon" mdui-drawer="{target: '#left-drawer'}">
    <i class="mdui-icon material-icons">menu</i>
  </a>
  <a href="index.php"><span class="mdui-typo-title">Favocas 组织认可备案平台</span></a>
  <div class="mdui-toolbar-spacer"></div>
  <div class="mdui-textfield mdui-textfield-expandable mdui-float-right">
  <button class="mdui-textfield-icon mdui-btn mdui-btn-icon">
    <i class="mdui-icon material-icons">search</i>
  </button>
  <input id="search" class="mdui-textfield-input" type="text" placeholder="输入备案号码以查询备案......" onkeydown="keyup_submit(event);"/>
  <button class="mdui-textfield-close mdui-btn mdui-btn-icon">
    <i class="mdui-icon material-icons">close</i>
  </button>
</div>
  <a href="javascript:;" class="mdui-btn mdui-btn-icon" mdui-menu="{target: '#vertmenu'}">
    <i class="mdui-icon material-icons">more_vert</i>
  </a>
  <ul class="mdui-menu" id="vertmenu">
  <li class="mdui-menu-item">
    <a onclick="javascript:location.reload()" class="mdui-ripple">
      <i class="mdui-menu-item-icon mdui-icon material-icons">&#xe86a;</i>刷新
    </a>
  </li>
  <li class="mdui-menu-item">
    <a href="javascript:history.back();" class="mdui-ripple">
    <i class="mdui-menu-item-icon mdui-icon material-icons">&#xe5c4;</i>返回前一页
    </a>
  </li>
  <li class="mdui-divider"></li>
  <li class="mdui-menu-item">
    <a href="https://github.com/Diamochang/DBMotion" class="mdui-ripple">
    <i class="mdui-menu-item-icon mdui-icon ri-github-fill"></i>Github
    </a>
  </li>
  <li class="mdui-menu-item">
    <a href="https://gitee.com/Diamochang/DBMotion" class="mdui-ripple">
    <i class="mdui-menu-item-icon mdui-icon ri-git-repository-fill"></i>Gitee
    </a>
  </li>
  
</ul>
</div>
</div>
<script>
  function keyup_submit(e){ 
   var evt = window.event || e; 
   if (evt.keyCode == 13){
    var text = document.getElementById('search').value;
    window.location.href = "detail.php?id=" + text;
    }
  }
</script>
<div class="mdui-drawer" id="left-drawer">
<ul class="mdui-list">
  <a href="index.php">
   <li class="mdui-list-item mdui-ripple">
     <i class="mdui-list-item-icon mdui-icon material-icons">&#xe88a;</i>
     <div class="mdui-list-item-content">首页</div>
   </li>
  </a>
  <a href="new.php">
   <li class="mdui-list-item mdui-ripple">
     <i class="mdui-list-item-icon mdui-icon material-icons">&#xe05c;</i>
     <div class="mdui-list-item-content">最新备案</div>
   </li>
  </a>
  <a href="aboutus.php">
  <li class="mdui-list-item mdui-ripple">
    <i class="mdui-list-item-icon mdui-icon material-icons">&#xe7fb;</i>
    <div class="mdui-list-item-content">关于我们</div>
  </li>
  </a>
  <li class="mdui-list-item mdui-ripple">
    <i class="mdui-list-item-icon mdui-icon material-icons">&#xe02f;</i>
    <div class="mdui-list-item-content">查阅手册</div>
  </li>
</ul>
</div>
<div class="mdui-container">
<div class="mdui-card">
<div class="mdui-card-media">
  <img class="mdui-img-fluid" src="img/aboutcard.jpg"/>
</div>
<div class="mdui-card-primary">
  <div class="mdui-card-primary-title">关于</div>
</div>
<div class="mdui-card-content">
<div class="mdui-typo">
    <p>Favocas 组织认可备案平台基于 Favocas 理事长 Mike Wang 以<a href="https://download.csdn.net/download/modern358/11064349" target="_blank" rel="noopener noreferrer">这个 CSDN 免费资源（PHPStorm 生成）</a>为基本框架，对原代码进行改写、引入 <a href="https://www.mdui.org" target="_blank" rel="noopener noreferrer">MDUI</a> 而成的 DBMotion。相比萌备，它更具有广泛性，并且没有任何<abbr title="进入萌备的网站大多具有二次元风格，使得新申请者可能会有“仅二次元可入萌备”的心理包袱">“萌”包袱</abbr>。即使您的网站没有华丽的外表，只要满足要求，也同样可以申请备案。</p>
    <p><u>需要注意，本系统不能替代国内的真实备案，获得这里的备案仅代表网站获得了 Favocas Organization 和关联社团、组织及其成员的认可。</u>请通过<a href="https://beian.miit.gov.cn/#/Integrated/index">这里</a>来查询国内真实 ICP 备案，欲申请国内真实 ICP 备案，您可能需要咨询主机服务商或专业的 ICP 备案申请机构。</p>
    <p>DBMotion 是开源的，您可以通过下面位于右侧的两个按钮或右上菜单栏进入项目仓库。</p>
</div>
</div>
<div class="mdui-card-actions">
  <button class="mdui-btn mdui-ripple" onclick="window.location.href='http://favocas.ml/?from=icp_system'">转到 Favocas</button>
  <button class="mdui-btn mdui-ripple mdui-float-right" onclick="window.location.href='https://github.com/Diamochang/DBMotion'">转到 Github 仓库</button>
  <button class="mdui-btn mdui-ripple mdui-float-right" onclick="window.location.href='https://gitee.com/Diamochang/DBMotion'">转到 Gitee 仓库</button>
</div>
</div>
</div>
<br>
<div class="mdui-typo">
<p class="mdui-text-center mdui-p-b-2">©<a href="http://favocas.ml/?from=icp_system" target="_blank" rel="meta noopener noreferrer">Favocas</a> 2022. | <a href="detail.php?id=22100000" rel="icp-">菲沃备证字22100000号</a> | Powered by DBMotion</p>
</div>
</body>
<script src="mdui/js/mdui.min.js"></script>
</html>