<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Paper> $papers
 */
?>
<div class="papers index content">
    <?= $this->Html->link(__('New Paper'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Papers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($papers as $paper): ?>
                <tr>
                    <td><?= $this->Number->format($paper->id) ?></td>
                    <td><?= h($paper->name) ?></td>
                    <td><?= h($paper->created) ?></td>
                    <td><?= h($paper->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $paper->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paper->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paper->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paper->id)]) ?>
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
