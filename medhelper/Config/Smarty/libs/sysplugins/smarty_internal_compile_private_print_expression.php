<?php
/**
 * Smarty Internal Plugin Compile Print Expression
 * 
 * Compiles any tag which will output an expression or variable
 * 
 * @package Smarty
 * @subpackage Compiler
 * @author Uwe Tews 
 */
/**
 * Smarty Internal Plugin Compile Print Expression Class
 */
class Smarty_Internal_Compile_Private_Print_Expression extends Smarty_Internal_CompileBase {
    /**
     * Compiles code for gererting output from any expression
     * 
     * @param array $args array with attributes from parser
     * @param object $compiler compiler object
     * @return string compiled code
     */
    public function compile($args, $compiler)
    {
        $this->compiler = $compiler;
        $this->required_attributes = array('value');
        $this->optional_attributes = array('assign', 'nocache', 'filter', 'nofilter'); 
        // check and get attributes
        $_attr = $this->_get_attributes($args);

        if (isset($_attr['nocache'])) {
            if ($_attr['nocache'] == 'true') {
                $this->compiler->tag_nocache = true;
            } 
        } 

        if (!isset($_attr['filter'])) {
            $_attr['filter'] = 'null';
        } 
        if (isset($_attr['nofilter'])) {
            if ($_attr['nofilter'] == 'true') {
                $_attr['filter'] = 'false';
            } 
        } 

        if (isset($_attr['assign'])) {
            // assign output to variable
            $output = '<?php $_smarty_tpl->assign(' . $_attr['assign'] . ',' . $_attr['value'] . ');?>';
        } else {
            // display value
            $this->compiler->has_output = true;
            if (isset($this->compiler->smarty->registered_filters['variable'])) {
                $output = 'Smarty_Internal_Filter_Handler::runFilter(\'variable\', ' . $_attr['value'] . ',$_smarty_tpl->smarty, $_smarty_tpl, ' . $_attr['filter'] . ')';
            } else {
                $output = $_attr['value'];
            } 
            if (!isset($_attr['nofilter']) && isset($this->compiler->smarty->default_modifiers)) {
                foreach ($this->compiler->smarty->default_modifiers as $default_modifier) {
                    $mod_array = explode (':', $default_modifier);
                    $modifier = $mod_array[0];
                    $mod_array[0] = $output;
                    $output = $this->compiler->compileTag('private_modifier', array('modifier' => $modifier, 'params' => implode(", ", $mod_array)));
                } 
            } 
            $output = '<?php echo ' . $output . ';?>';
        } 
        return $output;
    } 
} 

?>