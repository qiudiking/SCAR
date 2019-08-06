<?php


use Phinx\Migration\AbstractMigration;

class WxUser extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
		$user = $this->table('wx_user',['id'=>false,'primary_key'=>'wx_uid']);
		$user->addColumn('wx_uid','string',['limit'=>20,'default'=>'','comment'=>'用户id']);
		$user->addColumn('status','boolean',['default'=>0,'comment'=>'状态']);
		$user->addColumn('last_time','integer',['default'=>0,'comment'=>'最后登陆时间']);
		$user->addColumn('nichname','string',['limit'=>20,'comment'=>'用户昵称','default'=>'']);
		$user->addColumn('openid','string',['limit'=>30,'comment'=>'微信公众号用户唯一openid','default'=>'']);
		$user->addColumn('head_image','string',['comment'=>'用户头像','default'=>'']);
		$user->addColumn('sex','boolean',['comment'=>'用户的性别，值为1时是男性，值为2时是女性，值为0时是未知','default'=>0]);
		$user->addColumn('province','string',['comment'=>'用户个人资料填写的省份','limit'=>'','default'=>'']);
		$user->addColumn('city','string',['comment'=>'普通用户个人资料填写的城市','limit'=>20,'default'=>'']);
		$user->addColumn('country','string',['comment'=>'国家，如中国为CN','limit'=>20,'default'=>'']);
		$user->addColumn('privilege','text',['comment'=>'用户特权信息，json 数组，如微信沃卡用户为（chinaunicom）','null'=>true]);
		$user->addColumn('unionid','string',['comment'=>'只有在用户将公众号绑定到微信开放平台帐号后，才会出现该字段','limit'=>30,'default'=>'']);
		$user->addColumn('subscribe','boolean',['comment'=>'是否关注公众号','default'=>0]);
		$user->addColumn('type','boolean',['comment'=>'用户类型','default'=>0]);
		$user->save();
    }
}
