<?php

namespace easyAmazonAdv\SponsoredProducts\Common;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * RefreshToken
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 00:25
     */
    public function RefreshToken()
    {
        return $this->doRefreshToken();
    }

    /**
     * listProfiles
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-11 23:30
     */
    public function listProfiles()
    {
        return $this->httpGet('/profiles');
    }

    /**
     * listPortfolios
     * @param array $data
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 00:12
     */
    public function listPortfolios(array $data = [])
    {
        return $this->httpGet('/portfolios');
    }

    /**
     * listPortfoliosEx
     * @param array $data
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 00:13
     */
    public function listPortfoliosEx(array $data = [])
    {
        return $this->httpGet('/portfolios/extended');
    }

    /**
     * getPortfolios 根据组合id返回组合详情
     *
     * @param string $portfolioId 组合id
     *
     * @return mixed
     *      'portfolioId:int'   =>  '组合id'
     *      'name:string'       =>  '组合名称'
     *      'inBudget:bool'     =>  '是否在预算内'
     *      'state:string'      =>  '状态[]'
     *
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @example {"portfolioId":149317040707859,"name":"ARUS-Hub","inBudget":true,"state":"enabled"}
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 00:15
     */
    public function getPortfolio(string $portfolioId)
    {
        return $this->httpGet('/portfolios/' . $portfolioId);
    }

    /**
     * getPortfoliosExtended
     *
     * @param string $portfolioId
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @example {"portfolioId":149317040707859,"name":"ARUS-Hub","inBudget":true,"state":"enabled","creationDate":1545206235644,"lastUpdatedDate":1545206235644,"servingStatus":"PORTFOLIO_STATUS_ENABLED"}
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 00:28
     */
    public function getPortfolioEx(string $portfolioId)
    {
        return $this->httpGet('/portfolios/extended/' . $portfolioId);
    }

    public function listTargetingClauses(array $params = [])
    {
        return $this->httpGet('/sp/targets', $params);
    }
}