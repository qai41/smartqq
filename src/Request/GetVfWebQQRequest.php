<?php
/**
 * Slince SmartQQ Library
 * @author Tao <taosikai@yeah.net>
 */
namespace Slince\SmartQQ\Request;

use Slince\SmartQQ\UrlStore;

class GetVfWebQQRequest extends AbstractRequest
{
    protected $url = UrlStore::GET_VFWEBQQ;

    protected $referer = UrlStore::GET_VFWEBQQ_REFERER;

    /**
     * 设置ptwebqq参数
     * @param $ptWebQQ
     */
    function setPtWebQQ($ptWebQQ)
    {
        $this->url = str_replace($this->url, '{ptwebqq}', $ptWebQQ);
    }
}