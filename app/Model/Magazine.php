<?php
class Magazine extends AppModel {
    
public $belongsTo = array('Album');
public $hasMany = array('Story');
    
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