<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class Form_builder {

    private $Veqh2ob3ab0j = array(
        'default_input_type' => 'form_input',
        'default_input_container_class' => 'form-group',
        'bootstrap_required_input_class' => 'form-control',
        'default_dropdown_class' => 'valid',
        'default_control_label_class' => 'col-sm-2 control-label',
        'default_no_label_class' => 'col-sm-offset-2',
        'default_form_control_class' => 'col-sm-9',
        'default_form_class' => 'form-horizontal col-sm-12',
        'default_button_classes' => 'btn btn-primary',
        'default_date_post_addon' => '', 
        'default_date_format' => 'Y-m-d',
        'default_date_today_if_not_set' => FALSE,
        'default_datepicker_class' => '', 
        'empty_value_html' => '<div class="form-control" style="border:none;"></div>',
        'use_testing_value' => true
    );
	protected $Vzrhlaxya4x4;
    private $Vezbljukixwb; 
    private $Vpsyqybgrjsr; 
    private $Vpt34ud1ezk1; 
    private $Vpt34ud1ezk1_help;
    private $Vb4wopjuebhp = ''; 

    
    private $Vymdz0v431s5 = array(
        'exists' => false, 
        'pre' => array(), 
        'pre_html' => '',
        'post' => array(), 
        'post_html' => ''
    );

    function __construct() {
    	
	    $this->_ci =&get_instance();
        if (!empty($Veqh2ob3ab0j)) {
            $this->init($Veqh2ob3ab0j);
        } else {
            $this->func = $this->config['default_input_type'];
        }
    }

    function init($Veqh2ob3ab0j = array()) {
        if (!empty($Veqh2ob3ab0j)) {
            foreach ($Veqh2ob3ab0j as $Vo330cieh5w0 => $Vi1gaflvyuvn) {
                $this->config[$Vo330cieh5w0] = $Vi1gaflvyuvn;
            }
            $this->func = $this->config['default_input_type'];
        }
    }

    function get_config() {
        return $this->config;
    }

    function open_form($V04epexbpn25) {
        
        $Vev0dbc0otnw = '';
        if (isset($V04epexbpn25['action'])) {
            $Vev0dbc0otnw = $V04epexbpn25['action'];
            unset($V04epexbpn25['action']);
        } else {
            show_error('No action set for form. Please include array(\'action\' => \'\') in the open_form(...) function call');
        }

        $V2ekmfbjpi31 = $this->config['default_form_class'];
        if (isset($V04epexbpn25['class'])) {
            $V2ekmfbjpi31 = $V04epexbpn25['class'];
        }
        $V04epexbpn25['class'] = $V2ekmfbjpi31;
        $V04epexbpn25['autocomplete'] = 'on';

        return $this->_build_form_open($Vev0dbc0otnw, $V04epexbpn25);
    }

    function close_form() {
        return form_close();
    }

    
    function auto_db_to_options($Vptez3fkx2ac, $V12q22rzf2h0 = array()) {
        $V04epexbpn25 = array();

        foreach ($Vptez3fkx2ac as $Vo330cieh5w0 => $Vi1gaflvyuvn) {
            $Vpt34ud1ezk1 = array(
                'id' => $Vo330cieh5w0,
                'value' => $Vi1gaflvyuvn
            );

            
            if (is_json($Vi1gaflvyuvn)) {
                $Vpt34ud1ezk1['type'] = 'json';
            } else {
                
                if (strpos(strtolower($Vo330cieh5w0), 'date') !== FALSE) {
                    $Vo330cieh5w0 = 'date';
                }
                switch ($Vo330cieh5w0) {
                    case 'id':
                        $Vpt34ud1ezk1['readonly'] = 'readonly';
                        break;
                    case 'date':
                        $Vpt34ud1ezk1['type'] = 'date';
                        break;
                    case 'modified':
                    case 'created':
                        $Vpt34ud1ezk1['type'] = 'date';
                        $Vpt34ud1ezk1['readonly'] = 'readonly';
                        break;
                    case 'active':
                        $Vpt34ud1ezk1['type'] = 'dropdown';
                        $Vpt34ud1ezk1['options'] = array(
                            '1' => 'Active',
                            '0' => 'De-Active'
                        );
                        $Vpt34ud1ezk1['readonly'] = 'readonly';
                        break;
                    case 'log':
                        $Vpt34ud1ezk1['type'] = 'json';
                        break;
                }
            }

            
            if (isset($V12q22rzf2h0) && isset($V12q22rzf2h0[$Vo330cieh5w0])) {
                if (is_array($V12q22rzf2h0[$Vo330cieh5w0])) {
                    $Vpt34ud1ezk1 = array_merge($Vpt34ud1ezk1, $V12q22rzf2h0[$Vo330cieh5w0]);
                }
            }

            if (!(isset($V12q22rzf2h0) && isset($V12q22rzf2h0[$Vo330cieh5w0]) && !is_array($V12q22rzf2h0[$Vo330cieh5w0]) && $V12q22rzf2h0[$Vo330cieh5w0] == 'unset')) {
                $V04epexbpn25[] = $Vpt34ud1ezk1;
            }
        }

        return $V04epexbpn25;
    }

    
    function change_pre_built(&$Vto5n42b14pw, $Vgvh45dlasvt, $Vi1gaflvyuvnals_ary) {
        foreach ($Vto5n42b14pw as $Vo330cieh5w0 => $Vi1gaflvyuvn) {
            if ($Vi1gaflvyuvn['id'] == $Vgvh45dlasvt) {
                $Vto5n42b14pw[$Vo330cieh5w0] = array_merge($Vto5n42b14pw[$Vo330cieh5w0], $Vi1gaflvyuvnals_ary);
                break;
            }
        }
        return;
    }

    
    function build_form_horizontal($V04epexbpn25, $Vpsyqybgrjsr = array()) {
        $this->_reset_builder();
        $this->data_source = (array) $Vpsyqybgrjsr;

        foreach ($V04epexbpn25 as $Vpt34ud1ezk1) {
            $this->elm_options = $Vpt34ud1ezk1;

            if (is_array($this->elm_options)) {
                $this->_prep_options();
                switch ($this->func) {
                    case 'form_hidden':
                        $this->print_string .= $this->_build_input();
                        break;
                    case 'form_checkbox':
                    case 'form_radio':
                        
                        $Vqtj0nlbseuu = ((count($this->elm_options['options']) === 1) && array_key_exists('label', $this->elm_options['options'][0]) && ($this->elm_options['options'][0]['label'] === ''));

                        $Vara3inysyqd = $this->config['default_form_control_class'];
                        if (!array_key_exists('label', $this->elm_options) || ($this->elm_options['label'] === 'none'))
                        {
                            $this->config['default_form_control_class'] .= ' '.$this->config['default_no_label_class'];
                        }

                        $this->print_string .= $this->_pre_elm();
                        $this->print_string .= $this->_label($Vqtj0nlbseuu);
                        $this->print_string .= $this->_pre_input();

                        $this->config['default_form_control_class'] = $Vara3inysyqd;

                        $Vrcwabvwwvsh = $this->elm_options;

                        foreach ($Vrcwabvwwvsh['options'] as $Vjlgfngkcwkl) {
                            $this->elm_options = $Vjlgfngkcwkl;
                            $this->elm_options['name'] = $Vrcwabvwwvsh['name'];
                            $this->elm_options['id'] = $Vrcwabvwwvsh['id'];

                            
                            array_key_exists('label', $this->elm_options) || $this->elm_options['label'] = $this->elm_options['value'];

                            $Vohn0plggob4 = substr($this->func, 5).'-inline';
                            array_key_exists('disabled', $this->elm_options) && $Vohn0plggob4 .= ' disabled';

                            $this->print_string .= '<label class="'.$Vohn0plggob4.'">';
                            $this->print_string .= $this->_build_input(FALSE);
                            $this->print_string .= ($this->elm_options['label'] === '') ? '&nbsp;' : $this->elm_options['label'].'</label>'; 
                        }

                        $this->print_string .= $this->_post_input();
                        $this->print_string .= $this->_post_elm();

                        $this->elm_options = $Vrcwabvwwvsh;
                        break;
                    default:
                        $this->print_string .= $this->_pre_elm();
                        $this->print_string .= $this->_label();
                        $this->print_string .= $this->_build_input();
                        $this->print_string .= $this->_post_elm();
                        break;
                }
            }
        }
        return $this->squish_HTML($this->print_string);
    }

    
    function build_display($V04epexbpn25, $Vpsyqybgrjsr = array()) {
        $this->_reset_builder();
        $this->data_source = (array) $Vpsyqybgrjsr;

        
        $this->config['default_control_label_class'] .= ' bold';

        $this->print_string .= $this->_build_form_open('', array('class' => $this->config['default_form_class']));

        foreach ($V04epexbpn25 as $Vpt34ud1ezk1) {
            $this->elm_options = $Vpt34ud1ezk1;

            if (is_array($this->elm_options)) {
                $this->_prep_options();
                if ($this->func != 'form_json') {
                    $this->func = 'form_label'; 
                }
                $this->print_string .= $this->_pre_elm();
                $this->print_string .= $this->_label();
                $this->print_string .= $this->_build_input();
                $this->print_string .= $this->_post_elm();
            }
        }
        $this->print_string .= $this->close_form();
        return $this->squish_HTML($this->print_string);
    }

    private function _prep_options() {
        foreach ($this->elm_options as &$V5nfd4ebd1jg) {
            
            if (is_object($V5nfd4ebd1jg)) {
                $V5nfd4ebd1jg = (array) $V5nfd4ebd1jg;
            }
        }
        $this->func = $this->config['default_input_type'];
        
        if (isset($this->elm_options['type']) && !empty($this->elm_options['type'])) {
            $this->func = 'form_' . $this->elm_options['type'];
            unset($this->elm_options['type']);
        } else {
            $this->func = $this->config['default_input_type'];
        }





        
        $V2ekmfbjpi31 = $this->config['bootstrap_required_input_class'];
        if (isset($this->elm_options['class'])) {
            $V2ekmfbjpi31 .= ' ' . trim(str_replace($this->config['bootstrap_required_input_class'], '', $this->elm_options['class']));
        }
        $this->elm_options['class'] = $V2ekmfbjpi31;

        
        if (!isset($this->elm_options['name'])) {
            
            if (isset($this->elm_options['id'])) {
                $this->elm_options['name'] = $this->elm_options['id'];
            } else {
                $this->elm_options['name'] = '';
            }
        }

        
        $Vga2i4rmwney = '';
        if (isset($this->elm_options['name']) && isset($this->data_source[$this->elm_options['name']]) && empty($this->elm_options['value'])) {
            $Vga2i4rmwney = $this->data_source[$this->elm_options['name']];
        } elseif (isset($this->elm_options['value'])) {
            $Vga2i4rmwney = $this->elm_options['value'];
        }

        if (isset($this->elm_options['testing_value']) && $this->config['use_testing_value']) {
            $Vga2i4rmwney = $this->elm_options['testing_value'];
        }

        $this->elm_options['value'] = $this->adv_set_value($this->elm_options['name'], $Vga2i4rmwney);


        

        
        $this->input_addons = array(
            'exists' => false,
            'pre' => array(),
            'pre_html' => '',
            'post' => array(),
            'post_html' => ''
        );

        
        if (isset($this->elm_options['input_addon'])) {
            $this->elm_options['input_addons'] = $this->elm_options['input_addon'];
            unset($this->elm_options['input_addon']);
        }

        
        if (isset($this->elm_options['input_addons']) && !empty($this->elm_options['input_addons'])) {
            
            $this->input_addons['exists'] = true;

            
            if (isset($this->elm_options['input_addons']['pre']) && !empty($this->elm_options['input_addons']['pre'])) {
                $Vw4buqgajucl = $this->elm_options['input_addons']['pre'];
                if (!is_array($Vw4buqgajucl)) { 
                    $Vw4buqgajucl = array($Vw4buqgajucl);
                }
                $this->input_addons['pre'] = $Vw4buqgajucl;
            }

            
            if (isset($this->elm_options['input_addons']['post']) && !empty($this->elm_options['input_addons']['post'])) {
                $V51ctvazrkye = $this->elm_options['input_addons']['post'];
                if (!is_array($V51ctvazrkye)) { 
                    $V51ctvazrkye = array($V51ctvazrkye);
                }
                $this->input_addons['post'] = $V51ctvazrkye;
            }

            
            if (isset($this->elm_options['input_addons']['pre_html']) && !empty($this->elm_options['input_addons']['pre_html'])) {
                $this->input_addons['pre_html'] = $this->elm_options['input_addons']['pre_html'];
            }
            if (isset($this->elm_options['input_addons']['post_html']) && !empty($this->elm_options['input_addons']['post_html'])) {
                $this->input_addons['post_html'] = $this->elm_options['input_addons']['post_html'];
            }


            
            unset($this->elm_options['input_addons']);
        }

        
        $this->elm_options_help = (isset($this->elm_options['help']) && !empty($this->elm_options['help'])) ? $this->elm_options['help'] : '';
        unset($this->elm_options['help']);
        return;
    }

    
    function adv_set_value($V0vmlf5nqdfm = '', $Vuasdivvnsc0 = '') {
        if (FALSE === ($Vboywlaaal3a = & _get_validation_object())) {
            if (isset($_POST[$V0vmlf5nqdfm])) {
                return html_escape($_POST[$V0vmlf5nqdfm]);
            } elseif (isset($_GET[$V0vmlf5nqdfm])) {
                return html_escape($_GET[$V0vmlf5nqdfm]);
            }
            return $Vuasdivvnsc0;
        }

        return html_escape($Vboywlaaal3a->set_value($V0vmlf5nqdfm, $Vuasdivvnsc0));
    }

    function squish_HTML($Vriytipuxfn0) {
        $V2toieredn44 = '%# Collapse whitespace everywhere but in blacklisted elements.
        (?>             # Match all whitespans other than single space.
            [^\S ]\s*     # Either one [\t\r\n\f\v] and zero or more ws,
        | \s{2,}        # or two or more consecutive-any-whitespace.
        ) # Note: The remaining regex consumes no text at all...
        (?=             # Ensure we are not in a blacklist tag.
            [^<]*+        # Either zero or more non-"<" {normal*}
            (?:           # Begin {(special normal*)*} construct
                <           # or a < starting a non-blacklist tag.
                (?!/?(?:textarea|pre|script)\b)
                [^<]*+      # more non-"<" {normal*}
            )*+           # Finish "unrolling-the-loop"
            (?:           # Begin alternation group.
                <           # Either a blacklist start tag.
                (?>textarea|pre|script)\b
            | \z          # or end of file.
            )             # End alternation group.
        ) # If we made it here, we are not in a blacklist tag.
        %Six';
        $Vt0tdbjticii = preg_replace($V2toieredn44, " ", $Vriytipuxfn0);
        if ($Vt0tdbjticii === null) {
            return $Vriytipuxfn0;
        }
        return $Vt0tdbjticii;
    }

    

    private function _build_input($Vp0h2ucrwwp4 = true) {
        $V3ys14dllcp0 = '';
        
        if ($this->func == 'form_combine') {
            if (!isset($this->elm_options['elements'])) {
                dump($this->elm_options);
                show_error('Tried to create `form_combine` with no elements. (id="' . $this->elm_options['name'] . '")');
            }

            $Vpt34ud1ezk1_backup = $this->elm_options; 

            $Vzzr4kftmul4 = 0;
            foreach ($Vpt34ud1ezk1_backup['elements'] as $Vtfbyknkk2jq) {
                $this->elm_options = $Vtfbyknkk2jq; 
                $this->_prep_options(); 
                if ($Vzzr4kftmul4 > 0 && !empty($Vpt34ud1ezk1_backup['combine_divider'])) {
                    $V3ys14dllcp0 .= $Vpt34ud1ezk1_backup['combine_divider'];
                }
                $V3ys14dllcp0 .= $this->_build_input(false);
                $Vzzr4kftmul4++;
            }

            $this->elm_options = $Vpt34ud1ezk1_backup; 
            $this->_prep_options(); 
        } else {
            
            switch ($this->func) {
                
                case 'form_json':
                    $V3ys14dllcp0 = $this->_recursive_build_json((array) json_decode($this->elm_options['value']));
                    break;
                case 'form_button':
                case 'form_anchor':
                case 'form_a':
                    $V2ekmfbjpi31 = str_replace($this->config['default_button_classes'], '', $this->elm_options['class']);
                    $V2ekmfbjpi31 = str_replace($this->config['bootstrap_required_input_class'], '', $V2ekmfbjpi31); 
                    
                    if (strpos($V2ekmfbjpi31, $this->config['default_button_classes']) === FALSE) {
                        $V2ekmfbjpi31 .= ' ' . $this->config['default_button_classes'];
                    }
                    $this->elm_options['class'] = trim($V2ekmfbjpi31);

                    $Vi1gaflvyuvnalue = $this->elm_options['label'];
                    unset($this->elm_options['label']);

                    $V3ys14dllcp0 = anchor('', $Vi1gaflvyuvnalue, $this->elm_options);
                    break;
                case 'form_label':
                    $V3ys14dllcp0 = form_label($this->_make_label($this->elm_options['value']), '', array(
                        'class' => 'control-label text-left'
                    ));
                    break;
                case 'form_date':
                    $this->elm_options['type'] = 'date'; 
                    if ($this->config['default_date_post_addon'] != '') {
                        $this->input_addons['exists'] = TRUE;
                        $this->input_addons['post_html'] = $this->config['default_date_post_addon'];
                    }

                    try {
                        if (empty($this->elm_options['value'])) {
                            if ($this->config['default_date_today_if_not_set']) {
                                $Vb05x2kzvgfu = new DateTime('today');
                                $this->elm_options['value'] = $Vb05x2kzvgfu->format($this->config['default_date_format']);
                            }
                        } else {
                            $Vb05x2kzvgfu = new DateTime($this->elm_options['value']);
                            $this->elm_options['value'] = $Vb05x2kzvgfu->format($this->config['default_date_format']);
                        }
                    } catch (Exception $V5ykopbsc35i) {
                        log_message('error', $V5ykopbsc35i->getMessage().' at "'.$V5ykopbsc35i->getFile().'" on line '.$V5ykopbsc35i->getLine());

                        if ($this->config['default_date_today_if_not_set']) {
                            $Vb05x2kzvgfu = new DateTime('today');
                            $this->elm_options['value'] = $Vb05x2kzvgfu->format($this->config['default_date_format']);
                        }
                    }

                    $V3ys14dllcp0 = form_input($this->elm_options);
                    break;
                case 'form_email':
                    $this->elm_options['type'] = 'email';
                    $V3ys14dllcp0 = form_input($this->elm_options);
                    break;
                case 'form_tel':
                    $this->elm_options['type'] = 'tel';
                    $V3ys14dllcp0 = form_input($this->elm_options);
                    break;
                case 'form_number':
                    $this->elm_options['type'] = 'number';
                    $V3ys14dllcp0 = form_input($this->elm_options);
                    break;
                case 'form_input':
                    $V3ys14dllcp0 = form_input($this->elm_options);
                    break;
                case 'form_hidden':
                    return form_hidden($this->elm_options['id'], $this->elm_options['value']);
                case 'form_submit':
                    $Vmtncqebcynw = $this->elm_options['id'];
                    $Vb1o2bgy5rcx = $this->_make_label((isset($this->elm_options['label']) ? $this->elm_options['label'] : $this->elm_options['id']));

                    unset($this->elm_options['id']);
                    unset($this->elm_options['label']);

                    $V2ekmfbjpi31 = str_replace($this->config['default_button_classes'], '', $this->elm_options['class']);
                    $V2ekmfbjpi31 = str_replace($this->config['bootstrap_required_input_class'], '', $V2ekmfbjpi31); 
                    
                    if (strpos($V2ekmfbjpi31, $this->config['default_button_classes']) === FALSE) {
                        $V2ekmfbjpi31 .= ' ' . $this->config['default_button_classes'];
                    }
                    $this->elm_options['class'] = trim($V2ekmfbjpi31);

                    $V3ys14dllcp0 = form_submit($Vmtncqebcynw, $Vb1o2bgy5rcx, $this->_create_extra_string($this->elm_options));
                    break;
                case 'form_option':
                case 'form_dropdown':
                    
                    if (isset($this->elm_options['options']) && !empty($this->elm_options['options'])) {
                        $Vmtncqebcynw = $this->elm_options['name'];
                        $V04epexbpn25 = $this->elm_options['options'];
                        $Vi1gaflvyuvnalue = $this->elm_options['value'];

                        unset($this->elm_options['name']);
                        unset($this->elm_options['value']);
                        unset($this->elm_options['options']);

                        if (!empty($this->config['default_dropdown_class'])) {
                            $V2ekmfbjpi31 = str_replace($this->config['bootstrap_required_input_class'], '', $this->elm_options['class']);
                            
                            if (strpos($V2ekmfbjpi31, $this->config['default_dropdown_class']) === FALSE) {
                                $V2ekmfbjpi31 .= ' ' . $this->config['default_dropdown_class'];
                            }

                            if (strpos($V2ekmfbjpi31, $this->config['bootstrap_required_input_class']) === FALSE) {
                                $V2ekmfbjpi31 .= ' ' . $this->config['bootstrap_required_input_class'];
                            }
                            $this->elm_options['class'] = trim($V2ekmfbjpi31);
                        }

                        $V3ys14dllcp0 = form_dropdown($Vmtncqebcynw, $V04epexbpn25, $Vi1gaflvyuvnalue, $this->_create_extra_string());
                    } else {
                        dump($this->elm_options);
                        show_error('Tried to create `form_dropdown` with no options. (id="' . $this->elm_options['name'] . '")');
                    }
                    break;
                case 'form_html':
                    if (!isset($this->elm_options['html'])) {
                        dump($this->elm_options);
                        show_error('Tried to create `form_html` with no html. (id="' . $this->elm_options['id'] . '")');
                    }
                    $V3ys14dllcp0 = $this->elm_options['html'];
                    break;
                case 'form_textarea':
                    $this->elm_options['value'] = html_entity_decode($this->elm_options['value']);
                    $V3ys14dllcp0 = form_textarea($this->elm_options);
                    break;
                case 'form_file':
                    $V3ys14dllcp0 = form_upload($this->elm_options);
                    break;
                case 'form_checkbox':
                    $V3ys14dllcp0 = form_checkbox($this->elm_options);
                    break;
                case 'form_radio':
                    $V3ys14dllcp0 = form_radio($this->elm_options);
                    break;
                default:
                    if (function_exists($this->func)) {
                        $V3ys14dllcp0 = call_user_func($this->func, $this->elm_options);
                    } else {
                        show_error("Could not find function to build form element: '{$this->func}'");
                    }
                    break;
            }
        }
        $V2toieredn44t_string = '';
        $V2toieredn44t_string .= ($Vp0h2ucrwwp4) ? $this->_pre_input() : '';
        $V2toieredn44t_string .= $this->_build_input_addons_pre();
        $V2toieredn44t_string .= (empty($V3ys14dllcp0)) ? $this->config['empty_value_html'] : $V3ys14dllcp0;
        $V2toieredn44t_string .= $this->_build_input_addons_post();
        $V2toieredn44t_string .= ($Vp0h2ucrwwp4) ? $this->_build_help_block() : '';
        $V2toieredn44t_string .= ($Vp0h2ucrwwp4) ? $this->_post_input() : '';

        return $V2toieredn44t_string;
    }

    private function _build_input_addons_pre() {
        $V2toieredn44t_string = '';
        if ($this->input_addons['exists']) {
            if (!empty($this->input_addons['pre_html'])) {
                $V2toieredn44t_string = $this->input_addons['pre_html'];
            } else {
                $V2toieredn44t_string .= '<div class="input-group">';
                foreach ($this->input_addons['pre'] as $Vw4buqgajucl_addon) {
                    $V2toieredn44t_string .= '<span class="input-group-addon">' . $Vw4buqgajucl_addon . '</span>';
                }
            }
        }
        return $V2toieredn44t_string;
    }

    private function _build_input_addons_post() {
        $V2toieredn44t_string = '';
        if ($this->input_addons['exists']) {
            if (!empty($this->input_addons['post_html'])) {
                $V2toieredn44t_string = $this->input_addons['post_html'];
            } else {
                foreach ($this->input_addons['post'] as $V51ctvazrkye_addon) {
                    $V2toieredn44t_string .= '<span class="input-group-addon">' . $V51ctvazrkye_addon . '</span>';
                }
            }
            $V2toieredn44t_string .= '</div>';
        }
        return $V2toieredn44t_string;
    }

    private function _create_extra_string() {
        $V5ykopbsc35ixtra = '';
        foreach ($this->elm_options as $Vo330cieh5w0 => $Vi1gaflvyuvn) {
            $V5ykopbsc35ixtra .= " {$Vo330cieh5w0}=\"{$Vi1gaflvyuvn}\"";
        }
        return trim($V5ykopbsc35ixtra);
    }

    private function _build_form_open($Vev0dbc0otnw, $V2lqebftqhig) {
        return form_open_multipart($Vev0dbc0otnw, $V2lqebftqhig);
    }

    private function _pre_elm() {
        return '<div class="' . $this->config['default_input_container_class'] . '">';
    }

    private function _post_elm() {
        return '</div>';
    }

    private function _pre_input() {
        if (($this->func === 'form_date') && ($this->config['default_datepicker_class'] !== '')) {
            return '<div class="date '.$this->config['default_datepicker_class'].' ' . $this->config['default_form_control_class'] . '" data-date="' . $this->elm_options['value'] . '" data-date-format="'.preg_replace(array('/Y/', '/m/', '/d/'), array('yyyy', 'mm', 'dd'), $this->config['default_date_format']).'" data-date-viewmode="years">';
        }
        return '<div class="' . $this->config['default_form_control_class'] . '">';
    }

    private function _build_help_block() {
        if (!empty($this->elm_options_help)) {
            return '<span class="help-block">' . $this->elm_options_help . '</span>';
        }
        return '';
    }

    private function _post_input() {
        return '</div>';
    }

    
    private function _label($Vqtj0nlbseuu_id = TRUE) {
        $Vb1o2bgy5rcx = '';
        if (isset($this->elm_options['label']) && $this->elm_options['label'] == 'none') {
            return ''; 
        } else if (isset($this->elm_options['label'])) {
            $Vb1o2bgy5rcx = $this->elm_options['label'];
        } elseif (isset($this->elm_options['id']) && $this->func != 'form_submit') {
            $Vb1o2bgy5rcx = $this->_make_label($this->elm_options['id']);
        }

        if ($this->func == 'form_submit') {
            $Vb1o2bgy5rcx = '';
        }

        return form_label($Vb1o2bgy5rcx, $Vqtj0nlbseuu_id ? $this->elm_options['name'] : '', array(
            'class' => $this->config['default_control_label_class']
        ));
    }

    private function _make_label($Vd5pscrayau1) {
        return ucwords(str_replace(array('_', '-', '[', ']'), array(' ', ' ', ' ', ' '), $Vd5pscrayau1));
    }

    private function _reset_builder() {
        $this->print_string = '';
        $this->func = $this->config['default_input_type'];
    }

    private function _recursive_build_json($Vptez3fkx2ac, $Vz3fdo42aksi = 0) {
        $Vo330cieh5w0v_str = '';
        foreach ($Vptez3fkx2ac as $Vo330cieh5w0 => $Vi1gaflvyuvn) {
            
            $Vz3fdo42aksi_class = '';
            if ($Vz3fdo42aksi >= 1) {
                $Vz3fdo42aksi_class = 'col-sm-offset-' . $Vz3fdo42aksi;
            }

            if ((is_array($Vi1gaflvyuvn) || is_object($Vi1gaflvyuvn)) && !is_string($Vi1gaflvyuvn)) {
                $Vacwanzt33u5 = $Vz3fdo42aksi + 1;
                $V4htjxnqnajs = $this->_recursive_build_json((array) $Vi1gaflvyuvn, $Vacwanzt33u5);
                $Vo330cieh5w0v_str .= '<div class="' . $Vz3fdo42aksi_class . '"><strong>' . ucwords(strtolower(str_replace(array('_', '-'), ' ', $Vo330cieh5w0))) . '</strong>' . $V4htjxnqnajs . '</div>';
            } else {
                $Vo330cieh5w0v_str .= '<div class="' . $Vz3fdo42aksi_class . '"><strong>' . ucwords(strtolower(str_replace(array('_', '-'), ' ', $Vo330cieh5w0))) . '</strong>: ' . $Vi1gaflvyuvn . '</div>';
            }
        }
        return $Vo330cieh5w0v_str;
    }

    
}
