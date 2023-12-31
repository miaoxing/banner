<?php

namespace MiaoxingTest\Banner\Pages\Api\Admin\BannerCategories;

use Miaoxing\Banner\Service\BannerCategoryModel;
use Miaoxing\Plugin\Service\Tester;
use Miaoxing\Plugin\Test\BaseTestCase;

class IdTest extends BaseTestCase
{
    public function testPatch()
    {
        $code = mt_rand(0, mt_getrandmax());
        $category = BannerCategoryModel::save([
            'name' => '测试' . $code,
            'code' => 'test-' . $code,
        ]);

        $code2 = mt_rand(0, mt_getrandmax());
        $dict2 = BannerCategoryModel::save([
            'name' => '测试' . $code2,
            'code' => 'test-' . $code2,
        ]);

        $ret = Tester::patchAdminApi('banner-categories/' . $category->id, [
            'name' => $dict2->name,
        ]);
        $this->assertRetErr($ret, '名称已存在');

        $ret = Tester::patchAdminApi('banner-categories/' . $category->id, [
            'code' => $dict2->code,
        ]);
        $this->assertRetErr($ret, '标识已存在');
    }
}
