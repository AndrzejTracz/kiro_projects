<?php /* Smarty version 2.6.28, created on 2017-02-23 22:32:19
         compiled from blu/register.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['templa'])."/subheader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['templa'])."/top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="post">
			<h1 class="title"><?php echo $this->_tpl_vars['lang'][276]; ?>
</h1><div class="entry">
		<p>
<?php if ($this->_tpl_vars['user_nick'] == "" && $this->_tpl_vars['rejestracja'] == 1 && $this->_tpl_vars['regok'] != 1): ?>
<?php if ($this->_tpl_vars['reg_error'] == 1): ?><center>
<div id="error" style="color:white;border-style:solid;border-width:thin;width:400px;height:50px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:red;"><table  width="100%"><tr><td width="15%" align="right"><img src="images/error.png"></td><td><center><b>
<?php if ($this->_tpl_vars['l'] == 1): ?><center><b ><?php echo $this->_tpl_vars['lang'][277]; ?>
</b></center><?php endif; ?>
<?php if ($this->_tpl_vars['h'] == 1): ?><center><b ><?php echo $this->_tpl_vars['lang'][278]; ?>
</b></center><?php endif; ?>
<?php if ($this->_tpl_vars['e'] == 1): ?><center><b ><?php echo $this->_tpl_vars['lang'][279]; ?>
</b></center><?php endif; ?>
<?php if ($this->_tpl_vars['ej'] == 1): ?><center><b ><?php echo $this->_tpl_vars['lang'][281]; ?>
</b></center><?php endif; ?>
<?php if ($this->_tpl_vars['reg'] == 1): ?><center><b ><?php echo $this->_tpl_vars['lang'][280]; ?>
</b></center><?php endif; ?>
<?php if ($this->_tpl_vars['t'] == 1): ?><center><b ><?php echo $this->_tpl_vars['lang'][282]; ?>
</b></center><?php endif; ?>
</b></center></td></tr></table></div></center>
<?php endif; ?>
<br>
<form action="" method="POST">
<table>
<tr>
<td><b><?php echo $this->_tpl_vars['lang'][283]; ?>
:</b></td>
<td><input type="text" name="login" value="<?php echo $this->_tpl_vars['lt']; ?>
"></td>
</tr>
<tr>
<td><b><?php echo $this->_tpl_vars['lang'][284]; ?>
:</b></td>
<td><input type="password" name="haslo"></td>
</tr>
<tr>
<td><b><?php echo $this->_tpl_vars['lang'][285]; ?>
:</b></td>
<td><input type="text" name="email" value="<?php echo $this->_tpl_vars['et']; ?>
"></td>
</tr>
<tr>
<td><b><?php echo $this->_tpl_vars['lang'][286]; ?>
:</b></td>
<td><input type="checkbox" name="regulamin" value="1" <?php if ($this->_tpl_vars['regulamin'] == 1): ?> checked<?php endif; ?>> <?php echo $this->_tpl_vars['lang'][287]; ?>
 <b><a href="regulamin/"><?php echo $this->_tpl_vars['lang'][288]; ?>
</a></b></td>
</tr>
<?php if ($this->_tpl_vars['tokenr'] == 1): ?>
<tr>
<td></td>
<td><img src="include/kod.php"></td>
</tr>
<tr>
<td><b><?php echo $this->_tpl_vars['lang'][289]; ?>
:</b></td>
<td><input type="text" name="token"></td>
</tr>
<?php endif; ?>
</table>
<input type="submit" value="<?php echo $this->_tpl_vars['lang'][290]; ?>
" name="register">
</form>
<?php endif; ?>

<?php if ($this->_tpl_vars['rejestracja'] == 0): ?><center><b><?php echo $this->_tpl_vars['lang'][292]; ?>
</b></center><?php endif; ?>
<?php if ($this->_tpl_vars['user_nick'] != ""): ?><center><b><?php echo $this->_tpl_vars['lang'][293]; ?>
</b></center><?php endif; ?>

<?php if ($this->_tpl_vars['regok'] == 1): ?><center><b style="color:lime;"><?php echo $this->_tpl_vars['lang'][294]; ?>
</b></center><?php endif; ?>
<?php if ($this->_tpl_vars['send'] == 1): ?><center><b style="color:lime;"><?php echo $this->_tpl_vars['lang'][295]; ?>
</b></center><?php endif; ?>
<?php if ($this->_tpl_vars['send'] == 2): ?><center><b style="color:lime;"><?php echo $this->_tpl_vars['lang'][296]; ?>
</b></center><?php endif; ?>
</p>
</div>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['templa'])."/right.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['templa'])."/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>