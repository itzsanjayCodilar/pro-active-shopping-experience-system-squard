<?php

namespace Codilar\ProShopping\Controller\Recommend;

use Magento\Catalog\Api\CategoryListInterface;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\JsonFactory;

/**
 * Get category
 */
class GetCategories implements HttpPostActionInterface
{
    /**
     * @param CategoryListInterface $categoryList
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     * @param JsonFactory $jsonFactory
     * @param FilterBuilder $filterBuilder
     */
    public function __construct(
        private CategoryListInterface $categoryList,
        private SearchCriteriaBuilder $searchCriteriaBuilder,
        private JsonFactory $jsonFactory,
        private FilterBuilder $filterBuilder
    ) {
    }

    /**
     * get Categories method
     *
     * @return ResponseInterface|\Magento\Framework\Controller\Result\Json|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $categories = [];
        //1, 2 is the default and root category
        $filter = $this->filterBuilder->setField("entity_id")
            ->setValue([1,2])
            ->setConditionType("nin")->create();
        $searchCriteria = $this->searchCriteriaBuilder
            ->addFilters([$filter])
            ->create();
        $categoryList = $this->categoryList->getList($searchCriteria);

        if (count($categoryList->getItems()) > 0) {
            foreach ($categoryList->getItems() as $item) {
                $categories [] = [
                    "id" =>$item->getId(),
                    "name" =>$item->getName()
                ];
            }
        }
        $jsonResult = json_encode($categories);
        $result = $this->jsonFactory->create();
        $result->setData(['output' => $jsonResult]);
        return $result;
    }
}
