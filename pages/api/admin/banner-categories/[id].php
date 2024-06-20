<?php

use Miaoxing\Banner\Service\BannerCategoryModel;
use Miaoxing\Plugin\BasePage;
use Miaoxing\Services\Page\ItemTrait;
use Miaoxing\Services\Service\UpdateAction;
use Wei\V;

return new class () extends BasePage {
    use ItemTrait;

    public function patch()
    {
        return UpdateAction::new()
            ->validate(static function (BannerCategoryModel $banner, $req) {
                $v = V::defaultOptional()->defaultNotEmpty();
                $v->setModel($banner);
                $v->modelColumn('name', '名称')->requiredIfNew()->notModelDup();
                $v->modelColumn('code', '标识')->notModelDup();
                return $v->check($req);
            })
            ->exec($this);
    }
};
