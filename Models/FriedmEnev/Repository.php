<?php

namespace Shopware\CustomModels\FriedmEnev;

use Shopware\Components\Model\ModelRepository;

class Repository extends ModelRepository
{

    /**
     * find data by articleID from s_plugin_FriedmEnev
     *
     * @param int $articleId
     *
     * @return Shopware\CustomModels\FriedmEnev\Attribute
     */
    public function getDataByArticleID($articleId)
    {
        $result = $this->findOneBy([
            'articleId' => (int) $articleId
        ]);

        return $result;
    }
}
