<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users view content">
            <h3><?= h($user->username) ?></h3>
            <table>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Api Token') ?></th>
                    <td><?= h($user->api_token) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($user->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Other Names') ?></th>
                    <td><?= h($user->other_names) ?></td>
                </tr>
                <tr>
                    <th><?= __('Surname') ?></th>
                    <td><?= h($user->surname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($user->phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $user->hasValue('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Disabled') ?></th>
                    <td><?= $this->Number->format($user->is_disabled) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Force Change Password') ?></th>
                    <td><?= $user->is_force_change_password === null ? '' : $this->Number->format($user->is_force_change_password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reset Code Expire Time') ?></th>
                    <td><?= h($user->reset_code_expire_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Reset Code') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($user->reset_code)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Api Limit') ?></h4>
                <?php if (!empty($user->api_limit)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Uri') ?></th>
                            <th><?= __('Class') ?></th>
                            <th><?= __('Method') ?></th>
                            <th><?= __('Ip Address') ?></th>
                            <th><?= __('Time') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->api_limit as $apiLimit) : ?>
                        <tr>
                            <td><?= h($apiLimit->id) ?></td>
                            <td><?= h($apiLimit->user_id) ?></td>
                            <td><?= h($apiLimit->uri) ?></td>
                            <td><?= h($apiLimit->class) ?></td>
                            <td><?= h($apiLimit->method) ?></td>
                            <td><?= h($apiLimit->ip_address) ?></td>
                            <td><?= h($apiLimit->time) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ApiLimit', 'action' => 'view', $apiLimit->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ApiLimit', 'action' => 'edit', $apiLimit->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ApiLimit', 'action' => 'delete', $apiLimit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $apiLimit->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Assessors') ?></h4>
                <?php if (!empty($user->assessors)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('CSEE Number') ?></th>
                            <th><?= __('CSEE Year') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Other Names') ?></th>
                            <th><?= __('Surname') ?></th>
                            <th><?= __('Sex') ?></th>
                            <th><?= __('Education Year') ?></th>
                            <th><?= __('Experience') ?></th>
                            <th><?= __('File Reference') ?></th>
                            <th><?= __('Endorsing Centre') ?></th>
                            <th><?= __('PO Box') ?></th>
                            <th><?= __('Region') ?></th>
                            <th><?= __('District') ?></th>
                            <th><?= __('Initial') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Bank Name') ?></th>
                            <th><?= __('Account Number') ?></th>
                            <th><?= __('Account Name') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('Subject Code') ?></th>
                            <th><?= __('Subject Name') ?></th>
                            <th><?= __('Initial Password') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->assessors as $assessor) : ?>
                        <tr>
                            <td><?= h($assessor->id) ?></td>
                            <td><?= h($assessor->CSEE_number) ?></td>
                            <td><?= h($assessor->CSEE_year) ?></td>
                            <td><?= h($assessor->first_name) ?></td>
                            <td><?= h($assessor->other_names) ?></td>
                            <td><?= h($assessor->surname) ?></td>
                            <td><?= h($assessor->sex) ?></td>
                            <td><?= h($assessor->education_year) ?></td>
                            <td><?= h($assessor->experience) ?></td>
                            <td><?= h($assessor->file_reference) ?></td>
                            <td><?= h($assessor->endorsing_centre) ?></td>
                            <td><?= h($assessor->PO_box) ?></td>
                            <td><?= h($assessor->region) ?></td>
                            <td><?= h($assessor->district) ?></td>
                            <td><?= h($assessor->initial) ?></td>
                            <td><?= h($assessor->title) ?></td>
                            <td><?= h($assessor->bank_name) ?></td>
                            <td><?= h($assessor->account_number) ?></td>
                            <td><?= h($assessor->account_name) ?></td>
                            <td><?= h($assessor->phone_number) ?></td>
                            <td><?= h($assessor->subject_code) ?></td>
                            <td><?= h($assessor->subject_name) ?></td>
                            <td><?= h($assessor->initial_password) ?></td>
                            <td><?= h($assessor->user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Assessors', 'action' => 'view', $assessor->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Assessors', 'action' => 'edit', $assessor->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Assessors', 'action' => 'delete', $assessor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assessor->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Item Statuses') ?></h4>
                <?php if (!empty($user->item_statuses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Reverse Comment') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->item_statuses as $itemStatus) : ?>
                        <tr>
                            <td><?= h($itemStatus->id) ?></td>
                            <td><?= h($itemStatus->item_id) ?></td>
                            <td><?= h($itemStatus->user_id) ?></td>
                            <td><?= h($itemStatus->reverse_comment) ?></td>
                            <td><?= h($itemStatus->status) ?></td>
                            <td><?= h($itemStatus->created) ?></td>
                            <td><?= h($itemStatus->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ItemStatuses', 'action' => 'view', $itemStatus->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ItemStatuses', 'action' => 'edit', $itemStatus->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ItemStatuses', 'action' => 'delete', $itemStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemStatus->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Item Tos') ?></h4>
                <?php if (!empty($user->item_tos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Topic Name') ?></th>
                            <th><?= __('Remembering') ?></th>
                            <th><?= __('Understanding') ?></th>
                            <th><?= __('Applying') ?></th>
                            <th><?= __('Analysis') ?></th>
                            <th><?= __('Evaluating') ?></th>
                            <th><?= __('Creating') ?></th>
                            <th><?= __('Is Current') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->item_tos as $itemTo) : ?>
                        <tr>
                            <td><?= h($itemTo->id) ?></td>
                            <td><?= h($itemTo->user_id) ?></td>
                            <td><?= h($itemTo->topic_name) ?></td>
                            <td><?= h($itemTo->remembering) ?></td>
                            <td><?= h($itemTo->understanding) ?></td>
                            <td><?= h($itemTo->applying) ?></td>
                            <td><?= h($itemTo->analysis) ?></td>
                            <td><?= h($itemTo->evaluating) ?></td>
                            <td><?= h($itemTo->creating) ?></td>
                            <td><?= h($itemTo->is_current) ?></td>
                            <td><?= h($itemTo->created_at) ?></td>
                            <td><?= h($itemTo->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ItemTos', 'action' => 'view', $itemTo->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ItemTos', 'action' => 'edit', $itemTo->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ItemTos', 'action' => 'delete', $itemTo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemTo->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related User Logs') ?></h4>
                <?php if (!empty($user->user_logs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Action Perfomed') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->user_logs as $userLog) : ?>
                        <tr>
                            <td><?= h($userLog->id) ?></td>
                            <td><?= h($userLog->user_id) ?></td>
                            <td><?= h($userLog->action_perfomed) ?></td>
                            <td><?= h($userLog->item_id) ?></td>
                            <td><?= h($userLog->created_at) ?></td>
                            <td><?= h($userLog->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserLogs', 'action' => 'view', $userLog->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserLogs', 'action' => 'edit', $userLog->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserLogs', 'action' => 'delete', $userLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userLog->id)]) ?>
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
