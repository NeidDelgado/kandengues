<?php
/**
 * Description of Fofoca
 *
 * @author Neid Delgado
 */
class Fofoca extends AppModel {
 
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
