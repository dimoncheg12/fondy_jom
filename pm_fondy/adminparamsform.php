<?php
//защита от прямого доступа
defined('_JEXEC') or die();
?>
<div class="col100">
  <fieldset class="adminform">
    <table class="admintable" width="100%">
      <tr>
        <td class="key" width="300">
          <?=ADMIN_CFG_FONDY_MERCHANT_ID?>:
        </td>
        <td>
          <input type="number" name="pm_params[fondy_merchant_id]" class="inputbox" value="<?=$params['fondy_merchant_id']?>">
        </td>
        <td>
          <?=JHtml::tooltip(ADMIN_CFG_FONDY_MERCHANT_ID_DESCRIPTION)?>
        </td>
      </tr>
      <tr>
        <td class="key">
          <?=ADMIN_CFG_FONDY_SECRET_KEY?>:
        </td>
        <td>
          <input type="text" name="pm_params[fondy_secret_key]" class="inputbox" value="<?=$params['fondy_secret_key']?>">
        </td>
        <td>
          <?=JHtml::tooltip(ADMIN_CFG_FONDY_SECRET_KEY_DESCRIPTION)?>
        </td>
      </tr>
      <tr>
        <td class="key">
          <?php echo _JSHOP_TRANSACTION_END;?>:
        </td>
        <td>
          <?php print JHTML::_('select.genericlist', $orders->getAllOrderStatus(), 'pm_params[transaction_end_status]', 'class = "inputbox" size = "1"', 'status_id', 'name', $params['transaction_end_status'] );?>
        </td>
      </tr>
      <tr>
        <td class="key">
          <?php echo _JSHOP_TRANSACTION_FAILED;?>:
        </td>
        <td>
          <?php echo JHTML::_('select.genericlist',$orders->getAllOrderStatus(), 'pm_params[transaction_failed_status]', 'class = "inputbox" size = "1"', 'status_id', 'name', $params['transaction_failed_status']);?>
        </td>
      </tr>
    </table>
  </fieldset>
</div>
<div class="clr"></div>