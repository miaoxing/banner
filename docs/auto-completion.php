<?php

/**
 * @property    Miaoxing\Banner\Service\BannerCategoryModel $bannerCategoryModel
 */
class BannerCategoryModelMixin
{
}

/**
 * @property    Miaoxing\Banner\Service\BannerCategoryModel $bannerCategoryModel
 */
class BannerCategoryModelPropMixin
{
}

/**
 * @property    Miaoxing\Banner\Service\BannerModel $bannerModel
 */
class BannerModelMixin
{
}

/**
 * @property    Miaoxing\Banner\Service\BannerModel $bannerModel
 */
class BannerModelPropMixin
{
}

/**
 * @mixin BannerCategoryModelMixin
 * @mixin BannerModelMixin
 */
class AutoCompletion
{
}

/**
 * @return AutoCompletion
 */
function wei()
{
    return new AutoCompletion();
}
