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
    <title>添加备案 - Favocas 组织认可备案平台</title>

    <?php
/**
* DBMotion 1.1.0
* DBMotion basic code framework https://download.csdn.net/download/modern358/11064349, thanks.
* DBMotion basic code framework created by PhpStorm. 
* DBMotion MDUI import & consummate by Diamochang (Mike Wang, https://gitee.com/Diamochang and https://github.com/Diamochang)
* DBMotion-based organization ICP system ©Favocas 2022.
*/

    ?>
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
    <div class="mdui-card-primary">
     <div class="mdui-card-primary-title">添加备案</div>
     <div class="mdui-card-primary-subtitle">申请添加一个备案。</div>
    </div>
     <div class="mdui-card-content">
     <div class="mdui-typo">
      <p>在申请备案之前，我们需要您的网站<u>满足以下条件</u>：</p>
      <ol>
       <li>您的网站需要使用一个<u>可信的SSL证书</u>，并正确配置了HTTPS。</li>
       <li>您的网站可以编辑页脚，以便插入备案超链接。</li>
       <li>您的网站不含任何<abbr title="包括破坏系统或MBR、锁定文件、损坏硬件等一切能对设备造成任何伤害的行为。">能对设备造成任何伤害</abbr>的恶搞病毒（卢本伟、XP Horror 等）、脚本病毒和勒索病毒，没有超链接到非法网站。</li>
       <li>您的网站若加入了广告联盟，还需保证其提供广告内容<abbr title="指不含色情广告、未经认可的情趣社交软件等用户反感且可能违法的广告（您可能需要在广告联盟处申请豁免），且广告接口的使用尽量符合“可接受广告”委员会的相关标准（https://acceptableads.com/standard/）。“可接受广告”委员会由在全球享誉盛名的 eyeo / Adblock Plus 主持组建，由来自营利性企业、行业专家和互联网用户的相关方组成。">合法且不影响使用</u>。</li>
       <li>您的网站能长期运营。</li>
      </ol>
      <p>若以上条件都满足，请点击下方的“转到表单进行创建”填写表单进行申请。若未满足，请查阅我们的手册排除问题。</p>
     </div>
    <div class="mdui-card-actions">
          <input class="mdui-btn mdui-ripple" type="submit" onclick="window.location.href='#createform'" name="button" id="button" value="转到表单进行创建">
          <input class="mdui-btn mdui-ripple" type="submit" onclick="window.location.href='#handbookp'"name="button2" id="button2" value="排除问题">
          <input class="mdui-btn mdui-ripple mdui-float-right" type="submit" onclick="window.location.href='index.php'" name="button2" id="button2" value="回到首页">
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



