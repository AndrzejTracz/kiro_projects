<?php /* Smarty version 2.6.28, created on 2017-02-23 22:33:05
         compiled from blu/email.aktywacja.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'blu/email.aktywacja.tpl', 11, false),)), $this); ?>
<b><?php echo $this->_tpl_vars['lang'][41]; ?>
.</b><br>

<?php echo $this->_tpl_vars['lang'][42]; ?>
: <a href="<?php echo $this->_tpl_vars['adres']; ?>
"><?php echo $this->_tpl_vars['nazwa']; ?>
</a><br><br>
<?php echo $this->_tpl_vars['lang'][43]; ?>
:<br>

<a href="<?php echo $this->_tpl_vars['adres']; ?>
aktywacja,<?php echo $this->_tpl_vars['kod']; ?>
.html"><?php echo $this->_tpl_vars['adres']; ?>
aktywacja,<?php echo $this->_tpl_vars['kod']; ?>
.html</a>
<br>
<br>
<div style="border-top: 1px solid #dddddd;padding:5px;">

	<?php echo $this->_tpl_vars['lang'][356]; ?>
 <a href="<?php echo $this->_tpl_vars['adres']; ?>
"><?php echo $this->_tpl_vars['nazwa']; ?>
</a>. <?php echo $this->_tpl_vars['lang'][359]; ?>
 <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y %H:%M") : smarty_modifier_date_format($_tmp, "%d-%m-%Y %H:%M")); ?>
. <a href="<?php echo $this->_tpl_vars['adres']; ?>
regulamin/"><?php echo $this->_tpl_vars['lang'][357]; ?>
</a>. <a href="<?php echo $this->_tpl_vars['adres']; ?>
kontakt/"><?php echo $this->_tpl_vars['lang'][358]; ?>
</a>.

</div>