<form method="post" action="options.php">
<?php settings_fields( 'jvcf7p-settings-group' ); ?>
<table class="wp-list-table widefat fixed bookmarks">
    <thead>
        <tr>
            <th><strong>Settings</strong></th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            
            <table class="form-table jvcf7p_form">
                <tr valign="top">
                    <td scope="row">Show Error Message Next to the Field ?</td>
                    <td>
                        <select name="jvcf7p_show_label_error" style="width:150px;"  />
                            <option value="errorMsgshow" <?php echo $jvcf7p_show_label_error == 'errorMsgshow'?'selected="selected"':''; ?>>Yes</option>
                            <option value="noErrorMsg" <?php echo $jvcf7p_show_label_error == 'noErrorMsg'?'selected="selected"':''; ?>>No</option>
                        </select>
                        
                    </td>
                    <?php /*
                    <td><em>Demo:</em> <br/>
                        <img src="<?php echo plugins_url('jquery-validation-for-contact-form-7/img/show_error_label.png'); ?>" /></td>
					*/ ?>
                </tr>
                
                <tr valign="top">
                    <td scope="row">Invalid Field Indication</td>
                    <td>
                        <select name="jvcf7p_invalid_field_design" style="width:150px;"  />
                            <option value="theme_0" <?php echo $optionValues['jvcf7p_invalid_field_design'] == 'theme_0'?'selected="selected"':''; ?>>-None-</option>
                            <option value="theme_1" <?php echo $optionValues['jvcf7p_invalid_field_design'] == 'theme_1'?'selected="selected"':''; ?>>Theme 1</option>
                            <option value="theme_2" <?php echo $optionValues['jvcf7p_invalid_field_design'] == 'theme_2'?'selected="selected"':''; ?>>Theme 2</option>
                            <option value="theme_3" <?php echo $optionValues['jvcf7p_invalid_field_design'] == 'theme_3'?'selected="selected"':''; ?>>Theme 3</option>
                            <option value="theme_4" <?php echo $optionValues['jvcf7p_invalid_field_design'] == 'theme_4'?'selected="selected"':''; ?>>Theme 4</option>
                        </select>
                    </td>
                    <?php /*
                    <td>
                    <em>Demo:</em> <br/>
                        <img src="<?php echo plugins_url('jquery-validation-for-contact-form-7/img/highlight_invalid_fields.png'); ?>" />
                    </td>
					*/ ?>
                    
                </tr>
            </table>
            
            <p class="submit">
            <input type="submit" name="submit-jvcf7" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>
            
            
        </td>
        
    </tr>
    </tbody>
</table>
<br/>

<table class="wp-list-table widefat fixed bookmarks">
    <thead>
        <tr>
            <th><strong>Error Message</strong></th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            
           
            <table class="form-table jvcf7p_form">
                <tr valign="top">
                    <td scope="row">Required</td>
                    <td>
                       <input name="jvcf7p_msg_required" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_required'] ; ?>" type="text" />                    </td>                    
                </tr>
                
                <tr valign="top">
                    <td scope="row">Email</td>
                    <td>
                       <input name="jvcf7p_msg_email" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_email'] ; ?>" type="text" />                    </td>                    
                </tr>
                
                <tr valign="top">
                    <td scope="row">Url</td>
                    <td>
                       <input name="jvcf7p_msg_url" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_url'] ; ?>" type="text" />                    </td>                    
                </tr>
                <tr valign="top">
                    <td scope="row">Date</td>
                    <td>
                       <input name="jvcf7p_msg_date" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_date'] ; ?>" type="text" />                    </td>                    
                </tr>
                <tr valign="top">
                    <td scope="row">Date ISO</td>
                    <td>
                       <input name="jvcf7p_msg_dateISO" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_dateISO'] ; ?>" type="text" />                    </td>                    
                </tr>
                <tr valign="top">
                    <td scope="row">Numbers Only</td>
                    <td>
                       <input name="jvcf7p_msg_number" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_number'] ; ?>" type="text" />                    </td>                    
                </tr>
                <tr valign="top">
                    <td scope="row">Digits Only</td>
                    <td>
                       <input name="jvcf7p_msg_digits" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_digits'] ; ?>" type="text" />                    </td>                    
                </tr>
                <tr valign="top">
                    <td scope="row">Credit Card</td>
                    <td>
                       <input name="jvcf7p_msg_creditcard" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_creditcard'] ; ?>" type="text" />                    </td>                    
                </tr>
                <tr valign="top">
                    <td scope="row">US Phone number</td>
                    <td>
                       <input name="jvcf7p_msg_phoneUS" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_phoneUS'] ; ?>" type="text" />                    </td>                    
                </tr>
                <tr valign="top">
                    <td scope="row">Equal To</td>
                    <td>
                       <input name="jvcf7p_msg_equalTo" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_equalTo'] ; ?>" type="text" />                    </td>                    
                </tr>
                <tr valign="top">
                    <td scope="row">File Extension</td>
                    <td>
                       <input name="jvcf7p_msg_extension" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_extension'] ; ?>" type="text" />                    </td>                    
                </tr>
                <tr valign="top">
                    <td scope="row">Require From Group</td>
                    <td>
                       <input name="jvcf7p_msg_require_from_group" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_require_from_group'] ; ?>" type="text" />                    </td>                    
                </tr>
                <tr valign="top">
                    <td scope="row">Max Length</td>
                    <td>
                       <input name="jvcf7p_msg_maxlength" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_maxlength'] ; ?>" type="text" />                    </td>                    
                </tr>
                <tr valign="top">
                    <td scope="row">Min Length</td>
                    <td>
                       <input name="jvcf7p_msg_minlength" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_minlength'] ; ?>" type="text" />                    </td>                    
                </tr>
                <tr valign="top">
                    <td scope="row">Range Length</td>
                    <td>
                       <input name="jvcf7p_msg_rangelength" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_rangelength'] ; ?>" type="text" />                    </td>                    
                </tr>
                <tr valign="top">
                    <td scope="row">Range</td>
                    <td>
                       <input name="jvcf7p_msg_range" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_range'] ; ?>" type="text" />                    </td>                    
                </tr>
                <tr valign="top">
                    <td scope="row">Max</td>
                    <td>
                       <input name="jvcf7p_msg_max" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_max'] ; ?>" type="text" />                    </td>                    
                </tr>
                 <tr valign="top">
                    <td scope="row">Min</td>
                    <td>
                       <input name="jvcf7p_msg_min" style="width:500px;" value="<?php echo $optionValues['jvcf7p_msg_min'] ; ?>" type="text" />                    </td>                    
                </tr>
                
            </table>
            
          <p class="submit">
            <input type="submit" name="submit-jvcf7" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>
            
            
        </td>
        
    </tr>
    </tbody>
</table>
<br/>
</form>