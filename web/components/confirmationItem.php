<tr>
  <td class="tdName"><?php echo $value[name] ?></td>
  <td class="tdQuantity"><?php echo $value[quantity] ?></td>
  <td class="tdPrice"><?php echo money_format('$ %.2n' , ($value[quantity] * $value[price])) ?></td>
</tr>
