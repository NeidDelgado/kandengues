<?php
/**
 * Description of Bededeangola
 *
 * @author Neid Delgado
 */
class Bedede extends AppModel {
    
   public $actsAs = array(
        'Upload.Upload' => array(
            'image' => array(
                'fields' => array(
                    'dir' => 'image_dir'
                )
            )
        )
    );
}
?>
