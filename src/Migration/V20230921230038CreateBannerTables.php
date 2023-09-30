<?php

namespace Miaoxing\Banner\Migration;

use Wei\Migration\BaseMigration;

class V20230921230038CreateBannerTables extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('banner_categories')->tableComment('广告分类')
            ->bigId()
            ->uBigInt('app_id')->comment('应用编号')
            ->string('name')->comment('名称')
            ->string('code')->comment('标识')
            ->bool('is_built_in')->comment('是否内置')
            ->string('remark')->comment('备注')
            ->json('configs')->comment('配置')
            ->timestamps()
            ->userstamps()
            ->softDeletable()
            ->exec();

        $this->schema->table('banners')->tableComment('广告')
            ->bigId()
            ->uBigInt('app_id')->comment('应用编号')
            ->uBigInt('category_id')->comment('分类编号')
            ->string('title')->comment('标题')
            ->string('image')->comment('图片')
            ->string('link')->comment('跳转地址')
            ->timestamp('start_at')->comment('开始时间')
            ->timestamp('end_at')->comment('结束时间')
            ->smallInt('sort')->defaults(50)->comment('顺序，从大到小排列')
            ->bool('is_enabled')->defaults(true)->comment('是否启用')
            ->string('remark')->comment('备注')
            ->json('configs')->comment('配置')
            ->timestamps()
            ->userstamps()
            ->softDeletable()
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->dropIfExists([
            'banner_categories',
            'banners',
        ]);
    }
}
