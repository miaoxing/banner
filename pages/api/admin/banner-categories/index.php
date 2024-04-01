<?php

use Miaoxing\Plugin\BasePage;
use Miaoxing\Services\Page\CollGetTrait;
use Miaoxing\Services\Page\PostToPatchTrait;

return new class () extends BasePage {
    use CollGetTrait;
    use PostToPatchTrait;

    public function get()
    {
        sleep(3);
        return \Miaoxing\Services\Service\IndexAction::exec($this);
    }
};
