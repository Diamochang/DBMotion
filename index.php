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
<div class="mdui-text-center">
  <div class="mdui-typo">
    <h3>欢迎</h3>
    <hr />
  </div>
</div>
<div class="mdui-card mdui-center">
  <div class="mdui-card-content">
   <div class="mdui-textfield mdui-textfield-floating-label">
     <i class="mdui-icon material-icons">&#xe8b6;</i>
     <label class="mdui-textfield-label">查询备案</label>
     <input id="search" class="mdui-textfield-input" type="text" onkeydown="keyup_submit(event);">
     <div class="mdui-textfield-helper">请输入备案号码以查询备案。目前不支持使用其它规则。</div>
   </div>
  </div>
</div>
<br>
<div class="mdui-typo">
<p class="mdui-text-center">按下 <kbd>Enter</kbd> 或轻触输入法 确认 以开始查询</p>
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
<div class="mdui-fab-wrapper" id="Fab1" mdui-fab="{trigger: 'hover'}">
  <button onclick="window.location.href='add.php'" class="mdui-fab mdui-ripple mdui-color-theme-accent">
  <i class="mdui-icon material-icons">&#xe145;</i>
  </button>
  <div class="mdui-fab-dial">
    <button onclick="window.location.href='searchdb.php'" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-theme-accent">
    <i class="mdui-icon material-icons">&#xe872;</i>
    </button>
    <button onclick="window.location.href='searchdb.php'" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-theme-accent">
    <i class="mdui-icon material-icons">&#xe3c9;</i>
    </button>
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