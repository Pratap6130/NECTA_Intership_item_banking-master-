<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Roles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Role'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="roles view content">
            <h3><?= h($role->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($role->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($role->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($role->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($role->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($role->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Api Token') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Other Names') ?></th>
                            <th><?= __('Surname') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Is Disabled') ?></th>
                            <th><?= __('Role Id') ?></th>
                            <th><?= __('Is Force Change Password') ?></th>
                            <th><?= __('Reset Code Expire Time') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Reset Code') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($role->users as $user) : ?>
                        <tr>
                            <td><?= h($user->id) ?></td>
                            <td><?= h($user->username) ?></td>
                            <td><?= h($user->password) ?></td>
                            <td><?= h($user->api_token) ?></td>
                            <td><?= h($user->first_name) ?></td>
                            <td><?= h($user->other_names) ?></td>
                            <td><?= h($user->surname) ?></td>
                            <td><?= h($user->phone_number) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->created) ?></td>
                            <td><?= h($user->is_disabled) ?></td>
                            <td><?= h($user->role_id) ?></td>
                            <td><?= h($user->is_force_change_password) ?></td>
                            <td><?= h($user->reset_code_expire_time) ?></td>
                            <td><?= h($user->modified) ?></td>
                            <td><?= h($user->reset_code) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $user->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $user->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
