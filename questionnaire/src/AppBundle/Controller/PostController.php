<?php

namespace AppBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
 
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
 
use AppBundle\Form\Type\PostType;
 
class PostController extends Controller
{
    /**
     * @Route( "/post/new", name="create_post" )
     * @Template()
     */
    
    public function createAction(Request $request)
    {
        $form = $this->createForm(new PostType());
        
        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                /*
                 * $data['title']
                 * $data['body']
                 */
                $data = $form->getData();
                $response['success'] = true;
            } else {
                $response['success'] = false;
                $response['cause'] = 'whatever';
            }
            return new JsonResponse($response);
        }
        return array('postform' => $postform->createView());
    }
}