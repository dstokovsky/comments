<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Blogger\BlogBundle\Form\PostType;

/**
 * Description of PostController
 *
 * @author denis
 */
class PostController extends Controller {

    public function indexAction( Request $request ){
        $posts = $this->getDoctrine()->getRepository( "BlogBundle:Post" )->findAll();
        $post_form = $this->createForm( new PostType(), new Post(), 
            array( "action" => $this->generateUrl( "blog_add_posts" ), "method" => "POST" ) )
            ->add( "username", "text", array( "label" => "Name" ) )
            ->add( "useremail", "text", array( "label" => "Email" ) )
            ->add( "message", "textarea", array( "attr" => array( "rows" => 5 ) ) )
            ->add( "recaptcha", "ewz_recaptcha" )
            ->add( "Add", "submit" );
        
        return $this->render( "BlogBundle:Post:index.html.twig", 
            array( "posts" => $posts, "form" => $post_form->createView() ) );
    }
    
    public function addAction( Request $request ){
        $response = array( "success" => false, "error" => "" );
        if( $request->isXmlHttpRequest() ){
            $post = new Post();
            $post_type = new PostType();
            $post_form = $this->createForm( $post_type, $post );
            $post_form->submit( $request->get( $post_type->getName() ) );
            if( $post_form->isValid() ){
                try{
                    $post->setUsername( strip_tags( $post->getUsername() ) );
                    $post->setMessage( nl2br( strip_tags( $post->getMessage() ) ) );
                    $manager = $this->getDoctrine()->getManager();
                    $manager->persist( $post );
                    $manager->flush();
                    $response[ "success" ] = true;
                    $response[ "error" ] = "";
                    $response[ "post" ] = $this->render( "BlogBundle:Post:comment-item.html.twig", 
                        array( "post" => $post ) )->getContent();
                }catch( Exception $e ){
                    $response[ "error" ] = $e->getMessage();
                }
            }else{
                $response[ "error" ] = nl2br( $post_form->getErrorsAsString() );
            }
        }
        
        return new Response( json_encode( $response ) );
    }
}
