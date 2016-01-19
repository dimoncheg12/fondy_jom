<?php
//защита от прямого доступа
defined('_JEXEC') or die();

define ('ADMIN_CFG_FONDY_MERCHANT_ID', 'Merchant ID');
define ('ADMIN_CFG_FONDY_MERCHANT_ID_DESCRIPTION', "Unique id of the store in Fondy system. You can find it in your fondy.eu.");
define ('ADMIN_CFG_FONDY_SECRET_KEY', 'Secret key');
define ('ADMIN_CFG_FONDY_SECRET_KEY_DESCRIPTION', 'Custom character set is used to sign messages are forwarded.');
define ('ADMIN_CFG_FONDY_PAYMODE', 'Payment method');

define('FONDY_UNKNOWN_ERROR', 'An error has occurred during payment. Please contact us to ensure your order has submitted.');
define('FONDY_MERCHANT_DATA_ERROR', 'An error has occurred during payment. Merchant data is incorrect.');
define('FONDY_ORDER_DECLINED', 'Thank you for shopping with us. However, the transaction has been declined.');
define('FONDY_SIGNATURE_ERROR', 'An error has occurred during payment. Signature is not valid.');
define('FONDY_REDIRECT_PENDING_STATUS_ERROR', 'An error during payment.');

define('FONDY_ORDER_APPROVED', 'Fondy payment successful. Fondy ID:');

define ('FONDY_PAY', 'Pay');