<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Subject> $subjects
 */
?>
<div class="subjects index content">
    <?= $this->Html->link(__('New Subject'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Subjects') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('short_name') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('exam_types_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subjects as $subject): ?>
                <tr>
                    <td><?= $this->Number->format($subject->id) ?></td>
                    <td><?= h($subject->code) ?></td>
                    <td><?= h($subject->name) ?></td>
                    <td><?= h($subject->short_name) ?></td>
                    <td><?= h($subject->description) ?></td>
                    <td><?= $subject->hasValue('exam_type') ? $this->Html->link($subject->exam_type->name, ['controller' => 'ExamTypes', 'action' => 'view', $subject->exam_type->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $subject->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subject->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
