<?php

namespace Miaoxing\Banner\Service;

use Miaoxing\Banner\Metadata\BannerTrait;
use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;
use Miaoxing\Plugin\Model\SnowflakeTrait;
use Wei\Model\SoftDeleteTrait;

/**
 * @property BannerCategoryModel $category
 */
class BannerModel extends BaseModel
{
    use BannerTrait;
    use HasAppIdTrait;
    use ModelTrait;
    use ReqQueryTrait;
    use SnowflakeTrait;
    use SoftDeleteTrait;

    protected $columns = [
        'link' => [
            'cast' => 'object',
            'default' => [],
        ],
    ];

    public function category(): BannerCategoryModel
    {
        return $this->belongsTo(BannerCategoryModel::class, 'id', 'categoryId');
    }
}
