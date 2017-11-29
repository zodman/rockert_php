<?php




            $form = '<form method="POST" action="'.$url.'">';
            foreach ($params as $key => $value) {
                if(is_array($value)) {
                    foreach ($value as $secondaryKey => $secondaryValue) {
                        $form .= '<input type="hidden" name="' . $key . '[' . $secondaryKey . ']" value="' . $secondaryValue .'" />';
                    }
                } else {
                    $form .= '<input type="hidden" name="' . $key . '" value="' . $value .'" />';
                }
            }
            $form .= '<input type="submit" value="Click here to pay now" />';
            echo $form;
