<div class="view">
    <h2><?php echo __d('users', 'Admin :: Create'); ?></h2>
    <div class="menu">
        <ul>
            <li><?php echo $this->Html->link('Index', '/admin/users'); ?></li>
        </ul>
    </div>
    <?php
    echo $this->Form->create('User');
    echo $this->Form->input('username');
    echo $this->Form->input('EmailAddress.email_address');
    echo $this->Form->input('password');
    echo $this->Form->input('verify_password', array('type' => 'password'));
    echo $this->Form->end(__d('users', 'Submit'));
    ?>
</div>

