<?php
/* Smarty version 3.1.32, created on 2020-08-17 15:05:47
  from 'C:\wamp64\www\swadeshtimes.in\themes\classic\maindir.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f3a9ccbd59093_50428584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62100baa45c75c02d96029b3de37b81995766ec0' => 
    array (
      0 => 'C:\\wamp64\\www\\swadeshtimes.in\\themes\\classic\\maindir.php',
      1 => 1597676738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3a9ccbd59093_50428584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\swadeshtimes.in\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?><nav class="navbar navbar-lg navbar-dark bg-dark">
    <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['logoon']->value == '2') {?>
        <a class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><?php echo $_smarty_tpl->tpl_vars['logotext']->value;?>
</a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['logoon']->value == '1') {?>
        <a class="navbar-brand navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><img src="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['themes']->value;?>
/styles/images/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['sitetitle']->value;?>
" width="250" height="45" /></a>
        <?php }?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup2" aria-controls="navbarNavAltMarkup2" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul id="coolMenu" class="nav navbar-nav ml-auto">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categori']->value, 'caty', true);
$_smarty_tpl->tpl_vars['caty']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['caty']->value) {
$_smarty_tpl->tpl_vars['caty']->index++;
$__foreach_caty_0_saved = $_smarty_tpl->tpl_vars['caty'];
?>
                <?php $_smarty_tpl->_assignInScope('ifavaible', $_smarty_tpl->tpl_vars['caty']->total);?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['toplinks']->value;
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['caty']->index < $_prefixVariable1) {?>
                <?php if ($_smarty_tpl->tpl_vars['rewritemod']->value == 2) {?>
                <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/categories.php?id=<?php echo $_smarty_tpl->tpl_vars['caty']->value['catid'];?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['caty']->value['name']);?>
</a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['rewritemod']->value == 1) {?>
                <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/category/<?php echo $_smarty_tpl->tpl_vars['caty']->value['catid'];?>
/<?php echo $_smarty_tpl->tpl_vars['caty']->value['seoname'];?>
.html"><?php echo stripslashes($_smarty_tpl->tpl_vars['caty']->value['name']);?>
</a>
                <?php }?>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcat']->value, 'inc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inc']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['inc']->value['cord'] != 0 && $_smarty_tpl->tpl_vars['caty']->value['catid'] == $_smarty_tpl->tpl_vars['inc']->value['parent']) {?>
                <?php if ($_smarty_tpl->tpl_vars['rewritemod']->value == 2) {?>
                <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/categories.php?id=<?php echo $_smarty_tpl->tpl_vars['inc']->value['catid'];?>
"><?php echo smarty_modifier_replace(stripslashes($_smarty_tpl->tpl_vars['inc']->value['name'])," ","&nbsp;");?>
</a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['rewritemod']->value == 1) {?>
                <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/category/<?php echo $_smarty_tpl->tpl_vars['inc']->value['catid'];?>
/<?php echo $_smarty_tpl->tpl_vars['inc']->value['seoname'];?>
.html"><?php echo smarty_modifier_replace(stripslashes($_smarty_tpl->tpl_vars['inc']->value['name'])," ","&nbsp;");?>
</a>
                <?php }?>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            </li>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['caty'] = $__foreach_caty_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li class="nav-item">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['toplinks']->value;
$_prefixVariable2 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['ifavaible']->value > $_prefixVariable2) {?><a class="nav-link" href="#"><?php echo $_smarty_tpl->tpl_vars['lang']->value[114];?>
</a>
            <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categori']->value, 'morecat');
$_smarty_tpl->tpl_vars['morecat']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['morecat']->value) {
$_smarty_tpl->tpl_vars['morecat']->index++;
$__foreach_morecat_2_saved = $_smarty_tpl->tpl_vars['morecat'];
?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['toplinks']->value;
$_prefixVariable3 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['morecat']->value['cord'] == 0 && $_smarty_tpl->tpl_vars['morecat']->index >= $_prefixVariable3) {?>
            <?php if ($_smarty_tpl->tpl_vars['rewritemod']->value == 2) {?>
            <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/categories.php?id=<?php echo $_smarty_tpl->tpl_vars['morecat']->value['catid'];?>
"><?php echo smarty_modifier_replace(stripslashes($_smarty_tpl->tpl_vars['morecat']->value['name'])," ","&nbsp;");?>
</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['rewritemod']->value == 1) {?>
            <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/category/<?php echo $_smarty_tpl->tpl_vars['morecat']->value['catid'];?>
/<?php echo $_smarty_tpl->tpl_vars['morecat']->value['seoname'];?>
.html"><?php echo smarty_modifier_replace(stripslashes($_smarty_tpl->tpl_vars['morecat']->value['name'])," ","&nbsp;");?>
</a>
            <?php }?>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['morecat'] = $__foreach_morecat_2_saved;
}
} else {
?>
            <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
">Categories</li></a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <?php }?>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup2">
        <!-- this is a secon user menu -->
        <ul><li>one</li>
        ><li>one</li>
        ><li>one</li>
        ><li>one</li>
        ><li>one</li>
        </ul>
        </div>
    </div>
</nav>
<div class="container">
<div class="row mt-3">
<div class="col-md-8">
<div class="menuline">
<?php if ((($tmp = @$_SESSION['logged_in'])===null||$tmp==='' ? '' : $tmp) == true) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/postadmin.php"><i class="fa fa-chevron-right"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value[115];?>
</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/admin"><i class="fa fa-chevron-right"></i> Admin Panel</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/admin/signout.php"><i class="fa fa-chevron-right"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value[209];?>
</a>
<?php } else {
if ((($tmp = @$_SESSION['loggedin'])===null||$tmp==='' ? '' : $tmp) == true) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/link.php"><i class="fa fa-chevron-right"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value[208];?>
</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/auth.php?auth=6"><i class="fa fa-chevron-right"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value[115];?>
</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/auth.php?auth=4"><i class="fa fa-chevron-right"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value[209];?>
</a>
<?php }
if ((($tmp = @$_SESSION['loggedin'])===null||$tmp==='' ? '' : $tmp) == false) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/auth.php?auth=7"><i class="fa fa-chevron-right"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value[211];?>
</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/auth.php?auth=5"><i class="fa fa-chevron-right"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value[210];?>
</a>
<?php }
}
if (isset($_smarty_tpl->tpl_vars['startmenu']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['startmenu']->value, 'sm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sm']->value) {
if ($_smarty_tpl->tpl_vars['sm']->value['active'] == 2) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['sm']->value['valueopt'];?>
"><i class="fa fa-chevron-right"></i><?php echo $_smarty_tpl->tpl_vars['sm']->value['nameopt'];?>
</a>
<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</div>
</div>
<div class="col-md-4">
<form action="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/search.php" method="GET">
<div class="input-group md-form form-sm form-2 pl-0">
<input name="q" class="form-control my-0 py-1 amber-border" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value[298];?>
" aria-label="Search"<?php if ((($tmp = @$_GET['q'])===null||$tmp==='' ? '' : $tmp) == false) {
} else { ?> value="<?php echo (($tmp = @htmlspecialchars($_GET['q'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
"<?php }?> />
<div class="input-group-append">
<button type="submit" class="input-group-text amber lighten-3"> <i class="fa fa-search"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['newson']->value == 2) {?><div class="container mt-3"><div class="row"><div class="col-md-12 text-center"><div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['newstext']->value;?>
</div></div></div></div><?php }
}
}
