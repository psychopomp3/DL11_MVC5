<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class ContactController extends Controller
{

    public function contactMethode()
    {
        $message = '-- Contact --';

        $this->render('app.default.contactpage',array(
            'message' => $message,
        ));
    }
}
