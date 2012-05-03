<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_TwitterBootstrap extends Theme {

    public $name = 'Twitter Bootstrap';
    public $author = 'Joshua Pekera';
    public $author_website = 'http://joshuapekera.com/';
    public $website = 'http://twitter.github.com/bootstrap';
    public $description = '12-column, responsive theme using Twitter Bootstrap 2.';
    public $version = '2.0';
    public $options = array('show_breadcrumbs' => array(
                     	         'title' => 'Show Breadcrumbs',
							'description'   => 'Would you like to display breadcrumbs?',
							'default'       => 'yes',
							'type'          => 'radio',
							'options'       => 'yes=Yes|no=No',
							'is_required'   => TRUE)
						);

}

/* End of file theme.php */