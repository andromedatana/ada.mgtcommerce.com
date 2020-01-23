<?php
namespace Mgt\Varnish\Controller\Api\PurgeUrl;

/**
 * Interceptor class for @see \Mgt\Varnish\Controller\Api\PurgeUrl
 */
class Interceptor extends \Mgt\Varnish\Controller\Api\PurgeUrl implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\CacheInvalidate\Model\PurgeCache $cachePurger, \Mgt\Varnish\Model\Cache\Config $config)
    {
        $this->___init();
        parent::__construct($context, $cachePurger, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}