<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SkillLevel> $skillLevels
 */
?>
<div class="skillLevels index content">
    <?= $this->Html->link(__('New Skill Level'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Skill Levels') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($skillLevels as $skillLevel): ?>
                <tr>
                    <td><?= $this->Number->format($skillLevel->id) ?></td>
                    <td><?= h($skillLevel->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $skillLevel->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $skillLevel->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $skillLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skillLevel->id)]) ?>
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
