<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SkillLevel $skillLevel
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Skill Level'), ['action' => 'edit', $skillLevel->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Skill Level'), ['action' => 'delete', $skillLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skillLevel->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Skill Levels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Skill Level'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="skillLevels view content">
            <h3><?= h($skillLevel->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($skillLevel->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($skillLevel->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Skills') ?></h4>
                <?php if (!empty($skillLevel->skills)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Skill Level Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($skillLevel->skills as $skill) : ?>
                        <tr>
                            <td><?= h($skill->id) ?></td>
                            <td><?= h($skill->name) ?></td>
                            <td><?= h($skill->description) ?></td>
                            <td><?= h($skill->skill_level_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Skills', 'action' => 'view', $skill->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Skills', 'action' => 'edit', $skill->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Skills', 'action' => 'delete', $skill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skill->id)]) ?>
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
