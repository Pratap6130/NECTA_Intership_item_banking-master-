<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * ExamTypes seed.
 */
class ExamTypesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'CERTIFICATE OF SECONDARY EDUCATION EXAMINATION',
                'short_name' => 'CSEE',
                'description' => '',
                'code' => '1',
            ],
            [
                'id' => 2,
                'name' => 'ADVANCED CERTIFICATE OF SECONDARY EDUCATION EXAMINATION ',
                'short_name' => 'ACSEE',
                'description' => 'for form six students',
                'code' => '2',
            ],
            [
                'id' => 3,
                'name' => 'QUALIFYING TEST',
                'short_name' => 'QT',
                'description' => NULL,
                'code' => '6',
            ],
            [
                'id' => 4,
                'name' => ' GRADE  A TEACHER\'S CERTIFICATE EXAMINATION',
                'short_name' => 'GATCE',
                'description' => NULL,
                'code' => '10',
            ],
            [
                'id' => 5,
                'name' => 'GRADE A TEACHER\'S SPECIAL COURSE CERTIFICATE EXAMINATION',
                'short_name' => 'GATSCCE',
                'description' => NULL,
                'code' => '12',
            ],
            [
                'id' => 6,
                'name' => 'DIPLOMA IN SECONDARY EDUCATION EXAMINATION',
                'short_name' => 'DSEE',
                'description' => NULL,
                'code' => '14',
            ],
            [
                'id' => 7,
                'name' => 'DIPLOMA IN TECHNICAL EDUCATION EXAMINATION',
                'short_name' => 'DTE',
                'description' => NULL,
                'code' => '17',
            ],
            [
                'id' => 8,
                'name' => 'MUKA',
                'short_name' => 'MUKA',
                'description' => NULL,
                'code' => '18',
            ],
            [
                'id' => 9,
                'name' => 'FTNA',
                'short_name' => 'FTNA',
                'description' => NULL,
                'code' => '19',
            ],
            [
                'id' => 10,
                'name' => 'NON-EXAMINATION COLLECTION',
                'short_name' => 'Non-EC',
                'description' => NULL,
                'code' => '99',
            ],
            [
                'id' => 11,
                'name' => 'PRIMARY SCHOOL LEAVING EXAMINATION',
                'short_name' => 'PSLE',
                'description' => NULL,
                'code' => '7',
            ],
            [
                'id' => 12,
                'name' => 'STANDARD FOUR NATIONAL ASSESSMENT',
                'short_name' => 'SFNA',
                'description' => NULL,
                'code' => '8',
            ],
            [
                'id' => 13,
                'name' => 'STANDARD I',
                'short_name' => 'STD I',
                'description' => NULL,
                'code' => '100',
            ],
            [
                'id' => 14,
                'name' => 'STANDARD II',
                'short_name' => 'STD II',
                'description' => NULL,
                'code' => '101',
            ],
            [
                'id' => 15,
                'name' => 'STANDARD III',
                'short_name' => 'STD III',
                'description' => NULL,
                'code' => '102',
            ],
            [
                'id' => 16,
                'name' => 'STANDARD IV',
                'short_name' => 'STD IV',
                'description' => NULL,
                'code' => '103',
            ],
            [
                'id' => 17,
                'name' => 'STANDARD V',
                'short_name' => 'STD V',
                'description' => NULL,
                'code' => '104',
            ],
            [
                'id' => 18,
                'name' => 'STANDARD VI',
                'short_name' => 'STD VI',
                'description' => NULL,
                'code' => '105',
            ],
            [
                'id' => 19,
                'name' => 'STANDARD VII',
                'short_name' => 'STD VII',
                'description' => NULL,
                'code' => '106',
            ],
            [
                'id' => 20,
                'name' => 'FORM I',
                'short_name' => 'FORM I',
                'description' => NULL,
                'code' => '107',
            ],
            [
                'id' => 21,
                'name' => 'FORM II',
                'short_name' => 'FORM II',
                'description' => NULL,
                'code' => '108',
            ],
            [
                'id' => 22,
                'name' => 'FORM III',
                'short_name' => 'FORM III',
                'description' => NULL,
                'code' => '109',
            ],
            [
                'id' => 23,
                'name' => 'FORM IV',
                'short_name' => 'FORM IV',
                'description' => NULL,
                'code' => '110',
            ],
            [
                'id' => 24,
                'name' => 'FORM V',
                'short_name' => 'FORM V',
                'description' => NULL,
                'code' => '111',
            ],
            [
                'id' => 25,
                'name' => 'FORM VI',
                'short_name' => 'FORM VI',
                'description' => NULL,
                'code' => '112',
            ],
            [
                'id' => 26,
                'name' => 'ADVANCED CERTIFICATE FOR SECONDARY EDUCATION',
                'short_name' => 'ACSEE',
                'description' => 'NON',
                'code' => '012',
            ],
            [
                'id' => 27,
                'name' => 'ADVANCED CERTIFICATA OF SECONDARY EDUCATION ',
                'short_name' => 'ACSS',
                'description' => 'EXAMINATION',
                'code' => '133',
            ],
            [
                'id' => 28,
                'name' => 'CERTIFICATE OF SECONDARY EDUCATION EXAMINATIONS',
                'short_name' => 'CSEE',
                'description' => '',
                'code' => '1',
            ],
            [
                'id' => 29,
                'name' => 'CERTIFICATE OF SECONDARY EDUCATION EXAMINATIONS',
                'short_name' => 'CSEE',
                'description' => '',
                'code' => '1',
            ],
            [
                'id' => 30,
                'name' => 'CERTIFICATE OF SECONDARY EDUCATION EXAMINATION',
                'short_name' => 'CSEE',
                'description' => '',
                'code' => '093',
            ],
            [
                'id' => 31,
                'name' => 'CERTIFICATE OF SECONDARY EDUCATION',
                'short_name' => 'CSEE',
                'description' => '',
                'code' => '022',
            ],
            [
                'id' => 32,
                'name' => 'CSEE',
                'short_name' => 'O LEVEL',
                'description' => 'Certificate ',
                'code' => '1',
            ],
            [
                'id' => 33,
                'name' => 'CERTIFICATE OF SECONDARY EDUCATION',
                'short_name' => 'CSEE',
                'description' => 'ENGLISH LANGUAGE',
                'code' => '022',
            ],
            [
                'id' => 34,
                'name' => 'CERTIFICATE OF SECONDARY EDUCATION EXAMINATION',
                'short_name' => 'CSEE',
                'description' => 'FOR FORM FOUR',
                'code' => '088',
            ],
            [
                'id' => 35,
                'name' => 'CERTIFICATE OF SECONDARY EDUCATION EXAMINATION',
                'short_name' => 'CSEE',
                'description' => 'LITERATURE IN ENGLISH',
                'code' => '024',
            ],
        ];

        $table = $this->table('exam_types');
        $table->insert($data)->save();
    }
}
