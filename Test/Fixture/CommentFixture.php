<?php
/**
 * CommentFixture
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

/**
 * CommentFixture
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Blocks\Test\Fixture
 */
class CommentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID |  |  | '),
		'plugin_key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'plugin key | プラグインKey | plugins.key | ', 'charset' => 'utf8'),
		'block_key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'blocks.key | ブロックKey', 'charset' => 'utf8'),
		'content_key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'content key | 各プラグインのコンテンツKey | | ', 'charset' => 'utf8'),
		'comment' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Comment | コメント | | ', 'charset' => 'utf8'),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'created user | 作成者 | users.id | '),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'created datetime | 作成日時 |  | '),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'modified user | 更新者 | users.id | '),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'modified datetime | 更新日時 |  | '),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'plugin_key' => 'test_plugin',
			'block_key' => 'test_block_key',
			'content_key' => 'test_content',
			'comment' => 'comment data',
			'created_user' => 1,
			'created' => '2014-11-19 07:17:01',
			'modified_user' => 1,
			'modified' => '2014-11-19 07:17:01'
		),
	);

/**
 * Initialize the fixture.
 *
 * @return void
 * @throws MissingModelException Whe importing from a model that does not exist.
 * @codeCoverageIgnore
 */
	public function init() {
		$default = array(
			'plugin_key' => 'test_plugin',
			'block_key' => 'test_block_paging_key',
			'content_key' => 'test_contet_paging',
			'comment' => 'Comment %s',
			'created_user' => '1',
			'created' => '2014-10-09 16:07:57',
		);
		for ($i = 0; $i <= 100; $i++) {
			$comments = array_merge(array(), $default);
			$comments['comment'] = sprintf($comments['comment'], $i);
			$this->records[] = $comments;
		}
		parent::init();
	}

}
