
<?php echo $this->Form->create('User'); ?>
<?php echo('Por favor introduce tu usuario y contraseña'); ?>
<?php echo $this->Form->input('username');?>
<?php echo $this->Form->input('password'); ?>

<?php echo $this->Form->end('Iniciar sesión'); ?>
