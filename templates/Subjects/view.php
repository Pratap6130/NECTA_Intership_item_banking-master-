<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject $subject
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subject'), ['action' => 'edit', $subject->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subject'), ['action' => 'delete', $subject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Subjects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subject'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="subjects view content">
            <h3><?= h($subject->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($subject->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($subject->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Short Name') ?></th>
                    <td><?= h($subject->short_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($subject->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exam Type') ?></th>
                    <td><?= $subject->hasValue('exam_type') ? $this->Html->link($subject->exam_type->name, ['controller' => 'ExamTypes', 'action' => 'view', $subject->exam_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($subject->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Competence') ?></h4>
                <?php if (!empty($subject->competence)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Subject Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Number Of Items') ?></th>
                            <th><?= __('Total Weight') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($subject->competence as $competence) : ?>
                        <tr>
                            <td><?= h($competence->id) ?></td>
                            <td><?= h($competence->subject_id) ?></td>
                            <td><?= h($competence->name) ?></td>
                            <td><?= h($competence->number_of_items) ?></td>
                            <td><?= h($competence->total_weight) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Competence', 'action' => 'view', $competence->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Competence', 'action' => 'edit', $competence->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Competence', 'action' => 'delete', $competence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competence->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Topics') ?></h4>
                <?php if (!empty($subject->topics)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Subject Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Number Of Items') ?></th>
                            <th><?= __('Total Weight') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($subject->topics as $topic) : ?>
                        <tr>
                            <td><?= h($topic->id) ?></td>
                            <td><?= h($topic->subject_id) ?></td>
                            <td><?= h($topic->name) ?></td>
                            <td><?= h($topic->number_of_items) ?></td>
                            <td><?= h($topic->total_weight) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Topics', 'action' => 'view', $topic->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Topics', 'action' => 'edit', $topic->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Topics', 'action' => 'delete', $topic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $topic->id)]) ?>
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
