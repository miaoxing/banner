<?php

namespace Miaoxing\Banner;

use Miaoxing\Admin\Service\AdminMenu;
use Miaoxing\Plugin\BasePlugin;

class BannerPlugin extends BasePlugin
{
    protected $name = '广告管理';

    protected $description = '';

    public function onAdminMenuGetMenus(AdminMenu $menu)
    {
        $setting = $menu->getChild('setting');
        $banners = $setting->addChild()->setLabel('广告管理')->setUrl('admin/banners');
        $banners->addChild()->setLabel('添加')->setUrl('admin/banners/new');
        $banners->addChild()->setLabel('编辑')->setUrl('admin/banners/[id]/edit');

        $items = $banners->addChild()->setLabel('分类管理')->setUrl('admin/banner-categories');
        $items->addChild()->setLabel('添加')->setUrl('admin/banner-categories/new');
        $items->addChild()->setLabel('编辑')->setUrl('admin/banner-categories/[id]/edit');
    }
}
