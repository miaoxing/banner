<?php

namespace Miaoxing\Banner\Service;

use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;
use Miaoxing\Plugin\Model\SnowflakeTrait;
use Wei\Model\SoftDeleteTrait;

/**
 * @property BannerCategoryModel $category
 * @property string|null $id
 * @property string $appId 应用编号
 * @property string $categoryId 分类编号
 * @property string $title 标题
 * @property string $image 图片
 * @property object $link 跳转地址
 * @property string|null $startAt 开始时间
 * @property string|null $endAt 结束时间
 * @property int $sort 顺序，从大到小排列
 * @property bool $isEnabled 是否启用
 * @property string $remark 备注
 * @property array $configs 配置
 * @property string|null $createdAt
 * @property string|null $updatedAt
 * @property string $createdBy
 * @property string $updatedBy
 * @property string|null $deletedAt
 * @property string $deletedBy
 */
class BannerModel extends BaseModel
{
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
