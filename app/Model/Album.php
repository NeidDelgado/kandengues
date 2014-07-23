<?php
class Album extends AppModel {
    public $hasMany = array('Magazine' );
   
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