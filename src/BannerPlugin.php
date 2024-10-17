<?php

namespace Miaoxing\Banner;

use Miaoxing\Admin\Service\AdminMenu;
use Miaoxing\App\Service\PermissionMap;
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
        $banners->addChild()->setLabel('删除')->setUrl('admin/banners/[id]/delete');

        $categories = $banners->addChild()->setLabel('分类管理')->setUrl('admin/banner-categories');
        $categories->addChild()->setLabel('添加')->setUrl('admin/banner-categories/new');
        $categories->addChild()->setLabel('编辑')->setUrl('admin/banner-categories/[id]/edit');
        $categories->addChild()->setLabel('删除')->setUrl('admin/banner-categories/[id]/delete');
    }

    public function onPermissionGetMap(PermissionMap $map)
    {
        $map->prefix('admin/banners', static function (PermissionMap $map) {
            $map->addList('', [
                'GET api/admin/banner-categories',
            ]);
            $map->addNew('', [
                'GET api/admin/banner-categories',
            ]);
            $map->addEdit('', [
                'GET api/admin/banner-categories',
            ]);
            $map->addDelete();
        });

        $map->prefix('admin/banner-categories', static function (PermissionMap $map) {
            $map->addList();
            $map->addNew();
            $map->addEdit();
            $map->addDelete();
        });
    }
}
