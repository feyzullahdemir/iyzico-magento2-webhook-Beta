<?php

namespace Iyzico\Iyzipay\Api;

/**
 * Interface WebhookInterface
 *
 * @package Iyzico\Iyzipay\Api
 */
interface WebhookInterface
{
  /**
   * Add one number.
   *
   * @param string $num1
   * @return string
   */
  public function getResponse($webhookUrlKey);

}
