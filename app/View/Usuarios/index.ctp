<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Usuario'); ?>
    <fieldset>
        <legend>
            <?php echo __('Por favor introduce tu usuario y contraseña'); ?>
        </legend>
        <?php 
		echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Iniciar sesión')); ?>
</div>