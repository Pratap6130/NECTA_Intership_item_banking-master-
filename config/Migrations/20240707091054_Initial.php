<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public bool $autoId = false;

    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     * @return void
     */
    public function up(): void
    {
        $this->table('acos')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('parent_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('model', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('foreign_key', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('alias', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('lft', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('rght', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addIndex(
                [
                    'alias',
                ],
                [
                    'name' => 'alias',
                ]
            )
            ->addIndex(
                [
                    'foreign_key',
                ],
                [
                    'name' => 'foreign_key',
                ]
            )
            ->addIndex(
                [
                    'parent_id',
                ],
                [
                    'name' => 'parent_id',
                ]
            )
            ->addIndex(
                [
                    'model',
                ],
                [
                    'name' => 'model',
                ]
            )
            ->addIndex(
                [
                    'lft',
                    'rght',
                ],
                [
                    'name' => 'lft_2',
                ]
            )
            ->addIndex(
                [
                    'rght',
                ],
                [
                    'name' => 'rght',
                ]
            )
            ->addIndex(
                [
                    'lft',
                ],
                [
                    'name' => 'lft',
                ]
            )
            ->create();

        $this->table('answer_attachments')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('path', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('answer_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'current_timestamp()',
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'answer_id',
                ],
                [
                    'name' => 'fk_answer_attachment_items1_idx',
                ]
            )
            ->create();

        $this->table('answers')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('item_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('content', 'text', [
                'default' => null,
                'limit' => 4294967295,
                'null' => true,
            ])
            ->addColumn('is_correct', 'tinyinteger', [
                'default' => '1',
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'item_id',
                ],
                [
                    'name' => 'item_id_item_answer_idx',
                ]
            )
            ->create();

        $this->table('api_keys')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('api_key', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('controller', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('date_created', 'datetime', [
                'default' => 'current_timestamp()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_modified', 'datetime', [
                'default' => 'current_timestamp()',
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('api_limit')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('uri', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('class', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('method', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('ip_address', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('time', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('aros')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('parent_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('model', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('foreign_key', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('alias', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('lft', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('rght', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addIndex(
                [
                    'alias',
                ],
                [
                    'name' => 'alias',
                ]
            )
            ->addIndex(
                [
                    'model',
                ],
                [
                    'name' => 'model',
                ]
            )
            ->addIndex(
                [
                    'foreign_key',
                ],
                [
                    'name' => 'foreign_key',
                ]
            )
            ->addIndex(
                [
                    'lft',
                    'rght',
                ],
                [
                    'name' => 'lft_2',
                ]
            )
            ->addIndex(
                [
                    'model',
                    'foreign_key',
                ],
                [
                    'name' => 'model_2',
                ]
            )
            ->addIndex(
                [
                    'rght',
                ],
                [
                    'name' => 'rght',
                ]
            )
            ->addIndex(
                [
                    'lft',
                ],
                [
                    'name' => 'lft',
                ]
            )
            ->addIndex(
                [
                    'parent_id',
                ],
                [
                    'name' => 'parent_id',
                ]
            )
            ->create();

        $this->table('aros_acos')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('aro_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('aco_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('_create', 'string', [
                'default' => '0',
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('_read', 'string', [
                'default' => '0',
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('_update', 'string', [
                'default' => '0',
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('_delete', 'string', [
                'default' => '0',
                'limit' => 2,
                'null' => false,
            ])
            ->addIndex(
                [
                    'aro_id',
                    'aco_id',
                ],
                [
                    'name' => 'aro_id',
                    'unique' => true,
                ]
            )
            ->addIndex(
                [
                    'aco_id',
                ],
                [
                    'name' => 'aco_id',
                ]
            )
            ->addIndex(
                [
                    '_create',
                ],
                [
                    'name' => '_create',
                ]
            )
            ->addIndex(
                [
                    '_delete',
                ],
                [
                    'name' => '_delete',
                ]
            )
            ->addIndex(
                [
                    '_read',
                ],
                [
                    'name' => '_read',
                ]
            )
            ->addIndex(
                [
                    '_update',
                ],
                [
                    'name' => '_update',
                ]
            )
            ->addIndex(
                [
                    'aro_id',
                    'aco_id',
                ],
                [
                    'name' => 'aro_id_2',
                ]
            )
            ->create();

        $this->table('assessors')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('CSEE_number', 'string', [
                'default' => null,
                'limit' => 16,
                'null' => false,
            ])
            ->addColumn('CSEE_year', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 4,
                'scale' => 0,
                'signed' => true,
            ])
            ->addColumn('first_name', 'string', [
                'default' => null,
                'limit' => 16,
                'null' => false,
            ])
            ->addColumn('other_names', 'string', [
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('surname', 'string', [
                'default' => null,
                'limit' => 16,
                'null' => false,
            ])
            ->addColumn('sex', 'string', [
                'default' => null,
                'limit' => 8,
                'null' => true,
            ])
            ->addColumn('education_year', 'string', [
                'default' => null,
                'limit' => 128,
                'null' => true,
            ])
            ->addColumn('experience', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 3,
                'scale' => 1,
                'signed' => true,
            ])
            ->addColumn('file_reference', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('endorsing_centre', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('PO_box', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('region', 'string', [
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('district', 'string', [
                'default' => null,
                'limit' => 128,
                'null' => true,
            ])
            ->addColumn('initial', 'string', [
                'default' => null,
                'limit' => 8,
                'null' => true,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('bank_name', 'string', [
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('account_number', 'string', [
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('account_name', 'string', [
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('phone_number', 'string', [
                'default' => null,
                'limit' => 16,
                'null' => true,
            ])
            ->addColumn('subject_code', 'string', [
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('subject_name', 'string', [
                'default' => null,
                'limit' => 128,
                'null' => true,
            ])
            ->addColumn('initial_password', 'string', [
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addIndex(
                [
                    'CSEE_number',
                    'CSEE_year',
                ],
                [
                    'name' => 'CSEE_number_UNIQUE',
                    'unique' => true,
                ]
            )
            ->addIndex(
                [
                    'user_id',
                ],
                [
                    'name' => 'fk_assessors_users_idx',
                ]
            )
            ->create();

        $this->table('competence')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('subject_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 256,
                'null' => false,
            ])
            ->addColumn('number_of_items', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 5,
                'scale' => 2,
                'signed' => true,
            ])
            ->addColumn('total_weight', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 5,
                'scale' => 2,
                'signed' => true,
            ])
            ->addIndex(
                [
                    'subject_id',
                ],
                [
                    'name' => 'topic_sub_idx',
                ]
            )
            ->create();

        $this->table('exam_types')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('short_name', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('description', 'string', [
                'default' => null,
                'limit' => 150,
                'null' => true,
            ])
            ->addColumn('code', 'string', [
                'default' => null,
                'limit' => 3,
                'null' => false,
            ])
            ->create();

        $this->table('item_attachments')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('path', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('item_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'current_timestamp()',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'item_id',
                ],
                [
                    'name' => 'question_attachment_id_idx',
                ]
            )
            ->create();

        $this->table('item_categories')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('student_cost', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 6,
                'scale' => 2,
                'signed' => true,
            ])
            ->addColumn('author_cost', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 6,
                'scale' => 2,
                'signed' => true,
            ])
            ->addColumn('moderator_cost', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 6,
                'scale' => 2,
                'signed' => true,
            ])
            ->addColumn('proofreader_cost', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 6,
                'scale' => 2,
                'signed' => true,
            ])
            ->addColumn('necta_cost', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 6,
                'scale' => 2,
                'signed' => true,
            ])
            ->addColumn('marker_cost', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 6,
                'scale' => 2,
                'signed' => true,
            ])
            ->addColumn('teacher_cost', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 6,
                'scale' => 2,
                'signed' => true,
            ])
            ->create();

        $this->table('item_prompts')
            ->addColumn('id', 'biginteger', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('item_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('content', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('answer', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('item_statuses')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('item_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('reverse_comment', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('status', 'string', [
                'default' => null,
                'limit' => 16,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'user_id',
                ],
                [
                    'name' => 'item_statuses_users_FK',
                ]
            )
            ->create();

        $this->table('item_tos')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('topic_name', 'string', [
                'default' => null,
                'limit' => 300,
                'null' => false,
            ])
            ->addColumn('remembering', 'integer', [
                'default' => '0',
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('understanding', 'integer', [
                'default' => '0',
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('applying', 'integer', [
                'default' => '0',
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('analysis', 'integer', [
                'default' => '0',
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('evaluating', 'integer', [
                'default' => '0',
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('creating', 'integer', [
                'default' => '0',
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('is_current', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'current_timestamp()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'current_timestamp()',
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('items')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('topic_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('content', 'text', [
                'default' => null,
                'limit' => 4294967295,
                'null' => true,
            ])
            ->addColumn('content_sw', 'text', [
                'default' => null,
                'limit' => 4294967295,
                'null' => true,
            ])
            ->addColumn('item_categorie_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('weight', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 4,
                'scale' => 2,
                'signed' => true,
            ])
            ->addColumn('price', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 6,
                'scale' => 2,
                'signed' => true,
            ])
            ->addColumn('statuse_id', 'integer', [
                'comment' => 'other stages are: moderated, proofred, approved, published, upublished, reversed',
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('skill_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('paper_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('publisher', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('editor', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('publish_date', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('volume', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('url', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('has_dual_language', 'boolean', [
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'current_timestamp()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'topic_id',
                ],
                [
                    'name' => 'item_topic_idx',
                ]
            )
            ->addIndex(
                [
                    'item_categorie_id',
                ],
                [
                    'name' => 'fk_items_item_categories1_idx',
                ]
            )
            ->addIndex(
                [
                    'skill_id',
                ],
                [
                    'name' => 'fk_skills_idx',
                ]
            )
            ->addIndex(
                [
                    'paper_id',
                ],
                [
                    'name' => 'items_papers_FK',
                ]
            )
            ->addIndex(
                [
                    'statuse_id',
                ],
                [
                    'name' => 'items_item_statuses_FK',
                ]
            )
            ->create();

        $this->table('papers')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('reversed_items')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('item_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('item_user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('reversed_by_user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'current_timestamp()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'current_timestamp()',
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('roles')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('description', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->create();

        $this->table('sessions')
            ->addColumn('id', 'char', [
                'collation' => 'ascii_bin',
                'default' => null,
                'limit' => 40,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('created', 'datetime', [
                'default' => 'current_timestamp()',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => 'current_timestamp()',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('data', 'binary', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('expires', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->create();

        $this->table('skill_levels')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->create();

        $this->table('skills')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('description', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('skill_level_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addIndex(
                [
                    'skill_level_id',
                ],
                [
                    'name' => 'fk_skills_level_idx',
                ]
            )
            ->create();

        $this->table('subjects')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('code', 'string', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('short_name', 'string', [
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('description', 'string', [
                'default' => null,
                'limit' => 150,
                'null' => true,
            ])
            ->addColumn('exam_types_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addIndex(
                [
                    'exam_types_id',
                ],
                [
                    'name' => 'subject_exam_fk_idx',
                ]
            )
            ->create();

        $this->table('topics')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('subject_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 256,
                'null' => false,
            ])
            ->addColumn('number_of_items', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 5,
                'scale' => 2,
                'signed' => true,
            ])
            ->addColumn('total_weight', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 5,
                'scale' => 2,
                'signed' => true,
            ])
            ->addIndex(
                [
                    'subject_id',
                ],
                [
                    'name' => 'topic_sub_idx',
                ]
            )
            ->create();

        $this->table('user_logs')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('action_perfomed', 'string', [
                'default' => null,
                'limit' => 300,
                'null' => false,
            ])
            ->addColumn('item_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'current_timestamp()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'current_timestamp()',
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('users')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('username', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('api_token', 'string', [
                'default' => null,
                'limit' => 500,
                'null' => true,
            ])
            ->addColumn('first_name', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('other_names', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('surname', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('phone_number', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'current_timestamp()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('is_disabled', 'tinyinteger', [
                'default' => '0',
                'limit' => null,
                'null' => false,
                'signed' => true,
            ])
            ->addColumn('role_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('is_force_change_password', 'tinyinteger', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => true,
            ])
            ->addColumn('reset_code_expire_time', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('reset_code', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'username',
                ],
                [
                    'name' => 'username_UNIQUE',
                    'unique' => true,
                ]
            )
            ->addIndex(
                [
                    'modified',
                ],
                [
                    'name' => 'modified_UNIQUE',
                    'unique' => true,
                ]
            )
            ->addIndex(
                [
                    'role_id',
                ],
                [
                    'name' => 'fk_roles_users_idx',
                ]
            )
            ->create();

        $this->table('answer_attachments')
            ->addForeignKey(
                'answer_id',
                'answers',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                    'constraint' => 'fk_answer_attachment_answers1'
                ]
            )
            ->update();

        $this->table('answers')
            ->addForeignKey(
                'item_id',
                'items',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                    'constraint' => 'item_id_item_answer'
                ]
            )
            ->update();

        $this->table('assessors')
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                    'constraint' => 'fk_assessors_users'
                ]
            )
            ->update();

        $this->table('competence')
            ->addForeignKey(
                'subject_id',
                'subjects',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                    'constraint' => 'competence_ibfk_1'
                ]
            )
            ->update();

        $this->table('item_attachments')
            ->addForeignKey(
                'item_id',
                'items',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                    'constraint' => 'question_attachment_id'
                ]
            )
            ->update();

        $this->table('item_statuses')
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                    'constraint' => 'item_statuses_users_FK'
                ]
            )
            ->update();

        $this->table('items')
            ->addForeignKey(
                'paper_id',
                'papers',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                    'constraint' => 'items_papers_FK'
                ]
            )
            ->addForeignKey(
                'statuse_id',
                'item_statuses',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                    'constraint' => 'items_item_statuses_FK'
                ]
            )
            ->addForeignKey(
                'item_categorie_id',
                'item_categories',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                    'constraint' => 'items_item_categories_FK'
                ]
            )
            ->addForeignKey(
                'topic_id',
                'topics',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                    'constraint' => 'item_topic'
                ]
            )
            ->addForeignKey(
                'skill_id',
                'skills',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                    'constraint' => 'fk_skills'
                ]
            )
            ->update();

        $this->table('skills')
            ->addForeignKey(
                'skill_level_id',
                'skill_levels',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                    'constraint' => 'fk_skills_level'
                ]
            )
            ->update();

        $this->table('subjects')
            ->addForeignKey(
                'exam_types_id',
                'exam_types',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                    'constraint' => 'subject_exam_fk'
                ]
            )
            ->update();

        $this->table('topics')
            ->addForeignKey(
                'subject_id',
                'subjects',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                    'constraint' => 'topic_sub'
                ]
            )
            ->update();

        $this->table('users')
            ->addForeignKey(
                'role_id',
                'roles',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                    'constraint' => 'fk_roles_users'
                ]
            )
            ->update();
    }

    /**
     * Down Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-down-method
     * @return void
     */
    public function down(): void
    {
        $this->table('answer_attachments')
            ->dropForeignKey(
                'answer_id'
            )->save();

        $this->table('answers')
            ->dropForeignKey(
                'item_id'
            )->save();

        $this->table('assessors')
            ->dropForeignKey(
                'user_id'
            )->save();

        $this->table('competence')
            ->dropForeignKey(
                'subject_id'
            )->save();

        $this->table('item_attachments')
            ->dropForeignKey(
                'item_id'
            )->save();

        $this->table('item_statuses')
            ->dropForeignKey(
                'user_id'
            )->save();

        $this->table('items')
            ->dropForeignKey(
                'paper_id'
            )
            ->dropForeignKey(
                'statuse_id'
            )
            ->dropForeignKey(
                'item_categorie_id'
            )
            ->dropForeignKey(
                'topic_id'
            )
            ->dropForeignKey(
                'skill_id'
            )->save();

        $this->table('skills')
            ->dropForeignKey(
                'skill_level_id'
            )->save();

        $this->table('subjects')
            ->dropForeignKey(
                'exam_types_id'
            )->save();

        $this->table('topics')
            ->dropForeignKey(
                'subject_id'
            )->save();

        $this->table('users')
            ->dropForeignKey(
                'role_id'
            )->save();

        $this->table('acos')->drop()->save();
        $this->table('answer_attachments')->drop()->save();
        $this->table('answers')->drop()->save();
        $this->table('api_keys')->drop()->save();
        $this->table('api_limit')->drop()->save();
        $this->table('aros')->drop()->save();
        $this->table('aros_acos')->drop()->save();
        $this->table('assessors')->drop()->save();
        $this->table('competence')->drop()->save();
        $this->table('exam_types')->drop()->save();
        $this->table('item_attachments')->drop()->save();
        $this->table('item_categories')->drop()->save();
        $this->table('item_prompts')->drop()->save();
        $this->table('item_statuses')->drop()->save();
        $this->table('item_tos')->drop()->save();
        $this->table('items')->drop()->save();
        $this->table('papers')->drop()->save();
        $this->table('reversed_items')->drop()->save();
        $this->table('roles')->drop()->save();
        $this->table('sessions')->drop()->save();
        $this->table('skill_levels')->drop()->save();
        $this->table('skills')->drop()->save();
        $this->table('subjects')->drop()->save();
        $this->table('topics')->drop()->save();
        $this->table('user_logs')->drop()->save();
        $this->table('users')->drop()->save();
    }
}
