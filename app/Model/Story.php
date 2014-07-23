<?php
class Story extends AppModel {

    public $belongsTo = array('Magazine');
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
